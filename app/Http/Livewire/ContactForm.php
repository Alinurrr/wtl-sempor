<?php

namespace App\Http\Livewire;

use App\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $comment;

    public function submit()
    {
        $validated_data = $this->validate([
            'name' => 'required|min:6',
            'email' => 'required|email',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        // dd($validated_data);

        Contact::create($validated_data);

        return redirect()->to('/form');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
