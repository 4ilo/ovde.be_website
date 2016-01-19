<?php

    namespace App\Http\Controllers;

    use App\CloudAtCost;
    use Illuminate\Support\Facades\Mail;
    use App\Http\Requests\contactRequest;
    use ReCaptcha\ReCaptcha;

    class pagesController extends Controller
    {
        /**
         * De homepage
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function home()
        {
            return view("paginas.home");
        }

        /**
         * Over olivier pagina
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function over()
        {
            return view("paginas.over");
        }

        /**
         * Projecten pagina
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function projecten()
        {
            return view("paginas.projecten");
        }

        /**
         * De contact pagina
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         */
        public function contact()
        {
            return view("paginas.contact");
        }

        /**
         * Deze method stuurt de mail van het contactformulier
         * @param contactRequest $request
         * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
         */
        public function sendMail(contactRequest $request)
        {
            if( !$this->checkCaptcha($request) )
            {
                session()->flash("flash_message","reCAPTCHA is niet ingevuld");
                return redirect()->back()->withInput();
            }
                // Hier is de captcha gevalideerd

            Mail::send('emails.contact', ["request" => $request], function ($message) {
                $message->from('contact@ovde.be', 'Ovde.be');
                $message->to('oliviervandeneede@hotmail.com')->subject("Contactformulier");
            });

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
         * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
         * @throws \App\Exceptions\CloudAtCostLoginFailException
         */
        public function status()
        {
            $vps = new CloudAtCost();
            $vps->server(0);
            return view("paginas.status",compact("vps"));
        }
    }
