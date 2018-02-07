<?php

namespace AppBundle\DataFixtures;

use AppBundle\Entity\Contact;
use AppBundle\Entity\PhoneType;
use AppBundle\Entity\PhoneNumber;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $types = array('Home','Work','Cellular','Other');

        $people = array(
            array('first_name' => 'Carlos', 'last_name' => 'Hernandez'),
            array('first_name' => 'Cloud', 'last_name' => 'Strife'),
            array('first_name' => 'Barret', 'last_name' => 'Wallace'),
            array('first_name' => 'Tifa', 'last_name' => 'Lockheart'),
            array('first_name' => 'Red', 'last_name' => 'XIII')
        );

        $phoneTypes = array();

        foreach($types as $type) {
            $phoneType = new PhoneType();
            $phoneType->setDescription($type);
            $manager->persist($phoneType);
            $phoneTypes[] = $phoneType;
        }

        foreach($people as $person) {
            $contact = new Contact();
            $contact->setFirstName($person['first_name']);
            $contact->setLastName($person['last_name']);

            for ($i = 0; $i < rand(1, 3); $i++) {
                $phoneNumber = new PhoneNumber();
                $phoneNumber->setNumber(rand(1111111111,9999999999));
                $phoneNumber->setPhoneType($phoneTypes[rand(0, 3)]);
                $phoneNumber->setContact($contact);
                $manager->persist($phoneNumber);
            }

            $manager->persist($contact);
        }

        $manager->flush();
    }
}
