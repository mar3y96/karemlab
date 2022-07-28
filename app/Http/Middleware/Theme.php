<?php

namespace App\Http\Middleware;

use Closure;

class Theme
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        
        $theme=setting('theme'); 
        foreach($theme as $key=> $va){
            if($va){
                session()->put('theme',$key);
                break;
            }
        }
        return $next($request);
    }
}
