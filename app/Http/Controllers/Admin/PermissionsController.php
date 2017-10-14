<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\Admin\StorePermissionsRequest;
use App\Http\Requests\Admin\UpdatePermissionsRequest;

class PermissionsController extends Controller
{

	/**
     * Display a listing of Permission.
     *
     * @return \Illuminate\Http\Response
     */
	public function index()
	{
		if(!Gate::allows('users_manage')) {
			return abort(401);
		}
		$permissions = Permission::all();
		return view('admin.permissions.index', compact('permissions'));
	}

    /**
     * Show the form for creating new Permission.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    	if(!Gate::allows('users_manage')) {
    		return abort(401);
    	}
    	return view('admin.permissions.create');
    }

    /**
     * Store a newly created Permission in storage.
     *
     * @param  \App\Http\Requests\StorePermissionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionsRequest $request)
    {
    	if(!Gate::allows('users_manage')) {
    		return abort(401);
    	}
    	Permission::create($request->all());
    	return redirect()->route('admin.permisos.index')->with('message', 'El permiso se ha creado correctamente.');
    }

    /**
     * Show the form for editing Permission.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    	if(!Gate::allows('users_manage')) {
    		return abort(401);
    	}
    	$permission = Permission::findOrFail($id);
    	return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update Permission in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionsRequest $request, $id)
    {
    	if(!Gate::allows('users_manage')) {
    		return abort(401);
    	}
    	$permission = Permission::findOrFail($id);
    	$permission->update($request->all());
    	return redirect()->route('admin.permisos.index')->with('message', 'El permiso se ha actualizado correctamente.');
    }


    /**
     * Remove Permission from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	if(!Gate::allows('users_manage')) {
    		return abort(401);
    	}
    	$permission = Permission::findOrFail($id);
    	$permission->delete();
    	return redirect()->route('admin.permisos.index')->with('message', 'El permiso se ha eliminado correctamente.');
    }

}
