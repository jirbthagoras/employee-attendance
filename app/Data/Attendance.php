<?php

namespace App\Data;

class Attendance
{

    private int $id;
    private int $employee_id;
    private string $tanggal;
    private string $jam;
    private string $status;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getEmployeeId(): int
    {
        return $this->employee_id;
    }

    public function setEmployeeId(int $employee_id): void
    {
        $this->employee_id = $employee_id;
    }

    public function getTanggal(): string
    {
        return $this->tanggal;
    }

    public function setTanggal(string $tanggal): void
    {
        $this->tanggal = $tanggal;
    }

    public function getJam(): string
    {
        return $this->jam;
    }

    public function setJam(string $jam): void
    {
        $this->jam = $jam;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }
}
