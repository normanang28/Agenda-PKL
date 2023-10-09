<?php

namespace App\Controllers;
use CodeIgniter\Controllers;
use App\Models\M_model;
use Dompdf\Dompdf;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
class Home extends BaseController
{
	public function index()
{
     if(session()->get('id')>0 ) {
            return redirect()->to('home/dashboard');
            
        }else{

        $model=new M_model();
        echo view('login');
    }
}
    public function aksi_login()  
{
        $n=$this->request->getPost('username'); 
        $p=$this->request->getPost('pswd');
        $model= new M_model();
        $data=array(
            'username'=>$n, 
            'password'=>md5($p)
        );
        $cek=$model->getarray('user', $data);
        if ($cek>0) {

            session()->set('id', $cek['id_user']);
            session()->set('username', $cek['username']);
            session()->set('level', $cek['level']);
            return redirect()->to('/home/dashboard');

        }else {
        return redirect()->to('/');
        
    }
}

    public function log_out()
{
        if(session()->get('id')>0) {

         session()->destroy();
         return redirect()->to('/');

     }else{
        return redirect()->to('/home/dashboard');
    }
}

public function ganti_password()  
{
        $id=session()->get('id');
        $where2=array('id_user'=>$id);
        $model=new M_model();
        $where=array('id_user' => session()->get('id'));
        $kui['use']=$model->getRow('user',$where2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        
        echo view('header',$kui);
        echo view('menu');
        echo view('ganti_pass');
        echo view('footer');
}

    public function aksi_ganti_password()   
{
        $p=$this->request->getPost('pswd');
        $id=session()->get('id');
        $model= new M_model();

        $data=array( 
            'password'=>md5($p)
        );
        
        $where=array('id_user'=>$id);
        $model->edit('user', $data, $where);
        return redirect()->to('/home/log_out');
}
public function dashboard()
{
        if(session()->get('id')>0) {
        
        $model= new M_model();
        $where=array('id_user' => session()->get('id'));

        echo view('header');
        echo view('menu');
        echo view('dashboard');
        echo view('footer');
        }else{
        return redirect()->to('/');
    }
}
   public function perusahaan()
{
if(session()->get('level')== 1) {

    $M_model = new M_model();
    $kui['ferdi'] = $M_model->tampil('pt');

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('perusahaan');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
}

public function edit_pt($id)
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_pt'=>$id);
        $kui['ferdi']=$model->getRow('pt', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_perusahaan',$kui);
        echo view('footer');
        }else{
            return redirect()->to('/home/dashboard');
        }
}

public function aksi_edit_pt()
{
    $model=new M_model();
    $id = $this->request->getPost('id');
    $nama_pt=$this->request->getPost('nama_pt');
    $alamat_pt=$this->request->getPost('alamat_pt');
    $telp_pt=$this->request->getPost('telp_pt');
    // $id=session()->get('id');
    $data=array(
        'nama_pt'=>$nama_pt,
        'alamat_pt'=>$alamat_pt,
        'telp_pt'=>$telp_pt,
        // 'id_user'=>$id
    );
    // print_r($data);
    $where=array('id_pt'=>$id);
    $model->edit('pt',$data,$where);
    return redirect()->to('/home/perusahaan');
}
public function hapus_pt($id)
{
    if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_pt'=>$id);
        $model->hapus('pt',$where);
        return redirect()->to('/home/perusahaan');

    }else{
        return redirect()->to('/home/dashboard');
    }
}

