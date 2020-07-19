<?php

namespace Staff\Models\Settings;

use App\Models\Admin;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    protected $fillable = ['arabicSector','englishSector','sort','user_id'];

    public function admins()
    {
        return $this->belongsTo(Admin::class);
    }
}
