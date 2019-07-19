<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests\ProductUpdateRequest;
use App\Http\Requests\CreateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('employee.index');
    }

    public function view()
    {
        if(session('elogged') == null){
            return redirect()->route('employee.login');
        }
        $products = Product::all();

        return view('user_panel.products.index', compact('products'));
    }
    public function aview()
    {
        if(session('logged') == null){
            return redirect()->route('admin.login');
        }
        $products = Product::all();

        return view('admin_panel.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(session('elogged') == null){
            return redirect()->route('employee.login');
        }
        return view('user_panel.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateProductRequest $request)
    {
        $input = $request->all();

        if($file = $request->file('file'))
        {
            $name = $file->getClientOriginalName();
            $file->move('images', $name);

            $input['path']= $name;
        }

        Product::create($input);
        return redirect()->route('employee.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('admin_panel.products.delete', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(session('logged') == null){
            return redirect()->route('admin.login');
        }
        $products = Product::findOrFail($id);
        return view('admin_panel.products.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductUpdateRequest $request, $id)
    {
       
        $products = Product::findOrFail($id);
        $products->update($request->all());


        return redirect()->route('admin.view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = product::findOrFail($id);
        $products->delete();
        return redirect()->route('admin.view');
    }
}
