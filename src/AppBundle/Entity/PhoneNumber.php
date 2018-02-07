<?php

namespace AppBundle\Entity;

/**
 * PhoneNumber
 */
class PhoneNumber
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $number;

    /**
     * @var integer
     */
    private $contactId;

    /**
     * @var integer
     */
    private $phoneTypeId;

    /**
     * @var \AppBundle\Entity\Contact
     */
    private $contact;

    /**
     * @var \AppBundle\Entity\PhoneType
     */
    private $phoneType;


    public function __toString()
    {
        return $this->getNumber();
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
     * Set number
     *
     * @param string $number
     *
     * @return PhoneNumber
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
     * Set contactId
     *
     * @param integer $contactId
     *
     * @return PhoneNumber
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return integer
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set phoneTypeId
     *
     * @param integer $phoneTypeId
     *
     * @return PhoneNumber
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
     * Set contact
     *
     * @param \AppBundle\Entity\Contact $contact
     *
     * @return PhoneNumber
     */
    public function setContact(\AppBundle\Entity\Contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \AppBundle\Entity\Contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set phoneType
     *
     * @param \AppBundle\Entity\PhoneType $phoneType
     *
     * @return PhoneNumber
     */
    public function setPhoneType(\AppBundle\Entity\PhoneType $phoneType = null)
    {
        $this->phoneType = $phoneType;

        return $this;
    }

    /**
     * Get phoneType
     *
     * @return \AppBundle\Entity\PhoneType
     */
    public function getPhoneType()
    {
        return $this->phoneType;
    }
}
