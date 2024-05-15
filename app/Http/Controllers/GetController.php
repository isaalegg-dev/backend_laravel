<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Account;
use App\Contact;
use App\Bill;


class GetController extends Controller
{
    public function contacts(){
      $contacts = client->request('GET', 'https://api.holded.com/api/invoicing/v1/contacts', [
          'headers' => [
            'accept' => 'application/json',
            'key' => apiKey,
          ],
        ]);
        
        return json_decode($contacts->getBody(), true);
          
    }
  
    public function accounts(){
      $accounts = client->get('https://api.holded.com/api/invoicing/v1/expensesaccounts', [
          'headers' => [
            'accept' => 'application/json',
            'key' => apiKey,
          ],
        ]);
        
        return json_decode($accounts->getBody(), true);
    }
  
    public function bills(){
      $bills = client->request('GET', 'https://api.holded.com/api/invoicing/v1/payments', [
          'headers' => [
            'accept' => 'application/json',
            'key' => ' fb26799641c8ce2038631e031bcd34d2',
          ],
        ]);
      
        return json_decode($bills->getBody(), true);
    }


}
