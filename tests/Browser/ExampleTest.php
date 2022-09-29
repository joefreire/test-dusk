<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $sites = [
            'https://123zaehler.de/',
            'https://mentalhealthandwellbeing.eu/',
            'https://nikcub.com/',
            'https://davesspice.com/',
            'https://www.necomimi.com/'
        ];
        for ($x = 0; $x <= 100; $x++) {
            foreach ($sites as $site) {
                $this->browse(function (Browser $browser) use ($site){
                    $browser->visit($site);
                });
            }
        }

    }
}
