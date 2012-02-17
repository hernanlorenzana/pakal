<?php

/**
 * tipotarea actions.
 *
 * @package    pakal
 * @subpackage tipotarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tipotareaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tipotareas = Doctrine_Core::getTable('tipotarea')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tipotareaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tipotareaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tipotarea = Doctrine_Core::getTable('tipotarea')->find(array($request->getParameter('id'))), sprintf('Object tipotarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipotareaForm($tipotarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tipotarea = Doctrine_Core::getTable('tipotarea')->find(array($request->getParameter('id'))), sprintf('Object tipotarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tipotareaForm($tipotarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tipotarea = Doctrine_Core::getTable('tipotarea')->find(array($request->getParameter('id'))), sprintf('Object tipotarea does not exist (%s).', $request->getParameter('id')));
    $tipotarea->delete();

    $this->redirect('tipotarea/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tipotarea = $form->save();

      $this->redirect('tipotarea/edit?id='.$tipotarea->getId());
    }
  }
}
