<?php

/**
 * newsletter actions.
 *
 * @package    tgnews
 * @subpackage newsletter
 * @author     Frank Mattes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class newsletterActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    $this->forward('default', 'module');
  }
  
  /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeAnmelden(sfWebRequest $request)
  {
  }
  
  
  
}
