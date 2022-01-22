<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController extends Controller
{
    public function list()
    {
        $items = Customer::all();
        return view('list', ['items' => $items]);
    }
    public function add()
    {
        return view('add');
    }
    public function create(CustomerRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Customer::create($form);
        return redirect('list');
    }
    public function update(CustomerRequest $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Customer::where('id', $request->id)->update($form);
        return redirect('list');
    }
    public function delete(Request $request)
    {
        Customer::find($request->id)->delete();
        return redirect('list');
    }
}
