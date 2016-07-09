<?php
    class TeamPasswordManagerApiConfigurationFormAdapter
    {
        public static function makeFormFromApiConfiguration()
        {
            $form                      = new TeamPasswordManagerApiConfigurationForm();
            $form->apiUrl              = TeamPasswordManagerApiConfigurationUtil::getApiUrl();
            $form->apiUser             = TeamPasswordManagerApiConfigurationUtil::getApiUser();
            $form->apiPassword         = TeamPasswordManagerApiConfigurationUtil::getApiPassword();
            return $form;
        }

        public static function setConfigurationFromForm(TeamPasswordManagerApiConfigurationForm $form)
        {
            if (Yii::app()->user->userModel->isRootUser)
            {
                TeamPasswordManagerApiConfigurationUtil::setApiUrl($form->apiUrl);
                TeamPasswordManagerApiConfigurationUtil::setApiUser($form->apiUser);
                TeamPasswordManagerApiConfigurationUtil::setApiPassword($form->apiPassword);
            }
        }
    }
?>