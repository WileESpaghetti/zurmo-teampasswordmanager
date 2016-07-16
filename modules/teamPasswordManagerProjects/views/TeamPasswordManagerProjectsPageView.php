<?php
    class TeamPasswordManagerProjectsPageView extends ZurmoDefaultPageView
    {
        protected function getSubtitle()
        {
            return Zurmo::t('TeamPasswordManagerProjectsModule', 'TeamPasswordManagerProjectsModulePluralLabel', LabelUtil::getTranslationParamsForAllModules());
        }
    }
?>
