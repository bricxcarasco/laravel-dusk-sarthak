<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;

class RegisterTest extends DuskTestCase
{
    use DatabaseMigrations, DatabaseTransactions;

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testAUserCanRegister()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/register')
                ->assertSee('Register')
                ->type('name', 'Bricx')
                ->type('email', 'bricxcarasco.gss@gmail.com')
                ->type('password', 'secret')
                ->type('password_confirmation', 'secret')
                ->press('Register')
                ->assertPathIs('/homes');
        });
    }
}
