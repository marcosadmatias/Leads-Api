<?php

namespace App\Services\Origins;

use App\Repository\Origins\OriginsRepository;

class OriginsService
{
    protected $originsRepository;

    public function __construct(
        OriginsRepository $originsRepository
    ) {
        $this->originsRepository = $originsRepository;
    }

    public function getAllResponse()
    {
        try {
            $origins = $this->originsRepository->getAll();
            
            return response()->json([
                "success" => true,
                "message" => "Requisição bem-sucedida",
                "origins" => $origins 
            ], 200);

        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Erro ao criar lead",
                "errors" => $th->getMessage()
            ], 500);
        }

    }
}
