<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exhibition extends Model
{
    protected $primaryKey = 'exh_id';

    /** 可填寫之欄位 */
    protected $fillable = [
        'title',
        'description',
        'source_web_promote',
        'source_web_name',
        'on_sales',
        'image_url',
        'start_datetime',
        'end_datetime',
        'site_id',
        'show_unit',
    ];

    public function site()
    {
        return $this->belongsTo(Site::class, 'site_id', 'site_id');
    }

    public function showUnit()
    {
        return $this->belongsTo(Organization::class, 'show_unit', 'org_id');
    }
}
