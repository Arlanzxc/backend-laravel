<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'birthdate'];

    public function fullName()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
