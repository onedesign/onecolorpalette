<?php
namespace Craft;

class OneColorPalette_ColorPaletteFieldType extends BaseFieldType
{
    public function getName() {
        return Craft::t('Color Palette');
    }

    public function getInputHtml($name, $value) {
        $inputId          = craft()->templates->formatInputId($name);
        $namespaceInputId = craft()->templates->namespaceInputId($inputId);
        $plugin = craft()->plugins->getPlugin('oneColorPalette');
        $colors = $plugin->getSettings()->colors;

        return craft()->templates->render(
            'onecolorpalette/_fieldtypes/color/input',
            array(
                'id'     => $namespaceInputId,
                'name'   => $name,
                'value'  => $value,
                'colors' => explode(',', $colors)
            )
        );
    }
}
