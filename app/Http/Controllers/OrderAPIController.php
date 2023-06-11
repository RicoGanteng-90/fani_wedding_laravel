<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OrderAPIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = order::all();

        return response()->json($order);
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
        $validatedData = $request->validate([
            'customer_id' => 'integer',
            'name' => 'required|max:100',
            'number' => 'required|integer',
            'email' => 'required',
            'method' => 'required',
            'address' => 'required',
            'total_products' => 'required',
            'order_time' => 'required',
            'event_time' => 'required',
        ]);

        $order=order::create($validatedData);

        $order->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($customer_id)
    {
        $order = order::where('customer_id', $customer_id)->get();

        return response()->json($order);
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

        $order = order::findOrFail($id);

        if ($request->hasFile('image')) {
            $myFile = 'images/'.$order->image;
            if(File::exists($myFile))
            {
                File::delete($myFile);
            }

            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $order->image=$request->file('image')->getClientOriginalName();
    }}

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);


    if ($order->proof_payment) {
        $oldFilePath = public_path('bukti/'.$order->proof_payment);
        if (file_exists($oldFilePath)) {
            unlink($oldFilePath);
        }
    }
    $order->delete();

    return response()->json($order);
    }
}
