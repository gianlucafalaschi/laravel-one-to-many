<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Type;  // questo non e' necessario, lo importiamo solo se vogliamo essere espliciti

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','client_name', 'summary', 'cover_image'];

    public function type() {
         // la foreign key fa capo alla tabella Type il cui model e' Type 
        return $this->belongsTo(Type::class); 
    }

}
