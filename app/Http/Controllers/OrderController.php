<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Order;
Use RealRashid\SweetAlert\Facades\Alert;


class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$orders = Order::where('has_paid', FALSE)->get();

        return view('order.index', ['orders' => $orders]);
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
		Order::create([
			'user_id' => auth()->user()->id,
			'product_id' => $request->product_id,
			'customer_table_id' => $request->customer_table_id,
			'price' => $request->price
		]);

		return redirect()->back()->withSuccessMessage('Order Placed Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
	public function show($id)
    {
		if(session('success_message')){
			Alert::success('Success', session('Success Message'));
		}

        return view ('order.show', [
			'id' => $id,
			'products' => Product::all(),
			'order' => Order::where('customer_table_id', $id)->first()
			]);
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

	public function list()
	{
		$orders = Order::all();

		return datatables()->of($orders)->make(true);
	}
}
