<?php

namespace App\Http\Controllers;

use App\Helpers\Cart;
use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mockery\Exception;
use Shetabit\Multipay\Exceptions\InvalidPaymentException;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment as shetabitpayment;

class PaymentController extends Controller
{
    public function payment()
    {
        $cart = Cart::all();
        if (count($cart) > 0) {


            $cartt = array();
            foreach ($cart as $ca) {
                array_push($cartt, $ca['product']->id);
            }


            $price = Cart::all()->sum(function ($cart) {
                return $cart['product']->price;
            });


            $order = auth()->user()->orders()->create([
                'status' => 'unpaid',
                'price' => $price,
            ]);


            $order->products()->sync($cartt);


// Create new invoice.
            $invoice = (new Invoice)->amount(1000);
// Purchase and pay the given invoice.
// You should use return statement to redirect user to the bank page.
            return shetabitpayment::callbackUrl(route('callback.payment'))->purchase($invoice, function ($driver, $transactionId) use ($order, $cart, $invoice) {


                $order->payments()->create([
                    'resnumber' => $invoice->getUuid(),
                ]);
                Cart::flush();


            })->pay()->render();


//            dd($paymentt->getPayUrl());


        }else{
            alert()->error('سبد خرید خالی است ...','خطا ...')->persistent('Ok ...');
            return back();

        }

    }

    public function callback(Request $request)
    {


        //$payment->order->price
        try {

            $payment = payment::where('resnumber', $request['clientrefid'])->firstOrFail();

            $receipt = shetabitpayment::amount(1000)->transactionId($request['clientrefid'])->verify();

            // You can show payment referenceId to the user.


            echo $receipt->getReferenceId();

            $payment->update([
                'status' => 1,
            ]);
            $payment->order()->update([
                'status' => 'paid',
            ]);
            alert()->success('پرداخت انجام شده است ...','success ...')->persistent('Ok ...');

            return redirect(route('index'));


        } catch (InvalidPaymentException $exception) {
            /**
             * when payment is not verified, it will throw an exception.
             * We can catch the exception to handle invalid payments.
             * getMessage method, returns a suitable message that can be used in user interface.
             **/
            $errors = collect(json_decode($exception->getMessage(), true));
            alert()->error($exception->getMessage(),'خطا ...')->persistent('Ok ...');
            return redirect(route('index'));


        }


    }
    //
}
