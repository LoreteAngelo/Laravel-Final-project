<?php

namespace App\Http\Controllers;
use App\Models\Payer;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index()
    {
        $payer = Payer::all();
        $payer = Payer::paginate(10);
        return view('payer.index1', compact('payer'));
    }

    public function create()
    {
        return view('payer.create1');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'amount' => 'required',
            'remarks' => 'required',
           
        ]);
        
        //Student::create($request->post());
        Payor::create([
            'id' => $request->id,
            'name' => $request->name,
            'amount' => $request->amount,
            'remarks' =>$request->remarks,
           
        ]);

        return redirect()->route('payer.index1')->with('success','Employee Added Successfully.');
    }

   
    public function show(Payer $payer)
    {
        return view('payer.show',compact('payer'));
    }

    
    public function edit(Payer $payer)
    {
        return view('payer.edit1',compact('payer'));
    }

    
    public function update(Request $request, Payer $payer)
    {
        $request->validate([
            'fullname' => 'required',
            'email_address' => 'required',
            'username' => 'required',
            'password' => 'required',
            'status' => 'required',
        ]);
        
        //$student->fill($request->post())->save();

        $payer->fill([
            'fullname' => $request->fullname,
            'email_address' => $request->email_address,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'status' => $request->status,
        ])->save();

        return redirect()->route('payer.index1')->with('success','Employee updated successfully');
    }

   
    public function destroy(Payer $employee)
    {
        $payer->delete();
        return redirect()->route('payer.index1')->with('success','Deleted Successfully');
    }
}