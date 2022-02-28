<?php
require_once 'Model/Person.php';
require_once 'vendor/autoload.php';
$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
$person = new \Model\Person();
$person->firstname = "Navid";
$person->lastname = "Shokri";

var_dump($serializer->serialize($person, 'xml'));
