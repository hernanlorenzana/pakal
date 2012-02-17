<?php

/**
 * tipoluz actions.
 *
 * @package    pakal
 * @subpackage tipoluz
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipoluzActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipoluzs = Doctrine_Core::getTable('tipoluz')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tipoluzForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tipoluzForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipoluz = Doctrine_Core::getTable('tipoluz')->find(array($request->getParameter('id'))), sprintf('Object tipoluz does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipoluzForm($tipoluz);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipoluz = Doctrine_Core::getTable('tipoluz')->find(array($request->getParameter('id'))), sprintf('Object tipoluz does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipoluzForm($tipoluz);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipoluz = Doctrine_Core::getTable('tipoluz')->find(array($request->getParameter('id'))), sprintf('Object tipoluz does not exist (%s).', $request->getParameter('id')));
    $tipoluz->delete();

    $this->redirect('tipoluz/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipoluz = $form->save();

      $this->redirect('tipoluz/edit?id='.$tipoluz->getId());
    }
  }
}
