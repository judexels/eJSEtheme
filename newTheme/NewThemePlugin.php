<?php
/**
 * @file plugins/themes/newTheme/NewThemePlugin.php
 *
 * Copyright (c) 2023 PKP
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class NewThemePlugin
 * @brief A new theme for OJS.
 */
namespace APP\plugins\themes\newTheme;

use PKP\plugins\ThemePlugin;

class NewThemePlugin extends ThemePlugin {
    /**
     * Initialize the theme's styles, scripts and hooks. This is only run for
     * the currently active theme.
     *
     * @return null
     */
    public function init() {
        // Define the name of this theme
        $this->setParent('defaultthemeplugin');
        $this->setName('NewTheme'); // Ensure this is unique if you have multiple custom themes
        $this->setDisplayName('New Theme');
        $this->setDescription('A new theme for OJS.');

        // Add a LESS stylesheet to be compiled.
        // If you want to add to or modify the parent's stylesheet set, use:
        // $this->modifyStyle('stylesheet', ['addLess' => ['styles/index.less']]);
        // For adding a completely separate stylesheet:
        $this->addStyle('main', 'styles/index.less', ['baseUrl' => $this->getBaseUrl()]);
    }

    /**
     * Get the display name of this plugin
     * @return string
     */
    function getDisplayName() {
        return __('plugins.themes.newTheme.name');
    }

    /**
     * Get the description of this plugin
     * @return string
     */
    function getDescription() {
        return __('plugins.themes.newTheme.description');
    }
}

if (!PKP_STRICT_MODE) {
    class_alias('\APP\plugins\themes\newTheme\NewThemePlugin', '\NewThemePlugin');
}
