<?php
    class TeamPasswordManagerApiConfigurationForm extends ConfigurationForm
    {
        public $apiUrl;
        public $apiUser;
        public $apiPassword;

        public function rules()
        {
            return array(
                array('apiUrl',      'type', 'type' => 'string'),
                array('apiUser',     'type', 'type' => 'string'),
                array('apiPassword', 'type', 'type' => 'string'),
            );
        }

        public function attributeLabels()
        {
            return array(
                'apiUrl'      => Zurmo::t('ZurmoModule', 'URL'),
                'apiUser'     => Zurmo::t('ZurmoModule', 'User'),
                'apiPassword' => Zurmo::t('ZurmoModule', 'Password'),
            );
        }
    }
?>