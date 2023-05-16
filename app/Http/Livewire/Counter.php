<?php

namespace App\Http\Livewire;
use App\Mail\ContactLeadMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Counter extends Component
{
  
    public $first_name, $last_name, $email, $message;
    public function send()
    {
        $validatedDate = $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $tomail=$this->email;
        Mail::to($tomail)
            ->send(new ContactLeadMailable($validatedDate));
        session()->flash('message', 'Email Sent Successfully.');
    }
    public function render()
    {
        return view('livewire.counter');
    }
}
