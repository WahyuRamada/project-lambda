<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Items extends BaseController
{
    protected $sessions;

    function __construct()
    {
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        $data['main_view'] = 'items/index';
        return view('layout', $data);
    }

    public function new()
    {
        $data['main_view'] = 'items/index';
        return view('layout', $data);
    }

    public function create()
    {
        if (!$this->validate([
            'name' => "required|alpha_numeric_space",
            'unit' => 'required|alpha_numeric_space',
            'price' => 'required|integer',
        ])) {
            $data['main_view'] = 'items/new';
            $data['errors'] = $this->validator;
            return view('Layout', $data);    
        }

        $data['main_view'] = 'items/new';
        $this->session->setFlashdata('success', 'Barang berhasil disimpan');
        return view('layout', $data);
    }
}