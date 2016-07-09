<?php
    class TeamPasswordManagerApiConfigurationForm extends ConfigurationForm
    {
        public $apiUrl;
        public $apiUser;
        public $apiPass;

        public function rules()
        {
            return array(
                array('apiUrl',  'type', 'type' => 'string'),
                array('apiUser', 'type', 'type' => 'string'),
                array('apiPass', 'type', 'type' => 'string'),
            );
        }

        public function attributeLabels()
        {
            return array(
                'apiUrl'  => Zurmo::t('ZurmoModule', 'URL'),
                'apiUser' => Zurmo::t('ZurmoModule', 'User'),
                'apiPass' => Zurmo::t('ZurmoModule', 'Password'),
            );
        }
    }
?>