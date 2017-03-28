<?php

namespace Laraviet\DDDBook\Book\Persistence;

use Laraviet\DDDBook\Book\Persistence\Models\Book;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;
use Laraviet\DDDCore\Book\Domain\Entities\AbstractEntity;
use Laraviet\DDDCore\Book\Persistence\Eloquent\BaseRepository;

class BookEloquentRepository extends BaseRepository implements BookRepositoryInterface
{

    public function __construct(AbstractEntity $entity, Book $model)
    {
        $this->entity = $entity;
        $this->model = $model;
    }

}