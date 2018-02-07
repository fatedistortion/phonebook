<?php

namespace AppBundle\Entity;

/**
 * Contact
 */
class Contact
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $number;

    /**
     * @var integer
     */
    private $phoneTypeId;

    /**
     * @var \AppBundle\Entity\PhoneType
     */
    private $phone_type;

    public function __toString()
    {
        return $this->getFirstName().' '.$this->getLastName();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Contact
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Contact
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Contact
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set phoneTypeId
     *
     * @param integer $phoneTypeId
     *
     * @return Contact
     */
    public function setPhoneTypeId($phoneTypeId)
    {
        $this->phoneTypeId = $phoneTypeId;

        return $this;
    }

    /**
     * Get phoneTypeId
     *
     * @return integer
     */
    public function getPhoneTypeId()
    {
        return $this->phoneTypeId;
    }

    /**
     * Set phoneType
     *
     * @param \AppBundle\Entity\PhoneType $phoneType
     *
     * @return Contact
     */
    public function setPhoneType(\AppBundle\Entity\PhoneType $phoneType = null)
    {
        $this->phone_type = $phoneType;

        return $this;
    }

    /**
     * Get phoneType
     *
     * @return \AppBundle\Entity\PhoneType
     */
    public function getPhoneType()
    {
        return $this->phone_type;
    }
}
