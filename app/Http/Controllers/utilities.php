<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Utility;
Use Redirect;

class utilities extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fixedUtilitiesIndex()
    {
        $utilities = Utility::where('is_movable', '=', FALSE)->orderBy('id', 'desc') -> paginate(10);
        return view('cms.utility.utilities') -> with('utilities', $utilities);
    }

    public function movableUtilitiesIndex()
    {
        $utilities = Utility::where('is_movable', '=', TRUE)->orderBy('id', 'desc') -> paginate(10);
        return view('cms.utility.utilities') -> with('utilities', $utilities);
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
        $utility = Utility::find($id);
        return view('cms.utility.edit') -> with('utility', $utility);
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
        $utility = Utility::find($id);
        $utility->type = $request->input('type');
        $utility->hotline = $request->input('hotline');
        $utility->due_date = $request->input('due_date');
        $utility->rating = $request->input('rating');
        $utility->status = $request->input('status');

        $utility->save();

        return Redirect::to('admin/utility/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function search(Request $req) {
        $email = $req->input('email');
        $hotline = $req->input('hotline');
        if (strcmp($email, '') == 0 && strcmp($hotline, '') == 0) {
            $utilities = Utility::orderBy('id') -> paginate(10);
        } else {
            $utilities = Utility::orderBy('utilities.id')
                        -> join('user', 'utilities.manage_user_id', '=', 'user.id')
                        -> where('hotline', 'like', '%'.$hotline.'%') -> paginate(10);
        }
        return view('cms.utility.utilities') -> with('utilities', $utilities);
    }
}
