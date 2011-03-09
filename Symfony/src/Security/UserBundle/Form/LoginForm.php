<?php

namespace Security\UserBundle\Login;

use Symfony\Component\Form\Form;
use Symfony\Component\Form\TextField;
use Symfony\Component\Form\TextareaField;
use Symfony\Component\Form\CheckboxField;

class LoginForm extends Form
{
    protected function configure()
    {
        $this->add(new TextField('subject', array(
            'max_length' => 100,
        )));
        $this->add(new TextareaField('message'));
        $this->add(new TextField('sender'));
        $this->add(new CheckboxField('ccmyself', array(
            'required' => false,
        )));
    }
}
