<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreRolesRequest;
use App\Http\Requests\Admin\UpdateRolesRequest;

class RolesController extends Controller
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
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(! Gate::allows('users_manage')) {
            return abort(401);
        }
        $permissions = Permission::get()->pluck('name', 'id');
        return view('admin.roles.create', compact('permissions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRolesRequest $request)
    {
        if(!Gate::allows('users_manage')) {
            return abort(401);
        }
        $role = Role::create($request->except('permissions'));
        $permissions = $request->permissions ? Permission::whereIn('id', $request->permissions)->get()->pluck('name') : [];
        $role->givePermissionTo($permissions);
        return redirect()->route('admin.roles.index')->with('message', 'Se ha creado el rol correctamente.');
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
        $permissions = Permission::get()->pluck('name', 'id');
        $role = Role::findOrFail($id);
        return view('admin.roles.edit', compact('role', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRolesRequest $request, $id)
    {
        if(! Gate::allows('users_manage')) {
            return abort(401);
        }

        $role = Role::findOrFail($id);
        $role->update($request->except('permissions'));
        $permissions = $request->permissions ? Permission::whereIn('id', $request->permissions)->get()->pluck('name') : [];
        $role->syncPermissions($permissions);

        return redirect()->route('admin.roles.edit', $id)->with('message', 'El rol se ha actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Gate::allows('users_manage')) {
            return abort(401);
        }
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('admin.roles.index')->with('message', 'Se ha eliminado el rol correctamente.');
    }
}
