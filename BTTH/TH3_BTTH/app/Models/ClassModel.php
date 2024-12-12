<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClassModel extends Model
{
    protected $fillable = ["grade_level", "room_number"];
    protected $table = "classes";
    public function students() {
        return $this->hasMany(Student::class);
    }
}