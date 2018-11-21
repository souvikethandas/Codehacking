<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $imagepath='/images/';

    protected $fillable= ['file'];

    public function getFileAttribute($photo){

        return $this->imagepath . $photo;

    }



}
