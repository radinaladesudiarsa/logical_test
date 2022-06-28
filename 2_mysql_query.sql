SELECT
	a.mhs_nama,
	MAX(c.nilai) nilai,
	b.mk_kode
FROM
	tb_mahasiswa a
	LEFT JOIN tb_mahasiswa_nilai c ON a.mhs_id = c.mhs_id
	LEFT JOIN tb_matakuliah b ON c.mk_id = b.mk_id 
	WHERE
		b.mk_kode = 'MK303' 