<?php

namespace App\Http\Middleware;

use App\Models\Ads as AdsModel;

use Closure;
use Illuminate\Http\Request;

class Ads
{
    public function handle(Request $request, Closure $next)
    {

        AdsModel::newAccess($request);

        return $next($request);
    }
}
