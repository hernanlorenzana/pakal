<?php

/**
 * pais actions.
 *
 * @package    pakal
 * @subpackage pais
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class paisActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->paiss = Doctrine_Core::getTable('pais')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new paisForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new paisForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($pais = Doctrine_Core::getTable('pais')->find(array($request->getParameter('id'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id')));
    $this->form = new paisForm($pais);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($pais = Doctrine_Core::getTable('pais')->find(array($request->getParameter('id'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id')));
    $this->form = new paisForm($pais);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($pais = Doctrine_Core::getTable('pais')->find(array($request->getParameter('id'))), sprintf('Object pais does not exist (%s).', $request->getParameter('id')));
    $pais->delete();

    $this->redirect('pais/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $pais = $form->save();

      $this->redirect('pais/edit?id='.$pais->getId());
    }
  }
}
