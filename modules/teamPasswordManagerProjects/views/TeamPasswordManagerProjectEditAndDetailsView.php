<?php
    class TeamPasswordManagerProjectEditAndDetailsView extends SecuredEditAndDetailsView
    {
        public static function getDefaultMetadata()
        {
            $metadata = array(
                'global' => array(
                    'toolbar' => array(
                        'elements' => array(
                            array('type'  => 'SaveButton',    'renderType' => 'Edit'),
                            array('type'  => 'CancelLink',    'renderType' => 'Edit'),
                            array('type' => 'EditLink',       'renderType' => 'Details'),
                            array('type' => 'AuditEventsModalListLink',  'renderType' => 'Details'),
                            array('type' => 'CopyLink',       'renderType' => 'Details'),
//                            array('type' => 'TeamPasswordManagerProjectDeleteLink', 'renderType' => 'Details'), // FIXME see AccountDeleteLink
                        ),
                    ),
                    'nonPlaceableAttributeNames' => array(
                    ),
                    'panelsDisplayType' => FormLayout::PANELS_DISPLAY_TYPE_ALL,
                    'panels' => array(
                        array(
                            'rows' => array(
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                array('attributeName' => 'name', 'type' => 'Text'),
                                            ),
                                        ),
                                    )
                                ),
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                array('attributeName' => 'tags', 'type' => 'Text'),
                                            ),
                                        ),
                                    )
                                ),
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                array('attributeName' => 'notes', 'type' => 'TextArea'),
                                            ),
                                        ),
                                    )
                                ),
                            ),
                        ),
                    ),
                ),
            );
            return $metadata;
        }

        protected function getNewModelTitleLabel()
        {
            return Zurmo::t('TeamPasswordManagerProjectsModule', 'Create TeamPasswordManagerProjectsModuleSingularLabel',
                                     LabelUtil::getTranslationParamsForAllModules());
        }

        public static function getModuleClassName()
        {
            return 'TeamPasswordManagerProjectsModule';
        }
    }
?>
