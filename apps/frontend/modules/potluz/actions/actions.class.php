<?php

/**
 * potluz actions.
 *
 * @package    pakal
 * @subpackage potluz
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class potluzActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->potluzs = Doctrine_Core::getTable('potluz')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new potluzForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new potluzForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($potluz = Doctrine_Core::getTable('potluz')->find(array($request->getParameter('id'))), sprintf('Object potluz does not exist (%s).', $request->getParameter('id')));
    $this->form = new potluzForm($potluz);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($potluz = Doctrine_Core::getTable('potluz')->find(array($request->getParameter('id'))), sprintf('Object potluz does not exist (%s).', $request->getParameter('id')));
    $this->form = new potluzForm($potluz);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($potluz = Doctrine_Core::getTable('potluz')->find(array($request->getParameter('id'))), sprintf('Object potluz does not exist (%s).', $request->getParameter('id')));
    $potluz->delete();

    $this->redirect('potluz/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $potluz = $form->save();

      $this->redirect('potluz/edit?id='.$potluz->getId());
    }
  }
}
