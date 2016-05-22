<?php

namespace Drupal\ckeditor_mathematical_formulas\Plugin\CKEditorPlugin;

use Drupal\ckeditor\CKEditorPluginBase;
use Drupal\ckeditor\CKEditorPluginButtonsInterface;
use Drupal\ckeditor\CKEditorPluginInterface;
use Drupal\editor\Entity\Editor;

/**
 * Defines the "mathjax" plugin.
 *
 * NOTE: The plugin ID ('id' key) corresponds to the CKEditor plugin name.
 * It is the first argument of the CKEDITOR.plugins.add() function in the
 * plugin.js file.
 *
 * @CKEditorPlugin(
 *   id = "mathjax",
 *   label = @Translation("mathjax")
 * )
 */
class MathematicalFormulasButton extends CKEditorPluginBase implements CKEditorPluginInterface, CKEditorPluginButtonsInterface
{


    /**
     * {@inheritdoc}
     */
//    public function getDependencies(Editor $editor)
//    {
//        return array('basewidget');
//    }


    /**
     * {@inheritdoc}
     */
    public function getLibraries(Editor $editor)
    {
        return array();
    }




    /**
     * {@inheritdoc}
     */
    public function isInternal()
    {
        return FALSE;
    }




    /**
     * {@inheritdoc}
     */
    public function getFile()
    {
        // Make sure that the path to the plugin.js matches the file structure of
        // the CKEditor plugin you are implementing.
        return drupal_get_path('module', 'ckeditor_mathematical_formulas') . '/js/plugins/mathjax/plugin.js';
    }




    /**
     * {@inheritdoc}
     *
     * NOTE: The keys of the returned array corresponds to the CKEditor button
     * names. They are the first argument of the editor.ui.addButton() or
     * editor.ui.addRichCombo() functions in the plugin.js file.
     */
    public function getButtons()
    {
        // Make sure that the path to the image matches the file structure of
        // the CKEditor plugin you are implementing.
        $path = drupal_get_path('module', 'ckeditor_mathematical_formulas') . '/js/plugins/mathjax';
        return array(
            'mathjax' => array(
                'label' => t('mathjax'),
                'image' => $path . '/icons/mathjax.png',
            ),
        );
    }




    /**
     * {@inheritdoc}
     */
    public function getConfig(Editor $editor)
    {

        $config['mathJaxLib'] = "http://cdn.mathjax.org/mathjax/2.6-latest/MathJax.js?config=TeX-AMS_HTML";

        return $config;
    }

}
