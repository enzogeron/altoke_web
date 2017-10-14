<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StoreUserRequest;
use App\Http\Requests\Admin\UpdateUserRequest;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(! Gate::allows('users_manage')) {
            return abort(401);
        }
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('users_manage') ) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'id');
        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserRequest $request)
    {
        if(! Gate::allows('users_manage')) {
            return abort(401);
        }

        $user = User::create($request->all());
        //$roles = $request->input('roles') ? $request->input('roles') : [];
        $roles = $request->roles ? Role::whereIn('id', $request->roles)->get()->pluck('name') : [];
        $user->assignRole($roles);

        return redirect()->route('admin.usuarios.index')->with('message', 'El usuario se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(! Gate::allows('users_manage') ) {
            return abort(401);
        }
        $roles = Role::get()->pluck('name', 'id');
        $user = User::findOrFail($id);
        return view('admin.users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(! Gate::allows('users_manage')) {
            return abort(401);
        }

        // Problem with request UpdateUserRequest
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'roles' => 'required',
            'password' => 'confirmed'
        ]);

        $user = User::findOrFail($id);
        $user->update($request->all());
        $roles = $request->roles ? Role::whereIn('id', $request->roles)->get()->pluck('name') : [];
        $user->syncRoles($roles);

        return redirect()->route('admin.usuarios.edit', $id)->with('message', 'El usuario se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('users_manage')) {
            return abort(401);
        }

        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.usuarios.index')->with('message', 'Se ha eliminado el usuario correctamente.');
    }
}