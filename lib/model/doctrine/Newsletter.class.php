<?php

/**
 * Newsletter
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    tgnews
 * @subpackage model
 * @author     Frank Mattes
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Newsletter extends BaseNewsletter
{
  public function __toString()
  {
    return $this->getName();
  }
}