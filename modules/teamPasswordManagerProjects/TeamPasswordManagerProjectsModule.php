<?php
    class TeamPasswordManagerProjectsModule extends SecurableModule
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
            return Zurmo::t('TeamPasswordManagerProjectsModule', 'Team Password Manager Project', array(), null, $language);
        }

        protected static function getPluralModuleLabel($language)
        {
            return Zurmo::t('TeamPasswordManagerProjectsModule', 'Team Password Manager Projects', array(), null, $language);
        }
        
        public static function getDefaultMetadata()
        {
            $metadata = array();
            $metadata['global'] = array(
            );
            return $metadata;
        }
    }
