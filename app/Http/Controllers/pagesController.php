<?php

    namespace App\Http\Controllers;

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
         * @param contactRequest $request
         * @return \Illuminate\Routing\Redirector
         */
        public function sendMail(contactRequest $request)
        {
            if (!$this->checkCaptcha($request))
            {
                session()->flash("flash_message", "reCAPTCHA not completed.");
                return redirect()->back();
            }

            // Hier is de captcha gevalideerd

            Mail::to("oliviervandeneede@hotmail.com")->send(new ContactFormMail($request));


            session()->flash("flash_message", "Your message has been send");
            return redirect("contact");
        }
        
        /**
         * Functie om cpatcha te testen
         * @param $request
         * @return bool
         */
        private function checkCaptcha($request)
        {
            if (env("RECAPTCHA_BYPASS", FALSE))
            {
                return TRUE;
            }
            
            $response = $request->input("g-recaptcha-response");
            $remoteip = $_SERVER['REMOTE_ADDR'];
            $secret = env('RE_CAP_SECRET');
            
            $recaptcha = new ReCaptcha($secret);
            $resp = $recaptcha->verify($response, $remoteip);
            
            if ($resp->isSuccess())
            {
                return TRUE;
            }
            return FALSE;
        }
    }
