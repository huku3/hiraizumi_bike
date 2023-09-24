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
    public function store(StoreRentalRequest $request, Customer $customer, Bike $bike)
    {
        $bike_ids = $request->bike_ids;
        $courses = $request->courses;
        $total_price = 0;

        for ($i = 0; $i < $customer->unit_count; $i++) {
            $rental = new Rental($request->all());
            $rental->customer_id = $customer->id;
            $rental->bike_id = $bike_ids[$i];
            $rental->course = $courses[$i];
            $rental->start_time = $request->start_time;
            $rental->save();

            // コースに応じて料金を計算し、合計金額に加算
            $price = $this->calculatePrice($courses[$i]);
            $total_price += $price;
        }

        // 顧客モデルに合計金額を保存
        $customer->price = $total_price;
        $customer->save();

        return redirect()->route('customers.index')
            ->with('success', 'レンタルが申し込まれました');
    }

    private function calculatePrice($course)
    {
        // unit_countに応じて料金を計算し、priceを返す
        if ($course == "半日コース") {
            return 900;
        } elseif ($course == "1日コース") {
            return 1200;
        }

        // デフォルトの価格
        return 0;
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
