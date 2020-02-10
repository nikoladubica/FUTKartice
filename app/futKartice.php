<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class futKartice extends Model
{
    protected $guarded= ['url_slike'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
