<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'book_title',
        'author_name',
        'book_description',
        'year_published'
    ];

    public function getId()
    {
        return $this->id;
    }

    public function getBookTitle()
    {
        return $this->book_title;
    }

    public function getAuthorName()
    {
        return $this->author_name;
    }

    public function getBookDescription()
    {
        return $this->book_description;
    }

    public function getYearPublished()
    {
        return $this->year_published;
    }

    public function setBookTitle($value)
    {
        $this->book_title = $value;
        return $this->save();
    }

    public function setAuthorName($value)
    {
        $this->author_name = $value;
        return $this->save();
    }

    public function setBookDescription($value)
    {
        $this->book_description = $value;
        return $this->save();
    }

    public function setYearPublished($value)
    {
        $this->year_published = $value;
        return $this->save();
    }
}
