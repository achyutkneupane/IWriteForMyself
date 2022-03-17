<?php

namespace App\Http\Livewire\Components;

use App\Helpers\CookieHelper;
use Livewire\Component;

class VotingComponent extends Component
{
    public $upVoted = false, $downVoted = false;
    public $model, $voterType;
    public function mount($model)
    {
        $this->model = $model;
        $this->voter = CookieHelper::getUser();
        $this->voterType = $this->voter ? $this->voter->getMorphClass() : null;
    }
    public function upVote()
    {
        if (!$this->upVoted) {
            $this->saveVote('up');
        } else {
            $this->removeVote();
        }
    }
    public function downVote()
    {
        if (!$this->downVoted) {
            $this->saveVote('down');
        } else {
            $this->removeVote();
        }
    }
    public function checkIfVoteExist()
    {
        return $this->model->votes()->where('voter_id', $this->voter->id)->where('voter_type', $this->voterType)->first();
    }
    public function removeVote()
    {
        return $this->model->votes()->where('voter_type', $this->voterType)->where('voter_id', $this->voter->id)->first()->delete();
    }
    public function saveVote($action)
    {
        $voteCheck = $this->checkIfVoteExist();
            if ($voteCheck) {
                $voteCheck->vote = $action;
                $voteCheck->save();
            } else {
                $this->model->votes()->create([
                    'voter_type' => $this->voterType,
                    'voter_id' => $this->voter->id,
                    'vote' => $action,
                ]);
            }
    }
    public function render()
    {
        $voteCheck = $this->checkIfVoteExist();
        $this->upVoted = ($voteCheck && $voteCheck->vote == 'up');
        $this->downVoted = ($voteCheck && $voteCheck->vote == 'down');
        $upVote = $this->model->votes()->where('vote', 'up')->count();
        $downVote = $this->model->votes()->where('vote', 'down')->count();
        $this->vote = $upVote - $downVote;
        $this->vote <= 0 ? $this->vote = 0 : $this->vote;
        return view('livewire.components.voting-component');
    }
}
