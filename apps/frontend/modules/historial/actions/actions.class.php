<?php

/**
 * historial actions.
 *
 * @package    pakal
 * @subpackage historial
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class historialActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->historials = Doctrine_Core::getTable('historial')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new historialForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new historialForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($historial = Doctrine_Core::getTable('historial')->find(array($request->getParameter('id'))), sprintf('Object historial does not exist (%s).', $request->getParameter('id')));
    $this->form = new historialForm($historial);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($historial = Doctrine_Core::getTable('historial')->find(array($request->getParameter('id'))), sprintf('Object historial does not exist (%s).', $request->getParameter('id')));
    $this->form = new historialForm($historial);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($historial = Doctrine_Core::getTable('historial')->find(array($request->getParameter('id'))), sprintf('Object historial does not exist (%s).', $request->getParameter('id')));
    $historial->delete();

    $this->redirect('historial/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $historial = $form->save();

      $this->redirect('historial/edit?id='.$historial->getId());
    }
  }
}
