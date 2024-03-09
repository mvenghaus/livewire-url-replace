<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class QueryStringTest extends Component
{
    #[Url]
    public array $filters = [];

    public function render()
    {
        return view('livewire.query-string-test');
    }
}
