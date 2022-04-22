<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\BranchOffice;
use App\Models\Module;
use App\Models\Office;
use App\Models\Partner;
use App\Models\Product;
use App\Models\Request as ModelRequest;
use App\Models\UserRole;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('requests.index')
            ->with('requests', (new ModelRequest)->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return $this->return_view_create_edit();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        (new ModelRequest())->create($request->all());

        return redirect()->route('requests.index')
            ->with('requests', (new ModelRequest)->all())
            ->with('success', 'Solicitud creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param ModelRequest $request
     * @return View
     */
    public function show(ModelRequest $request): View
    {
        return view('requests.show')
            ->with('request', $request);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param ModelRequest $request
     * @return View
     */
    public function edit(ModelRequest $request): View
    {
        return $this->return_view_create_edit($request);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param ModelRequest $modelRequest
     * @return RedirectResponse
     */
    public function update(Request $request, ModelRequest $modelRequest): RedirectResponse
    {
        return redirect()->route('requests.index')
            ->with('requests', (new ModelRequest)->all())
            ->with('success', 'Solicitud actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param ModelRequest $modelRequest
     * @return RedirectResponse
     */
    public function destroy(ModelRequest $modelRequest): RedirectResponse
    {
        $modelRequest->delete();
        return redirect()->route('requests.index')
            ->with('requests', (new ModelRequest)->all())
            ->with('success', 'Solicitud eliminada correctamente');
    }

    private function return_view_create_edit(ModelRequest $request = null) {
        return view('requests.createEdit')
            ->with('partners', (new Partner())->all())
            ->with('user_roles', (new UserRole())->all())
            ->with('modules', (new Module())->all())
            ->with('products', (new Product())->all())
            ->with('branch_offices', (new BranchOffice())->all())
            ->with('offices', (new Office())->all())
            ->with('accounts', (new Account())->all())
            ->with('request', $request);
    }
}
