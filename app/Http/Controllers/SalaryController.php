<?php

namespace App\Http\Controllers;

use App\Models\Salary;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salary = Salary::all();
        return view('salary.index', compact('salary'));   
         }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('salary.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'accountno' => 'required|max:255',
            'date' => 'required|max:255',
            'basicpay' => 'required|max:255',
            'bounus' => 'required|max:255',
            'da' => 'required|max:255',
            'hra' => 'required|max:255',
            'it' => 'required|max:255',
            'esi' => 'required|max:255',
            'pf' => 'required|max:255',
            'pt' => 'required|max:255',
            
        ]);
        $salary = Salary::create($storeData);

        return redirect('/salary')->with('completed', 'salary has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $salary = Salary::findOrFail($id);
        return view('salary.show',compact('salary'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salary = Salary::findOrFail($id);
        return view('salary.edit', compact('salary'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'accountno' => 'required|max:255',
            'date' => 'required|max:255',
            'basicpay' => 'required|max:255',
            'bounus' => 'required|max:255',
            'da' => 'required|max:255',
            'hra' => 'required|max:255',
            'it' => 'required|max:255',
            'esi' => 'required|max:255',
            'pf' => 'required|max:255',
            'pt' => 'required|max:255',
        ]);
        Salary::whereId($id)->update($updateData);
        return redirect('/salary')->with('completed', 'salary has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salary = Salary::findOrFail($id);
        $salary->delete();

        return redirect('/salary')->with('completed', 'salary has been deleted');
    }
}
