<?php


namespace CleanPhp\Invoicer\Domain\Entity;


abstract class AbstractEntity
{
    /** @var int */
    protected $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return AbstractEntity
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }
}