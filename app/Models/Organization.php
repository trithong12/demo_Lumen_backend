<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $primaryKey = 'org_id';

    /** 可填寫之欄位 */
    protected $fillable = [
        'org_name',
        'org_addr'
    ];

    public function exhibitions()
    {
        return $this->hasMany(Exhibition::class);
    }
}
