<?php

namespace App\View\Components\User\Dropdown;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class UserDropdown extends Component
{
    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View
    {
        return view('components.dropdown.user-dropdown');
    }
}
