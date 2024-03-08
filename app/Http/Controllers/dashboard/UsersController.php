<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Users;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    protected $users;

    public function __construct(){

        $this->users = new Users();

    }
    public function index()
    {
        return view('pages.admin.users.index');
    }


}
