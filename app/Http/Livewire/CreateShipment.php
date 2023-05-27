<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateShipment extends Component
{
    use WithFileUploads;

    public $file;

    public function schedule()
    {
        var_dump('OK');
    }



}
