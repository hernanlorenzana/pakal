<?php

/**
 * planta actions.
 *
 * @package    pakal
 * @subpackage planta
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class plantaActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->plantas = Doctrine_Core::getTable('planta')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new plantaForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new plantaForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($planta = Doctrine_Core::getTable('planta')->find(array($request->getParameter('id'))), sprintf('Object planta does not exist (%s).', $request->getParameter('id')));
    $this->form = new plantaForm($planta);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($planta = Doctrine_Core::getTable('planta')->find(array($request->getParameter('id'))), sprintf('Object planta does not exist (%s).', $request->getParameter('id')));
    $this->form = new plantaForm($planta);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($planta = Doctrine_Core::getTable('planta')->find(array($request->getParameter('id'))), sprintf('Object planta does not exist (%s).', $request->getParameter('id')));
    $planta->delete();

    $this->redirect('planta/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $planta = $form->save();

      $this->redirect('planta/edit?id='.$planta->getId());
    }
  }
}
