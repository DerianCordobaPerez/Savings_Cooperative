<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Role;
use App\Models\UserRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserRoleController extends Controller
{

    /**
     * Show list userRoles
     *
     * @return View
     */
    public function index(): View {
        return view('users.index')
            ->with('userRoles', (new UserRole())->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.createEdit')
            ->with('userRole')
            ->with('roles', (new Role())->all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $employee = (new Employee())->create($request->except(['password', 'role_id', 'start_date', 'final_date']));

        (new UserRole())->create(
            array_merge([
                'employee_id' => $employee->id, 'password' => Hash::make($request->password)],
                $request->only(['role_id', 'start_date', 'final_date'])
            )
        );

        return redirect()->route('userRoles.index')
            ->with('success', 'Empleado creado correctamente')
            ->with('userRoles', UserRole::all());
    }

    /**
     * Display the specified resource.
     *
     * @param UserRole $userRole
     * @return View
     */
    public function show(UserRole $userRole): View
    {
        return view('users.show')
            ->with('userRole', $userRole);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserRole $userRole
     * @return View
     */
    public function edit(UserRole $userRole): View
    {
        return view('users.createEdit')
            ->with('roles', (new Role())->all())
            ->with('userRole', $userRole);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param UserRole $userRole
     * @return RedirectResponse
     */
    public function update(Request $request, UserRole $userRole): RedirectResponse
    {
        $userRole->employee->update($request->except([
            '_token', 'send', '_method', 'password', 'role_id', 'start_date', 'final_date'
        ]));

        $userRole->update([
            'employee_id' => $userRole->employee->id,
            'role_id' => $request->role_id,
            'password' => Hash::make($request->password),
            'start_date' => $request->start_date,
            'final_date' => $request->final_date
        ]);
        return redirect()->route('userRoles.index')->with('success', 'Empleado actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserRole $userRole
     * @return RedirectResponse
     */
    public function destroy(UserRole $userRole): RedirectResponse
    {
        $userRole->delete();
        return redirect()->route('userRoles.index')
            ->with('success', 'Empleado eliminado correctamente')
            ->with('userRoles', UserRole::all());
    }
}
