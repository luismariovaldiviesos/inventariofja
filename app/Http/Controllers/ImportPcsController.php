<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use
use App\Imports\PcsImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Pc;




class ImportPcsController extends Controller
{

    public function index()
    {
        return view('excel.importarpcs')->layout('layouts.theme.app');
    }


    // carga pcs
    public function cargaPcs(Request $request)
    {
        $validateData =  $request->validate([
            'file' => 'required'
        ]);

        Excel::import(new PcsImport, $request->file('file'));
        return redirect('importarpcs')->with('status', 'The file has been excel/csv imported to database in laravel 9');
    }

}
