<?php
    class TeamPasswordManagerDefaultController extends ZurmoModuleController
    {
        public function actionTeamPasswordManagerApiConfigurationEdit()
        {
            $breadCrumbLinks = array(
                Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager Configuration'),
            );
            $form               = TeamPasswordManagerApiConfigurationFormAdapter::makeFormFromApiConfiguration();
            $postData           = PostUtil::getData();
            $postVariableName   = get_class($form);
            if (isset($postData[$postVariableName]))
            {
                $form->setAttributes($postData[$postVariableName]);
                if ($form->validate())
                {
                    TeamPasswordManagerApiConfigurationFormAdapter::setConfigurationFromForm($form);
                    Yii::app()->user->setFlash('notification',
                        Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager API configuration saved successfully.')
                    );
                    $this->redirect(Yii::app()->createUrl('configuration/default/index'));
                }
            }
            $editView = new TeamPasswordManagerApiConfigurationEditAndDetailsView(
                'Edit',
                $this->getId(),
                $this->getModule()->getId(),
                $form);
            $editView->setCssClasses( array('AdministrativeArea') );
            $view = new ZurmoConfigurationPageView(ZurmoDefaultAdminViewUtil::makeViewWithBreadcrumbsForCurrentUser(
                $this, $editView, $breadCrumbLinks, 'SettingsBreadCrumbView'));
            echo $view->render();
        }
    }
