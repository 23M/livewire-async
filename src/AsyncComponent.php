<?php


namespace YaCha\LivewireAsync;


use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\View;
use Livewire\Component;

abstract class AsyncComponent extends Component
{
    public bool $load = false;

    public function render(Application $app): View
    {
        if ($this->load) {
            return $app->call([$this, 'renderAsync']);
        } else {
            return view('livewire-async::loading');
        }
    }
}
