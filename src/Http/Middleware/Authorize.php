<?php

namespace Parfumix\NovaSettingsTool\Http\Middleware;

use Parfumix\NovaSettingsTool\SettingsTool;

class Authorize
{
    public function handle($request, $next)
    {
        return resolve(SettingsTool::class)->authorize($request)
            ? $next($request)
            : abort(403);
    }
}
