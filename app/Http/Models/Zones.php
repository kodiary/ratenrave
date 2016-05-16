<?php
namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Zones extends BaseModel
{

    protected $table = 'zones';
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function populate($data) {
        $cells = array('title');
        $this->copycells($cells, $data);
    }

}