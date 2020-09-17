<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use App\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Store::where(Auth::guard('store')->user()->id);
        return view('pages.profile.index', compact('datas'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Auth::guard('store')->user();
        $data->name = $request->name;
        $data->logo = $request->logo;
        $data->address = $request->address;

        if ($request->file('image') == ''){
            $data->foto = $request->old_foto;
        }else{
            $file = $request->file('image');
            $file_name = date('ymdHis') . "-" . $file->getClientOriginalName();
            $file_path = 'data-calon/' . $file_name;
            Storage::disk('s3')->put($file_path, file_get_contents($file));
            $data->foto = Storage::disk('s3')->url($file_path, $file_name);
        }
        $data->save();

        return redirect()->route('profilsekolah.index')->with('create', 'Berhasil mengubah Data');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
