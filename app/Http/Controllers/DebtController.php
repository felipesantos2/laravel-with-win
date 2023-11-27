<?php

namespace App\Http\Controllers;

use App\Models\Debt;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DebtController extends Controller
{
    //----------------------------------------------------
    //----------------------------------------------------
    public function index(): View
    {
        // all items
        return view('pages.contas.index', [
            'rows' => Debt::all()
        ]);
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function show(Debt $id): View
    {
        // one item
        return view('pages.contas.show', [
            'id'   => $id->id,
            'row' => Debt::find($id),
        ]);
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
    public function store(Request $request)
    {
        // save item and redirect
        if (
            empty($request->conta) ||
            empty($request->valor) ||
            empty($request->estabelecimento)
        ) {
            return to_route('contas.create', [
                'message' => 'Preencha todos os campos por favor!',
            ]);
        }

        // insert
        DB::table('contas')->updateOrInsert(
            [
                'conta' => trim($request->conta),
                'estabelecimento' => trim($request->estabelecimento),
                'valor' => trim($request->valor),
                'data_compra' => trim($request->data_compra),
                'data_vencimento' => trim($request->data_vencimento),
            ],
            [
                'conta' => trim($request->conta),
                'estabelecimento' => trim($request->estabelecimento),
                'valor' => trim($request->valor),
                'data_compra' => trim($request->data_compra),
                'data_vencimento' => trim($request->data_vencimento),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );

        return to_route('contas.create', [
            'message' => urlencode('Cadastrado com sucesso!'),
        ]);
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function edit(Debt $id): View
    {
        // edit one item
        return view('pages.contas.edit');
    }

    //----------------------------------------------------
    //----------------------------------------------------
    public function update(Debt $id, Request $request)
    {
        // save edition item and redirect
        if (
            empty($request->conta) ||
            empty($request->valor) ||
            empty($request->estabelecimento)
        ) {
            return to_route('contas.edit', [
                'message' => 'Preencha todos os campos por favor!',
            ]);
        }

        $affectedRows = DB::table('contas')
            ->where('id', $id)
            ->update(['conta' => $request->conta]);

        echo $affectedRows;

        // return to_route('contas.index', [
        //     'message' => 'Atualizado Com Sucesso'
        // ]);
    }

    //----------------------------------------------------
    //----------------------------------------------------
}
