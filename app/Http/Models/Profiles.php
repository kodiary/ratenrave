<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use \App\Http\Models\Products;

class Profiles extends BaseModel {

    protected $table = 'profiles';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $hidden = array('password');

    /**
     * @param array
     * @return Array
     */

    public function populate($data,$addlogo = false) {
        $cells = array('fb_id', 'name', 'email', 'image','edu1','edu2','edu3','edu4','edu5','created_at','updated_at');
        $this->copycells($cells, $data);
    }

    public static function listing($array = "", $type = "", &$reccount = 0){
        //echo "<pre>".print_r($array)."</pre>"; exit();
        $searchResults = $array['searchResults'];
        $meta = "profiles." . $array['meta'];
        $order = $array['order'];
        $per_page = $array['per_page'];
        $start = $array['start'];
        $query = Profiles::select('profiles.*', 'restaurants.name as restname', 'restaurants.slug as restslug')
                ->Where(function($query) use ($searchResults){
                    if($searchResults != ""){
                          $query->orWhere('profiles.name', 'LIKE', "%$searchResults%")
                                ->orWhere('profiles.email', 'LIKE', "%$searchResults%")
                                ->orWhere('profiles.created_at', 'LIKE', "%$searchResults%")
                                ->orWhere('restaurants.name', 'LIKE', "%$searchResults%");
                    }
                })
                ->orderBy($meta, $order)
                ->leftJoin('restaurants', 'profiles.restaurant_id', '=', 'restaurants.id');

        debugprint("PROFILE LISTING " .  $query->toSql());

        $reccount = $query->count();
        if ($type == "list") {
            $query->take($per_page);
            if($start){$query->skip($start);}
        }
        return $query;
    }
    public static function check_edu($uid,$cid)
    {
        $user = self::find($uid);
        //var_dump($user);
        $college = Products::find($cid);
        $name = strtolower($college->name);
        //echo "<br/>";
        $abbr_name = strtolower(preg_replace("~\b(\w)|.~",'$1',$name));
        
        $per = 0;
        for($i=1;$i<=5;$i++)
        {
            
            if($user->{"edu".$i}!='')
            {
                $edu[] = strtolower($user->{"edu".$i});
                similar_text($name, strtolower($user->{"edu".$i}), $temp);
                
                if($temp > $per)
                    $per = $temp;
                if($per == 100)
                break;
            }
                
        }
        //echo "<br/>";
        
        if(in_array($name, $edu)|| in_array($abbr_name, $edu) || $per >=90)
            return true;
        else
            return false;
       
        
    }
    
}