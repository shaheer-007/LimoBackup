<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $phone = '';
    public $subject = '';
    public $message = '';

    public function submit()
    {
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email',
            'phone' => 'nullable',
            'subject' => 'required|min:3',
            'message' => 'required|min:10',
        ]);

        // You can add email sending logic here later
        session()->flash('success', 'Thank you for your message! We will get back to you shortly.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
