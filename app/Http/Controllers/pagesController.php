<?php

namespace App\Http\Controllers;

use App\CloudAtCost;
use GuzzleHttp\Client;
use ReCaptcha\ReCaptcha;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\contactRequest;

class pagesController extends Controller
{
    /**
     * De homepage
     * @return \Illuminate\View\View
     */
    public function home()
    {
        return view("paginas.home");
    }

    /**
     * Over olivier pagina
     * @return \Illuminate\View\View
     */
    public function over()
    {
        return view("paginas.over");
    }

    /**
     * Projecten pagina
     * @return \Illuminate\View\View
     */
    public function projecten()
    {
        return view("paginas.projecten");
    }

    /**
     * De contact pagina
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view("paginas.contact");
    }

    /**
     *  Deze method stuurt de mail van het contactformulier
     *  @param contactRequest $request
     *  @return \Illuminate\Routing\Redirector
     */
    public function sendMail(contactRequest $request)
    {
        if( !$this->checkCaptcha($request) )
        {
            session()->flash("flash_message","reCAPTCHA is niet ingevuld");
            return redirect()->back()->withInput();
        }
        
        // Hier is de captcha gevalideerd

        Mail::to("oliviervandeneede@hotmail.com")->send(new ContactFormMail($request));


        session()->flash("flash_message","Email is verzonden.");
        return redirect("contact");
    }

    /**
     * Functie om cpatcha te testen
     * @param $request
     * @return bool
     */
    private function checkCaptcha($request)
    {
        if(env("RECAPTCHA_BYPASS",false))
        {
            return true;
        }
        
        $response = $request->input("g-recaptcha-response");
        $remoteip = $_SERVER['REMOTE_ADDR'];
        $secret   = env('RE_CAP_SECRET');

        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($response,$remoteip);

        if($resp->isSuccess())
        {
            return true;
        }
        return false;
    }


    /**
     * Een statuspagina met ram,cpu en hdd usage
     *
     * @param      \App\CloudAtCost       $vps    Server object
     *
     * @return     \Illuminate\View\View
     */
    public function status(CloudAtCost $vps)
    {
        $vps->selectServer("ovde.be");

        return view("paginas.status",compact("vps"));
    }
}
