<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    //
    public function userAdd(Request $request) {

        // echo '<br>firstname: '.$name;
        // exit;

        $post = new User();
        dd($request->input());
    
        $post->userName = $request->input('firstname');
    
        // $data = array(
            // 'userName' => $name
        // );
    
        $post->save();

        return redirect('/');
    
     }


}
