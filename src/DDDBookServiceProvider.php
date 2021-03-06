<?php

namespace Laraviet\DDDBook;


use Laraviet\DDDBook\Book\Persistence\Models\Book as BookModel;
use Illuminate\Support\ServiceProvider;
use Laraviet\DDDBook\Book\Domain\Services\BookService;
use Laraviet\DDDBook\Book\Persistence\BookCacheRepository;
use Laraviet\DDDBook\Book\Domain\Entities\Book as BookEntity;
use Laraviet\DDDBook\Book\Persistence\BookEloquentRepository;
use Laraviet\DDDBook\Book\Domain\Services\BookServiceInterface;
use Laraviet\DDDBook\Book\Domain\Repositories\BookRepositoryInterface;
use Laraviet\DDDBook\Book\Domain\Entities\Validators\BookLaravelValidator;
use Laraviet\DDDBook\Book\Domain\Entities\Validators\BookValidatorInterface;


class DDDBookServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(BookServiceInterface::class, BookService::class);

        $this->app->bind(BookValidatorInterface::class, BookLaravelValidator::class);

        $this->app->singleton(BookRepositoryInterface::class, function($app){
            $bookRepo = new BookEloquentRepository(new BookEntity(), new BookModel());
            // return $bookRepo;
            return new BookCacheRepository($bookRepo, $this->app['cache.store']);
        });
    }
}