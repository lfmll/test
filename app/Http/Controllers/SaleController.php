<?php

namespace App\Http\Controllers;

use App\Sale;
use Illuminate\Http\Request;
use App\Client;
use App\Subsidiary;
use App\Product;
use App\Sale_Product;
use Illuminate\Support\Facades\DB;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sale=Sale::orderBy("created_at","ASC")->simplePaginate(5);
        return view("sale.index",["sale"=>$sale]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clients=Client::orderBy('name','ASC')->pluck('name','id');
        $products=Product::orderBy('name','ASC')->pluck('name','id');
        $sale=new Sale();
        return view("sale.create",["sale"=>$sale])
            ->with('clients',$clients)
            ->with('products',$products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            DB::beginTransaction();
            $sale=new Sale($request->all());
            $sale->total=0;
            $sale->$user_id=auth()->id;
            $sale->save();
            $idproducto=$request->get('product_id');
            $cont=0;
            while ($cont<count($idproducto)) {
                $sale_product=new Sale_Product();
                $sale_product->sale_id=$sale->id;
                $sale_product->product_id=$idproducto[$cont];
                $sale_product->save();
                $cont=$cont+1;
            }
            DB::commit();
        }catch(\Exception $e){
            DB::rollback();
        }
        if ($sale->save) {
            return redirect("/sale");
        }else{
            return view("sale.create",["sale"=>$sale]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function show(Sale $sale)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sale $sale)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sale  $sale
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sale $sale)
    {
        //
    }
}
