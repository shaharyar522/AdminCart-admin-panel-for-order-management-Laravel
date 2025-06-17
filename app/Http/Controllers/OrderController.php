<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $orders = order::paginate(4);

        return view('dashboard', compact('orders'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        order::create([
            'customer_name' => $request->name,
            'date' => $request->customer_date,
            'amount' => $request->customer_amount,
            'status' => $request->customer_status,
        ]);

        return redirect()->route('home')->with('success', 'Your order has been submitted successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order_edit = order::find($id);

        return view('orders.edit', compact('order_edit'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $order_update = order::find($id);

        $order_update->customer_name = $request->name;
        $order_update->date = $request->customer_date;
        $order_update->amount = $request->customer_amount;
        $order_update->status = $request->customer_status;
        
        $order_update->save();

        return redirect()->route('home')->with('success', 'Your order has been Update successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        order::destroy($id);

        return redirect()->route('home')->with('success', 'Order deleted successfully.');
    }
}
