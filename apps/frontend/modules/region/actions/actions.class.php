<?php

/**
 * region actions.
 *
 * @package    pakal
 * @subpackage region
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class regionActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->regions = Doctrine_Core::getTable('region')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new regionForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new regionForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($region = Doctrine_Core::getTable('region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new regionForm($region);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($region = Doctrine_Core::getTable('region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $this->form = new regionForm($region);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($region = Doctrine_Core::getTable('region')->find(array($request->getParameter('id'))), sprintf('Object region does not exist (%s).', $request->getParameter('id')));
    $region->delete();

    $this->redirect('region/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $region = $form->save();

      $this->redirect('region/edit?id='.$region->getId());
    }
  }
}
