<?php

/**
 * estado actions.
 *
 * @package    pakal
 * @subpackage estado
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadoActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->estados = Doctrine_Core::getTable('estado')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new estadoForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new estadoForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($estado = Doctrine_Core::getTable('estado')->find(array($request->getParameter('id'))), sprintf('Object estado does not exist (%s).', $request->getParameter('id')));
    $this->form = new estadoForm($estado);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($estado = Doctrine_Core::getTable('estado')->find(array($request->getParameter('id'))), sprintf('Object estado does not exist (%s).', $request->getParameter('id')));
    $this->form = new estadoForm($estado);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($estado = Doctrine_Core::getTable('estado')->find(array($request->getParameter('id'))), sprintf('Object estado does not exist (%s).', $request->getParameter('id')));
    $estado->delete();

    $this->redirect('estado/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $estado = $form->save();

      $this->redirect('estado/edit?id='.$estado->getId());
    }
  }
}
