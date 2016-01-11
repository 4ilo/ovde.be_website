<?php
    
    namespace App\Http\Controllers;

    use App\Http\Requests\contactRequest;
    use Illuminate\Support\Facades\Mail;

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
            Mail::send('emails.contact', ["request" => $request], function ($message) {
                $message->from('contact@ovde.be', 'Ovde.be');
                $message->to('oliviervandeneede@hotmail.com')->subject("Contactformulier");
            });

            session()->flash("flash_message","Email is verzonden.");
            return redirect("contact");
        }
    }