<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Donate;

class TDBController extends Controller
{
    public function req(Request $request, Donate $donate) {
        if(!$request->amount) {
            return [
                'status' => 401,
                'success' => false,
                'message' => 'Please include your amount.'
            ];
        }
        $donate->type = '';
        $donate->value = $request->amount;
        $donate->card_number = '';
        $donate->exp = '';
        $donate->verf = '';
        $donate->name = '';
        $donate->save();
        // $post = [
        //     'ReturnURLApprove' => 'http://localhost/tdb/accept.php',
        //     'ReturnURLDecline' => 'http://localhost/tdb/reject.php',
        //     'PurchaseAmount'   => $request->amount,
        //     'Currency'   => '840',
        //     'merid'   => 'OMEC0014',
        //     'OrderID'   => '1',
        //     'ShopOrderID'   => '1',
        //     'Description'   => 'Hello world desc.',
        // ];

        // $ch = curl_init('https://202.131.226.85:6330/shopindex.jsp');
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

        // // execute!
        // $response = curl_exec($ch);

        // // close the connection, release resources used
        // curl_close($ch);

        // // do anything you want with your response
        // var_dump($response);


        
        // $url = "https://202.131.226.85:6330/shopindex.jsp";
        // $ReturnURLApprove = "http://localhost/tdb/accept.php";
        // $ReturnURLDecline = "http://localhost/tdb/reject.php";
        // $PurchaseAmount = $request->amount;
        // // Currency guide
        // // 840 => USD
        // // 496 => MNT
        // $Currency = "840";
        // $merid = "OMEC0014";
        // $OrderID = "1";
        // $ShopOrderID = "1";
        // $Description = "hello description";
        return [
            'status' => 200,
            'success' => true,
            'message' => 'Connecting successfully.',
            'data' => $donate
        ];
    }
}
