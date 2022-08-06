<?php

/**
 *
 *
 * Author:  Asror Zakirov
 * https://www.linkedin.com/in/asror-zakirov
 * https://github.com/asror-z
 *
 */

namespace App\View\Components;
use Illuminate\View\Component;

class Header extends Component
{
    public function render(){
        return view('components.header', [
            'var1' => 1,
            'var2' => 2
        ]);
    }
}
