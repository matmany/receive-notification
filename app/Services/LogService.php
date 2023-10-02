<?php

namespace App\Services;

use App\Models\Log;
use Illuminate\Support\Facades\View;

class LogService
{
    protected $log;

    public function __construct(Log $log) {
        $this->log = $log;

    }

    public function create($request)
    {
        $this->log->create($request->all());
    }

    public function getAll(){
        $logs = $this->log->orderByDesc('date')
        ->limit(50)
        ->get();

        return View::make("logs")->with(array('logs'=>$logs)); 
    }
}
