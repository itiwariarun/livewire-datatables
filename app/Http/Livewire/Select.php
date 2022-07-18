<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Select extends Component
{
    public $selectProperty = '';
    public $props = [
        'id',
        'email',
        'name',
    ];
    public function render()
    {
        return view('livewire.select');
    }
}
