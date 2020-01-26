<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{
    //
    public function index()
    {
        //

        $roles= Role::whenSearch(request()->search)->paginate(3);
        return view('dashboard.roles.index', compact('roles'));
    }  //end of ndexi

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('dashboard.roles.create');
    }   //end of create

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(RoleRequest $request)
    {
        //

        Role::create($request->all());
        session()->flash('success','Data added successfully');
        return redirect()->route('dashboard.roles.index');

    }  //end of store

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Role $role)
    {
        //
        return view('dashboard.roles.edit', compact('role'));
    }   //end of edit

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'Name'=>'required'
       ]);


        $role->name = $request->Name;
        $role->save();
       session()->flash('success','Data updated successfully');
        return redirect()->route('dashboard.roles.index');
    }  //end of updats
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Role $role)
    {
        //

        $role->delete();
        session()->flash('success','Record deleted');
        return redirect()->route('dashboard.roles.index')->with('success', 'Product Deleted');
    }   //end of destroy

}  //end of Role Controller
