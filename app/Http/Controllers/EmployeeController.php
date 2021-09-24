<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EmployeeController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('users.createEdit')->with('employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('');
    }

    /**
     * Display the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function show(Employee $employee): View
    {
        return view('employees.show')->with('employee', $employee);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Employee $employee
     * @return View
     */
    public function edit(Employee $employee): View
    {
        return view('users.createEdit')->with('employee', $employee);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function update(Request $request, Employee $employee): RedirectResponse
    {
        $employee->update($request->all());
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Employee $employee
     * @return RedirectResponse
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();
        return redirect()->route('employees.index');
    }
}
