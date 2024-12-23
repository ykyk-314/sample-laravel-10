<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     */
    public function testBasicExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->screenshot('home')
                    ->assertSee('Laravel')
                    ->clickLink('Register')
                    ->screenshot('click_login')
                    ->assertSee('新規登録')
                    ->type('name', 'テストユーザー')
                    ->type('email', 'laraveltest@example.com')
                    ->type('password', 'password')
                    ->type('password_confirmation', 'password')
                    ->screenshot('input')
                    ->press('新規登録')
                    ->screenshot('press');
        });
    }
}
