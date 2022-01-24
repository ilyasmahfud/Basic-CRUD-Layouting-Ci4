<?php

namespace App\Controllers;

use App\Models\ProjectModel;

class Home extends BaseController
{
    public $projects;
    public $db;

    public function __construct()
    {
        $this->projects = new ProjectModel();
        $this->db = \Config\Database::connect();
    }

    public function index()
    {
        $data = $this->projects->findAll();

        return view('index', compact('data'));
    }

    public function create()
    {
        return view('form');
    }

    public function add()
    {
        $data = [
            'projectName' => $this->request->getPost('projectName'),
            'client' => $this->request->getPost('client'),
            'projectLeaderName' => $this->request->getPost('projectLeaderName'),
            'projectLeaderEmail' => $this->request->getPost('projectLeaderEmail'),
            'startDate' => $this->request->getPost('startDate'),
            'endDate' => $this->request->getPost('endDate'),
            'progres' => (int) 0,
        ];

        $this->projects->save($data);

        session()->setFlashdata('AddSuccess', 'Berhasil Menambah Project Baru');

        return redirect()->to('/')->withInput();
    }

    public function edit($id)
    {
        $data = $this->projects->find($id);

        return View('edit', compact('data'));
    }

    public function update($id)
    {
        $data = [
            'projectName' => $this->request->getPost('projectName'),
            'client' => $this->request->getPost('client'),
            'projectLeaderName' => $this->request->getPost('projectLeaderName'),
            'projectLeaderEmail' => $this->request->getPost('projectLeaderEmail'),
            'startDate' => $this->request->getPost('startDate'),
            'endDate' => $this->request->getPost('endDate'),
            'progress' => $this->request->getPost('progress'),
        ];

        $this->projects->update($id, $data);

        session()->setFlashdata('UpdateSuccess', 'Berhasil Menupdate Project Baru');

        return redirect()->to('/')->withInput();
    }


    public function delete($id)
    {
        $this->projects->delete($id);

        // dd($project);

        session()->setFlashdata('DeleteSuccess', 'Berhasil Menghapus Project Baru');

        return redirect()->to('/')->withInput();
    }
}
