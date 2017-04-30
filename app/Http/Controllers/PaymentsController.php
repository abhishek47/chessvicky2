<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Softon\Indipay\Facades\Indipay; 

class PaymentsController extends Controller
{ 

	 public function makePayment(Request $request)
	 { 
	 	$coins = $request->get('coins');
	 	$amount = $coins * 2;

      $parameters = [
      
        'tid' => '1233221223322',
        
        'order_id' => '1232212',
        
        'amount' => $amount,

        'purpose' => 'Buy ' . $coins . ' Coins',

        'buyer_name' => \Auth::user()->name,

        'email' => \Auth::user()->email,

        'phone' => '9922367414',


        
      ];
      
      // gateway = CCAvenue / PayUMoney / EBS / Citrus / InstaMojo
      
      $order = Indipay::prepare($parameters);
      return Indipay::process($order);
	 }
     
     public function response(Request $request)
     {
     	 // For default Gateway
        $response = Indipay::response($request);
        
        
        dd($response);
     }


}
