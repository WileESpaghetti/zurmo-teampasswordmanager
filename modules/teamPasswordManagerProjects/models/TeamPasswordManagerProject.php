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
                'members' => array(
                    'name',
                    'notes',
                    'parentId',
                    'projectId',
                    'tags' // TODO convert to something akin to product categories
                ),
                'relations' => array(
                ),
                'derivedRelationsViaCastedUpModel' => array(
                ),
                'rules' => array(
                    array('name',          'required'),
                    array('name',          'type',    'type' => 'string'),
                    array('name',          'length',  'min'  => 1, 'max' => 255),
                    array('tags',          'type',    'type' => 'string'),
                    array('tags',          'length',  'min'  => 1, 'max' => 255),
                    array('parentId',      'type',    'type' => 'int'), // FIXME must be >= 0
                    array('notes',         'type',    'type' => 'string'), // FIXME must be >= 0
                ),
                'elements' => array(
                ),
                'customFields' => array(
                ),
                'defaultSortAttribute' => 'name',
                'rollupRelations' => array(
                ),
                'noAudit' => array(
                ),
            );
            return $metadata;
        }
        
        public function getRootModelNames()
        {
            return array('TeamPasswordManagerProject');
        }

    }
