<?php

namespace Laraviet\DDDBook\Book\Domain\Services;

use Laraviet\DDDCore\Domain\Services\BaseService;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;

class BookService extends BaseService implements BookServiceInterface
{
    public function __construct(BookRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}