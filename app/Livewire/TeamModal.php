<?php

namespace App\Livewire;

use LivewireUI\Modal\ModalComponent;

class TeamModal extends ModalComponent
{
    public $teamDesignation;
    public $teamID;

    public function mount($teamDesignation = null, $teamID = null)
    {
        $this->teamDesignation = $teamDesignation;
        $this->teamID = $teamID;
    }

    public function render()
    {
        return view('livewire.team-modal');
    }

    // public function closeModal()
    // {
    //     $this->emit('closeModal');
    // }
}
