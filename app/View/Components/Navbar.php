<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Models\Category;

class Navbar extends Component
{
    public $categories;

    public function __construct()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('components.navbar');
    }
}
