<?php

namespace App\Helpers;

use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\View as ViewMake;

class RoleVerificationHelper
{

    public function __construct() { }

    /**
     * It redirects to the necessary view if the user fulfills the role passed as parameters,
     * otherwise it will redirect it to the start path
     *
     * @param string $view View name
     * @param string $role Role name
     * @param mixed|null $data Data to pass to the view
     * @return RedirectResponse|View
     */
    public static function redirectOrView(string $view, string $role, mixed $data = null): RedirectResponse|View
    {
        // Check if the user who is trying to access the view through the path
        // contains the roles passed as a parameter
        if(!auth()->user()->hasRole($role))
            return redirect()->route('home')->with('error', 'No estas autorizado para acceder a esta ruta');

        // We return the view built with all the necessary parameters
        return static::makeView($view, $data);
    }

    private static function makeView(string $v, mixed $data): View
    {
        $view = ViewMake::make($v);

        if(isset($data))
            foreach ($data as $key => $value)
                $view->$key = $value;

        return $view;
    }

}
