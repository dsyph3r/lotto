<?php

namespace Security\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Security\UserBundle\Login;

class UserController extends Controller
{
    public function indexAction()
    {
      //$contactRequest = new ContactRequest($this->get('mailer'));
      $form = LoginForm::create($this->get('form.context'), 'user');
  
      // If a POST request, write the submitted data into $contactRequest
      // and validate the object
      //$form->bind($this->get('request'), $contactRequest);
  
      // If the form has been submitted and is valid...
      //if ($form->isValid()) {
      //    $contactRequest->send();
      //}
  
      // Display the form with the values in $contactRequest
      return $this->render('SecurityUserBundle:User:index.html.twig', array(
          'form' => $form
      ));
    }
    
}
