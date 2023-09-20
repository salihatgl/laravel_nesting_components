<?php

namespace App\Livewire;

use Livewire\Component;

class Users extends Component
{
    public $todo;
    public $user=[

        'name' => 'Saliha Tığlı',
        'email' => 'salihatigli55@gmail.com',

    ];
    public function render()
    {
        return view('livewire.users');
    }
}
