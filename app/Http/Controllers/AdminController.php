<?php

namespace App\Http\Controllers;

use App\Services\Impl\AdminService;
use http\Env\Response;
use Illuminate\Database\Console\Migrations\ResetCommand;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class AdminController extends Controller
{

    private AdminService $adminService;

    /**
     * @param AdminService $adminService
     */
    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function addEmployee(Request $request)
    {
        $nomor_pegawai = $request->input('nomor_pegawai');
        $nama_pegawai = $request->input('nama_pegawai');
        $password = Str::random(6);

        $this->adminService->addEmployee($nomor_pegawai, $nama_pegawai, $password);

        return \redirect()->back()->with('alert', [
                    'title' => "Berhasil menambahkan: $nama_pegawai",
                    'text' => "Password: $password",
                    'icon' => "success",
        ]);
    }

}
