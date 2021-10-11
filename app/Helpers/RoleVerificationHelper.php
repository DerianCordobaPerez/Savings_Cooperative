<?php

namespace App\Helpers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Closure;

class RoleVerificationHelper
{
    /**
     * It redirects to the necessary view if the user fulfills the role passed as parameters,
     * otherwise it will redirect it to the start path
     *
     * @param string $name View name
     * @param string $role Role name
     * @param mixed|null $data Data to pass to the view
     * @return RedirectResponse|View
     */
    public static function redirectOrView(string $name, string $role, mixed $data = null): RedirectResponse|View
    {
        // Check if the user who is trying to access the view through the path
        // contains the roles passed as a parameter
        if(!auth()->user()->hasRole($role))
            return redirect()->route('home')->with('error', 'No estas autorizado para acceder a esta ruta');

        // We return the view built with all the necessary parameters
        return ViewHelper::get($name, $data);
    }

    /**
     * Redirect to the necessary path if the user has the role passed as a parameter,
     * if it does not contain the role it will return the home view with an error
     * message
     *
     * @param mixed $data
     * @param Closure $closure
     * @return RedirectResponse
     */
    public static function handleRedirect(mixed $data, Closure $closure): RedirectResponse
    {
        // Check if the user who is trying to access the view through the path
        // contains the roles passed as a parameter
        if(!auth()->user()->hasRole($data['role']))
            return redirect()->route('home')->with('error', 'No estas autorizado para acceder a esta ruta');

        // We execute the closure
        return $closure($data['request'], $data['object']);
    }

}
