<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public $guarded=[];
    public function CreateCard(){
        return $this->belongsTo(CreateCard::class,'card_id');
    }
}
