<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class FileUpload extends Component
{
    public $first_name, $last_name, $email, $message;

    public function render()
    {
        return view('livewire.file-upload');
    }
    
    public function send()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'photo' => 'image|mimes:jpg,jpeg,png,svg,gif|max:1024', // 1MB Max
        ]);
        
        $validatedDate['photo'] = $this->fileName->store('public');
        
        session()->flash('message', 'Email Sent Successfully.');
    }
}
