<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao_aluno;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AvaliacaoAlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notas = Avaliacao_aluno::all()->toArray();
        //dd($notas);
        return view('avaliac-aluno/avaliacoes-aluno');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avaliacao_aluno  $avaliacao_aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Avaliacao_aluno $avaliacao_aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avaliacao_aluno  $avaliacao_aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaliacao_aluno $avaliacao_aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avaliacao_aluno  $avaliacao_aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avaliacao_aluno $avaliacao_aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avaliacao_aluno  $avaliacao_aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaliacao_aluno $avaliacao_aluno)
    {
        //
    }
}
