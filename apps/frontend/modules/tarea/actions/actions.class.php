<?php

/**
 * tarea actions.
 *
 * @package    pakal
 * @subpackage tarea
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class tareaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->tareas = Doctrine_Core::getTable('tarea')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new tareaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new tareaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tareaForm($tarea);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));
    $this->form = new tareaForm($tarea);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($tarea = Doctrine_Core::getTable('tarea')->find(array($request->getParameter('id'))), sprintf('Object tarea does not exist (%s).', $request->getParameter('id')));
    $tarea->delete();

    $this->redirect('tarea/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $tarea = $form->save();

      $this->redirect('tarea/edit?id='.$tarea->getId());
    }
  }
}
