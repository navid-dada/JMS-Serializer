<?php

namespace Model;
use JMS\Serializer\Annotation\XmlNamespace;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlElement;
use JMS\Serializer\Annotation\XmlRoot;
/**
 * @XmlNamespace(uri = "my:namespace:data")
 * @XmlNamespace(uri = "my:namespace:data:ops", prefix= "nvd")
 * @XmlRoot("Person")
 */
class Person
{
    /**
     * @Type("string")
     * @SerializedName("name")
     * @XmlElement(cdata=false, namespace="my:namespace:data:ops")
     */
    public string $firstname;

    /**
     * @Type("string")
     * @SerializedName("family")
     * @XmlElement(cdata=false, namespace="my:namespace:data:ops")
     */
    public string $lastname;
}