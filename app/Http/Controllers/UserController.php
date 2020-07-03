<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    public function index()
    {
        $user = User::all();
        return view("admin/user/list_user",['user'=> $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($iduser)
    {
        //
        $user = User::detailUser($iduser);
        
        return view("admin/user/form_edit_user", compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

        $request->validate([
            'id'     => 'required',
            'nama'   => 'required',
            'email'  => 'required'
        ]);

        $id     = $request->input('id');
        $nama   = $request->input('nama');
        $email  = $request->input('email');

        $user = new User();
        $user->addEditUser($id,$nama, $email);

        return redirect("/listUser");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($iduser)
    {
        //

        $user = new User();
        $user->deleteUser($iduser);

        return redirect("/listUser");
    }
}
