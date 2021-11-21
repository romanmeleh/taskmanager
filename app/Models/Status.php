<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static getStatuses()
 */
class Status extends Model
{
    use HasFactory;
    protected $fillable = ['name','sort','created_at','updated_at'];


    public function getStasuses(){
        $this->get();
    }

}
