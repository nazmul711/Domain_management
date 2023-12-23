<?php

namespace App\Http\Controllers;

use App\Models\Hosting;
use Illuminate\Http\Request;

class HostingController extends Controller
{

    public function index()
    {
        $data = Hosting::all();
        return view('hostings.index', ['hostings'=>$data]);
    }

    public function create()
    {
        return view('hostings.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'hosting_name' => 'required',
            'buy_form' => 'required',
            'Expire_date' => 'required',
            'notification' => 'required',
          ]);
          $res = Hosting::insert([
            'hosting_name'=>$request->hosting_name,
            'buy_form'=>$request->buy_form,
            'Expire_date'=>$request->Expire_date,
            'notification'=>$request->notification,
          ]);
          return redirect()->route('index.hosting')->with('success', 'created successfully.');
    }

    public function show(string $id)
    {
        $hostings = Hosting::find($id);
        return view('hostings.show')->with('hostings', $hostings);
    }

    public function edit(string $id)
    {
        $hostings = Hosting::find($id);
        return view('hostings.edit')->with('hostings', $hostings);
    }

    public function update(Request $request)
    {
        $id = $request->edit_id;
        $hosting = Hosting::find($id);
        $Update = [
            'hosting_name' => $request->input('hosting_name'),
            'buy_form' => $request->input('buy_form'),
            'Expire_date' => $request->input('Expire_date'),
            'notification' => $request->input('notification'),
        ];
        $hosting->update($Update);
        return redirect('hostings')->with('flash_message', 'Updated successfully!');
    }

    public function destroy(string $id)
    {
        Hosting::destroy($id);
        return redirect('hostings');
    }
}
