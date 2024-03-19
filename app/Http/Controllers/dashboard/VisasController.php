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


        if($request->file('image')){
            $file = $request->file('image');
            $fileName = time().'.'.$file->getClientOriginalExtension();
            $file->move('public/images', $fileName);
        }else{
            $fileName = "";
        }

        $validator = Validator::make($request->all(), [
            'visa_title' => 'required',
            'visa_deadline' => 'required',
            'VisasTypes' => 'required',
            'description' => 'required',
         ]);
         //var_dump($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->Back()->withInput()->withErrors($validator);

        }else{

                $pageActive = 0;

                $pageData = [
                    'user_id' => $request->user_id,
                    'title' => $request->visa_title,
                    'VisasTypes'=> $request->VisasTypes,
                    'deadline'=> $request->visa_deadline,
                    'description'=> $request->description,
                    'status'=> $request->visa_status,
                ];

                Session::put('message','visa Create Successfully.');

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
            'visa_title' => 'required',
            'visa_deadline' => 'required',
            'VisasTypes' => 'required',
            'description' => 'required',
         ]);
         //var_dump($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->Back()->withInput()->withErrors($validator);

        }else{

                $pageData = [
                    'user_id' => $request->user_id,
                    'title' => $request->visa_title,
                    'VisasTypes'=> $request->VisasTypes,
                    'deadline'=> $request->visa_deadline,
                    'description'=> $request->description,
                    'status'=> (int)$request->status,
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
                                    <th>VisasTypes</th>
                                    <th>Deadline</th>
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
                                  <td>'.$visa->VisasTypes.'</td>
                                  <td>'.$visa->deadline.'</td>
                                  <td>
                                    <a href="" class="ajax-request pageactdisbtn" data-table="pages" data-field="active" data-line-id="active'.$visa->id.'" data-id="'.$visa->id.'" data-val="'.$visa->status.'" data-value="'.$visa->id.'"><i id="active'.$visa->id.'" class="admin-single-icon fa fa-toggle-'.$actvBtn.'" aria-hidden="true"></i></a>
                                  </td>
                                  <td style="width:200px;">
                                  <a href="./visas/'.$visa->id.'/edit/" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a> |
                                  <a href="visas/'.$visa->id.'/delete/" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a></td>
                               </tr>';
            }

            $responses .= '<tbody></table>';

            echo $responses;
        } else {
            echo '<h4>No any Records in here</h4>';
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
