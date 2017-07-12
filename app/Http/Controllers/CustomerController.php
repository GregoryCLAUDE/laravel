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

    public function updateCustomer(Request $request, $id){
      $customer=Customer::find($id);
      $customer->first_name = $request->first_name;
      $customer->last_name = $request->last_name;
      $customer->email = $request->email;
      $customer->save();
      return redirect("/customers");
    }
    public function deleteCustomer ($id){
      $customer=Customer::destroy($id);
      return "ok";
    }
}
