<?php

class ThemeHouse_JqueryDump_Listener_TemplateCreate extends ThemeHouse_Listener_TemplateCreate
{

    protected function _getTemplates()
    {
        return array(
            'PAGE_CONTAINER'
        );
    } /* END _getTemplates */

    public static function templateCreate(&$templateName, array &$params, XenForo_Template_Abstract $template)
    {
        $templateCreate = new ThemeHouse_JqueryDump_Listener_TemplateCreate($templateName, $params, $template);
        list($templateName, $params) = $templateCreate->run();
    } /* END templateCreate */

    protected function _pageContainer()
    {
        if (XenForo_Application::debugMode()) {
            $this->_template->addRequiredExternal('js', 'js/themehouse/jquerydump/jquery.dump.js');
        }
    } /* END _pageContainer */
}