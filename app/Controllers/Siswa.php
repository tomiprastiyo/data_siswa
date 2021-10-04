<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class Siswa extends BaseController
{
    protected $Siswa;
 
    function __construct()
    {
        $this->Siswa = new SiswaModel();
    }  
 
    public function index()
    {
        $data['Siswa'] = $this->Siswa->findAll();
        return view('Siswa', $data);
    }

    public function create()
    {
        return view('siswa_input');
    }

    public function store()
    {
        if (!$this->validate([
            'NIS' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIS Harus diisi'
                ]
            ],
            'NAMA' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NAMA Harus diisi'
                ]
            ],
            'ALAMAT' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ALAMAT Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $this->Siswa->insert([
            'NIS' => $this->request->getVar('NIS'),
            'NAMA' => $this->request->getVar('NAMA'),
            'ALAMAT' => $this->request->getVar('ALAMAT'),
        ]);
        session()->setFlashdata('message', 'Tambah SISWA Berhasil');
        return redirect()->to('/siswa');
    }

    function edit($NIS)
    {
        $dataSiswa = $this->Siswa->find($NIS);
        if (empty($dataSiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Siswa Tidak ditemukan !');
        }
        $data['Siswa'] = $dataSiswa;
        return view('siswa_edit', $data);
    }

    public function update($NIS)
    {
        if (!$this->validate([
            'NIS' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NIS Harus diisi'
                ]
            ],
            'NAMA' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'NAMA Harus diisi'
                ]
            ],
            'ALAMAT' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'ALAMAT Harus diisi'
                ]
            ],

        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back();
        }

        $this->Siswa->update($NIS, [
            'NIS' => $this->request->getVar('NIS'),
            'NAMA' => $this->request->getVar('NAMA'),
            'ALAMAT' => $this->request->getVar('ALAMAT'),
        ]);
        session()->setFlashdata('message', 'Update Siswa Berhasil');
        return redirect()->to('/siswa');
    }

    function delete($NIS)
    {
        $dataSiswa = $this->Siswa->find($NIS);
        if (empty($dataSiswa)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Siswa Tidak ditemukan !');
        }
        $this->Siswa->delete($NIS);
        session()->setFlashdata('message', 'Delete Siswa Berhasil');
        return redirect()->to('/siswa');
    }
}
