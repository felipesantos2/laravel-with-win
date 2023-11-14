<?php

namespace App\Http\Controllers;


use App\Models\Conta;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Str;



class AccountController extends Controller
{
    public function index(): View
    {
        return view('contas.list-account', [
            'contas' => Conta::all()
        ]);
    }


    public function create(): View
    {
        return view('contas.create-account');
    }


    public function store(Request $request)
    {
        $conta = new Conta();

        $conta->conta = Str::ucfirst($request->accountName);
        $conta->valor = $request->accountValue;
        $conta->estabelecimento = Str::upper($request->accountEstablishment);
        $conta->vencimento = $request->accountPayDay;

        $conta->save();

        return redirect()->route('account.create')->with('success', 'Conta adicionada com sucesso');
    }

    public function show($id)
    {
        // get
    }

    public function edit($id)
    {
        // get
    }

    public function update($id)
    {
        // put/patch
    }

    public function destroy($id)
    {
        // delete
    }
}
