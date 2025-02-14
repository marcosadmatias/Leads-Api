<?php

namespace App\Services\Leads;

use App\Models\Leads;
use App\Repository\Leads\LeadsRepository;

class LeadsService
{
    protected $leadsRepository;

    public function __construct(
        LeadsRepository $leadsRepository
    ) {
        $this->leadsRepository = $leadsRepository;
    }

    public function createResponse($request)
    {
        try {
            $this->leadsRepository->set($request);
            
            return response()->json([
                "success" => true,
                "message" => "Lead criado com sucesso",
            ], 201);

        } catch (\Throwable $th) {
            return response()->json([
                "success" => false,
                "message" => "Erro ao criar lead",
                "errors" => $th->getMessage()
            ], 500);
        }

    }
}
