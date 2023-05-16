<?php

namespace App\Http\Livewire;
use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public $posts, $title, $body, $post_id;
    public $updateMode = false;

    public function render()
    {
        $this->posts = Post::all();
        return view('livewire.posts');
    }

    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
    }
    public function store()
    {
        $validatedDate = $this->validate([
            'title' => 'required|min:6',
            'body' => 'required',
        ]);
  
        Post::create($validatedDate);
  
        session()->flash('message', 'Post Created Successfully.');
  
        $this->resetInputFields();
    }
}
