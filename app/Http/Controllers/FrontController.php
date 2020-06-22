<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function storenewsletter(Request $request)
    {
        $this->validate($request, [
           'email' => 'required|unique:newslaters|max:55|string|email'
        ]);

        DB::table('newslaters')->insert([
            'email'   => $request->email,
            'created_at' => \Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => \Carbon\Carbon::now()->toDateTimeString()
        ]);

        $notification = array(
            'messege'=>'Thanks for subscribe!',
            'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
    }
}
