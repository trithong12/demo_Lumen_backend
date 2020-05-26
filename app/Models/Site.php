<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $primaryKey = 'site_id';

    /** 可填寫之欄位 */
    protected $fillable = [
        'site_name',
        'site_addr',
        'latitude',
        'longitude'
    ];

    public function exhibitions()
    {
        return $this->hasMany(Exhibition::class);
    }
}
