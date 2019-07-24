<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class HomeController extends Controller
{
    public function store(Request $request){
        $customer = New Customer;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->description = $request->description;
        $customer->save();
        return response()->json($customer);

    }
    public function show(){
        
        $customer = Customer::all();
        return response()->json($customer);

    }
}
