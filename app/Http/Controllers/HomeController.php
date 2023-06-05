<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        return view('home');
    }
    public function admin_dashboard_view()
    {
        return view('admin.admin_dashboard');
    }
    public function user_dashboard_view()
    {
        return view('users.user_dashboard');
    }
    public function index()
    {
        return view('index');
    }
    public function index1()
    {
        return view('index1');
    }
    public function index2()
    {
        return view('index2');
    }
    public function index3()
    {
        return view('index3');
    }
    public function dashboard_users()
    {
        $user=User::where('role',3)->get();
        return view('dashboard_users',['users'=>$user]);
    }

    public function save_users(Request $request)
        {
             $users= new User;
            $request->validate([
                'name' => 'required' ,
                'email' => 'required|email|unique:users,email',
               'password' =>'required|confirmed',
               //    'password' => bcrypt('password')
            ]);
            $users->name=$request['name'];
            $users->email=$request['email'];
            $users->password=Hash::make($request['password']);
            Session::flash('message' , 'You successfully created a user');
            return redirect(route('dashboard.users'));
        }

        public function user_add()
        {

            return view('user_add');
        }
        public function user_save(Request $r)
        {
            $users=new User;
            $users->name=$r['name'];
            $users->email=$r['email'];
            $users->password=Hash::make($r['password']);
            $users->save();
            return redirect(route('dashboard.users'));
        }

        public function user_edit($id)
        {
            $user=User::where('id',$id)->first();
            return view('user_edit',['users'=>$user]);
        }

        public function user_update($id,Request $r)
        {
            $users=User::where('id',$id)->first();
            $users->name=$r['name'];
            $users->email=$r['email'];
            $users->save();
         Session::flash('message' , 'You successfully Updated a user');
            return redirect(route('dashboard.users'));
        }
        public function user_delete($id)
        {
            $user=User::where('id',$id)->first();
            if(!is_null($user)){
                $user->delete();
            }else{
                return redirect(route('dashboard.users'));
            }
            return redirect(route('dashboard.users'));
        }

    }