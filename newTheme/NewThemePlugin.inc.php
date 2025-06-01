<?php
import('lib.pkp.classes.plugins.ThemePlugin');
class NewThemePlugin extends ThemePlugin {
    /**
     * Initialize the theme's styles, scripts and hooks. This is only run for
     * the currently active theme.
     *
     * @return null
     */
    public function init() {
        // Define the name of this theme
        $this->setParent('default');
        $this->setParentPreserveRuleset(true);
        $this->setName('NewTheme');
        $this->setDisplayName('New Theme');
        $this->setDescription('A new theme for OJS.');

        // Add a SASS stylesheet to be compiled.
        $this->addStyle('main', 'styles/index.less');

        // You can also add CSS or JS files to the theme:
        // $this->addStyle('main', 'styles/index.css');
        // $this->addScript('main', 'js/main.js');
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
?>
