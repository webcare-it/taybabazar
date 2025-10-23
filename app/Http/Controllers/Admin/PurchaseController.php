<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase()
    {
        return view('admin.purchase.index');
    }

    public function purchaseCreate()
    {
        return view('admin.purchase.create');
    }

    public function purchaseStore(Request $request)
    {
        $purchase = new Purchase();
        $purchase->customer_name = $request->customer_name;
        $purchase->customer_data = json_encode($request->customer_data);
        $purchase->save();

        return response()->json([
            'status' => 200,
            'purchase' => 'Purchase has been created',
        ]);
    }
}
