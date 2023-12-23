<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use Illuminate\Http\Request;

class DomainController extends Controller
{
    
    public function index()
    {
        $data = Domain::all();
        return view('domains.index', ['domains'=>$data]);
    }

    public function create()
    {
        return view('domains.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'domain_name' => 'required',
            'buy_form' => 'required',
            'Expire_date' => 'required',
            'notification' => 'required',
          ]);
          $res = Domain::insert([
            'domain_name'=>$request->domain_name,
            'buy_form'=>$request->buy_form,
            'Expire_date'=>$request->Expire_date,
            'notification'=>$request->notification
          ]);
          return redirect()->route('index.domain')->with('success', 'Post created successfully.');

    }

    public function show(string $id)
    {
        $domains = Domain::find($id);
        return view('domains.show')->with('domains', $domains);
    }

    public function edit($id)
    {
         $domains = Domain::find($id);
        return view('domains.edit')->with('domain', $domains);
    }

    public function update(Request $request)
    {
        $id = $request->edit_id;
        $domain = Domain::find($id);
        $Update = [
            'domain_name' => $request->input('domain_name'),
            'buy_form' => $request->input('buy_form'),
            'Expire_date' => $request->input('Expire_date'),
            'notification' => $request->input('notification'),
        ];

        $domain->update($Update);
        return redirect('domains')->with('flash_message', 'Updated successfully!');
    }

    public function destroy(string $id)
    {
        Domain::destroy($id);
        return redirect('domains');
    }
    
    public function DomainSearch(Request $request){
        $val = $request->val;
        return $val;
    }
}
