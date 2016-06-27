<?php
namespace Craft;

class OneColorPalettePlugin extends BasePlugin
{
    public function getName() {
        return 'One Color Palette';
    }

    public function getDescription() {
        return 'Custom color picker field type';
    }

    public function getVersion() {
        return '1.0';
    }

    public function getDeveloper() {
        return 'One Design Company';
    }

    public function getDeveloperUrl() {
        return 'https://onedesigncompany.com';
    }

    protected function defineSettings() {
        return array(
            'colors' => array(AttributeType::String, 'default' => '#cccccc')
        );
    }

    public function getSettingsHtml() {
        return craft()->templates->render('onecolorpalette/_cp/settings', array(
            'colors' => explode(',', $this->getSettings()->colors)
        ));
    }

    public function prepSettings($settings) {
        return array(
            'colors' => implode(',', $settings['colors'])
        );
    }
}
