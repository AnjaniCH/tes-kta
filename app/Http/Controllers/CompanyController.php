<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator as Paginator;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

class CompanyController extends Controller
{
    /**
     * Clients Event Logger
     *
     * @var \Monolog\Logger
     */
    protected $clientLog;

    /**
     * Constructor of ClientsController
     * Initialize Logger
     *
     * @return void
     */
    public function __construct(){
        $this->clientLog = new Logger('client');
        $this->clientLog->pushHandler(new StreamHandler(storage_path('logs/client.log')), Logger::INFO);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = 10;

        // Pagination
        $page = $request->input('page') ? $request->input('page') : 1;
        $count = Company::getTotal($page);
        $getBatch = Company::getBatch($page);

        $paginator = new Paginator([], $count, $limit, $page, [
            'path'  => $request->url(),
            'query' => $request->query(),
        ]);

        // Selecting records according to page number
        $offset = ($page-1)*$limit; // get records start from
        $total_data = is_array($count) ? $count[0]['total_data_all'] : 0;
        $total_page = is_array($count) ? $count[0]['total_page'] : 0;
        $message = "success";
        $alert = "success";
        $companies = Company::getRecords($offset, $limit);
        

        if(!isset($_GET['action'])){
            $CMGUnmaskedName = isset($_GET['CMGUnmaskedName']) ;
            $ClientTier = isset($_GET['ClientTier']) ;
            $CMGSegmentName = isset($_GET['CMGSegmentName']);
        }

        return view('company.list', ['company' => $companies, 'paginator' => $paginator, 'total_data' => $total_data, 'getBatch' => $getBatch, 'total_page' => $total_page, 'message' => $message, 'alert' => $alert, 'offset' => $offset, 'CMGUnmaskedName' => $CMGUnmaskedName, 'ClientTier' => $ClientTier, 'CMGSegmentName' => $CMGSegmentName]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $company = Company::getOne($id);

        if(!$company) {
            throw new \Exception('Client record not found.');
        }

        return view('company.show', ['company' => $company]);
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

    public function simpan(){
        $input = fopen('E:\xampp\htdocs\anjani-tes-kano\storage\app\companies.csv', 'r');  //open for reading
        $output = fopen('E:\xampp\htdocs\anjani-tes-kano\storage\app\temporary.csv', 'w'); //open for writing
        if (isset($_POST['submit'])) {
            while( false !== ( $data = fgetcsv($input) ) ){  //read each line as an array
                if ($data[0] == $_POST['CMGUnmaskedID']) {
                    $data[10]=$_POST['REVENUE_FY14'];
                    $data[11]=$_POST['REVENUE_FY15'];
                    $data[14]=$_POST['TotalLimits_EOP_FY14'];
                    $data[15]=$_POST['TotalLimits_EOP_FY15'];
                    $data[17]=$_POST['RWAFY15'];
                    $data[18]=$_POST['RWAFY14'];
                    $data[23]=$_POST['Company_Avg_Activity_FY14'];
                    $data[24]=$_POST['Company_Avg_Activity_FY15'];
                    $data[25]=$_POST['ROE_FY14'];
                    $data[26]=$_POST['ROE_FY15'];

                    echo '<div class="alert alert-success">CSV Update Success! </div>';
                    header("Refresh: 2; URL=http://localhost:8000/company");
                }
                //write modified data to new file
   	            fputcsv( $output, $data);
	        }
        }
        //close both files
        fclose( $input );
        fclose( $output );

        rename('E:\xampp\htdocs\anjani-tes-kano\storage\app\temporary.csv', 'E:\xampp\htdocs\anjani-tes-kano\storage\app\companies.csv'); //Rename temporary to new
    }

}
