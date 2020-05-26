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
        'exh_cate_id',
        'site_id',
        'master_unit',
        'sub_unit',
        'support_unit'
    ];

    public function category()
    {
        return $this->belongsTo(ExhibitionCategory::class);
    }

    public function site()
    {
        return $this->belongsTo(Site::class);
    }

    public function masterUnit()
    {
        return $this->belongsTo(Organization::class);
    }

    public function subUnit()
    {
        return $this->belongsTo(Organization::class);
    }

    public function supportUnit()
    {
        return $this->belongsTo(Organization::class);
    }
}
