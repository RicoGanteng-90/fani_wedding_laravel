<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = user::all();
        return view ('admin_accounts', compact('admin'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $admin=user::all();

        return view('register_admin', compact('admin'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = user::findOrFail($id);
        return view('update_profile', compact('edit'));
    }

    public function register(Request $request)
    {

        $admin=User::create($request->all());

        $admin->password = Hash::make($request->password);

        $admin->save();

        return redirect()->route('admin.index')->with('reg-admin', 'Akun ditambahkan!');
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

        $user = user::findOrFail($id);

        if ($request->filled('name')) {
            $user->name = $request->input('name');
        }

        if ($request->filled('number')) {
            $user->number = $request->input('number');
        }

        if ($request->filled('address')) {
            $user->address = $request->input('address');
        }
        $user->password = hash::make($request->input('password'));
        $user->save();

        return redirect()->route('admin.index')->with('same', 'Data diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = user::findOrFail($id);

        $admin->delete();

        return redirect()->route('admin.index')->with('hapusadm', 'Dihapus!');
    }
}