    public function sekolah()
    {
if(session()->get('level')== 1) {

    $M_model = new M_model();
    $kui['ferdi'] = $M_model->tampil('sekolah');

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('sekolah');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
}
    public function hapus_sekolah($id)
{
    if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_sekolah'=>$id);
        $model->hapus('sekolah',$where);
        return redirect()->to('/home/sekolah');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function edit_sekolah($id)
{
        if(session()->get('level')== 1 ) {

        $model=new M_model();
        $where=array('id_sekolah'=>$id);
        $kui['ferdi']=$model->getRow('sekolah', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_sekolah',$kui);
        echo view('footer');
        }else{
            return redirect()->to('/home/dashboard');
        }
}

public function aksi_edit_sekolah()
{
    $model=new M_model();
    $id = $this->request->getPost('id');
    $nama_sekolah = $this->request->getPost('nama_sekolah');
    $alamat_sekolah = $this->request->getPost('alamat_sekolah');
    $telp_sekolah = $this->request->getPost('telp_sekolah');
    // $id=session()->get('id');
    $data=array(
        'nama_sekolah'=>$nama_sekolah,
        'alamat_sekolah'=>$alamat_sekolah,
        'telp_sekolah'=>$telp_sekolah,
        // 'id_user'=>$id
    );
    // print_r($data);
    $where=array('id_sekolah'=>$id);
    $model->edit('sekolah',$data,$where);
    return redirect()->to('/home/sekolah');
}

    public function absenpt()
    {
if(session()->get('level')== 2 || session()->get('level')== 4) {

    $model = new M_model();
    $on='absensipt.id_pengguna=pengguna.id_pengguna';
    $on2='absensipt.id_pt=pt.id_pt';
    $kui['ferdi']=$model->super('absensipt','pengguna','pt',$on,$on2);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('absenpt');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
}

    public function absensklh()
    {
if(session()->get('level')== 3 || session()->get('level')== 4) {

    $model = new M_model();
    $on='absensi.id_pengguna=pengguna.id_pengguna';
    $on2='absensi.id_sekolah=sekolah.id_sekolah';
    $kui['ferdi']=$model->super('absensi','pengguna','sekolah',$on,$on2);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('absensklh');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
}

    public function agenda()
    {
if(session()->get('level')== 4) {

    $model = new M_model();
    $on='agenda.maker=user.id_user';
    $kui['ferdi']=$model->fusion('agenda','user',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('agenda');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
    }

public function agendasklh()
    {
if(session()->get('level')== 3) {

    $model = new M_model();
    $on='agenda.maker=user.id_user';
    $kui['ferdi']=$model->fusion('agenda','user',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('agenda_sekolah');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
    }

public function agendapt()
    {
if(session()->get('level')== 2) {

    $model = new M_model();
    $on='agenda.maker=user.id_user';
    $kui['ferdi']=$model->fusion('agenda','user',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('agenda_pt');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
    }
    public function tambah_agenda()
{
        if(session()->get('level')== 4) {

        $model=new M_model();
        $on='agenda.maker=user.id_user';
        $kui['ferdi']=$model->fusion('agenda','user',$on);
        // $kui['ferdi']=$model->tampil('agenda');

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_agenda',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_tambah_agenda()
{
    $model=new M_model();
    // $jam_masuk=$this->request->getPost('jam_masuk');
    $jam_pulang=$this->request->getPost('jam_pulang');
    $rencana_pekerjaan=$this->request->getPost('rencana_pekerjaan');
    $relalisasi_pekerjaan=$this->request->getPost('relalisasi_pekerjaan');
    $penugasan_atasan=$this->request->getPost('penugasan_atasan');
    $penemuan_masalah=$this->request->getPost('penemuan_masalah');
    $maker=session()->get('id');
    $data=array(
        // 'jam_masuk'=>$jam_masuk,
        'jam_pulang'=>$jam_pulang,
        'rencana_pekerjaan'=>$rencana_pekerjaan,
        'relalisasi_pekerjaan'=>$relalisasi_pekerjaan,
        'penugasan_atasan'=>$penugasan_atasan,
        'penemuan_masalah'=>$penemuan_masalah,
        'maker'=>$maker
    );
    $model->simpan('agenda',$data);
    return redirect()->to('/home/agenda');
}
    public function hapus_agenda($id)
{
    if(session()->get('level')== 4 ) {

        $model=new M_model();
        $where=array('id_agenda'=>$id);
        $model->hapus('agenda',$where);
        return redirect()->to('/home/agenda');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function edit_agenda($id)
{
        if(session()->get('level')== 4) {

        $model=new M_model();
        $where=array('id_agenda'=>$id);
        // $on='dta_departement.maker_departement=user.id_user';
        // $kui['duar']=$model->fusion('dta_departement','user', $on, $where);
        $kui['ferdi']=$model->getRow('agenda', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_agenda',$kui);
        echo view('footer');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_edit_agenda()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $jam_pulang=$this->request->getPost('jam_pulang');
    $rencana_pekerjaan=$this->request->getPost('rencana_pekerjaan');
    $relalisasi_pekerjaan=$this->request->getPost('relalisasi_pekerjaan');
    $penugasan_atasan=$this->request->getPost('penugasan_atasan');
    $penemuan_masalah=$this->request->getPost('penemuan_masalah');
    // $id=session()->get('id');
    $data=array(
        'jam_pulang'=>$jam_pulang,
        'rencana_pekerjaan'=>$rencana_pekerjaan,
        'relalisasi_pekerjaan'=>$relalisasi_pekerjaan,
        'penugasan_atasan'=>$penugasan_atasan,
        'penemuan_masalah'=>$penemuan_masalah,
        // 'id_user'=>$id
    );
    $where=array('id_agenda'=>$id);
    $model->edit('agenda',$data,$where);
    return redirect()->to('/home/agenda');
}

public function edit_agendasklh($id)
{
        if(session()->get('level')== 3) {

        $model=new M_model();
        $where=array('id_agenda'=>$id);
        // $on='dta_departement.maker_departement=user.id_user';
        // $kui['duar']=$model->fusion('dta_departement','user', $on, $where);
        $kui['ferdi']=$model->getRow('agenda', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_agendasklh',$kui);
        echo view('footer');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_edit_agendasklh()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $jam_pulang=$this->request->getPost('jam_pulang');
    $rencana_pekerjaan=$this->request->getPost('rencana_pekerjaan');
    $relalisasi_pekerjaan=$this->request->getPost('relalisasi_pekerjaan');
    $penugasan_atasan=$this->request->getPost('penugasan_atasan');
    $penemuan_masalah=$this->request->getPost('penemuan_masalah');
    $persetujuan=$this->request->getPost('persetujuan');
    // $id=session()->get('id');
    $data=array(
        // 'jam_pulang'=>$jam_pulang,
        // 'rencana_pekerjaan'=>$rencana_pekerjaan,
        // 'relalisasi_pekerjaan'=>$relalisasi_pekerjaan,
        // 'penugasan_atasan'=>$penugasan_atasan,
        // 'penemuan_masalah'=>$penemuan_masalah,
        'persetujuan'=>$persetujuan,
        // 'id_user'=>$id
    );
    $where=array('id_agenda'=>$id);
    $model->edit('agenda',$data,$where);
    return redirect()->to('/home/agendasklh');
}

public function edit_agendapt($id)
{
        if(session()->get('level')== 2) {

        $model=new M_model();
        $where=array('id_agenda'=>$id);
        // $on='dta_departement.maker_departement=user.id_user';
        // $kui['duar']=$model->fusion('dta_departement','user', $on, $where);
        $kui['ferdi']=$model->getRow('agenda', $where);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_agendapt',$kui);
        echo view('footer');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_edit_agendapt()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $jam_pulang=$this->request->getPost('jam_pulang');
    $rencana_pekerjaan=$this->request->getPost('rencana_pekerjaan');
    $relalisasi_pekerjaan=$this->request->getPost('relalisasi_pekerjaan');
    $penugasan_atasan=$this->request->getPost('penugasan_atasan');
    $penemuan_masalah=$this->request->getPost('penemuan_masalah');
    $persetujuan_pt=$this->request->getPost('persetujuan_pt');
    // $id=session()->get('id');
    $data=array(
        // 'jam_pulang'=>$jam_pulang,
        // 'rencana_pekerjaan'=>$rencana_pekerjaan,
        // 'relalisasi_pekerjaan'=>$relalisasi_pekerjaan,
        // 'penugasan_atasan'=>$penugasan_atasan,
        // 'penemuan_masalah'=>$penemuan_masalah,
        'persetujuan_pt'=>$persetujuan_pt,
        // 'id_user'=>$id
    );
    $where=array('id_agenda'=>$id);
    $model->edit('agenda',$data,$where);
    return redirect()->to('/home/agendapt');
}
    public function nilai_pt()
    {
if(session()->get('level')== 1 || session()->get('level')== 2) {

    $model = new M_model();
    $on='nilaipt.id_pt=pt.id_pt';
    $kui['ferdi']=$model->fusion('nilaipt','pt',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('nilaipt');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
    }

       public function hapus_nilaipt($id)
{
    if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_nilaipt'=>$id);
        $model->hapus('nilaipt',$where);
        return redirect()->to('/home/nilai_pt');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function edit_nilaipt($id)
{
        if(session()->get('level')== 2) {

        $model=new M_model();
        $where=array('id_nilaipt'=>$id);

        $on='nilaipt.id_pt=pt.id_pt';
        $kui['ferdi']=$model->fusion_Row('nilaipt','pt', $on,$where);

        $kui['ok']=$model->tampil('pt');

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_nilaipt',$kui);
        echo view('footer');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function aksi_edit_nilaipt()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $nama_pt=$this->request->getPost('nama_pt');
    $nama_pembimbing=$this->request->getPost('nama_pembimbing');
    $nama_siswa=$this->request->getPost('nama_siswa');
    $nilaipt=$this->request->getPost('nilaipt');
    $catatanpt=$this->request->getPost('catatanpt');
    // $id=session()->get('id');
    $data=array(
        'id_pt'=>$nama_pt,
        'nama_pembimbing'=>$nama_pembimbing,
        'nama_siswa'=>$nama_siswa,
        'nilaipt'=>$nilaipt,
        'catatanpt'=>$catatanpt,
        // 'id_user'=>$id
    );
    // print_r($data);
    $where=array('id_nilaipt'=>$id);
    $model->edit('nilaipt',$data,$where);
    return redirect()->to('/home/nilai_pt');
}
    public function nilai_sklh()
    {
 if(session()->get('level')== 1 || session()->get('level')== 3) {

    $model = new M_model();
    $on='nilai.id_sekolah=sekolah.id_sekolah';
    $kui['ferdi'] = $model->fusion('nilai','sekolah',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu');
    echo view('nilai');
    echo view('footer');
}else{
    return redirect()->to('/home/dashboard');
}
    }

public function hapus_nilai($id)
{
    if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_nilai'=>$id);
        $model->hapus('nilai',$where);
        return redirect()->to('/home/nilai_sklh');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function edit_nilai($id)
{
        if(session()->get('level')== 3) {

        $model=new M_model();
        $where=array('id_nilai'=>$id);

        $on='nilai.id_sekolah=sekolah.id_sekolah';
        $kui['ferdi']=$model->fusion_Row('nilai','sekolah', $on,$where);

        $kui['ok']=$model->tampil('sekolah');

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('edit_nilai',$kui);
        echo view('footer');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function aksi_edit_nilai()
{
    $model=new M_model();
    $id=$this->request->getPost('id');
    $nama_sekolah=$this->request->getPost('nama_sekolah');
    $nama_guru=$this->request->getPost('nama_guru');
    $nama_siswa=$this->request->getPost('nama_siswa');
    $nilai=$this->request->getPost('nilai');
    $catatan=$this->request->getPost('catatan');
    // $id=session()->get('id');
    $data=array(
        'id_sekolah'=>$nama_sekolah,
        'nama_guru'=>$nama_guru,
        'nama_siswa'=>$nama_siswa,
        'nilai'=>$nilai,
        'catatan'=>$catatan,
        // 'id_user'=>$id
    );
    // print_r($data);
    $where=array('id_nilai'=>$id);
    $model->edit('nilai',$data,$where);
    return redirect()->to('/home/nilai_sklh');
}
    public function pengguna_detail()
    {
if(session()->get('level')== 1) {

    $model = new M_model();
    // $on='pengguna.id_sekolah=sekolah.id_sekolah';
    // $on2='pengguna.id_pt=pt.id_pt';
    $on='pengguna.id_user=user.id_user';
    $kui['ferdi']=$model->fusion('pengguna','user',$on);

    $id = session()->get('id');
    $where = array('id' => $id);

    echo view('header', $kui);
    echo view('menu', $kui);
    echo view('pengguna_detail', $kui);
    echo view('footer');

}else{
    return redirect()->to('/home/dashboard');
}
    }

    public function pengguna($id)
{
        if(session()->get('level')== 1){

        $model=new M_model();
        $where2=array('pengguna.id_user'=>$id); 
        // $on='pengguna.id_sekolah=sekolah.id_sekolah';
        // $on2='pengguna.id_pt=pt.id_pt';
        $on='pengguna.id_user=user.id_user';
        $kui['gas']=$model->fusionRow('pengguna','user',$on,$where2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu');
        echo view('pengguna');
        echo view('footer');

        }else{
        return redirect()->to('/home/dashboard');
    }
}
public function hapus_pengguna($id)
{
    if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_user'=>$id);
        $model->hapus('pengguna',$where);
        $model->hapus('user',$where);
        return redirect()->to('/home/pengguna_detail');

    }else{
        return redirect()->to('/home/dashboard');
    }
}
public function edit_pengguna($id)
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        $where2=array('pengguna.id_user'=>$id);
        $on=('pengguna.id_user=user.id_user');
        $kui['ferdi']=$model->fusion_Row('pengguna','user',$on,$where2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        $where=array('id_user' => session()->get('id'));

        echo view('header',$kui);
        echo view('menu');
        echo view('edit_pengguna');
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_edit_pengguna()
{
    $id= $this->request->getPost('id');
    $username= $this->request->getPost('username');
    $level= $this->request->getPost('level');
    $nama= $this->request->getPost('nama');
    $jk= $this->request->getPost('jk');
    $email= $this->request->getPost('email');
    $telp= $this->request->getPost('telp');
    $alamat= $this->request->getPost('alamat');
    // $id=session()->get('id');

    $where=array('id_user'=>$id); 
    $where2=array('id_user'=>$id);   
    if ($password !='') {
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }else{
        $user=array(
            'username'=>$username,
            'level'=>$level,
        );
    }
    
    $model=new M_model();
    $model->edit('user', $user,$where);

    $pengguna=array(
        'nama'=>$nama,
        'jk'=>$jk,
        'email'=>$email,
        'telp'=>$telp,
        'alamat'=>$alamat,
        // 'id_user'=>$id
    );
    // print_r($user);
    // print_r($karyawan);
    $model->edit('pengguna', $pengguna, $where2);
    return redirect()->to('/home/pengguna_detail');
}

public function reset_pengguna($id)
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        $where=array('id_user'=>$id);
        $data=array(
            'password'=>md5('12345')
        );
        $model->edit('user',$data,$where);
        return redirect()->to('/home/pengguna_detail');
        }else{
        return redirect()->to('/home/dashboard');
    }
}

    public function tambah_pt()
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        $kui['ferdi']=$model->tampil('pt');

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_perusahaan',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_tambah_perusahaan()
{
    $model=new M_model();
    $nama_pt=$this->request->getPost('nama_pt');
    $alamat_pt=$this->request->getPost('alamat_pt');
    $telp_pt=$this->request->getPost('telp_pt');
    // $id=session()->get('id');
    $data=array(
        'nama_pt'=>$nama_pt,
        'alamat_pt'=>$alamat_pt,
        'telp_pt'=>$telp_pt,
        // 'id_user'=>$id
    );
    $model->simpan('pt',$data);
    return redirect()->to('/home/perusahaan');
}

    public function tambah_sekolah()
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        $kui['ferdi']=$model->tampil('sekolah');

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_sekolah',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_tambah_sekolah()
{
    $model=new M_model();
    $nama_sekolah=$this->request->getPost('nama_sekolah');
    $alamat_sekolah=$this->request->getPost('alamat_sekolah');
    $telp_sekolah=$this->request->getPost('telp_sekolah');
    // $id=session()->get('id');
    $data=array(
        'nama_sekolah'=>$nama_sekolah,
        'alamat_sekolah'=>$alamat_sekolah,
        'telp_sekolah'=>$telp_sekolah,
        // 'id_user'=>$id
    );
    $model->simpan('sekolah',$data);
    return redirect()->to('/home/sekolah');
}

    public function tambah_pengguna()
{
        if(session()->get('level')== 1) {

        $model=new M_model();
        // $on='pengguna.id_pt=pt.id_pt';
        // $on2='pengguna.id_sekolah=sekolah.id_sekolah';
        $on='pengguna.id_user=user.id_user';
        $kui['ferdi']=$model->fusion('pengguna','user',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        // $kui['ok']=$model->tampil('pt'); 
        // $kui['duar']=$model->tampil('sekolah'); 

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_pengguna', $kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function aksi_tambah_pengguna()
{
    // $id_pt=$this->request->getPost('id_pt');
    // $id_sekolah=$this->request->getPost('id_sekolah');
    $nama= $this->request->getPost('nama');
    $jk= $this->request->getPost('jk');
    $email= $this->request->getPost('email');
    $alamat= $this->request->getPost('alamat');
    $telp= $this->request->getPost('telp');
    $username= $this->request->getPost('username');
    $password= $this->request->getPost('password');
    $level= $this->request->getPost('level');
    $id=session()->get('id');

    //Yang ditambah ke user
    $user=array(
        'username'=>$username,
        'password'=>md5($password),
        'level'=>$level
    );

    $model=new M_model();
    $model->simpan('user', $user);
    $where=array('username'=>$username);
    $id=$model->getarray('user', $where);
    $iduser = $id['id_user'];

    $pengguna=array(
        // 'id_pt'=> $id_pt,
        // 'id_sekolah'=> $id_sekolah,
        'nama'=>$nama,
        'jk'=>$jk,
        'email'=>$email,
        'alamat'=>$alamat,
        'telp'=>$telp,
        'id_user'=>$iduser
    );
    // print_r($karyawan);
    $model->simpan('pengguna', $pengguna);
    return redirect()->to('/home/pengguna_detail');
}

    public function tambah_absenpt()
{
        if(session()->get('level')== 4) {

        $model=new M_model();
        $on='absensipt.id_pengguna=pengguna.id_pengguna';
        $on2='absensipt.id_pt=pt.id_pt';
        $kui['ferdi']=$model->super('absensipt','pengguna','pt',$on,$on2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        $kui['a']=$model->tampil('pengguna'); 
        $kui['ok']=$model->tampil('pt'); 

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_absenpt', $kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}

    public function aksi_tambah_absenpt()
{
    $model=new M_model();
    $p=$this->request->getPost('id_pengguna');
    $t=$this->request->getPost('id_pt');

        $absenpt=$this->request->getPost('absenpt');
        // $id=session()->get('id');
        
        $data=array(
            'id_pengguna'=> $p,
            'id_pt'=> $t,
            'absenpt'=>$absenpt,
            // 'id_user'=>$id
        );
        $model->simpan('absensipt',$data);
        return redirect()->to('/home/absenpt');
}
    public function hapus_absenpt($id)
{
    if(session()->get('level')== 2) {

        $model=new M_model();
        $where=array('id_absenpt'=>$id);
        $model->hapus('absensipt',$where);
        return redirect()->to('/home/absenpt');

    }else{
        return redirect()->to('/home/dashboard');
    }
}


    public function tambah_absen()
{
        if(session()->get('level')== 4) {

        $model=new M_model();
        $on='absensi.id_pengguna=pengguna.id_pengguna';
        $on2='absensi.id_sekolah=sekolah.id_sekolah';
        $kui['ferdi']=$model->super('absensi','pengguna','sekolah',$on,$on2);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        $kui['a']=$model->tampil('pengguna'); 
        $kui['ok']=$model->tampil('sekolah'); 

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_absen', $kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}

    public function aksi_tambah_absen()
{
    $model=new M_model();
    $p=$this->request->getPost('id_pengguna');
    $t=$this->request->getPost('id_sekolah');

        $absen=$this->request->getPost('absen');
        // $id=session()->get('id');
        
        $data=array(
            'id_pengguna'=> $p,
            'id_sekolah'=> $t,
            'absen'=>$absen,
            // 'id_user'=>$id
        );
        $model->simpan('absensi',$data);
        return redirect()->to('/home/absensklh');
}

    public function hapus_absen($id)
{
    if(session()->get('level')== 3) {

        $model=new M_model();
        $where=array('id_absen'=>$id);
        $model->hapus('absensi',$where);
        return redirect()->to('/home/absensklh');

    }else{
        return redirect()->to('/home/dashboard');
    }
}

public function tambah_nilaipt()
{
        if(session()->get('level')== 2) {

        $model=new M_model();
        // $on='pengguna.id_pt=pt.id_pt';
        // $on2='pengguna.id_sekolah=sekolah.id_sekolah';
        $on='nilaipt.id_pt=pt.id_pt';
        $kui['ferdi']=$model->fusion('nilaipt','pt',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        $kui['a']=$model->tampil('pt'); 

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_nilaipt', $kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
public function aksi_tambah_nilaipt()
{
    $model=new M_model();
    $t=$this->request->getPost('id_pt');

        $nama_pembimbing=$this->request->getPost('nama_pembimbing');
        $nama_siswa=$this->request->getPost('nama_siswa');
        $nilaipt=$this->request->getPost('nilaipt');
        $catatanpt=$this->request->getPost('catatanpt');
        // $id=session()->get('id');
        
        $data=array(
            'id_pt'=> $t,
            'nama_pembimbing'=>$nama_pembimbing,
            'nama_siswa'=>$nama_siswa,
            'nilaipt'=>$nilaipt,
            'catatanpt'=>$catatanpt,
            // 'id_user'=>$id
        );
        $model->simpan('nilaipt',$data);
        return redirect()->to('/home/nilai_pt');
}

    public function tambah_nilai()
{
        if(session()->get('level')== 3) {

        $model=new M_model();
        // $on='pengguna.id_pt=pt.id_pt';
        // $on2='pengguna.id_sekolah=sekolah.id_sekolah';
        $on='nilai.id_sekolah=sekolah.id_sekolah';
        $kui['ferdi']=$model->fusion('nilai','sekolah',$on);

        $id=session()->get('id');
        $where=array('id_user'=>$id);

        $kui['a']=$model->tampil('sekolah'); 

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('tambah_nilai', $kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
public function aksi_tambah_nilai()
{
    $model=new M_model();
    $t=$this->request->getPost('id_sekolah');

        $nama_guru=$this->request->getPost('nama_guru');
        $nama_siswa=$this->request->getPost('nama_siswa');
        $nilai=$this->request->getPost('nilai');
        $catatan=$this->request->getPost('catatan');
        // $id=session()->get('id');
        
        $data=array(
            'id_sekolah'=> $t,
            'nama_guru'=>$nama_guru,
            'nama_siswa'=>$nama_siswa,
            'nilai'=>$nilai,
            'catatan'=>$catatan,
            // 'id_user'=>$id
        );
        $model->simpan('nilai',$data);
        return redirect()->to('/home/nilai_sklh');
}

public function laporan_absensipt()
{
        if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_absenpt';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        // $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function cari_absenpt()
{
        if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_absenpt('absensipt',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        echo view('c_absenpt',$kui);
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function pdf_absenpt()
{
        if(session()->get('level')== 2 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_absenpt('absensipt',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_absenpt',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function excel_absenpt()
{
        if(session()->get('level')== 2 ||session()->get('level')==4 ) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter_absenpt('absensipt',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama')
    ->setCellValue('B1', 'Nama Perusahaan')
    ->setCellValue('C1', 'Absen')
    ->setCellValue('D1', 'Tanggl');


    $column=2;

    foreach($data as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama)
        ->setCellValue('B'. $column, $data->nama_pt)
        ->setCellValue('C'. $column, $data->absenpt)
        ->setCellValue('D'. $column, $data->tanggal_absenpt);
        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Laporan Absensi Perusahaan';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    }else{
        return redirect()->to('/home/dashboard');
    }
}

// ---------------------------------------------
public function laporan_nilaipt()
{
        if(session()->get('level')== 2 ||session()->get('level')==3 || session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_nilaipt';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        // $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function cari_nilaipt()
{
        if(session()->get('level')== 2 ||session()->get('level')==3 || session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_nilaipt('nilaipt',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        echo view('c_nilaipt',$kui);
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function pdf_nilaipt()
{
        if(session()->get('level')== 2 ||session()->get('level')==3 || session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_nilaipt('nilaipt',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_nilaipt',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function excel_nilaipt()
{
        if(session()->get('level')== 2 ||session()->get('level')==3 || session()->get('level')==4 ) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter_nilaipt('nilaipt',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama Perusahaan')
    ->setCellValue('B1', 'Nama Pembimbing PT')
    ->setCellValue('C1', 'Nama Siswa')
    ->setCellValue('D1', 'Nilai Siswa')
    ->setCellValue('E1', 'Catatan Untuk Siswa');


    $column=2;

    foreach($data as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama_pt)
        ->setCellValue('B'. $column, $data->nama_pembimbing)
        ->setCellValue('C'. $column, $data->nama_siswa)
        ->setCellValue('D'. $column, $data->nilaipt)
        ->setCellValue('E'. $column, $data->catatanpt);
        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Laporan Nilai Perusahaan';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    }else{
        return redirect()->to('/home/dashboard');
    }
}

// -------------------------------------------------------------------------------

public function laporan_absensisklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_absensklh';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        // $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function cari_absensklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_absensklh('absensi',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        echo view('c_absen',$kui);
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function pdf_absensklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_absensklh('absensi',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_absen',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function excel_absensklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter_absensklh('absensi',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama ')
    ->setCellValue('B1', 'Nama Sekolah')
    ->setCellValue('C1', 'Absen')
    ->setCellValue('D1', 'Tanggal ');


    $column=2;

    foreach($data as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama)
        ->setCellValue('B'. $column, $data->nama_sekolah)
        ->setCellValue('C'. $column, $data->absen)
        ->setCellValue('D'. $column, $data->tanggal_absen);
        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Laporan Absen Sekolah';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    }else{
        return redirect()->to('/home/dashboard');
    }
}

public function laporan_nilai()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_nilaisklh';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        // $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function cari_nilaisklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_nilaisklh('nilai',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        echo view('c_nilai',$kui);
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function pdf_nilaisklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_nilaisklh('nilai',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_nilai',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function excel_nilaisklh()
{
        if(session()->get('level')== 3 ||session()->get('level')==4 ) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter_nilaisklh('nilai',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Nama Sekolah')
    ->setCellValue('B1', 'Nama Guru')
    ->setCellValue('C1', 'Nama Siswa')
    ->setCellValue('D1', 'Nilai Siswa ')
    ->setCellValue('E1', 'Catatan Untuk Siswa ');


    $column=2;

    foreach($data as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->nama_sekolah)
        ->setCellValue('B'. $column, $data->nama_guru)
        ->setCellValue('C'. $column, $data->nama_siswa)
        ->setCellValue('D'. $column, $data->nilai)
        ->setCellValue('E'. $column, $data->catatan);
        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Laporan Nilai Sekolah';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    }else{
        return redirect()->to('/home/dashboard');
    }
}

public function laporan_agenda()
{
        if(session()->get('level')== 2 || session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $kui['kunci']='view_agenda';

        $id=session()->get('id');
        $where=array('id_user'=>$id);
        // $kui['foto']=$model->getRow('user',$where);

        echo view('header',$kui);
        echo view('menu',$kui);
        echo view('filter',$kui);
        echo view('footer');
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function cari_agenda()
{
        if(session()->get('level')== 2 || session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_agenda('agenda',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        echo view('c_agenda',$kui);
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function pdf_agenda()
{
        if(session()->get('level')== 2 || session()->get('level')== 3 ||session()->get('level')==4 ) {

        $model=new M_model();
        $awal= $this->request->getPost('awal');
        $akhir= $this->request->getPost('akhir');
        $kui['ferdi']=$model->filter_agenda('agenda',$awal,$akhir);
        // $img = file_get_contents(
        //     'C:\xampp\htdocs\koperasi-simpan-pinjam\public\images\ksp.png');

        // $kui['foto'] = base64_encode($img);

        $dompdf = new\Dompdf\Dompdf();
        $dompdf->loadHtml(view('c_agenda',$kui));
        $dompdf->setPaper('A4','landscape');
        $dompdf->render();
        $dompdf->stream('my.pdf', array('Attachment'=>0));
        }else{
        return redirect()->to('/home/dashboard');
    }
}
    public function excel_agenda()
{
        if(session()->get('level')== 2 || session()->get('level')== 3 ||session()->get('level')==4 ) {

    $model=new M_model();
    $awal= $this->request->getPost('awal');
    $akhir= $this->request->getPost('akhir');
    $data=$model->filter_agenda('agenda',$awal,$akhir);

    $spreadsheet=new Spreadsheet();

    $spreadsheet->setActiveSheetIndex(0)
    ->setCellValue('A1', 'Tanggal dan Jam Masuk')
    ->setCellValue('B1', 'Jam Pulang')
    ->setCellValue('C1', 'Rencana Pekerjaan')
    ->setCellValue('D1', 'Realisasi Pekerjaan')
    ->setCellValue('E1', 'Penugasan Khusus Dari Atasan')
    ->setCellValue('F1', 'Penemuan Masalah')
    ->setCellValue('G1', 'Maker');


    $column=2;

    foreach($data as $data){
        $spreadsheet->setActiveSheetIndex(0)
        ->setCellValue('A'. $column, $data->tanggal_agenda)
        ->setCellValue('B'. $column, $data->jam_pulang)
        ->setCellValue('C'. $column, $data->rencana_pekerjaan)
        ->setCellValue('D'. $column, $data->relalisasi_pekerjaan)
        ->setCellValue('E'. $column, $data->penugasan_atasan)
        ->setCellValue('F'. $column, $data->penemuan_masalah)
        ->setCellValue('G'. $column, $data->username);
        $column++;
    }
    $writer = new XLsx($spreadsheet);
    $fileName = 'Laporan Agenda PKL';

    header('Content-type:vnd.openxmlformats-officedocument.spreadsheetml.sheet');
    header('Content-Disposition:attachment;filename='.$fileName.'.xls');
    header('Cache-Control: max-age=0');

    $writer->save('php://output');
    }else{
        return redirect()->to('/home/dashboard');
    }
}
}
