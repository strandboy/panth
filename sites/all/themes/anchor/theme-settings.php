<?php

function anchor_form_system_theme_settings_alter(&$form, $form_state) {

  $path = drupal_get_path('theme', 'anchor');
  drupal_add_library('system', 'ui');
  drupal_add_library('system', 'farbtastic');

  drupal_add_js($path . '/js/anchor_admin.js');


  $form['settings'] = array(
      '#type' => 'vertical_tabs',
      '#title' => t('Theme settings'),
      '#weight' => 2,
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );

  $form['settings']['general'] = array(
      '#type' => 'fieldset',
      '#title' => t('General settings'),
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
  );
  $form['settings']['general']['show_node_title_on_full_page'] = array(
      '#type' => 'select',
      '#title' => t('Show node title on full page'),
      '#options' => array(
          0 => t('No'),
          1 => t('Yes')
      ),
      '#default_value' => theme_get_setting('show_node_title_on_full_page'),
  );
  $form['settings']['general']['preloader_icon_class'] = array(
      '#type' => 'textfield',
      '#title' => t('Preloader fontawesome icon class name'),
      '#default_value' => theme_get_setting('preloader_icon_class', 'anchor'),
      '#description' => t('Default icon class: icon-anchor, you can find more icons class name available on <a href="!url" target="_blank">Fontawesome</a>', array('!url' => 'http://fortawesome.github.io/Font-Awesome/icons/')),
  );
  $form['settings']['general']['header_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('Header background color'),
      '#default_value' => theme_get_setting('header_bg', 'anchor'),
      '#attributes' => array('class' => array('input color')),
      '#description' => t('default color is: #2980B9')
  );
  $form['settings']['general']['footer_columns_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('Footer columns background color'),
      '#default_value' => theme_get_setting('footer_columns_bg', 'anchor'),
      '#attributes' => array('class' => array('input color')),
      '#description' => t('default color is: #34495E')
  );
  $form['settings']['general']['footer_bottom_bg'] = array(
      '#type' => 'textfield',
      '#title' => t('Footer bottom background color'),
      '#default_value' => theme_get_setting('footer_bottom_bg', 'anchor'),
      '#attributes' => array('class' => array('input color')),
      '#description' => t('default color is: #2C3E50')
  );
  $form['settings']['general']['custom_theme_css'] = array(
      '#type' => 'textarea',
      '#title' => t('Custom theme css'),
      '#default_value' => theme_get_setting('custom_theme_css', 'anchor'),
      '#description' => t('Custom your own css, eg: <strong>#header-bg{background-color: #2980B9;}</strong>'),
  );
}
