<?php

namespace App\Http\Composers;

use Illuminate\View\View;
use App\Models\Testimonial;
use App\Models\Service;
use App\Models\Brand;
use App\Models\Category;

class SampleComposer

{

    /**

     * Bind data to the view.

     *

     * @param  View  $view

     * @return void

     */

    public function compose(View $view)

    {

        $testimonials = Testimonial::orderBy('position_key', 'asc')->get();
        $productsMenuItems = [];
        $services = Service::orderBy('position_key', 'asc')->get();
        $commonData = [
            "testimonials" => $testimonials,
            "productsMenu" => $services
        ];
        $view->with('commonData', $commonData);

    }

}