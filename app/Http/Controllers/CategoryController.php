<?php

namespace App\Http\Controllers;

use App\Model\category;
use App\Model\Country;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $data = $this->validate($request, ['name' => 'required|max:255']);
        $country = Country::find(session('countryId'));
        $category = new Category($data);
        $country->categories()->save($category);

        return back()->with('message', 'Categoría creada con éxito');
    }

    /**
     * @param Request $request
     * @param category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function update(Request $request, Category $category)
    {
        $data = $this->validate($request, ['name' => 'required|max:255']);
        $category->update($data);
        return back()
            ->with([
                'message' => 'La categoría ha sido actualizado'
            ]);
    }

    public function show(Category $category)
    {
        return view('Editor.category', [
            'category' => $category->load('files')
        ]);
    }

    /**
     * @param category $category
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('message', 'Categoría eliminada');
    }
}


