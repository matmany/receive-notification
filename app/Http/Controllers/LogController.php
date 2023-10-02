<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLogRequest;
use App\Services\LogService;
use Illuminate\Routing\Controller as BaseController;
use Throwable;

class LogController extends Controller
{
    protected $service;
    public function __construct(LogService $service)
    {
        $this->service = $service;
    }

    public function createLog(CreateLogRequest $request)
    {
        try {

            $this->service->create($request);

            return response()->json(['success' => 'success'], 200);
            
        } catch (Throwable $e) {
            return response()->json(['error' => 'invalid'], 400);
        }
    }

    public function getall()
    {
        try{
            return $this->service->getAll();
        } catch (Throwable $e) {
            return response()->json(['error' => 'invalid'], 400);
        }

    }
}
