<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Url;
use App\Models\User;

class Test extends Component
{
    public $currentUser = null;
    #[Url]
    public ?string $name;
    public ?string $email;
    public $n = 0;

    public function mount()
    {
        $this->currentUser = Auth::user()->name;
        
    }
    function inc() {
        $this->n++;
    }
    function dcr() {
        $this->n--;
    }

    public function render()
    {
        return view('livewire.test');
    }
}
