<?php

namespace App\Http\Controllers;

use App\Plan;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function index()
    {
        $plans = Plan::all();
        return view('billing.index', compact('plans'));
    }

}
