<?php

namespace App\Http\Controllers;

use App\Http\Requests\CountryRequest;
use App\Model\Category;
use App\Model\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('admin.country.index', [
            'countries' => Country::latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.country.create');
    }

    /**
     * @param CountryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CountryRequest $request)
    {
        $country = Country::create($request->validated());
        return redirect()->route('country.edit', $country->id)
            ->with('message', 'El pais ha sido creado');
    }


    /**
     * @param Country $country
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(Country $country)
    {
        Session()->flash('countryId', $country->id);
        return view('admin.country.edit', [
            'country' => $country->load('categories')
        ]);
    }

    /**
     * @param CountryRequest $request
     * @param Country $country
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CountryRequest $request, Country $country)
    {
        $country->update($request->validated());

        return back()
            ->with([
                'message' => 'El usuario ha sido actualizado'
            ]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\country $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }

    public function categories(Country $country)
    {
        return $country->load('categories');
    }
}
