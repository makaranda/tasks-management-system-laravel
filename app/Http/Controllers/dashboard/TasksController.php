<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tasks;
use App\Models\Category;
use Session;
use Illuminate\Support\Facades\Validator;



class TasksController extends Controller
{
    protected $tasks;
    protected $categories;
    public function __construct(){

        $this->tasks = new Tasks();
        $this->categories = new Category();

    }
    public function index()
    {
        Session::forget('message');
        return view('pages.admin.tasks.index');
    }

    public function create()
    {
        $response['categories'] = Category::all();
        //Session::forget('message');
        return view('pages.admin.tasks.create')->with($response);
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
            'task_title' => 'required',
            'task_deadline' => 'required',
            'category' => 'required',
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
                    'title' => $request->task_title,
                    'category'=> $request->category,
                    'deadline'=> $request->task_deadline,
                    'description'=> $request->description,
                    'status'=> $request->task_status,
                ];

                Session::put('message','Task Create Successfully.');

       }
        //return $stuData;
        $this->tasks->create($pageData);
        //$this->pages->create($request->all());
        return redirect()->back();
    }

    public function edit(Request $request)
    {
        $page_id = $request->page_id;
        $response['tasks'] = Tasks::find($page_id);
        $response['categories'] = Category::all();
        //return response()->view('admin.pages.edit_page');
        return view('pages.admin.tasks.edit')->with($response);
        //echo $student;
    }

    public function update(Request $request, $page_id)
    {
        $tasks = Tasks::find($request->user_id);

        $validator = Validator::make($request->all(), [
            'task_title' => 'required',
            'task_deadline' => 'required',
            'category' => 'required',
            'description' => 'required',
         ]);
         //var_dump($request->all());
        if ($validator->fails()) {
            Session::forget('message');
            return redirect()->Back()->withInput()->withErrors($validator);

        }else{

                $pageData = [
                    'user_id' => $request->user_id,
                    'title' => $request->task_title,
                    'category'=> $request->category,
                    'deadline'=> $request->task_deadline,
                    'description'=> $request->description,
                    'status'=> (int)$request->status,
                ];
                Session::put('message','Tasks update Successfully.');
       }

       Tasks::where('id', $page_id)->update($pageData);
       //var_dump($pageData);
       //$tasks->update($pageData);
       //pages.admin.tasks.edit
       return redirect()->back();

    }

    public function delete($page_id){

        $tasks = $this->tasks->find($page_id);
        $tasks->delete();
        return redirect()->back();
    }

    public function fetchTaskAll()
    {
        $tasks = Tasks::all();
        $responses = '';
        //echo '<h4>No any Records in here</h4>';

        if ($tasks->count() > 0) {
            $responses .= '<table id="pageTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Deadline</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>';
            foreach ($tasks as $task) {
                if(!empty($task->status) && $task->status == 1){
                    $actvBtn = 'on';
                }else{
                    $actvBtn = 'off';
                }
                //user_id title category description deadline
                $responses .= '<tr>
                                  <td>'.$task->id.'</td>
                                  <td>'.$task->title.'</td>
                                  <td>'.$task->category.'</td>
                                  <td>'.$task->deadline.'</td>
                                  <td>
                                    <a href="" class="ajax-request pageactdisbtn" data-table="pages" data-field="active" data-line-id="active'.$task->id.'" data-id="'.$task->id.'" data-val="'.$task->status.'" data-value="'.$task->id.'"><i id="active'.$task->id.'" class="admin-single-icon fa fa-toggle-'.$actvBtn.'" aria-hidden="true"></i></a>
                                  </td>
                                  <td style="width:200px;">
                                  <a href="./tasks/'.$task->id.'/edit/" class="btn btn-sm btn-primary"><i class="far fa-edit"></i> Edit</a> |
                                  <a href="tasks/'.$task->id.'/delete/" class="btn btn-sm btn-danger"><i class="far fa-trash-alt"></i> Delete</a></td>
                               </tr>';
            }

            $responses .= '<tbody></table>';

            echo $responses;
        } else {
            echo '<h4>No any Records in here</h4>';
        }
    }

    public function taskActive(Request $request)
    {
        $page_id = $request->page_id;
        $page_val = $request->data_val;
        if(!empty($page_val) == 1){
            $pageVal = 0;
        }else{
            $pageVal = 1;
        }

        Tasks::where('id', $page_id)->update(array('status' => $pageVal));

    }

}
