<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Laravel\Prompts\table;
use function Livewire\store;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  view('files.files');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('files.file_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->image);

        if($request->image) {
            $year = date('Y'); $month = date('m');
            $path = $request->file('image')->store( 'uploads/'. $year . '/' . $month);
        }

        $affected = DB::insert('insert into images (id, image, created_at, updated_at) values (?, ?, ?, ?)', [null, $path, now(), now()]);

        if($affected) {
            return redirect()->route('upload.index')->with('success', 'Upload feito com sucesso!');
        }

        return redirect()->route('upload.index')->with('error', 'Erro no upload!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
