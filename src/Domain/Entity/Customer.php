<?php


namespace CleanPhp\Invoicer\Domain\Entity;


/**
 * Class Customer
 * @package CleanPhp\Invoicer\Domain\Entity
 */
class Customer extends AbstractEntity
{
    /** @var string*/
    protected $name;
    /** @var string*/
    protected $email;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return Customer
     */
    public function setName(string $name): Customer
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     * @return Customer
     */
    public function setEmail(string $email): Customer
    {
        $this->email = $email;
        return $this;
    }


}