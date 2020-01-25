<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;


use Illuminate\Http\Request;


use App\Category;
use Illuminate\Http\Response;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //

        $categories= Category::whenSearch(request()->search)->paginate(3);
        return view('dashboard.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
        return view('dashboard.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(CategoryRequest $request)
    {
        //

        Category::create($request->all());
        session()->flash('success','Data added successfully');
        return redirect()->route('dashboard.categories.index');

    }

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
    public function edit(Category $category)
    {
        //
        return view('dashboard.categories.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'Name'=>'required'
       ]);


        $category->name = $request->Name;
        $category->save();
       session()->flash('success','Data updated successfully');
        return redirect()->route('dashboard.categories.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Category $category)
    {
        //

        $category->delete();
        session()->flash('success','Record deleted');
        return redirect()->route('dashboard.categories.index')->with('success', 'Product Deleted');
    }
}
