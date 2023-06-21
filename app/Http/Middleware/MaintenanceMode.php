<?php

namespace App\Http\Middleware;

use App\Models\Maintenance;
use App\Models\SettingWeb;
use Closure;
use Illuminate\Http\Request;

class MaintenanceMode 
{
  
    public function handle(Request $request, Closure $next)
    {
        $data= Maintenance::first();
        if ($data->ismaintenanc ==true) {
           return view('mistance_view');
        }
        return $next($request);
    }
}
