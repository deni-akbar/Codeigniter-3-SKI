-- menampilkan data berdasarkan jumlah pekerjaam
SELECT pekerjaan,count(id) as jumlah FROM `tbl_penduduk` group by pekerjaan;

-- menampilkan data berdasarkan jumlah kota
SELECT kota,count(id) as jumlah FROM `tbl_penduduk` group by kota;