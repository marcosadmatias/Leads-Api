<?php

namespace App\Http\Controllers;

use App\Http\Requests\Leads\StoreRequest;
use App\Models\Leads;
use App\Services\Leads\LeadsService;
use Illuminate\Http\Request;

class LeadsController extends Controller
{
    protected $leadsService;

    public function __construct(
        LeadsService $leadsService
    )
    {
        $this->leadsService = $leadsService;    
    }
    public function create(StoreRequest $request) {
        return $this->leadsService->createResponse($request);
    }
}