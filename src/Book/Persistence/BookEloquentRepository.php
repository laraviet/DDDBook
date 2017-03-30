<?php

namespace Laraviet\DDDBook\Book\Persistence;

use Laraviet\DDDCore\Domain\Entities\BaseModel;
use Laraviet\DDDCore\Persistence\Eloquent\BaseRepository;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;

class BookEloquentRepository extends BaseRepository implements BookRepositoryInterface
{

    public function __construct(BaseModel $model)
    {
        $this->model = $model;
    }

}