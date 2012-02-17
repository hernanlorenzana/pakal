<?php

/**
 * luz actions.
 *
 * @package    pakal
 * @subpackage luz
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class luzActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->luzs = Doctrine_Core::getTable('luz')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new luzForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new luzForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($luz = Doctrine_Core::getTable('luz')->find(array($request->getParameter('id'))), sprintf('Object luz does not exist (%s).', $request->getParameter('id')));
    $this->form = new luzForm($luz);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($luz = Doctrine_Core::getTable('luz')->find(array($request->getParameter('id'))), sprintf('Object luz does not exist (%s).', $request->getParameter('id')));
    $this->form = new luzForm($luz);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($luz = Doctrine_Core::getTable('luz')->find(array($request->getParameter('id'))), sprintf('Object luz does not exist (%s).', $request->getParameter('id')));
    $luz->delete();

    $this->redirect('luz/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $luz = $form->save();

      $this->redirect('luz/edit?id='.$luz->getId());
    }
  }
}
