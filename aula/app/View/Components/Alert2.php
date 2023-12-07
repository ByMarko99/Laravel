<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class Alert2 extends Component
{
    /**
     * Create a new component instance.
     */
    public $class;
    public function __construct($type="danger")
    {
        //
        switch ($type) {

            case 'info':
                $class = 'bg-blue-100  border-blue-500 text-white-700 ';

                break;
            case 'warning':
                $class = 'bg-orange-100  border-orange-500 text-orange-700 ';

                break;
            case 'danger':
                $class = 'bg-red-100  border-red-500 text-white-700 ';
                break;
            case 'success':
                $class = 'bg-green-100  border-green-500 text-white-700 ';

                break;
            default:
                $class = 'bg-blue-100  border-blue-500 text-white-700 ';

                break;
        }
        $this->class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
