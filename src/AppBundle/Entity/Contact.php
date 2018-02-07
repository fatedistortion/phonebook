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
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $phoneNumbers;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->phoneNumbers = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Add phoneNumber
     *
     * @param \AppBundle\Entity\PhoneNumber $phoneNumber
     *
     * @return Contact
     */
    public function addPhoneNumber(\AppBundle\Entity\PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers[] = $phoneNumber;

        return $this;
    }

    /**
     * Remove phoneNumber
     *
     * @param \AppBundle\Entity\PhoneNumber $phoneNumber
     */
    public function removePhoneNumber(\AppBundle\Entity\PhoneNumber $phoneNumber)
    {
        $this->phoneNumbers->removeElement($phoneNumber);
    }

    /**
     * Get phoneNumbers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }
}
