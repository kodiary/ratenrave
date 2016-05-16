<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Districts extends BaseModel
{

    protected $table = 'districts';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function populate($data) {
        $cells = array('title','zone_id');
        $this->copycells($cells, $data);
    }

}