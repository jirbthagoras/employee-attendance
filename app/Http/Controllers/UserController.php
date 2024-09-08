<?php

namespace App\Http\Controllers;

use App\Services\Impl\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private UserService $userService;

    /**
     * @param UserService $userService
     */
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function attend(Request $request)
    {

        $nomor_pegawai = $request->input('nomor_pegawai');
        $password = $request->input('password');

        $result = $this->userService->attend($nomor_pegawai, $password);

        switch ($result){
            case 'Success':
                return redirect()->route('home')->with('alert', [
                    'title' => "Success",
                    'text' => "Absensi Sukses",
                    'icon' => "success",
                ]);
            case 'Password Incorrect':
                return \redirect()->back()->with('alert', [
                    'title' => "Gagal",
                    'text' => "Password Salah, tidak bisa melanjutkan absen",
                    'icon' => "error",
                ]);
            case 'Not Found':
                return \redirect()->back()->with('alert', [
                    'title' => "Gagal",
                    'text' => "Akun tidak ditemukan, tidak bisa melanjutkan absen",
                    'icon' => "warning",
                ]);
        }

    }

    public function logout()
    {
        session()->flush();

        return redirect()->route('attend');
    }

}
