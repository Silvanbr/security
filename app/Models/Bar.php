<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bar extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getOrdan() {
        $ordan = "normal";

        if ($this->waldo == null) {
            $ordan = "empty";
        }
        if ($this->grault <= 3.141592653) {
            $ordan = "low";
        }
        return $ordan;
    }

    public function user() {
        return $this->belongsTo(User::class, "dolor");
    }
}
