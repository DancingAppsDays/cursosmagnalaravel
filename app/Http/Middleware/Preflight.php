<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
//use Symfony\Component\Console\Output\ConsoleOutput;

class Preflight
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

    
        $headers = [
            'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
            'Access-Control-Allow-Headers' => 'X-Requested-With, X-Auth-Token, Content-Type, Origin, Cache-Control, Pragma, Authorization, Accept, Accept-Encoding, X-Login-Origin,X-CSRF-TOKEN, X-Requested-With, token',
           // 'Access-Control-Allow-Credentials' => 'true',
            
                     ];

           // $output = new ConsoleOutput();
 //$output->writeln($headers);
    
        if ($request->isMethod("OPTIONS")) {

        //    $output = new ConsoleOutput();
         //   $output->writeln("isoptions");
            // The client-side application can set only headers allowed in Access-Control-Allow-Headers
           //return Response::make('OK', 200, $headers);

           return response('', 200)
        ->header('Access-Control-Allow-Origin', '*') //instead of that fruitcale/lñaravel-cors maybe
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');





        }
        //$request->headers->set('Accept', 'application/json');
        $response = $next($request);

   //     $output = new ConsoleOutput();
 //$output->writeln($response);
    
        foreach ($headers as $key => $value) {
            $response->header($key, $value);
        }

        //$output = new ConsoleOutput();
        //$output->writeln($response);
         return $response;  
    
        }
}
