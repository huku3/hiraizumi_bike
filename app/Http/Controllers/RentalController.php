<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRentalRequest;
use App\Http\Requests\UpdateRentalRequest;
use App\Models\Customer;
use App\Models\Bike;
use App\Models\Rental;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Customer $customer)
    {
        $bikes = Bike::all();
        return view('rentals.create', compact('customer'), compact('bikes'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRentalrequest $request, Customer $customer)
    {
        // $bikeIds = [];
        // for ($i = 1; $i <= $customer->unit_count; $i++) {
        //     $bikeIds[] = $request->input("rental_bike_$i");
        // }

        // Rentalモデルを使用してレンタル情報を作成し、関連付けます
        $rental = new Rental();
        $rental->customer_id = $customer->id;
        $rental->rental_start_time = $request->input('rental_start_time');
        // 他のレンタル情報も設定します
        $rental->save();

        // 各自転車と関連付けます
        $rental->bikes()->attach($bikeIds);

        return redirect()->route('customers.index', $customer)
            ->with('success', 'レンタルが申し込まれました');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRentalrequest $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
