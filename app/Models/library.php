<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\library;
use Carbon\Carbon;

class library extends Model
{
    use HasFactory;

    protected $data = "library";
    protected $fillable =[
        'title',
        'author',
        'description',
        'isbn',
        'published year'
    ];
    protected $appends = ['title', 'author'];
    public function getAuthorAttributes()
    {
        return $this->fname . ' ' . $this->lname;
    }
    public function library()
    {
        return $this->hasMany(library::class, 'library_id');
    }
}
