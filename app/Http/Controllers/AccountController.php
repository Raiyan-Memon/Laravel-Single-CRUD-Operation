<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $account = Account::all();
        return view('account.index', compact('account'));
    }

    public function create()
    {
        return view('account.create');
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required ',
            'branch' => 'required|min:2',
            'enrollno' => 'required',
        ]);

        $account = new Account;

        $account->name = $request->name;
        $account->branch = $request->branch;
        $account->enrollno = $request->enrollno;
        $account->save();

        return redirect('crud');
    }

    public function show($account)
    {

        $account = Account::find($account);
        return view('account.show', compact('account'));
    }

    public function edit($account)
    {
        $account = Account::find($account);
        // dd($account);
        return view('account.edit', compact('account'));
    }

    public function update(Request $request, $account)
    {

        $data = Account::find($account);

        $data->name = $request->name;
        $data->branch = $request->branch;
        $data->enrollno = $request->enrollno;
        $data->update();

        return redirect('crud');
    }

    public function destroy($id)
    {
        $delete = Account::find($id);
        $delete->delete();
        return redirect('crud');
    }
}
