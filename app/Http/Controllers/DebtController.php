<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class DebtController extends Controller
{
    //----------------------------------------------------
    //----------------------------------------------------
    public function index(): View
    {
        // all items
        return view('pages.contas.index');
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
