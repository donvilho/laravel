<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//muista tämä!
use App\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('pages.homework.h6t1.t1')->with('customers', $customers);
    }

    public function show($id)
    {
        $customer = Customer::find($id);
        return view('pages.homework.h6t1.user')->with('customer', $customer);
    }

    public function create(){
        return view('pages.homework.h6t1.create');
    }

    public function store(){

        $customer = new Customer();
        $customer->name = request('name');
        $customer->birth_date = request('birth_date');
        $customer->save();

        return redirect('/customers');
    }

    public function edit($id){
        $customer = Customer::find($id);
        return view('pages.homework.h6t1.edit')->with('customer', $customer);
    }

    public function update($id){
        $customer = Customer::find($id);
        $customer->name = request('name');
        $customer->birth_date = request('birth_date');
        $customer->save();
        return redirect('/customers');
    }

    public function destroy($id){
        Customer::find($id)->delete();
        return redirect('/customers');
    }

    public function search(Request $term){
        $search = $term->term;
        $customers = Customer::where('name','LIKE',"%".$search."%")->get();
        return view('pages.homework.h6t1.search')->with('customers', $customers);
    }
}
