<?php

    use Illuminate\Foundation\Testing\WithoutMiddleware;
    use Illuminate\Foundation\Testing\DatabaseMigrations;
    use Illuminate\Foundation\Testing\DatabaseTransactions;

    class UserTest extends TestCase
    {
        /**
         * Alle menuitems testen
         *
         * @return void
         */
        public function testMenuItems()
        {
            $this->visit("/")->see("logo_home")
                 ->click("Over Mij")->see("Over Olivier")
                 ->click("Projecten")->see("Led Cube")
                 ->click("Contact")->see("form");

        }
        
        public function testForm()
        {
            $this->visit("/contact")
                 ->see("form")
                 ->type("margaux", "naam")
                 ->type("margaux@hotmail.com", "email")
                 ->type("Heey, wat een mooie website!\n[PhpUnit test]", "vraag")
                 ->press("verzenden")
                 ->see("Email is verzonden");
        }
    }
