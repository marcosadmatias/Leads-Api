<?php

namespace App\Repository\Origins;

use App\Models\Leads;
use App\Models\Origens;
use Illuminate\Database\Eloquent\Collection;

class EloquentOriginsRepository implements OriginsRepository
{
    public function getAll() : Collection
    {
        return Origens::all();
    }
}
