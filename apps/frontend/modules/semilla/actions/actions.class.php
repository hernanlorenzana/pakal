<?php

/**
 * semilla actions.
 *
 * @package    pakal
 * @subpackage semilla
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class semillaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->semillas = Doctrine_Core::getTable('semilla')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new semillaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new semillaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($semilla = Doctrine_Core::getTable('semilla')->find(array($request->getParameter('id'))), sprintf('Object semilla does not exist (%s).', $request->getParameter('id')));
    $this->form = new semillaForm($semilla);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($semilla = Doctrine_Core::getTable('semilla')->find(array($request->getParameter('id'))), sprintf('Object semilla does not exist (%s).', $request->getParameter('id')));
    $this->form = new semillaForm($semilla);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($semilla = Doctrine_Core::getTable('semilla')->find(array($request->getParameter('id'))), sprintf('Object semilla does not exist (%s).', $request->getParameter('id')));
    $semilla->delete();

    $this->redirect('semilla/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $semilla = $form->save();

      $this->redirect('semilla/edit?id='.$semilla->getId());
    }
  }
}
