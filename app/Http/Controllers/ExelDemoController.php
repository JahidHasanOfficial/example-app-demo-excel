<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\ExelDemo;
use Illuminate\Http\Request;
use App\Imports\ExelDemoImport;
use Maatwebsite\Excel\Facades\Excel;

class ExelDemoController extends Controller
{



    // public function import(Request $request)
    // {
    //     $file = $request->file('excel_file');

    //     $this->validate($request, [
    //         'excel_file' => 'required|mimes:xlsx,xls'
    //     ]);

    //     try {
    //         Excel::import(new ExelDemoImport, $file);
    //         return redirect()->back()->with('success', 'Data Imported! ');
    //     } catch (Exception $e) {
    //         return redirect()->back()->with('error', 'Error importing data: ', $e->getMessage());
    //     }
    // }



    public function import(Request $request)
{
    $file = $request->file('excel_file');

    $this->validate($request, [
        'excel_file' => 'required|mimes:xlsx,xls'
    ]);

    try {
        // Delete old data
        // Assuming you're importing into a model called `YourModel`
        ExelDemo::truncate();

        // Import new data
        Excel::import(new ExelDemoImport, $file);

        return redirect()->back()->with('success', 'Data Imported and Old Data Deleted!');
    } catch (Exception $e) {
        return redirect()->back()->with('error', 'Error importing data: ' . $e->getMessage());
    }
}





    public function showVerificationForm()
    {
        return view('verify');
    }

    public function verifyCertificate(Request $request)
    {
        $request->validate([
            'name' => 'required|string'
        ]);

        $certificate = ExelDemo::where('name', $request->input('name'))->first();

        if ($certificate) {
            return view('result', ['certificate' => $certificate]);
        } else {
            return redirect()->back()->with('error', 'Certificate not found.');
        }
    }





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ExelDemo $exelDemo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExelDemo $exelDemo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExelDemo $exelDemo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExelDemo $exelDemo)
    {
        //
    }
}
