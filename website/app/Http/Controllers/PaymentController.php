<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use App\Models\Immobile;
use App\Models\Getnet;
use App\Models\Schedule;
class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {   
       
        $date = (str_replace('/','-',$request->query('date-range')));
        $immobile = Immobile::find($request->query('immobile'));
        $check_in = date('d-m-Y',strtotime(substr($date,0,10)));
        $check_out = date('d-m-Y',strtotime(substr($date,13,20)));
        $amount = ((strtotime($check_out)-strtotime($check_in))/86400)*$immobile->value;
        $seller_id = date('dmYHis'.auth()->user()->id);

      
        return view('Payment/reserve',['immobile'=>$immobile,'check_in'=>$check_in,'check_out'=>$check_out,'amount'=>$amount, 'seller_id'=>$seller_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        // $ipAddress = $request->ip();
        // $payment = new Payment();;
        // $payment->method= "Credito";
        // $payment->status=   "Pago";
        // $payment->order_id= "1";
        // $payment->ip= $ipAddress;
        // $payment->payment_id = "1";
        // $payment->seller_id = $request->session;
        // $payment->amount = $request->amount*100;
        // $payment->transaction_id = "1";
        // $payment->json = "1";
        // $payment->session = $request->session;
        // $payment->customer_id = auth()->user()->id;
        // $payment->save();
            $payment = Payment::find(1);
            $schedule = new Schedule();
            
        dd($payment);
          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
