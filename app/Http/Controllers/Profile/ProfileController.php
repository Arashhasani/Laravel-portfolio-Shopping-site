<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Shetabit\Multipay\Invoice;
use Shetabit\Payment\Facade\Payment as shetabitpayment;


class ProfileController extends Controller
{

    public function index()
    {

        $orders=auth()->user()->orders()->paginate(10);
        return view('profile.index',compact('orders'));

    }

    public function edit()
    {
        $user=auth()->user();
        return view('profile.user.edit',compact('user'));

    }

    public function update(Request $request)
    {
        $validata=$request->validate([
            'name'=>'required',
            'email'=>['required',Rule::unique('users')->ignore(auth()->user()->id)],
            'password'=>'required',
        ]);
        $validata['password']=Hash::make($validata['password']);

        auth()->user()->update($validata);
        return redirect(route('profile'));

    }

    public function order(Order $order)
    {
       if (Gate::denies('view',$order)){
           abort(403);
       }


        return view('profile.orders.detail',compact('order'));
    }


    public function payment(Order $order)
    {
        if (Gate::denies('view',$order)){
            abort(403);
        }


// Create new invoice.
        $invoice = (new Invoice)->amount(1000);
// Purchase and pay the given invoice.
// You should use return statement to redirect user to the bank page.
        return shetabitpayment::callbackUrl(route('callback.payment'))->purchase($invoice, function ($driver, $transactionId) use ($order, $invoice) {


            $order->payments()->create([
                'resnumber' => $invoice->getUuid(),
            ]);


        })->pay()->render();


    }




    //
}
