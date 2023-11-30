<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {

        // Cara 1 = query builder
        $builder = $this->db->table('gawe');
        $query = $builder->get()->getResult();
        return view('gawe/get', compact('query'));
    }

    public function create()
    {
        return view('/gawe/add');
    }

    public function store()
    {
        $data = $this->request->getPost();
        $this->db->table('gawe')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', 'data berhasil disimpan');
        }
    }
}
