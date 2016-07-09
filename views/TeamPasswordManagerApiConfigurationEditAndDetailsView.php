<?php
    class TeamPasswordManagerApiConfigurationEditAndDetailsView extends EditAndDetailsView
    {
        public function getTitle()
        {
            return Zurmo::t('TeamPasswordManagerModule', 'Team Password Manager Configuration');
        }
        
        public static function getDefaultMetadata()
        {
            $metadata = array(
                'global' => array(
                    'toolbar' => array(
                        'elements' => array(
                            array('type' => 'SaveButton',        'renderType' => 'Edit'),
                            array('type' => 'ConfigurationLink', 'label' => "eval:Zurmo::t('Core', 'Cancel')"),
                            array('type' => 'EditLink',          'renderType' => 'Details'),
                        ),
                    ),
                    'panelsDisplayType' => FormLayout::PANELS_DISPLAY_TYPE_ALL,
                    'panels' => array(
                        array(
                            'rows' => array(
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                // URL type would be preferred, but some valid config values,
                                                // like using localhost as a domain, don't validate when using URL
                                                array('attributeName' => 'apiUrl',
                                                    'type'          => 'Text'),
                                            ),
                                        ),
                                    )
                                ),
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                array('attributeName' => 'apiUser',
                                                    'type'          => 'Text'),
                                            ),
                                        ),
                                    )
                                ),
                                array('cells' =>
                                    array(
                                        array(
                                            'elements' => array(
                                                array('attributeName' => 'apiPassword',
                                                    'type'          => 'Password'),
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
    }
?>