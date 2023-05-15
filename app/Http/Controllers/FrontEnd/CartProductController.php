<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $cart = Cart::where('customer_id', Auth::id())->whereRelation('product', 'status', 1)->with(['product', 'product_detail'])->latest()->get();
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
            'auth_id'   => Auth::id(),
            'cart'      => $cart,
            'subtotal'  => $subtotal,
            'total'     => $total
        ];
        return response()->json($response, 200);
    }

    public function addToCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|numeric|exists:products,id',
            'product_detail_id' => 'required|numeric|exists:product_details,id',
            'quantity' => 'required|numeric'
        ]);

        // return response()->json([
        //     'success'   => true,
        //     'auth_id'   => Auth::id(),
        //     'product_id'   => $request->product_id,
        //     'product_detail_id'   => $request->product_detail_id,
        // ]);

        $is_CartExists = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id]
        ])->exists();

        if ($is_CartExists == true) {
            $cart = Cart::where([
                ['customer_id', Auth::id()],
                ['product_id', $request->product_id],
                ['product_detail_id', $request->product_detail_id]
            ])->firstOrFail();

            if (isset($request->quantity)) {
                $cart->quantity = $cart->quantity >= 0 ? ($cart->quantity + 1) : 1;
            } else {
                $cart->quantity = $request->quantity;
            }

            if (!$cart->save()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed Adding to Cart'
                ], 400);
            }

            return response()->json([
                'success' => true,
                'message' => 'Cart Updated',
                'cart'    => $cart
            ], 201);
        } else {
            if (isset($request->quantity)) {
                $quantityInput = $request->quantity;
            } else {
                $quantityInput = 1;
            }

            $cart = new Cart([
                'customer_id' => Auth::id(),
                'product_id' => $request->product_id,
                'product_detail_id' => $request->product_detail_id,
                'quantity' => $quantityInput,
            ]);

            if ($cart->save()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Cart Created',
                    'cart'    => $cart
                ], 201);
            }

            return response()->json([
                'success' => false,
                'message' => 'Failed Adding to Cart'
            ], 400);
        }
    }

    public function updateCart(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|numeric|exists:products,id',
            'product_detail_id' => 'required|numeric|exists:product_details,id',
            'quantity' => 'required|numeric'
        ]);

        $cart = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id]
        ])->firstOrFail();

        $cart->quantity = $request->quantity;

        if (!$cart->save()) {
            return response()->json([
                'success' => false,
                'message' => 'Failed Updating Cart'
            ], 400);
        }

        $cart = Cart::where('customer_id', Auth::id())->whereRelation('product', 'status', 1)->with(['product', 'product_detail'])->latest()->get();
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
            'message'   => 'Cart Updated',
            'auth_id'   => Auth::id(),
            'cart'      => $cart,
            'subtotal'  => $subtotal,
            'total'     => $total
        ];
        return response()->json($response, 200);
    }

    public function deleteCart(Request $request)
    {
        $cart = Cart::where([
            ['customer_id', Auth::id()],
            ['product_id', $request->product_id],
            ['product_detail_id', $request->product_detail_id]
        ])->firstOrFail();

        if (!$cart->delete()) {
            return response()->json([
                'success' => false,
                'message' => 'Failed Delete Cart'
            ], 400);
        }

        $cart = Cart::where('customer_id', Auth::id())->whereRelation('product', 'status', 1)->with(['product', 'product_detail'])->latest()->get();
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
            'message'   => 'Cart Deleted',
            'auth_id'   => Auth::id(),
            'cart'      => $cart,
            'subtotal'  => $subtotal,
            'total'     => $total
        ];
        return response()->json($response, 200);
    }
}
