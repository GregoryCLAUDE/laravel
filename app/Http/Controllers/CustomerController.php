<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function getAllCustomers(){
      $customers=Customer::all();
      return view ("customers/customers", ["customers" => $customers]);
    }

    public function getCustomer($id){
      $customer = Customer::where("id", $id)->get();
      //dd($customer);
      return view("customers/customer_detail", ["customer" => $customer]);
    }
}
