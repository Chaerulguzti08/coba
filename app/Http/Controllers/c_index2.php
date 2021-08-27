<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m_latihan2;
use Illuminate\Support\Facades\DB;

class c_index2 extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['all'] = m_latihan2::get();
        return view('v_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v_tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = DB::table('latihan2')->where('id', $id)->get();
        return view('v_ubah',['ambil'=> $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        m_latihan2::where('id',$id)->delete();
		
		// alihkan halaman ke halaman pegawai
		return redirect('/index');
    }
}
