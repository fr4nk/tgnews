<?php

/**
 * content actions.
 *
 * @package    tgnews
 * @subpackage content
 * @author     Frank Mattes
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class contentActions extends sfActions
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
       * Executes show action
       * 
       * @param null
       */
    public function executeShow()
    {
      $today = getdate();
      $this->hour = $today['hours'];
    }
        
    public function executeUpdate($request)
{
$this->name = $request->getParameter('name');
}
}
