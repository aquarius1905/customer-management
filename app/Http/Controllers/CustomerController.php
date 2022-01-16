<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;

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
    public function edit()
    {
        $items = Customer::all();
        return view('update', ['items' => $items]);
    }
    public function update(Request $request)
    {
        if(empty($request->ids))
        {
            return redirect('/');
        }
        $count = 0;
        foreach($request->ids as $id)
        {
            $customer = [
                'name' => $request->names[$count],
                'name_furigana' => $request->name_furiganas[$count],
                'birthday' => $request->birthdays[$count],
                'email' => $request->emails[$count]
            ];
            $this->validate($customer, Customer::$rules);
            $form = $customer->all();
            unset($form['_token']);
            Customer::where('id', $id)->update($form);
            $count++;
        }
        return redirect('/');
    }
    public function delete()
    {
        $items = Customer::all();
        return view('delete', ['items' => $items]);
    }
    public function remove(Request $request)
    {
        if(empty($request->ids))
        {
            return redirect('/');
        }
        foreach($request->ids as $id)
        {
            Customer::find($id)->delete();
        }
        return redirect('/');
    }
}
