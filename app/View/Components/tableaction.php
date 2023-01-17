<?php

namespace App\View\Components;

use Illuminate\View\Component;

class tableaction extends Component
{
    /**
     * The alert type.
     *
     * @var string
     */
    public $add;

    /**
     * The alert message.
     *
     * @var string
     */
    public $dell;

    /**
     * Create a new component instance.
     *
     * @return void
     */

    public function __construct($url, $id)
    {
        $this->add = route($url . '.edit', $id);
        $this->dell = route($url . '.destroy', $id);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.tableaction');
    }
}
