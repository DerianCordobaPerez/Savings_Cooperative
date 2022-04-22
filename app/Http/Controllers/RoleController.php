<?php

namespace App\Http\Controllers;

use App\Models\Privilege;
use App\Models\Role;
use App\Models\RolePrivilege;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class RoleController extends Controller
{

    /**
     * Show to list roles
     *
     * @return View
     */
    public function index(): View
    {
        return view('roles.index')->with('roles', (new Role())->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('roles.createEdit')
            ->with('roles', (new Role())->all())
            ->with('privileges', $this->get_all_privileges());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $role = (new Role())->create([
            'role_name' => $request->role_name
        ]);

        if($request->privileges !== null) {
            foreach ($request->privileges as $privilege_id) {
                (new RolePrivilege())->create([
                    'role_id' => $role->id,
                    'privilege_id' => $privilege_id
                ]);
            }
        }

        return redirect()->route('roles.index')->with('success', 'Rol creado correctamente');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Role $role
     * @return View
     */
    public function edit(Role $role): View
    {
        return view('roles.createEdit')
            ->with('role', $role)
            ->with('privileges', $this->get_all_privileges());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Role $role
     * @return RedirectResponse
     */
    public function update(Request $request, Role $role): RedirectResponse
    {
        if($role->role_name !== $request->role_name)
            $role->update($request->only(['role_name']));

        $role->privileges()->sync($request->privileges);

        return redirect()->route('roles.index')
            ->with('success', 'Rol actualizado correctamente')
            ->with('roles', (new Role())->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Role $role
     * @return RedirectResponse
     */
    public function destroy(Role $role): RedirectResponse
    {
        $role->delete();
        return redirect()->route('roles.index')
            ->with('success', 'Rol eliminado correctamente')
            ->with('roles', (new Role())->all());
    }

    /**
     * Returns all privileges
     *
     * @return Collection
     */
    private function get_all_privileges(): Collection
    {
        return (Privilege::all())->chunk(ceil(Privilege::all()->count() / 2));
    }
}
