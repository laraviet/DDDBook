<?php

namespace Laraviet\DDDBook\Book\Persistence;

use Illuminate\Cache\Repository as Cache;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;
use Laraviet\DDDCore\Book\Persistence\Cache\BaseRepository;

class BookCacheRepository extends BaseRepository implements BookRepositoryInterface
{

    public function __construct(BookRepositoryInterface $repository,Cache $cache)
    {
        $this->repository = $repository;
        $this->cache = $cache;
        parent::__construct();
    }



}