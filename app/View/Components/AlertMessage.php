<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AlertMessage extends Component
{
    public $msgtype;
    public $msgtitle;
    /**
     * Create a new component instance.
     */
    public function __construct($msgtype, $msgtitle)
    {
        $this->msgtype = $msgtype; // success, error, warning, info
        $this->msgtitle = $msgtitle;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert-message');
    }
}
