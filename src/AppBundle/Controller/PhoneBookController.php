<?php

namespace AppBundle\Controller;

use EasyCorp\Bundle\EasyAdminBundle\Controller\AdminController as BaseAdminController;

class PhoneBookController extends BaseAdminController
{

    public function newPhoneAction()
    {
        $contactId = $this->request->query->get('id');
        return $this->redirectToRoute('easyadmin', array(
           'action' => 'new',
           'contactId' => $contactId,
           'entity' => 'PhoneNumber',
       ));
    }
}
