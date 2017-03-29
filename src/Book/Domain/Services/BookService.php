<?php

namespace Laraviet\DDDBook\Book\Domain\Services;

use Laraviet\DDDCore\Domain\Services\BaseService;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;
use Laraviet\DDDBook\Book\Domain\Entities\Validators\BookValidatorInterface;

class BookService extends BaseService implements BookServiceInterface
{
    public function __construct(BookRepositoryInterface $repository,BookValidatorInterface $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }
}