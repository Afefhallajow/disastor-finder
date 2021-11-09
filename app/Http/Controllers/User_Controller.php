<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class User_Controller extends Controller
{
    public function __construct()
{
    $this->middleware('admin');
}
    public function get_admin()
    {
        $users=User::where('isadmin','0')->where('ispatent','0')->get();;


        return $users;
    }
    public function get_patient()
    {
        $users=User::where('ispatent','0')->get();

        return $users;
    }
public function set_admin1()
{ $users1=$this->get_admin();

return
     view('myviews.admin')->with('users',$users1);
}
public function set_admin(Request $request)
{
    $users1=$this->get_admin();
    foreach ($users1 as $user)

        $user->isadmin=$request->input($user->name);
        $user->save();

return redirect('/');
}
}
