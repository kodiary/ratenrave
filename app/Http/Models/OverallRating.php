<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;


class OverallRating extends BaseModel {

    protected $table = 'overall_rating';
    protected $primaryKey = 'id';
    public $timestamps = false;

    /**
     * @param array
     * @return Array
     */
    public function populate($data) {
        $cells = array('target_id', 'rate_id', 'average_rating','verified');
        $this->copycells($cells, $data);
    }
    
    public static function insertdata($values)
    {
        //var_dump($values); die();
        if(self::checkreview($values['rate_id'],$values['target_id']))
        {
            
            \DB::table('overall_rating')->where('rate_id',$values['rate_id'])->where('target_id',$values['target_id'])->update($values);
           
        }
            
        else
            \DB::table('overall_rating')->insert($values);
            
        
    }
    
    public static function checkreview($uid,$cid)
    {
        
        if(self::where('target_id',$cid)->where('rate_id',$uid)->count())
            return true;
        else
            return false;
    }
    

}