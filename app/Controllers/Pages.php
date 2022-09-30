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
            return redirect()->to('/');
        }

        $data['main_view'] = 'pages/index';
        return view('layout',$data);
    }

    public function datakatagoribuku()
    {    
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/datakatagoribuku';
        return view('layout',$data);
    }

    public function datajenisbuku()
    {    
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/datajenisbuku';
        return view('layout',$data);
    }

    public function databuku()
    {  
        if(!$this->session->get('user_id')){
        return redirect()->to('/');
        }
        $data['main_view'] = 'pages/databuku';
        return view('layout',$data);
    }

    public function DataUser()
    {  
        if(!$this->session->get('user_id')){
        return redirect()->to('/');
        } 
        $data['main_view'] = 'pages/datauser';
        return view('layout',$data);
    }

    public function DataDistributor()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/datadistributor';
        return view('layout',$data);
    }

    public function DataPenerbit()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/datapenerbit';
        return view('layout',$data);
    }

    public function Pencarianbuku()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/Pencarianbuku';
        return view('layout',$data);
    }

    public function stokbuku()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/stokbuku';
        return view('layout',$data);
    }

    public function penerimaanbuku()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/penerimaanbuku';
        return view('layout',$data);
    }

    public function transaksiretur()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/transaksiretur';
        return view('layout',$data);
    }

    public function pembayaran()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/pembayaran';
        return view('layout',$data);
    }

    public function penjualan()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/penjualan';
        return view('layout',$data);
    }

    public function logout()
    {
        if(!$this->session->get('user_id')){
            return redirect()->to('/');
        }
        $data['main_view'] = 'pages/logout';
        return view('layout',$data);
    }

    

}    