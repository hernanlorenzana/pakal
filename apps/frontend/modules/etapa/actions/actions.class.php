<?php

/**
 * etapa actions.
 *
 * @package    pakal
 * @subpackage etapa
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class etapaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->etapas = Doctrine_Core::getTable('etapa')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new etapaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new etapaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($etapa = Doctrine_Core::getTable('etapa')->find(array($request->getParameter('id'))), sprintf('Object etapa does not exist (%s).', $request->getParameter('id')));
    $this->form = new etapaForm($etapa);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($etapa = Doctrine_Core::getTable('etapa')->find(array($request->getParameter('id'))), sprintf('Object etapa does not exist (%s).', $request->getParameter('id')));
    $this->form = new etapaForm($etapa);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($etapa = Doctrine_Core::getTable('etapa')->find(array($request->getParameter('id'))), sprintf('Object etapa does not exist (%s).', $request->getParameter('id')));
    $etapa->delete();

    $this->redirect('etapa/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $etapa = $form->save();

      $this->redirect('etapa/edit?id='.$etapa->getId());
    }
  }
}
