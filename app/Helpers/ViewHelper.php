<?php

namespace App\Helpers;

use Illuminate\Support\Facades\View as ViewMake;
use Illuminate\View\View;

class ViewHelper
{

    /**
     * Obtains the view with the name passed by parameter and assigns
     * within the same keys with an associated value
     *
     * @param string $name View name
     * @param mixed $data Data to pass to the view
     * @return View
     */
    public static function get(string $name, mixed $data): View
    {
        // Get view
        $view = ViewMake::make($name);

        // We validate that the data sent is not null
        if(isset($data)) {
            // We go through the data array using key value
            foreach ($data as $key => $value)
                //Inside the view we create a new attribute with the key and
                // give it the corresponding value
                $view->$key = $value;
        }

        // Returns view
        return $view;
    }

}
