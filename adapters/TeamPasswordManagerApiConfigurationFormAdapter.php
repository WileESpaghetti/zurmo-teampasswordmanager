<?php
    class TeamPasswordManagerApiConfigurationFormAdapter
    {
        public static function makeFormFromApiConfiguration()
        {
            $form                      = new TeamPasswordManagerApiConfigurationForm();
            $form->apiUrl              = TeamPasswordManagerApiConfigurationUtil::getApiUrl();
            $form->apiUser             = TeamPasswordManagerApiConfigurationUtil::getApiUser();
            $form->apiPass             = TeamPasswordManagerApiConfigurationUtil::getApiPass();
            return $form;
        }

        public static function setConfigurationFromForm(TeamPasswordManagerApiConfigurationForm $form)
        {
            if (Yii::app()->user->userModel->isRootUser)
            {
                TeamPasswordManagerApiConfigurationUtil::setApiUrl($form->apiUrl);
                TeamPasswordManagerApiConfigurationUtil::setApiUser($form->apiUser);
                TeamPasswordManagerApiConfigurationUtil::setApiPass($form->apiPass);
            }
        }
    }
?>