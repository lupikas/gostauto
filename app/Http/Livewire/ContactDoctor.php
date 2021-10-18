<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactDoctor extends Component
{
    public string $name = "";
    public string $email = "";
    public string $message = "";
    public object $doctor;

    public function __construct()
    {
        parent::__construct();

        $this->doctor = new \stdClass();
    }

    public function render()
    {
        return view('livewire.contact-doctor');
    }

    public function mount($doctor)
    {
        $this->doctor = $doctor;
    }

    public function submitForm()
    {

        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Get responsible user email addr
        $user = User::first();

        Mail::to('info@gostautoklinika.com')->queue(new \App\Mail\ContactDoctor($this->doctor, $data));

        $this->name = "";
        $this->email = "";
        $this->message = "";
    }
}
