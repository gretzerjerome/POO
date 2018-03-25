<?php

require 'form.php';

$form = new form(array(

    'username' => 'roger'

var_dump($form);

die();

));

echo $form->input('username');

echo $form->input('password');

echo $form->submit();



