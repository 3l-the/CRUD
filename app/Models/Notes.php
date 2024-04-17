<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'title', 'content', 'active'
    ]; */

    protected $guarded = [];

    static function todas_las_notas(){
        return Notes::where('active', true)->get();
    }
}