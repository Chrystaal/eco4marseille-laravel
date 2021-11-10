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


        $users = User::join('product', 'users.id', '=', 'product.user_id')
                       ->join('sub_assembly', 'product.id', '=', 'sub_assembly_id')
                       ->join('raw_material', 'sub_assembly.id','=','raw_material_id')
                       ->join('assembly','sub_assembly.id','=','assembly_id')
                       ->join('distribution','product.id','=','distribution_id')
                       ->join('product_use','product_id','=','product_use_id')
                       ->join('lifespan','product_use.id','=','lifespan_id')
                       ->join('afterlife','product.id','=','afterlife_id')
                        ->get(['product.name.', 'sub_assembly.name','raw_material.weight',
                        'raw_material.material','raw_material.origin','raw_material.transformation_location',
                        'raw_material.transporation_means_raw','assembly.transportation_means_ass',
                        'assembly.energy','assembly.loss_rate','assembly.assembly_location',
                        'distribution.transportation_means_dis','distribution.conditioning',
                        'product_use.glue','product_use.paint','lifespan.guarantee',
                        'lifespan.resistance','afterlife.recyclable','afterlife.fixable',
                        'afterlife.removable','afterlife.eco_mobilier']);


        return view('results', ['users' => $users]);
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
     
        return redirect()->route('form')
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
