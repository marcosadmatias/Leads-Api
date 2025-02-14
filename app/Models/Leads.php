<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leads extends Model
{

    protected $table = "leads";
    protected $primaryKey = "idleads";
    protected $fillable = ["idleads", "nome", "email", "telefone", "usuario_atribuido", "lead_ganho", "interesses", "anotacoes", "id_cliente", "id_origem"];
    public $timestamps = false;
}
