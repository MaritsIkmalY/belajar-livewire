<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos App')]
class Todos extends Component
{
    public $todo;

    public $todos = [];

    public function mount()
    {
        $this->todos = [
            'take out trash',
            'do dishes'
        ];
    }

    public function updated($property, $value)
    {
        $this->$property = strtoupper($value);
    }

    public function addTodo()
    {
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
