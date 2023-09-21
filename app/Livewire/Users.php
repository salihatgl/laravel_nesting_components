<?php

namespace App\Livewire;
use App\Models\todos;
use Livewire\Component;

class Users extends Component
{
    public $todo;
    public $todoist = '';

    public $user=[

        'name' => 'Saliha Tığlı',
        'email' => 'salihatigli55@gmail.com',
    ];

        public function add()
        {
            Todos::create([
                'content' => $this->todoist,
            ]);
    }
    public function render()
    {
        $this->todo = todos::all();
        return view('livewire.users');
    }
}
