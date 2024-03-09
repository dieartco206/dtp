<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\PendidikanModel;
use App\Models\PengalamanModel;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    protected $PendidikanModel, $PengalamanModel, $UserModel;
    use AuthorizesRequests, ValidatesRequests;

    public function __construct()
    {
        $this->PendidikanModel = new PendidikanModel;
        $this->PengalamanModel = new PengalamanModel;
        $this->UserModel = new UserModel;
    }

    public function index()
    {
        $data = [
            'script' => 'index.js'
        ];

        return view('dtp', $data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:255',
            'alamat' => 'nullable|max:255',
            'ktp' => 'required|numeric|max_digits:16',
            'nama_sekolah.*' => 'required|max:255',
            'jurusan.*' => 'required|max:255',
            'tahun_masuk.*' => 'required|numeric|max_digits:4',
            'tahun_lulus.*' => 'required|numeric|max_digits:4',
            'perusahaan.*' => 'required',
            'jabatan.*' => 'required',
            'tahun.*' => 'required|numeric|max_digits:4',
            'keterangan.*' => 'nullable|max:255',
            'image' => 'required|image|extensions:jpg,png,jpeg|max:2048',
        ]);

        if ($validator->fails()) {
            // Validatin Errors
            $errors = $validator->errors();
            foreach ($errors->all() as $message) {
                Alert::error('Error', $message);
            }

            return redirect("");
        } else {
            // Validator Success
            $validate = $request->validate([
                'nama_sekolah.*' => 'required|string|max:255',
                'jurusan.*' => 'required|string|max:255',
                'tahun_masuk.*' => 'required|numeric|max_digits:4',
                'tahun_lulus.*' => 'required|numeric|max_digits:4',
                'perusahaan.*' => 'required',
                'jabatan.*' => 'required',
                'tahun.*' => 'required|numeric|max_digits:4',
                'keterangan.*' => 'nullable|max:255',
            ]);
        }

        $imageName = Str::random(30) .  $request->image->getClientOriginalExtension();
        $imagePath = $request->image->move(public_path('/image'), $imageName);

        $data  = [
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'ktp' => $request->ktp,
            'foto' => $imageName,
        ];

        $createUser = $this->UserModel->createData($data);

        $pendidikan = [];
        $pengalaman = [];

        foreach ($validate['nama_sekolah'] as $index => $nama_sekolah) {
            $pendidikan[] = [
                'user_id' => $createUser['id'],
                'nama' => $nama_sekolah,
                'jurusan' => $validate['jurusan'][$index],
                'tahun_masuk' => $validate['tahun_masuk'][$index],
                'tahun_lulus' => $validate['tahun_lulus'][$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];

            $pengalaman[] = [
                'user_id' => $createUser['id'],
                'perusahaan' => $validate['perusahaan'][$index],
                'jabatan' => $validate['jabatan'][$index],
                'tahun' => $validate['tahun'][$index],
                'keterangan' => $validate['keterangan'][$index],
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        $createPendidikan = $this->PendidikanModel->insertData($pendidikan);
        $createPengalaman = $this->PengalamanModel->insertData($pengalaman);

        Alert::success('Berhasil', 'Data berhasil disimpan');
        return redirect('/');
    }
}
