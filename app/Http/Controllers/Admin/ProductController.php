<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::query()->paginate(8);
        return view('admin.products.all', compact('products'));
        //
    }

    public function index2()
    {
        $products = Product::query()->paginate(8);
        return view('admin.index', compact('products'));
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedata = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'framework' => 'required',
            'version' => 'required',
            'categories' => 'required|array',
            'imagesm' => 'required',
            'imagebig' => 'required',
            'body' => 'required',
        ]);


        if ($request->has('is_published')) {
            $validatedata['is_published'] = 1;
        } else {
            $validatedata['is_published'] = 0;
        }

        $product=auth()->user()->products()->create($validatedata);
        $product->Categories()->sync($validatedata['categories']);
        return redirect(route('products.index'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $validatedata = $request->validate([
            'title' => 'required',
            'price' => 'required',
            'framework' => 'required',
            'version' => 'required',
            'categories' => 'required|array',

            'body' => 'required',
        ]);
        if ($request->has('imagebig')) {
            $validatedata['imagebig'] = $request['imagebig'];
        } elseif ($request->has('imagesm')) {
            $validatedata['imagesm'] = $request['imagesm'];
        }
        if ($request->has('is_published')) {
            $validatedata['is_published'] = 1;
        } else {
            $validatedata['is_published'] = 0;
        }
        $product->update($validatedata);
        $product->Categories()->sync($validatedata['categories']);
        return back();


        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return back();
        //
    }
}
