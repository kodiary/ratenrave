<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    
    public function redirect()
    {
        return \Socialite::driver('facebook')->redirect();   
    }   

    public function callback()
    {
        $user = \Socialite::driver('facebook')->user(); 
        $arr['fb_id'] = $user->getId();
        //$arr['nick_name'] = $user->getNickname();
        $arr['name'] = $user->getName();
        $arr['email'] = $user->getEmail();
        $arr['image'] = $user->getAvatar();
        //var_dump($arr);die();
        
        if($arr['fb_id'])
        {
            $user_count = \App\Http\Models\Profiles::where('fb_id', $arr['fb_id'])->count();
            if(!$user_count)
            {
                $arr['created_date'] = date('Y-m-d');
                $add = \App\Http\Models\Profiles::findOrNew(0);
                $add->populate($arr);
                $add->save();
            }
            else
            {
                $user = \App\Http\Models\Profiles::where('fb_id', $arr['fb_id'])->get();
                $val = $user[0];
                $add = \App\Http\Models\ProfilesAddresses::findOrNew($val->id);
                $add->populate($arr);
                $add->save();
                
            }
            $a = $this->generateSession($arr);
        }
        return redirect('/');
    }
    public function generateSession($arr)
    {
        foreach($arr as $key=>$val)
        {
            \Session::put($key, $val);
        }
    }
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
