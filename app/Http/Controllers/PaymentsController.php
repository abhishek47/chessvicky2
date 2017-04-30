<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Softon\Indipay\Facades\Indipay; 

use App\Payment;

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

        if($response->success){
        
        $coins = $response->payment_request->amount / 2;
        \Auth::user()->profile->coins += $coins;
        \Auth::user()->profile->save();
         
        $payment = $response->payment_request;

        \Auth::user()->payments()->create(['payment_id' => $payment->id, 'amount' => $payment->amount]);

        session()->flash('flash_title', 'Payment was Successfull!');
        session()->flash('flash_message', "<b>$coins</b> Coins were added to your profile!"); 
         
        return redirect('/home');
 
        } else {
           session()->flash('error_title', 'Payment failed!');
           session()->flash('error_message', "There was some problem with the payment!Please try again!"); 
         
           return redirect('/home');
        }
     }


}
