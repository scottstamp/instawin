<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Winner
 */
class Winner
{
    // @var integer
    private $id;
    // @var string
    private $email;
    // @var string
    private $name;
    // @var string
    private $ip_addr;
    // @var \Prize
    private $prize;

    /**
     * Get ID
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set Email
     * @param string $email
     * @return Winner
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
     *
     * @param string $name
     * @return Winner
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
     * @return Winner
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

    /**
     * Set Prize
     * @param \Prize $prize
     * @return Winner
     */
    public function setPrize(\Prize $prize = null)
    {
        $this->prize = $prize;
        return $this;
    }

    /**
     * Get Prize
     * @return \Prize 
     */
    public function getPrize()
    {
        return $this->prize;
    }
}
