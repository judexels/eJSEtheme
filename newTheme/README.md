# New Theme for OJS

This is a new theme for Open Journal Systems (OJS).

## Installation

1.  Download the `newTheme` directory.
2.  Copy the `newTheme` directory to your OJS installation's `plugins/themes/` directory.
3.  Log in to your OJS dashboard as an administrator.
4.  Go to `Settings` > `Website` > `Appearance`.
5.  Under the `Themes` tab, find "New Theme" and click "Enable".
6.  Select "New Theme" as the current theme and save the changes.

## Customization

You can customize this theme by editing the following files:

*   `styles/index.less`: Main stylesheet for the theme. Modify this file to change the theme's appearance.
*   `NewThemePlugin.inc.php`: Main theme plugin file. You can modify this file to change theme options, add custom JavaScript, or override templates.

## Templates

If you want to override any of the default OJS templates, copy them from `templates/` or the parent theme's `templates/` directory to a `newTheme/templates/` directory and modify them as needed.
