<?php

namespace App\Http\Livewire;

use App\Models\Posts;
use Livewire\Component;

class Post extends Component
{
    public function render()
    {
        $posts = Posts::orderBy('id', 'DESC')->get();
        return view('livewire.posts.index', ['posts' => $posts]);
    }

    public function create() 
    {
        return view('livewire.posts.create');
    }
}
