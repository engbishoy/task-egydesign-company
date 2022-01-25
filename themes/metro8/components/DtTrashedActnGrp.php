<?php

namespace Dashboard\Components;

use Illuminate\View\Component;

class DtTrashedActnGrp extends Component
{
    /**
     * Create the component instance.
     *
     * @param  string  $type
     * @param  string  $message
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|\Closure|string
     */
    public function render()
    {
        return view('dashboard::components.datatable.trashed_action_group');
    }
}