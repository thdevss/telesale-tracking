<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Validator;

class AdminCustomerController extends Controller
{
    //
    public function index()
    {
        $customers = Customer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.customer.index', [
            'customers' => $customers
        ]);
    }

    public function add()
    {
        return view('admin.customer.add');
    }

    public function store(Request $request) 
    {
        //

        $validator = Validator::make($request->all(), [
            'telephone_number' => [ 'required', 'numeric', 'unique:customer,telephone_number' ],
            'full_name' => 'required',
            'nick_name' => 'nullable',
            'remark' => 'nullable',
        ]);


        if ($validator->fails()) {
            return redirect('admin.customer.add')
                        ->withErrors($validator)
                        ->withInput();
        }
      
        Customer::create($request->all());
       
        return redirect()->route('admin.customer.index')->with('success','created new Customer successfully');
    }

    public function edit(Customer $customer)
    {
        return view('admin.customer.edit', [
            'customer' => $customer
        ]);

    }

    public function update(Request $request) 
    {
        //
    }

    public function destroy(Customer $customer) 
    {
        //
    }
}
