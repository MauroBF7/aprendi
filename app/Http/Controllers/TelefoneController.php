<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelefoneRequest;
use App\Http\Requests\UpdateTelefoneRequest;
use App\Models\Telefone;
use Illuminate\Http\Request;

class TelefoneController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $telefones=Telefone::all();
        return view('telefones.index',[
            'telefones'=> $telefones
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('telefones.create',[
            'telefone'=>new Telefone,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTelefoneRequest $request)
    {
        $telefone = new Telefone;
        $telefone->telefone = $request->telefone;
        $telefone->Responsa = $request->responsa;
        $telefone->local = $request->local;
        $telefone->divisa = $request->divisa;
        $telefone->secao = $request->secao;
        $telefone->save();
        return redirect("/telefones/{$telefone->id}");
        //return redirect("/telefones");

    }

    /**
     * Display the specified resource.
     */
    public function show(Telefone $telefone)
    {
        //$telefone= Telefone::where('numero',$numero)->first();
        return view('telefones.show',[
            'telefone'=>$telefone,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param \App\Models\Telefone $telefone
     * @return \Illuminate\Http\Response
     * */

    public function edit(Telefone $telefone)
    {
        return view('telefones.edit',[
            'telefone'=>$telefone
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTelefoneRequest $request, Telefone $telefone)
    {
        $telefone->telefone = $request->telefone;
        $telefone->Responsa = $request->responsa;
        $telefone->local = $request->local;
        $telefone->divisa = $request->divisa;
        $telefone->secao = $request->secao;
        $telefone->save();
        #return redirect("/telefones/{$telefone->id}");
        return redirect("/telefones");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telefone $telefone)
    {
        $telefone->delete();
        return redirect('/telefones');
    }
}
