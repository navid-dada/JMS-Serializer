<?php
require_once 'Model/Person.php';
require_once 'vendor/autoload.php';
$serializer = \JMS\Serializer\SerializerBuilder::create()->build();
$person = new \Model\Person();
$person->firstname = "Navid";
$person->lastname = "Shokri";
$result = $serializer->serialize($person, 'xml');
var_dump($result);
$new = $serializer->deserialize($result, \Model\Person::class, 'xml');

var_dump( $new);

