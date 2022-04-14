<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StorePermissionsRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;
use RealRashid\SweetAlert\Facades\Alert;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePermissionsRequest $request)
    {
        Permission::create($request->all());

        Alert::toast(trans('Permission has been successfully added.'), 'success');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Permission $permission)
    {
        return view('admin.permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $request->validate([
            'name' => "required|unique:permissions,name,$permission->id",
        ]);

        $permission->update($request->all());
        Alert::toast(trans('Permission has been successfully updated.'), 'success');
        return redirect()->route('admin.permissions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();

        Alert::toast(trans('Permission has been successfully removed.'), 'success');
        return redirect()->route('admin.permissions.index');
    }
}
