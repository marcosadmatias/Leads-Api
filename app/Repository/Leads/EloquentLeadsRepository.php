<?php

namespace App\Repository\Leads;

use App\Models\Leads;

class EloquentLeadsRepository implements LeadsRepository
{
    public function set($request) : void
    {
        Leads::create([
            "nome" => $request->nome,
            "email" => $request->email ?? null,
            "telefone" => $request->telefone ?? null,
            "usuario_atribuido" => $request->usuario_atribuido ?? null,
            "lead_ganho" => $request->lead_ganho ?? null,
            "interesses" => $request->interesses ?? null,
            "anotacoes" => $request->anotacoes ?? null,
            "id_cliente" => $request->id_cliente ?? null,
            "id_origem" => $request->id_origem ?? null
        ]);
    }
}
