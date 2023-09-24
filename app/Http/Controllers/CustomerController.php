<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Models\Rental;
use App\Models\Bike;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function apply()
    {
        return view('customers.apply');
    }

    public function form(StoreCustomerRequest $request)
    {
        $customer = new Customer($request->all());
        $customer->save();
        return view('customers.thank_you', compact('customer'));
    }


    public function index()
    {
        $customers = Customer::latest()->get();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request)
    {
        $customer = new Customer($request->all());
        $customer->save();
        return view('customers.show', compact('customer'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCustomerRequest $request, string $id)
    {
        $customer = Customer::find($id);
        $customer->fill($request->all());
        $customer->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customer::find($id);
        $customer->delete();
        return redirect()->route('customers.index')
            ->with('notice', '削除しました');
    }

    // public function rentbike(Request $request, StoreCustomerRequest $customer)
    // {
        

    //     $bikeIds = [];
    //     for ($i = 1; $i <= $customer->unit_count; $i++) {
    //         $bikeIds[] = $request->input("rental_bike_$i");
    //     }

    //     // Rentalモデルを使用してレンタル情報を作成し、関連付けます
    //     $rental = new Rental();
    //     $rental->customer_id = $customer->id;
    //     $rental->start_time = $request->input('rental_start_time');
    //     // 他のレンタル情報も設定します
    //     $rental->save();

    //     // 各自転車と関連付けます
    //     $rental->bikes()->attach($bikeIds);

    //     return redirect()->route('customers.index', $customer)
    //         ->with('success', 'レンタルが申し込まれました');
    // }

    // return redirect("customers.index", compact($rental,),compact($bike),compact($customer,));




}
