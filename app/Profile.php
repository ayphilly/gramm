<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded= [];

    public function Profileimage() {
        $imagePath = ($this->image) ?  $this->image : '/profile/YVxhnBtlp9LOq0j0HixVdYlVXEDNxvhhsgMz9n8j.png';
        return '/storage/'. $imagePath ;
    }
    public function user () {
        return $this->belongsTo(User::class);
    }
}
