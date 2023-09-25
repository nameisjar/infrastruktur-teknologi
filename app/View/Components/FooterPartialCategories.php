<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterPartialCategories extends Component
{
    public $categories = [];
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->categories = \Stephenjude\FilamentBlog\Models\Category::all();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.footer-partial-categories', [
            'categories' => $this->categories
        ]);
    }
}
