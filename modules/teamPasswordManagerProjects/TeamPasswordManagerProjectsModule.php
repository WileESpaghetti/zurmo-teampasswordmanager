<?php
    class TeamPasswordManagerProjectsModule extends SecurableModule
    {
        const RIGHT_CREATE_TEAM_PASSWORD_MANAGER_PROJECTS = 'Create Team Password ManagerProjects';

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
                'shortcutsCreateMenuItems' => array(
                    array(
                        'label'  => "eval:Zurmo::t('TeamPasswordManagerProjectsModule', 'TeamPasswordManagerProjectsModuleSingularLabel', \$translationParams)",
                        'url'    => array('/teamPasswordManager/teamPasswordProjectsdefault/create'),
                        'right'  => self::RIGHT_CREATE_TEAM_PASSWORD_MANAGER_PROJECTS,
                        'mobile' => true,
                    ),
                ),
            );
            return $metadata;
        }

        public function getRootModelNames()
        {
            return array('TeamPasswordManagerProject');
        }
    }
