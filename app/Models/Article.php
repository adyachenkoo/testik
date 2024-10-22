<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use HasFactory;
    use SoftDeletes;
    public $timestamps = false;
    protected $guarded = [];

    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

}
