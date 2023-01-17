<?php

namespace App\View\Components;

use Illuminate\View\Component;

class btn_add extends Component
{
    /**
     * The alert message.
     *
     * @var string
     */
    public $url;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url)
    {
        $this->url = action($url);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.btn_add');
    }
}
