<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnology extends Model
{
    use HasFactory;
    protected $table = 'tecnologies';

    protected $fillable = [
        "title",
        "slug",
    ];

    public function projects(){
        return $this->belongsToMany(Project::class);
    }
}