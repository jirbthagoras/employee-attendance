<?php

namespace App\Data;

class Employee
{

    private int $id;
    private string $nama_pegawai;
    private string $nomor_pegawai;
    private string $password;
    private bool $is_admin;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getNamaPegawai(): string
    {
        return $this->nama_pegawai;
    }

    public function setNamaPegawai(string $nama_pegawai): void
    {
        $this->nama_pegawai = $nama_pegawai;
    }

    public function getNomorPegawai(): string
    {
        return $this->nomor_pegawai;
    }

    public function setNomorPegawai(string $nomor_pegawai): void
    {
        $this->nomor_pegawai = $nomor_pegawai;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function isIsAdmin(): bool
    {
        return $this->is_admin;
    }

    public function setIsAdmin(bool $is_admin): void
    {
        $this->is_admin = $is_admin;
    }

}
