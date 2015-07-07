<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Entry
 */
class Entry
{
    // @var integer
    private $id;
    // @var string
    private $email;
    // @var string
    private $name;
    // @var string
    private $ip_addr;

    /**
     * Get ID
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Email
     * @param string $email
     * @return Entry
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get Email
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set Name
     * @param string $name
     * @return Entry
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Name
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set IP Address
     * @param string $ipAddr
     * @return Entry
     */
    public function setIpAddr($ipAddr)
    {
        $this->ip_addr = $ipAddr;
        return $this;
    }

    /**
     * Get IP Address
     * @return string 
     */
    public function getIpAddr()
    {
        return $this->ip_addr;
    }
}
