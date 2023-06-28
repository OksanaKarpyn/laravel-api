<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table ='categories';
    //singl record della categoria e in relazione co piu post x qest si chiama projects /chamato noi 
    public function projects(){
        return $this->hasMany(Project::class);
    }
}