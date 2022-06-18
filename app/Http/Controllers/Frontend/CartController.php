<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnValueMap;

class CartController extends Controller
{
    public function addProduct(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if(Auth::check())
        {
            $prod_check = Product::where('id', $product_id)->first();

            if($prod_check)
            {

                if(Cart::where('product_id', $product_id)->where('user_id', Auth::id())->exists())
                {
                    return response()->json(['status' => $prod_check->name . " Вже додано до кошика"]);
                }
                else
                {
                $cartItem = new Cart();
                $cartItem->product_id = $product_id;
                $cartItem->product_id = Auth::id();
                $cartItem->product_id = $product_id;
                $cartItem->save();
                return response()->json(['status' => $prod_check->name. ' Додано до кошика']);
                }

            }
        }
        else
        {
            return response()->json(['status' => "Авторизуйтесь, щоб продовжити"]); 
        }
    }
}
