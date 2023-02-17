<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCustomerRequest;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        return response(Customer::latest()->paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCustomerRequest $request): Response
    {
        $customer = Customer::create([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

       return response(['message' => 'Customer created']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer): Response
    {
        return response($customer);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer): Response
    {
        $customer->update([
            'category_id' => $request->category_id,
            'name' => $request->name,
            'address' => $request->address,
            'phone_number' => $request->phone_number,
        ]);

        return response(['message' => 'Customer updated']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer): Response
    {
        $customer->delete();

        return response(['message' => 'Customer deleted']);
    }
}


