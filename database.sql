
desc attendance;
desc employee;

select *
from attendance;
select * from employee;


SELECT
    ROW_NUMBER() OVER (ORDER BY id) as numbers,
    tanggal,
    jam,
    status
FROM
    attendance;


insert into employee(nama_pegawai, nomor_pegawai, password, is_admin) values('admin', 'admin', 'admin123', true)
