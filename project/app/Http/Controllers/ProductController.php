<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Assembly;
use App\Models\Distribution;
use App\Models\Lifespan;
use App\Models\Product_use;
use App\Models\Sub_assembly;
use App\Models\User;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = DB::table('product')->get();
        $sub_assembly = DB::table('sub_assembly')->get();
        $raw_material = DB::table('raw_material')->get();
        $assembly = DB::table('assembly')->get();
        $distribution = DB::table('distribution')->get();
        $product_use = DB::table('product_use')->get();
        $lifespan = DB::table('lifespan')->get();
        $afterlife = DB::table('afterlife')->get();


        return view('results', ['product' => $product, 'sub_assembly' => $sub_assembly,'raw_material' => $raw_material,
                                'assembly' =>$assembly,'distribution' => $distribution,
                                'product_use'=>$product_use,'lifespan'=>$lifespan,'afterlife'=>$afterlife]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_product(Request $request)
    {
        
  
        $request->validate([
                'name' => 'required',


        ]);

        $input = $request->all() ;

        Product::create($input);
     
        return redirect()->route('dashboard')
                        ->with('success','Form created successfully.');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
