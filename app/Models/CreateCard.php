<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class CreateCard extends Model
{
    protected $guarded=[];
    protected $table='create_cards';
    public function Images(){
        return $this->hasMany(image::class,'card_id');
    }


}
