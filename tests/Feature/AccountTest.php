<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Account;
use App\Contact;


class AccountTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testGetAccounts(): void
    {
        /**$contacts = factory(Contact::class)->create();
        /**$accounts = factory(Account::class)->create([
            'accountNum' => $contacts->clientRecords['num']
        ]);
         */

        $response = $this->json('GET', '/api/accounts');

        $response->assertStatus(200);
        $response->assertJsonStructure([
                    'id', 'name', 'color', 'accountNum'
                ]);
    }
}
