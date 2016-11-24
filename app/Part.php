<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{
    public function devices()
    {
        return $this->hasMany(Device::class);
    }

    public function vendor()
    {
        return $this->hasOne(Vendor::class);
    }
}
