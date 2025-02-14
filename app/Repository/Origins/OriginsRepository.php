<?php 

namespace App\Repository\Origins;

use Illuminate\Database\Eloquent\Collection;

interface OriginsRepository {
    public function getAll() : Collection;
}