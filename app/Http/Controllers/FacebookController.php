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
        $arr['raw'] = $user->getRaw();
        
       
  // response is of the format "access_token=AAAC..."
  /*$access_token = 'EAAI7NQF38NUBACYAqiFsCvVLJ2yn9xQ6e21DzZBxTVN7ScgTSCUxnNtVKRD3Os6NzdB43ZBRUqF9zySop47Y2B2FOmOBrdeoUwFKVlIH90Gyag9eb03F6dZA7DMO51FF7djKqpTjMQBZBKbqCiIoSZAc1zKZA14P8ZD';

  // run fql query
  echo $fql_query_url = 'https://graph.facebook.com/'
    . 'fql?q=SELECT+education+FROM+user+WHERE+uid=me()'
    . '&access_token=' . $access_token;die();
  $fql_query_result = file_get_contents($fql_query_url);
  $fql_query_obj = json_decode($fql_query_result, true);

  // display results of fql query
  echo '<pre>';
  print_r("query results:");
  print_r($fql_query_obj);
  echo '</pre>';
*/

        
        var_dump($user);
        die();
        
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
