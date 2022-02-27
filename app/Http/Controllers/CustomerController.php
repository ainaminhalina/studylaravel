<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //web route
    function index(){
        $customers = DB::table('customers')->get();
        return view('customer.index')
        ->with('customers', $customers);
        //->with(variable, value)


        // $customers = Customer::all();
        // echo $customers[1]->name.'</br>';
        // echo $customers[0]->address;

        // foreach ($customers as $key => $customer) {
        //     echo $customer->name . ' ' . $customer->age . '</br>';
        // }
        // $customer1 = Customer::where('gender', 'Male')
        //             ->get();

        //             foreach ($customer1 as $key => $value) {
        //                         echo $value->id . ' ' . $value->name . ' ' . $value->age . ' ' . $value->gender . ' ' . $value->address .'</br>';
        //                     }

            //    foreach ($customer1 as $key => $value) {
            //         echo $value->id . ' ' . $value->name . ' ' . $value->age . ' ' . $value->gender . ' ' . $value->address .'</br>';
            //     }
    }

    function display($id){
        $customers = DB::table('customers')
                        ->where('id', $id)
                        ->get();
        return view('customer.display')
                        ->with('customers', $customers);
    }

    function edit($id){
        $customers = DB::table('customers')
                        ->where('id', $id)
                        ->get();
        return view('customer.edit')
                        ->with('customers', $customers)
                        ->with('id', $id);
    }

    function create(){
        return view('customer.create');
    }

    //API route

    function add(Request $request){
        //input('name') dapat dari create.blade.php <input name="name">
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');

        DB::table('customers')->insert([
            'name' => $name,
            'age' => $age,
            'gender' => $gender,
            'address' => $address
        ]);
    }

    function update($id, Request $request){
        $name = $request->input('name');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $address = $request->input('address');

        DB::table('customers')
              ->where('id', $id)
              ->update(['name' => $name,
                        'age' => $age,
                        'gender' => $gender,
                        'address' => $address
                    ]);
    }

    function delete($id){
        DB::table('customers')
            ->where('id', '=', $id)
            ->delete();
    }
}
