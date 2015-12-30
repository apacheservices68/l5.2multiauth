<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Lib\My_hash;
use App\Http\Controllers\HomeController;

class RegisterController extends HomeController
{
    public $data;
    //
    /**
     * Create a new registration instance.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the register page.
     *
     * @return \Response
     */
    /*public function showRegisterForm()
    {
        $this->data['body'] = 'auth.register';
        return $this->output();
    }

    public function register(Request $data)
    {
    	$this->validate($data, [            
            'name' => 'required|max:255',            
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
        $title= "Verify account from BBC";
        $code = str_random(60);
        $activation = array(
            "title" => $title,
            "url" => url("register/verify/".$code),
        );
        Mail::send('auth.emails.verify', $activation, function($message) use($data , $title) {
            $message->to($data['email'],$data['name'])->subject($title);
        });

        $user = new User();
        $array = [            
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'active' => 0,
            'confirmation_code' => $code,
            'option' => NULL,
            'salt' => My_hash::key(16),
        ];
        foreach($array as $key => $val){
            $user->{$key} = $val;
        }
        $user->save();
        flash()->info('Please verify account by email you use .');
        return redirect()->back();
    }*/
}
