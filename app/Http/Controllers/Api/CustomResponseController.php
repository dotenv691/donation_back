<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomResponseController extends Controller
{
    public function index() {
        return redirect()->to('http://localhost:3000/donate-now?status=error');
    }
    public function get(Request $request) {
        echo 'reqs';
        $xmlmsg = $_POST["xmlmsg"];
echo $xmlmsg;   
        // $xml_data = $request->xmlmsg;
        // $xmlmsg = str_replace("\\\"","\"",$xml_data);
        // $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
        // $json = json_encode($xml);
        // $array = json_decode($json,TRUE);
        // var_dump($array);

        // $xmlmsg = $_POST["xmlmsg"];
    // $xmlmsg = str_replace("\\\"","\"",$xmlmsg);
    // $xml = simplexml_load_string($xmlmsg, "SimpleXMLElement", LIBXML_NOCDATA);
    // $json = json_encode($xml);
    // $array = json_decode($json,TRUE);
    // echo 'Version: '.$array['Version']."<br>";
    // echo 'OrderID: '.$array['OrderID']."<br>";
    // echo 'TransactionType: '.$array['TransactionType']."<br>";
    // echo 'PAN: '.$array['PAN']."<br>";
    // echo 'PurchaseAmount: '.$array['PurchaseAmount']."<br>";
    // echo 'Currency: '.$array['Currency']."<br>";
    // echo 'TranDateTime: '.$array['TranDateTime']."<br>";
    // echo 'ResponseCode: '.$array['ResponseCode']."<br>";
    // echo 'OrderStatus: '.$array['OrderStatus']."<br>";
    // // echo 'ApprovalCode: '.$array['ApprovalCode']."<br>";
    // echo 'MerchantTranID: '.$array['MerchantTranID']."<br>";
    // echo 'OrderDescription: '.$array['OrderDescription']."<br>";
    // echo 'ApprovalCodeScr: '.$array['ApprovalCodeScr']."<br>";
    // echo 'PurchaseAmountScr: '.$array['PurchaseAmountScr']."<br>";
    // echo 'CurrencyScr: '.$array['CurrencyScr']."<br>";
    // echo 'OrderStatusScr: '.$array['OrderStatusScr']."<br>";
    // // echo 'ThreeDSVerificaion: '.$array['ThreeDSVerificaion']."<br>";
    // echo 'ShopOrderId: '.$array['ShopOrderId']."<br>";
        // return redirect()->to('http://localhost:3000/donate-now?status=error');
    }
}
