<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class SearchShoesCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    public function searchShoes(AcceptanceTester $I)
    {
        $I->amOnUrl('https://www.google.com');

        if ($I->seeElement('#L2AGLb')) {
            $I->click('#L2AGLb');
        }

        $I->fillField('input[name="q"]', 'shoes');
        $I->pressKey('input[name="q"]', \Facebook\WebDriver\WebDriverKeys::ENTER);

        $I->waitForElementVisible('#search');

        $I->see('shoes', '#search');
    }
}

