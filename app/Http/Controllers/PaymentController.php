<?php
/*//^FARE COMANDO composer require braintree/braintree_php poi composer update e composer install   */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
//^FONDAMENTALE
use Braintree;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $gateway = new Braintree\Gateway([
            //^Li prendono dal file .env
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);
        //^TOKEN
        $token = $gateway->ClientToken()->generate();

        return view('payment.index', compact('token'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        /* dd($request); */
        $gateway = new Braintree\Gateway([
            //^Li prendono dal file .env
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey'),
        ]);

        $amount = $request->amount;
        //^MI SALVO IL NONCE
        //!MA FORSE IN CASO DI TRANSAZIONE NEGATA NE DEVO GENERARE UN ALTRO
        $nonce = $request->payment_method_nonce;
        //^E' POSSIBILE AGGIUNGERE ULTERIORI INFORMAZIONI CHE IL RICEVENTE VEDRA' NELLA PAYMENT INFORMATION
        //^SI TROVANO NELLA DOCUMENTAZIONE CERCANDO SALE
        $result = $gateway->transaction()->sale([
            'amount' => $amount,
            'paymentMethodNonce' => $nonce,
            /* 'expirationDate' => $nonce, */
            //^AGGIUNTE INFORMAZIONI AGGIUNTIVE CLIENTE
            'customer' => [
                'firstName' => $request->name_on_card,
                'email' => $request->email,
            ],
            'options' => [
                'submitForSettlement' => true
            ]
        ]);

        if ($result->success) {
            $transaction = $result->transaction;
            /*  NON VA SCRITTO COSI MA COME SOTTO header("Location: " . $baseUrl . "transaction.php?id=" . $transaction->id); */
            //^IN CASO DI TRANSAZIONE ANDATA A BUON FINE MOSTRO ANCHE L'ID
            /*             $transaction_id = $transaction->id;
 */
            return redirect()->route('checkout.create');
            /* $order = new Order();
            return view('guest.checkout.create', compact('order')); */
        } else {
            $errorString = "";

            foreach ($result->errors->deepAll() as $error) {
                $errorString .= 'Error: ' . $error->code . ": " . $error->message . "\n";
            }
            /* 
            $_SESSION["errors"] = $errorString;
            header("Location: " . $baseUrl . "index.php"); */
            //^IN CASO DI TRANSAZIONE ANDATA MALE
            return back()->withErrors("An error occurred with the message: $result->message, nonce is $nonce");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
