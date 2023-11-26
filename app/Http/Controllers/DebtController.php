<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Debt;
use Illuminate\View\View;
use Illuminate\Http\Request;


class DebtController extends Controller
{
    //----------------------------------------------------
    //----------------------------------------------------
    public function index(): View
    {
        // all items

        $contas = new Debt();

        return view('pages.contas.index', [
            'rows' => $contas->all();
        ]);
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function show(): View
    {
        // one item
        return view('pages.contas.show');
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function create()
    {
        // save item and redirect
        return to_route('contas.pages.index');
    }
    //----------------------------------------------------
    //----------------------------------------------------
    public function store()
    {
        // save item and redirect
        return to_route('contas.index');
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function edit(): View
    {
        // edit one item
        return view('pages.contas.edit');
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function update()
    {
        // save edit for item and redirect
        return to_route('contas.index');
    }

    //----------------------------------------------------
    //----------------------------------------------------
}
