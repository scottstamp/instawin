<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * Prize
 */
class Prize
{
    // @var integer
    private $id;
    // @var string
    private $name;
    // @var boolean
    private $awarded;

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
     * Set Name
     * @param string $name
     * @return Prize
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
     * Set Awarded
     * @param boolean $awarded
     * @return Prize
     */
    public function setAwarded($awarded)
    {
        $this->awarded = $awarded;
        return $this;
    }

    /**
     * Get Awarded
     * @return boolean
     */
    public function getAwarded()
    {
        return $this->awarded;
    }
}
