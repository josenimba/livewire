<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;


#[Title('Counter')]
class Todos extends Component
{
    public $todo = '';
    public $todos = ['who cares'];

    public function updatedTodo($value)
    {
        $this->todo = strtoupper($value);

        // $this->validate(); //reglas de validacion
    }

    // public function updated($property, $value)
    // {
    //     // dd($property, $value);//muestra la propiedad y el valor cuando actualiza
    //     $this->$property = strtoupper($value);
    // }

    // public function mount(){ //cuando monta el componente en la vista
    //     $this->todos = [
    //         'todo1',
    //         'todo2',
    //         'todo3'
    //     ];

    //     $this->todo ='Mostrar toDo';
    // }

    public function add(){
        $this->todos[] = $this->todo;//add todo to array
        // $this->todo = '';//clear todo
        $this->reset('todo'); //esto limpia el formulario
    }



    public function render()
    {
        return view('livewire.todos');
    }
}
