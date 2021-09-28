<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('partners.index')->with('partners', (new Partner())->all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('partners.createEdit')
            ->with('partner');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        (new Partner())->create($request->all());

        return redirect()->route('partners.index')
            ->with('partners', (new Partner())->all())
            ->with('success', 'Socio agregado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param Partner $partner
     * @return View
     */
    public function show(Partner $partner): View
    {
        return view('partners.show')->with('partner', $partner);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Partner $partner
     * @return View
     */
    public function edit(Partner $partner): View
    {
        return view('partners.createEdit')
            ->with('partner', $partner);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Partner $partner
     * @return RedirectResponse
     */
    public function update(Request $request, Partner $partner): RedirectResponse
    {
        $partner->update($request->all());
        return redirect()->route('partners.index')
            ->with('partners', (new Partner())->all())
            ->with('success', 'Socio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Partner $partner
     * @return RedirectResponse
     */
    public function destroy(Partner $partner): RedirectResponse
    {
        $partner->delete();
        return redirect()->route('partners.index')
            ->with('partners', (new Partner())->all())
            ->with('success', 'Socio eliminado correctamente');
    }
}
