<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

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

    public function report_summary(Customer $customer)
    {
        // $customers = customer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.customer.report', [
            // 'customers' => $customers,
            'customer' => $customer
        ]);
    }

    public function report_list(Customer $customer)
    {
        $customers = customer::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.customer.report-list', [
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
