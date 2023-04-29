<?php

namespace App\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class MenuCategories extends AbstractWidget
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        return view('widgets.menu_categories', [
            'categories' => Category::all()
        ]);
    }
}
