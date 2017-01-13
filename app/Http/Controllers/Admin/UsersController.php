<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;

class UsersController extends Controller
{
    /**
     * UsersController constructor.
     */
    public function __construct()
    {
        $this->middleware(['auth','admin']);
    }

    /**
     * @return mixed
     */
    public function index()
    {
       return view('admin.users.index');
    }
    public function show()
    {
        $users = User::select(['id','role','name','first_name','last_name','email','created_at'])->get();
        return Response::json($users,200,[],JSON_NUMERIC_CHECK);
    }
}
