<?php
namespace App\Models;
use CodeIgniter\Model;
class M_model extends model
{
	public function tampil ($table)
	{
		return $this->db->table($table)->get()->getResult();
	}
	// //public function filter3 ($table,$awal,$akhir)
	// {
	// 	return $this->db->query(
	// 		"SELECT *
	// 		FROM ".$table."
	// 		join nasabah
	// 		on ".$table.".id_nasabah=nasabah.id_nasabah
	// 		WHERE ".$table.".tanggal
	// 		BETWEEN '".$awal."'
	// 		and '".$akhir."'"

	// 	)->getResult();
	// }
	public function tes ($table)
	{
		return $this->db->query("
			SELECT *
			FROM ".$table."
			ORDER BY kode_transaksi DESC
		    ")->getRow();
	}
	public function filter ($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getResult();
	}
	public function filter_b ($table,$awal,$akhir)
	{
		return $this->db->query("
			SELECT *
			FROM ".$table."
			join karyawan
			on ".$table.".id_user=karyawan.id_user
			WHERE ".$table.".tanggal
			BETWEEN '".$awal."'
			and '".$akhir."'"

		    )->getResult();
	}
	public function filter_f ($table,$awal,$akhir)
	{
		return $this->db->query("
			SELECT *
			FROM ".$table."
			join karyawan
			on ".$table.".id_user=karyawan.id_user
			join barang
			on ".$table.".id_brg=barang.id_brg
			WHERE ".$table.".tanggal
			BETWEEN '".$awal."'
			and '".$akhir."'"

		    )->getResult();
	}
	public function hapus($table, $where)
	{
		return $this->db->table($table)->delete($where);
	}
	public function simpan($table, $data)
	{
		return $this->db->table($table)->insert($data);
	}
	public function getWhere($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getResult();
	}
	public function getRow($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getRow();
	}
	public function getarray($table, $where)
	{
		return $this->db->table($table)->getWhere($where)->getRowArray();
	}
	public function edit($table, $data, $where)
	{
		return $this->db->table($table)->update($data, $where);
	}
	public function fusion($table1, $table2, $on)
	{
		return $this->db->table($table1)->join($table2, $on)->get()->getResult();
	}
	public function fusion_Row($table1, $table2, $on,$where)
	{
		return $this->db->table($table1)->join($table2, $on)->getWhere($where)->getRow();
	}
	public function fusionleft($table1, $table2, $on)
	{
		return $this->db->table($table1)->join($table2, $on, 'left')->get()->getResult();
	}
	public function super($table1, $table2, $table3, $on, $on2)
	{
		return $this->db->table($table1)->join($table2, $on)->join($table3, $on2)->get()->getResult();
	}
	public function ultra($table1, $table2, $table3, $table4, $on, $on2, $on3)
	{
		return $this->db->table($table1)->join($table2, $on)->join($table3, $on2)->join($table4, $on3)->get()->getResult();
	}
	public function ultra_bayar($table1, $table2, $table3, $table4, $on, $on2, $on3, $where)
	{
		return $this->db->table($table1)->join($table2, $on, 'left')->join($table3, $on2, 'left')->join($table4, $on3, 'left')->getwhere($where)->getResult();
	}
	public function ultraRow($table1, $table2, $table3, $table4, $on, $on2, $on3, $where)
	{
		return $this->db->table($table1)->join($table2, $on)->join($table3, $on2)->join($table4, $on3)->getWhere($where)->getRow();
	}
	public function fusionRow($table1, $table2, $on, $where)
	{
		return $this->db->table($table1)->join($table2, $on)->getWhere($where)->getRow();
	}
	public function ironman($table1, $table2, $table3, $table4, $on, $on2, $on3)
	{
		return $this->db->table($table1)->join($table2, $on, 'left')->join($table3, $on2, 'left')->join($table4, $on3, 'left')->get()->getResult();
	}
	public function filter_absenpt($table, $awal, $akhir) {
    return $this->db->query(
        "SELECT *
        FROM ".$table."
        JOIN pengguna ON ".$table.".id_pengguna=pengguna.id_pengguna
        JOIN pt ON ".$table.".id_pt=pt.id_pt
        WHERE ".$table.".tanggal_absenpt
        BETWEEN '".$awal."'
        AND '".$akhir."'"
    )->getResult();
}

public function filter_nilaipt($table, $awal, $akhir) {
    return $this->db->query(
        "SELECT *
        FROM ".$table."
        JOIN pt ON ".$table.".id_pt=pt.id_pt
        WHERE ".$table.".tanggal_nilaipt
        BETWEEN '".$awal."'
        AND '".$akhir."'"
    )->getResult();
}

public function filter_absensklh($table, $awal, $akhir) {
    return $this->db->query(
        "SELECT *
        FROM ".$table."
        JOIN pengguna ON ".$table.".id_pengguna=pengguna.id_pengguna
        JOIN sekolah ON ".$table.".id_sekolah=sekolah.id_sekolah
        WHERE ".$table.".tanggal_absen
        BETWEEN '".$awal."'
        AND '".$akhir."'"
    )->getResult();
}
public function filter_nilaisklh($table, $awal, $akhir) {
    return $this->db->query(
        "SELECT *
        FROM ".$table."
        JOIN sekolah ON ".$table.".id_sekolah=sekolah.id_sekolah
        WHERE ".$table.".tanggal_nilai
        BETWEEN '".$awal."'
        AND '".$akhir."'"
    )->getResult();
}
public function filter_agenda ($table,$awal,$akhir)
	{

		return $this->db->query(
			"SELECT *
			FROM ".$table."
			join user
			on ".$table.".maker=user.id_user
			WHERE ".$table.".tgl
			BETWEEN '".$awal."'
			and '".$akhir."'"

		)->getResult();
	}
}