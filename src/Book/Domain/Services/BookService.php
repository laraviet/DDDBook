<?php

namespace Laraviet\DDDBook\Book\Domain\Services;

use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;
use Laraviet\DDDBook\Book\Domain\Entities\Validators\BookValidatorInterface;

class BookService implements BookServiceInterface
{
    protected $bookRepository;
    protected $validator;

    public function __construct(BookRepositoryInterface $bookRepository,BookValidatorInterface $validator)
    {
        $this->bookRepository = $bookRepository;
        $this->validator = $validator;
    }

    public function getAll()
    {
        return $this->bookRepository->getAll();
    }

    public function getById($id)
    {
        return $this->bookRepository->getById($id);
    }

    public function persist($id, $request)
    {
        $this->validator->validate($request);
        $book = $this->getById($id);
        return $this->bookRepository->persist($book);
    }

    public function paginate($quantity = null)
    {
        return $this->bookRepository->paginate($quantity);
    }

}