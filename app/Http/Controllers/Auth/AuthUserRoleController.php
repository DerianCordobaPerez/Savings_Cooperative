<?php

namespace App\Http\Controllers\Auth;

use App\Helpers\ModelsHelper;
use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\UserRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 *
 */
class AuthUserRoleController extends Controller
{

    /**
     * AuthUserRoleController Constructor
     */
    public function __construct()
    {
        $this->middleware(['auth'])->except('login');
    }

    /**
     *
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function login(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $employee = ModelsHelper::getModel(Employee::class, 'internal_mail', $request->email);

        if(!isset($employee))
            return back()->withErrors(['email' => 'El correo ingresado no es correcto']);

        $user_role = ModelsHelper::getModel(
            UserRole::class,
            'employee_id',
            $employee->id
        );

        $credentials = [
            'employee_id' => $user_role->employee_id,
            'password' => $request->password
        ];

        if(auth()->guard('user_role')->attempt($credentials, $request->has('remember')))
            return redirect()->route('home')
                ->with('success', 'Sesion iniciada correctamente');

        return back()->withInput($request->only('email'))->withErrors(['password' => 'La password ingresada es incorrecta']);
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function logout(Request $request): RedirectResponse
    {
        auth()->guard('user_role')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')
            ->with('success', 'Sesion cerrada correctamente');
    }

}
