<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;

class CartProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages.app.cart');
    }

    public function getCartData()
    {
        $cart = Cart::where('customer_id', 1)->whereRelation('product', 'status', 1)->with(['product', 'product_detail'])->latest()->get();
        $subtotal = 0;
        $total = 0;
        foreach ($cart as $item) {
            $product_price = $item->product_detail->discount_price > 0 ? $item->product_detail->discount_price : $item->product_detail->price;
            // $subtotal = $subtotal + ($product_price * $item->quantity);
            $subtotal += $product_price * $item->quantity;
            $total += $product_price * $item->quantity;
        }
        $response = [
            'success'   => true,
            'message'   => 'Cart Information',
            'cart'      => $cart,
            'subtotal'  => $subtotal,
            'total'     => $total
        ];
        return response()->json($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 
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
