<?php

namespace App\Http\Controllers;

use App\Bank;
use Illuminate\Http\Request;

class BankController extends Controller
{
    //
    public function index()
    {
        return Bank::all();
    }
 
    public function show($id)
    {
        return Bank::find($id);
    }

    public function store(Request $request)
    {
        // return Bank::create($request->all());
    }

    public function update(Request $request, $id)
    {
        // $Bank = Bank::findOrFail($id);
        // $Bank->update($request->all());

        // return $Bank;
    }

    public function delete(Request $request, $id)
    {
        // $Bank = Bank::findOrFail($id);
        // $Bank->delete();

        // return 204;
    }

    public function search(Request $request, $name)
    {
        $get_bank = Bank::where('name', 'like', $name . '%')
        ->orWhere('name', 'like', '%' . $name . '%')
        ->first();

        // return Bank::find($get_bank.id);
        return redirect()->route('show_bank', ['id' => $get_bank->id]);
    }
}
