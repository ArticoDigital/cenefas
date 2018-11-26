<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Model\Country;
use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::latest()->with('country')->paginate(20)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.user.create', [
            'countries' => Country::pluck('name', 'id'),
            'roles' => Role::pluck('name')
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $user = User::create($request->validated());
        $user->assignRole($request->rol);

        return redirect()->route('user.index')
            ->with([
                'message' => 'El usuario ha sido creado'
            ]);
    }


    /**
     * @param User $user
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', [
            'countries' => Country::pluck('name', 'id'),
            'roles' => Role::pluck('name', 'id'),
            'user' => $user,
        ]);
    }

    /**
     * @param UserRequest $request
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request, User $user)
    {
        $user->update($request->validated());
        $user->syncRoles($request->rol);
        return back()
            ->with([
                'message' => 'El usuario ha sido actualizado'
            ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function search(Request $request)
    {
        return view('admin.user.index', [
            'users' => User::search($request->input('q'))->paginate(20)
        ]);
    }

    /**
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()
            ->with([
                'message' => 'El usuario ha sido eliminado'
            ]);
    }
}
