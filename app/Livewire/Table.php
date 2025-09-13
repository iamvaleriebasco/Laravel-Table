<?php

namespace App\Livewire;

use Livewire\Component;


class Table extends Component
{
    public $users;

    public function mount()
    {
        // Fetch users (limit to 10 for example)
        $this->users = \App\Models\User::all();
    }

    public function render()
    {
        return view('livewire.users.table');
    }
}
