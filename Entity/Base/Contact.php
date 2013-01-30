<?php

namespace Zorbus\ContactBundle\Entity\Base;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contact
 */
class Contact
{
    public function __toString()
    {
        return sprintf('#%d %s <%s>', $this->getId(), $this->getSubject(), $this->getReceiver());
    }
}
