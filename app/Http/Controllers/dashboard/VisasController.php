<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Visas;
use App\Models\VisasTypes;
use Session;
use Illuminate\Support\Facades\Validator;

class VisasController extends Controller
{
    protected $visas;
    protected $visas_types;
    public function __construct(){

        $this->visas = new Visas();
        $this->visas_types = new VisasTypes();

    }
    public function index()
    {
        Session::forget('message');
        return view('pages.admin.visas.index');
    }

    public function create()
    {
        $response['visas_types'] = VisasTypes::all();
        //Session::forget('message');
        return view('pages.admin.visas.create')->with($response);
    }

    public function save(Request $request){

        //status title type valid_days visa_type visa_price procesing_time visa_validity stay_period extension

        if($request->file('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('public/images', $fileName);
        }else{
            $fileName = "";
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'valid_days' => 'required',
            'days_type' => 'required',
            'type' => 'required',
            'visa_type' => 'required',
            'visa_price' => 'required',
            'procesing_time' => 'required',
            'visa_validity' => 'required',
            'stay_period' => 'required',
         ]);
         //var_dump($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->Back()->withInput()->withErrors($validator);

        }else{

                $pageActive = 0;
                $visa_url = '';

                $pageData = [
                    'title' => $request->title,
                    'valid_days' => $request->valid_days,
                    'days_type'=> $request->days_type,
                    'visa_price' => $request->visa_price,
                    'type' => $request->type,
                    'visa_type' => $request->visa_type,
                    'procesing_time' => $request->procesing_time,
                    'visa_validity' => $request->visa_validity,
                    'stay_period' => $request->stay_period,
                    'extension' => $request->extension,
                    'url' => $visa_url,
                    'status' => $request->status,
                ];

                Session::put('message','visa Package Create Successfully.');

       }
        //return $stuData;
        $this->visas->create($pageData);
        //$this->pages->create($request->all());
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $page_id = $request->page_id;
        $response['visas'] = Visas::find($page_id);
        $response['visas_types'] = VisasTypes::all();
        //return response()->view('admin.pages.edit_page');
        return view('pages.admin.visas.edit')->with($response);
        //echo $student;
    }
   
    public function update(Request $request, $page_id)
    {
        $visas = Visas::find($request->user_id);

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'valid_days' => 'required',
            'days_type' => 'required',
            'type' => 'required',
            'visa_type' => 'required',
            'visa_price' => 'required',
            'procesing_time' => 'required',
            'visa_validity' => 'required',
            'stay_period' => 'required',
            'status'=> 'required',
         ]);
         //var_dump($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->Back()->withInput()->withErrors($validator);

        }else{
                $visa_url = '';

                $pageData = [
                    'title' => $request->title,
                    'valid_days' => $request->valid_days,
                    'days_type'=> $request->days_type,
                    'visa_price' => $request->visa_price,
                    'type' => $request->type,
                    'visa_type' => $request->visa_type,
                    'procesing_time' => $request->procesing_time,
                    'visa_validity' => $request->visa_validity,
                    'stay_period' => $request->stay_period,
                    'extension' => $request->extension,
                    'url' => $visa_url,
                    'status' => (int)$request->status,
                ];
                Session::put('message','visas update Successfully.');
       }

       Visas::where('id', $page_id)->update($pageData);
       //var_dump($pageData);
       //$visas->update($pageData);
       //pages.admin.visas.edit
       return redirect()->back();

    }

    public function delete($page_id){

        $visas = $this->visas->find($page_id);
        $visas->delete();
        return redirect()->back();
    }

    public function fetchvisaAll()
    {
        $visas = Visas::all();
        $responses = '';
        //echo '<h4>No any Records in here</h4>';

        if ($visas->count() > 0) {
            $responses .= '<table id="pageTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Types</th>
                                    <th>Valid Day/Hours</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';
            foreach ($visas as $visa) {
                if(!empty($visa->status) && $visa->status == 1){
                    $actvBtn = 'on';
                }else{
                    $actvBtn = 'off';
                }
                //user_id title VisasTypes description deadline
                $responses .= '<tr>
                                  <td>'.$visa->id.'</td>  
                                  <td>'.$visa->title.'</td>
                                  <td>'.ucfirst($visa->type).' Term Visa</td>
                                  <td>'.$visa->valid_days.'</td>
                                  <td>'.$visa->visa_price.'</td>
                                  <td>
                                    <a href="" class="ajax-request visaactdisbtn" data-table="pages" data-field="active" data-line-id="active'.$visa->id.'" data-id="'.$visa->id.'" data-val="'.$visa->status.'" data-value="'.$visa->id.'"><i id="active'.$visa->id.'" class="admin-single-icon fa fa-toggle-'.$actvBtn.'" aria-hidden="true"></i></a>
                                  </td>
                                  <td style="width:200px;">
                                  <a href="./visas/'.$visa->id.'/edit/" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a> |
                                  <a href="visas/'.$visa->id.'/delete/" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a></td>
                               </tr>';
            }

            $responses .= '<tbody></table>';

            echo $responses;
        } else {
            echo '<h4 class="text-center">No any Records in here</h4>';
        }
    }

    public function visaActive(Request $request)
    {
        $page_id = $request->page_id;
        $page_val = $request->data_val;
        if(!empty($page_val) == 1){
            $pageVal = 0;
        }else{
            $pageVal = 1;
        }

        Visas::where('id', $page_id)->update(array('status' => $pageVal));

    }
}
