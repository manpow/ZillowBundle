<?php

/**
 * This file is part of the KMJZillowBundle
 * @copyright (c) 2014, Kaelin Jacobson
 * @category Responses
 */

namespace KMJ\ZillowBundle\Response;

use KMJ\ZillowBundle\Interfaces\XmlMapper;
use SimpleXMLElement;

/**
 * Base Response class
 * @author Kaelin Jacobson <kaelinjacobson@gmail.com>
 */
class Response implements XmlMapper {

    use \KMJ\ZillowBundle\Traits\PropertyAutoMapper;

    /**
     *  Zillow Property Id
     *
     * @var string
     */
    protected $zpid;

    /**
     * If true: Zillow api limit is close to being reached
     *
     * @var boolean
     */
    protected $limitWarning;

    /**
     * @var string
     */
    protected $payload;

    /**
     * Initializes the class and loads the XML element into it
     *
     * @param SimpleXMLElement $xml The XML to load
     */
    public function __construct(SimpleXMLElement $xml) {
        $this->load($xml);
        $this->payload = $xml->asXML();
    }

    /**
     * Get the value of Zillow Property Id
     *
     * @return string
     */
    public function getZpid() {
        return $this->zpid;
    }

    /**
     * @return string
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * Get the value of If true: Zillow api limit is close to being reached
     *
     * @return boolean
     */
    public function getLimitWarning() {
        return $this->limitWarning;
    }

}
