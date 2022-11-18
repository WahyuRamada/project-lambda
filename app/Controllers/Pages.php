<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Pages extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \config\Services::session();
    }
    public function index()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/index';
        return view('layout',$data);
    }

    public function authors()
    {    
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/authors';
        return view('layout',$data);
    }

    public function datajenisbuku()
    {    
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/datajenisbuku';
        return view('layout',$data);
    }

    public function bookcatagories()
    {  
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/bookCatagories';
        return view('layout',$data);
    }

    public function books()
    {  
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        } 
        $data['main_view'] = 'pages/books';
        return view('layout',$data);
    }

    public function suppliers()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/suppliers';
        return view('layout',$data);
    }

    public function publishers()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/publishers';
        return view('layout',$data);
    }
    
    public function purchases()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/purchases';
        return view('layout',$data);
    }
    
    public function purchasesitems()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/Purchasesitems';
        return view('layout',$data);
    }

        
    public function sales()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/sales';
        return view('layout',$data);
    }

    public function saleItems()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/saleItems';
        return view('layout',$data);
    }

    public function user()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/user';
        return view('layout',$data);
    }



    public function logout()
    {
        if(!$this->session->get('user_id')){
            $this ->session->setFlashdata('danger', 'anda harus login terlebih dahulu');
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/logout';
        return view('layout',$data);
    }

    

}    