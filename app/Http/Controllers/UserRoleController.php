<?php

namespace App\Http\Controllers;

use App\Helpers\RoleVerificationHelper;
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
     * @return RedirectResponse|View
     */
    public function index(): RedirectResponse|View
    {
        return RoleVerificationHelper::redirectOrView(
            'users.index',
            'Admin',
            ['userRoles' => (new UserRole())->all()]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse|View
     */
    public function create(): RedirectResponse|View
    {
        return RoleVerificationHelper::redirectOrView(
            'users.createEdit',
            'Admin',
            [
                'userRole',
                'roles' => (new Role())->all()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        return RoleVerificationHelper::handleRedirect(
            ['role' => 'Admin', 'request' => $request, 'object', 'route' => 'userRoles.index'],
            function ($request) {
                $employee = (new Employee())->create($request->except(['password', 'role_id', 'start_date', 'final_date']));

                (new UserRole())->create(array_merge(['employee_id' => $employee->id, 'password' => Hash::make($request->password)], $request->only(['role_id', 'start_date', 'final_date'])));

                return $this->handleRedirect("agregado");
            }
        );
    }

    /**
     * Display the specified resource.
     *
     * @param UserRole $userRole
     * @return RedirectResponse|View
     */
    public function show(UserRole $userRole): RedirectResponse|View
    {
        return RoleVerificationHelper::redirectOrView(
            'users.show',
            'Admin',
            ['userRole' => $userRole]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param UserRole $userRole
     * @return RedirectResponse|View
     */
    public function edit(UserRole $userRole): RedirectResponse|View
    {
        return RoleVerificationHelper::redirectOrView(
            'users.createEdit',
            'Admin',
            [
                'userRole' => $userRole,
                'roles' => (new Role())->all()
            ]
        );
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
        return RoleVerificationHelper::handleRedirect(
            ['role' => 'Admin', 'request' => $request, 'object' => $userRole, 'route' => 'userRoles.index'],
            function ($request, $userRole) {
                // Update the employee within the relationship found except for some data
                $userRole->employee->update($request->except([
                    '_token', 'send', '_method', 'password', 'role_id', 'start_date', 'final_date'
                ]));

                // Update the user's role
                $userRole->update(
                    array_merge(
                        ['employee_id' => $userRole->employee->id],
                        $request->only(['password', 'role_id', 'start_date', 'final_date'])
                    )
                );

                // Returns the view where the list of users is
                return $this->handleRedirect("actualizado");
            }
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param UserRole $userRole
     * @return RedirectResponse
     */
    public function destroy(UserRole $userRole): RedirectResponse
    {
        return RoleVerificationHelper::handleRedirect(
            ['role' => 'Admin', 'request', 'object' => $userRole, 'route' => 'userRoles.index'],
            function ($request, $userRole) {
                $userRole->role()->delete();
                $userRole->delete();

                return $this->handleRedirect("eliminado");
            }
        );
    }

    private function handleRedirect(string $message): RedirectResponse
    {
        return redirect()->route('userRoles.index')
            ->with('success', "Empleado $message correctamente")
            ->with('userRoles', UserRole::all());
    }
}
