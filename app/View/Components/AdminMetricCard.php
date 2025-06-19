<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class AdminMetricCard extends Component
{
    public $title;
    public $value;

    public function __construct($title, $value)
    {
        $this->title = $title;
        $this->value = $value;
    }

    public function render()
    {
        return view('components.admin-metric-card');
    }
}
