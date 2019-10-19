<?php


namespace CleanPhp\Invoicer\Domain\Repository;


interface RepositoryInterface
{
    /**
     * @param $id
     * @return mixed
     */
    public function getById($id);

    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @param $entity
     * @return mixed
     */
    public function persist($entity);

    /**
     * @return mixed
     */
    public function beginTransaction();

    /**
     * @return mixed
     */
    public function commit();
}