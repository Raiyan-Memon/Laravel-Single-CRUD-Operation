<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $account = Account::all();
        return view('account.index', compact('account'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account.create');
    }

    public function store(Request $request)
    {
        // echo "store";

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
        // dd($account);
        $account = Account::find($account);
        return view('account.show', compact('account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit($account)
    {
        $account = Account::find($account);
        // dd($account);
        return view('account.edit', compact('account'));
    }


    public function update(Request $request, $account)
    {
        // dd($account);

        // dd($account);

        $data = Account::find($account);
        // dd($data);

        // return "this is update";

        $data->name = $request->name;
        $data->branch = $request->branch;
        $data->enrollno = $request->enrollno;
        $data->update();

        return redirect('crud');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        // echo "delete";
        $delete = Account::find($id);
        // dd($delete);
        $delete->delete();
        return redirect('crud');
    }
}
