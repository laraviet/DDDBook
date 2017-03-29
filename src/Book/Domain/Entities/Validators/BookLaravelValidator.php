<?php

namespace Laraviet\DDDBook\Book\Domain\Entities\Validators;

use Laraviet\DDDCore\Domain\Entities\BaseLaravelValidator;

class BookLaravelValidator extends BaseLaravelValidator implements BookValidatorInterface
{
    protected $rules = [
        "title" => "required",
        "author" => "required",
    ];
}