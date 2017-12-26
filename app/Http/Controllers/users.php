<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\UsersPushSettings;

use Session;
Use Redirect;

class users extends Controller
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

    public function showUsers() {
        $users = User::orderBy('id') -> paginate(10);
        return view('cms.user.showAll') -> with('users', $users);
    }

    public function edit($id) {
        $user = User::find($id);
        return view('cms.user.edit') -> with('user', $user);
    }

    public function update($id, Request $request) {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->phone = $request->input('phone');
        $user->email = $request->input('email');
        $user->rating = $request->input('rating');
        $user->point = $request->input('point');

        $user->save();

        Session::flash('message', 'Cập nhật thành công!');
        return Redirect::to('admin/user/'.$id);
    }

    public function destroy($id) {
        $user = User::find($id);
        $user -> settings() -> delete ();
        $user -> delete();

        Session::flash('message', 'Successfully deleted the user!');
        return Redirect::to('admin/users');
    }

    public function search(Request $req) {
        $phone = $req->input('phone');
        $email = $req->input('email');
        if (strcmp($phone, '') == 0 && strcmp($email, '') == 0) {
            $users = User::orderBy('id') -> paginate(10);
        } else {
            $users = User::where('phone','like','%'.$phone.'%') -> where('email','like','%'.$email.'%') -> paginate(10);
        }
        return view('cms.user.showAll') -> with('users', $users);
        // return $users;
    }
}
