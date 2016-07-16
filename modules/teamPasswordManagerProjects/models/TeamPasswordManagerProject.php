<?php
    class TeamPasswordManagerProject extends Item
    {
        public function __toString()
        {
            try
            {
                if (trim($this->name) == '')
                {
                    return Zurmo::t('Core', '(Unnamed)');
                }
                return $this->name;
            }
            catch (AccessDeniedSecurityException $e)
            {
                return '';
            }
        }

        public static function getModuleClassName()
        {
            return 'TeamPasswordManagerProjectsModule';
        }

        public static function canSaveMetadata()
        {
            return true;
        }

        public static function getDefaultMetadata()
        {
            $metadata = parent::getDefaultMetadata();
            $metadata[__CLASS__] = array(
            );
            return $metadata;
        }
        
        public function getRootModelNames()
        {
            return array('TeamPasswordManagerProject');
        }

    }
