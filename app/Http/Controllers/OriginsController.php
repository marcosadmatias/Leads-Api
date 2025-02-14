<?php

namespace App\Http\Controllers;

use App\Services\Origins\OriginsService;
use Illuminate\Http\Request;

class OriginsController extends Controller
{
    protected $originsService;

    public function __construct(
        OriginsService $originsService
    )
    {
        $this->originsService = $originsService;    
    }
    public function read(){
        return $this->originsService->getAllResponse();
    }
}
