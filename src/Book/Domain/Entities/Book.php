<?php

namespace Laraviet\DDDBook\Book\Domain\Entities;

use Laraviet\DDDCore\Domain\Entities\BaseModel;

class Book extends BaseModel
{
    public static $rules = [
        "title" => "required|unique:books",
        "author" => "required",
    ];

    protected $fillable = ["title", "author"];
}
