<?php

namespace App\Http\Livewire;

use Livewire\Component;

class TestComponent extends Component
{
    public $title = '';
 
    public $content = '';
 
    public $num1;
    public $num2;
    public $sum = 0;
    public $todos = [];
 
    public $todo = '';
 
    public function addt()
    {
        $this->todos[] = $this->todo;
 
        $this->todo = '';
    }
    public function add(){
        $this->sum = $this->num1 + $this->num2;
    }
    public function save()
    {
        $post = Post::create([
            'title' => $this->title,
            'content' => $this->content
        ]);
    
 
        // ...
    }
    public function render()
    {
        return view('livewire.test-component')->layout('layouts.base');
    }
}
