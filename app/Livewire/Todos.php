<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{
    public $todo = '';
    public $todos = [
        'Todo 1',
        'Todo 2',
        'Todo 3'
    ];

    public function add(){
        $this->todos[] = $this->todo;//add todo to array
        // $this->todo = '';//clear todo
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
