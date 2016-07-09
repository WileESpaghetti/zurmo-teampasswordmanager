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
    }
