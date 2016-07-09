<?php
    class TeamPasswordManagerModule extends SecurableModule
    {
        public function getDependencies()
        {
            return array(
                'configuration',
                'zurmo',
            );
        }

        protected static function getSingularModuleLabel($language)
        {
            return Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager', array(), null, $language);
        }

        protected static function getPluralModuleLabel($language)
        {
            return Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager', array(), null, $language);
        }
        
        public static function getDefaultMetadata()
        {
            $metadata = array();
            $metadata['global'] = array(
                'configureMenuItems' => array(
                    array(
                        'category'         => ZurmoModule::ADMINISTRATION_CATEGORY_GENERAL,
                        'titleLabel'       => "eval:Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager Configuration')",
                        'descriptionLabel' => "eval:Zurmo::t('TeamPasswordManagerModule', 'Manage Team Password Manager Configuration')",
                        'route'            => '/teamPasswordManager/default/teamPasswordManagerApiConfigurationEdit',
                        'right'            => ZurmoModule::RIGHT_ACCESS_ADMINISTRATION,
                    ),
                ),
            );
            return $metadata;
        }
    }
