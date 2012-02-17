<?php

/**
 * estadotarea actions.
 *
 * @package    pakal
 * @subpackage estadotarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class estadotareaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->estadotareas = Doctrine_Core::getTable('estadotarea')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new estadotareaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new estadotareaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($estadotarea = Doctrine_Core::getTable('estadotarea')->find(array($request->getParameter('id'))), sprintf('Object estadotarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new estadotareaForm($estadotarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($estadotarea = Doctrine_Core::getTable('estadotarea')->find(array($request->getParameter('id'))), sprintf('Object estadotarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new estadotareaForm($estadotarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($estadotarea = Doctrine_Core::getTable('estadotarea')->find(array($request->getParameter('id'))), sprintf('Object estadotarea does not exist (%s).', $request->getParameter('id')));
    $estadotarea->delete();

    $this->redirect('estadotarea/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $estadotarea = $form->save();

      $this->redirect('estadotarea/edit?id='.$estadotarea->getId());
    }
  }
}
