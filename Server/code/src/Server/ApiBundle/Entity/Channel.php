<?php

// src/Server/ApiBundle/Entity/Channel.php
namespace Server\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="channel")
 */
class Channel  {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer")
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $messageid;

	/**
	* @ORM\Column(type="string", length=50)
	*/
	protected $name;

	/**
	* @ORM\Column(type="string", length=255)
	*/
	protected $message;

	/**
	* @ORM\Column(type="string", length=100)
	*/
	protected $channel;

    /**
     * Get messageid
     *
     * @return integer 
     */
    public function getMessageid()
    {
        return $this->messageid;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Channel
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set message
     *
     * @param string $message
     * @return Channel
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set channel
     *
     * @param integer $channel
     * @return Channel
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    
        return $this;
    }

    /**
     * Get channel
     *
     * @return integer 
     */
    public function getChannel()
    {
        return $this->channel;
    }
}