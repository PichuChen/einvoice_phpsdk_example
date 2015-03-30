<?php namespace App\Http\Controllers;

use PichuChen\einvoice\EinvoiceClient;
use PichuChen\einvoice\CardType;
use PichuChen\einvoice\CodeType;

class EinvoiceController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

    var $client;

    /**
     * Create a new controller instance.
     *
     */
	public function __construct()
	{
        $this->client = EinvoiceClient::factory([
            'uuid' => '4cdba230-d30f-11e4-8830-0800200c9a66',
            'appID' => env('EINVOICE_APPID')

        ]);
//		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('home');
	}

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function test()
    {

        $endDate = new \DateTime('now');
        $startDate = $endDate->sub(\DateInterval::createFromDateString('40 days'));

        $input = [
            'cardType' => CardType::EASYCARD,
            'cardNo' => $_GET['cardNo'],
            'cardEncrypt' => $_GET['cardEncrypt']
        ];

        if(isset($_GET['startDate'])) $input['startDate'] = (new \DateTime($_GET['startDate']))->format("Y/m/d");
        if(isset($_GET['endDate'])) $input['endDate'] = (new \DateTime($_GET['endDate']))->format("Y/m/d");

//        if(isset($_GET['startDate'])) $input['startDate'] = $_GET['startDate'];
//        if(isset($_GET['endDate'])) $input['endDate'] = $_GET['endDate'];

        $result = $this->client->carrierInvoiceCheck($input);
        //var_dump($result->getDetails());
        $data = $result->getDetails();
        return json_encode([
            'success'=>true,
            'data'=>$data
        ]);


    }

    /**
     * Show the application dashboard to the user.
     *
     * @return Response
     */
    public function carrierInvoiceDetail()
    {

        $endDate = new \DateTime('now');
        $startDate = $endDate->sub(\DateInterval::createFromDateString('40 days'));

        $input = [
            'cardType' => CardType::EASYCARD,
            'cardNo' => $_GET['cardNo'],
            'cardEncrypt' => $_GET['cardEncrypt'],
            'invNum' => $_GET['invNum'],
            'invDate' => $_GET['invDate']
        ];


        $result = $this->client->carrierInvoiceDetail($input);
        //var_dump($result->getDetails());
        $data = $result;
//        var_dump($data);
        return json_encode([
            'success'=>true,
            'data'=>$data
        ]);


    }

    /**
     *
     */
    public function queryWinningList()
    {
        $input = [
            'invTerm' => isset($_GET['invTerm'])? $_GET['invTerm'] : '10102'
        ];
        $result = $this->client->queryWinningList($input);
        echo json_encode([
            'success' => true,
            'data' => $result
        ]);
    }

    public function queryInvoiceHeader()
    {
        if(!isset($_GET['invNum']) || !isset($_GET['invDate'])){
            echo json_encode(['success'=>false,'err'=>'no invNum or invDate']);
            die();
        }
        $result = $this->client->queryInvoiceHeader([
            'type' => CodeType::QRCODE,
            'invNum' => $_GET['invNum'],
            'invDate' => $_GET['invDate']
        ]);
        echo json_encode([
            'success' => true,
            'data' => $result
        ]);
    }



    public function queryInvoiceDetail()
    {
    if(!isset($_GET['invNum']) || !isset($_GET['invDate'])){
        echo json_encode(['success'=>false,'err'=>'no invNum or invDate']);
        die();
    }
    $result = $this->client->queryInvoiceDetail([
        'type' => CodeType::BARCODE,
        'invNum' => $_GET['invNum'],
        'invDate' => $_GET['invDate'],
        'invTerm' => $_GET['invTerm'],
        'randomNumber' => $_GET['randomNumber']
    ]);
    echo json_encode([
        'success' => true,
        'data' => $result
    ]);
}


}
