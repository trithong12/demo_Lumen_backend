<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExhibitionCategory extends Model
{
    protected $primaryKey = 'exh_cate_id';

    /** 可填寫之欄位 */
    protected $fillable = [
        'exh_cate_name'
    ];

    public function exhibitions()
    {
        return $this->hasMany(Exhibition::class);
    }
}
