<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\m_latihan2;

class c_index extends Controller
{
    public function index()
    {
        $data['all'] = m_latihan2::get();
        return view('v_index', $data);
        
    }

    function tambah()
    {
        return view('v_tambah');
    }

    function tambah_data(Request $request)
    {
             m_latihan2::insert([
            'nama' => $request -> f_nama,
            'nama_depan' => $request -> f_nama_depan,
            'umur' => $request -> f_umur,
            'alamat' => $request -> f_alamat,
            'telepon' => $request -> f_telepon,
        ]);
        return redirect('/index');
    }

    function hapus_data($id)
    {
       m_latihan2::where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
    }

    function ubah($id)
    {
        $data = DB::table('latihan2')->where('id', $id)->get();
        return view('v_ubah',['ambil'=> $data]);
    }

    function ubah_data(Request $request)
    {
        $data['all'] = DB::table('latihan2')->where('id', $request->id)->update([
            'nama' => $request->f_nama,
            'nama_depan' => $request->f_nama_depan,
            'alamat' => $request->f_alamat,
            'umur' => $request->f_umur,
            'telepon' => $request->f_telepon,
        ]);
        return redirect('/index');
    }

    function cari(Request $request)
    {
        $cari = $request->cari;
        $data['all'] = m_latihan2::where('nama','like','%'.$cari.'%')->paginate();
        return view('v_index', $data);
    }
}
