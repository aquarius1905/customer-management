<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    public function index()
    {
        $items = Customer::all();
        return view('index', ['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $form = $request->all();
        Customer::create($form);
        return redirect('/');
    }
    public function edit(Request $request)
    {
        $items = Customer::all();
        return view('update', ['items' => $items]);
    }
    public function update(Request $request)
    {
        $this->validate($request, Customer::$rules);
        $form = $request->all();
        unset($form['_token']);
        Log::debug($request);
        Customer::where('id', $request->id)->update($form);
        return redirect('/');
    }
}
