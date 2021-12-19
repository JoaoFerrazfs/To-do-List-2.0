<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\User;

class RegisterUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function test_check_if_root_site_is_correct()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Laravel');
        });
    }

    public function test_if_login_function_is_working(){
        $this->browse(function(Browser $browser){
            $browser->visit ('/login')
            ->type('email','admin@gmail')
            ->type('password','12345678')
            ->press('Login')
            ->assertPathIs('/dashboard');
        });

        }
    public function test_check_if_register_function_is_working(){
        $this->browse(function(Browser $browser){
            $browser->visit('/register')
            ->type('name','admin2')
            ->type('email','admin@gmail.com')
            ->type('password','12345678')
            ->type('password_confirmation','12345678')
            ->press('Register')
            ->assertPathIs('/dashboard')
            ->assertSee('Aberto');

           
        });
    }
    
}
