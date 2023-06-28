<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = 'projects';
    protected $fillable =[
        'title',
        'content',
        'slug',
        'image',
        'category_id'
    ];
    // 1 post hanno una sola categoria
    public function category(){
        //belongsTo->questo dice collegamento con uno solo post
        return $this->belongsTo(Category::class);
    }
    public function tecnologies(){
        return $this->belongsToMany(Tecnology::class);
    }
}