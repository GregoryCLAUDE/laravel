<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Customer;

class CustomerController extends Controller
{
    public function getAllCustomers(){
      $customers=Customer::all();
      dd($customers);
    }
}
