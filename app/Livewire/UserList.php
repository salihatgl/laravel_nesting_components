<?php

namespace App\Livewire;
use Livewire\Component;

class UserList extends Component
{
       
    public $user;
    public $content;
    public function render()
    {
        return view('livewire.user-list');
    }
}
