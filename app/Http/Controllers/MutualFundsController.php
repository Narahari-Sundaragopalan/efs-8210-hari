<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\MutualFunds;
use App\Customer;

class MutualFundsController extends Controller
{
    public function index()
    {
        $mutual_funds = MutualFunds::all();
        return view('mutualfunds.index',compact('mutual_funds'));
    }

    public function show($id)
    {

        $mutual_fund = MutualFunds::findOrFail($id);
        return view('mutualfunds.show',compact('mutual_fund'));
    }


    public function create()
    {

        $customers = Customer::lists('name','id');
        return view('mutualfunds.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {

        $mutual_fund = new MutualFunds($request->all());
        $mutual_fund->save();

        return redirect('mutualfunds');
    }

    public function edit($id)
    {
        $mutual_fund = MutualFunds::find($id);
        return view('mutualfunds.edit',compact('mutual_fund'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id,Request $request)
    {
        //
        $mutual_fund = new MutualFunds($request->all());
        $mutual_fund = MutualFunds::find($id);
        $mutual_fund->update($request->all());
        return redirect('mutualfunds');
    }

    public function destroy($id)
    {
        MutualFunds::find($id)->delete();
        return redirect('mutualfunds');
    }
}
