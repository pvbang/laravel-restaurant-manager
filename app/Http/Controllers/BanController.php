<?php

namespace App\Http\Controllers;

use App\Models\Ban;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class BanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
        $ban = Ban::create([
            'ten_ban' => $request->input('ten_ban'),
            'trang_thai' => $request->input('trang_thai'),
            'dat_truoc' => $request->input('dat_truoc'),
        ]);
        return Redirect('/RestaurantManager/User/ban');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         // hiển thị
         $data = Ban::all();
         return View('admin.ban.ban', ['bans'=>$data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // sửa
        $data = Ban::find($id);
        return View('admin.ban.sua', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
         // update
         $ban = Ban::find($request->ID_ban);
         $ban['ID_ban'] = $request->ID_ban;
         $ban['ten_ban'] = $request->ten_ban;
         $ban['trang_thai'] = $request->trang_thai;
         $ban['dat_truoc'] = $request->dat_truoc;
         $ban->save();
         return Redirect('/RestaurantManager/User/ban');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // xóa
        $data = Ban::find($id);
        $data->delete();
        return Redirect('/RestaurantManager/User/ban');
    }
}
