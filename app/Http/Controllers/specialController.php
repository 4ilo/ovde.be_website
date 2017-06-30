<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class specialController extends Controller
{
    /**
     * Route to get the server online status
     *
     * @return     string
     */
    public function status()
    {
        return "success";
    }
    
    public function github(Request $request)
    {
       $sig_check = 'sha1=' . hash_hmac('sha1',$request->getContent(), env("GITHUB_WEBHOOK_SECRET"));
       if(hash_equals($sig_check, $request->header("X-Hub-Signature")))
       {
           if($request->header("X-GitHub-Event") == "push")
           {
               $command = env("GITHUB_WEBHOOK_COMMAND");
               $output = `php {$command}`;
               echo $output;
           }
       }
    }
}
