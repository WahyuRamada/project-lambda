<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(){
            
                $data['main_view'] = 'login/index';
                return view('layout',$data);
            
        
                $data['main_view'] = 'login/dashboard';
                return view('layout',$data);
            }
}
