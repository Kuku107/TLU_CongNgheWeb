<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{
    protected $fillable = ["computer_id", "reported_by", "reported_date", "description", "urgency", "status"];
    public $timestamps = false;
    public function computer() {
        return $this->belongsTo(Computer::class);
    }
}
