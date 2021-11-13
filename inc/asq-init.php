<?php

/**
 * @package AlmsPlugin
 * All plugin bootup functions 
 */


defined('ABSPATH') or die;

//defs
define('ASQ_SHORTCODE', 'qrsimple');

//Initial Class
class AlmsAsqBootup
{

  //Init 
  function __construct()
  {

    add_action('init', array($this, 'asqInitialize'));
    add_action('admin_menu', array($this, 'asqAdminPage'));
  }

  //Initialize 
  public function asqInitialize()
  {
    add_shortcode(ASQ_SHORTCODE, array($this, 'asqShortcodeGen'));

    // add shortcode support in text widget in wp widgets
    if (has_filter('widget_text', 'do_shortcode') === false) {
      add_filter('widget_text', 'do_shortcode');
    }
    return;
  }

  // Shortcode Generation function
  public function asqShortcodeGen($atts, $content = null)
  {

    $asqr_out = '';

    // parse attributes and set some default values
    $atts = shortcode_atts(
      array(
        'size'   => '150',
        'text' => '',
        'tel' => '',
        'sms' => '',
        'email' => '',
        'link' => '',
        'title' => '',
        'background' => 'FFFFFF',
        'border' => 1,
        'class' => 'qrsimple',
        'level' => 'l',
      ),
      $atts
    );

    // check if text came from var or content
    if (!is_null($content)) {
      $atts['text'] = $content;
    }
    $atts['_org_text'] = $atts['text'];

    //Tel
    if (!empty($atts['tel'])) {
      $atts['text'] = 'tel:' . $atts['tel'];
    }

    //Link
    if (!empty($atts['link'])) {
      if (substr(strtolower($atts['link']), 0, 7) != 'http://' && substr(strtolower($atts['link']), 0, 8) != 'https://') {
        $atts['text'] = 'http://' . $atts['link'];
      } else {
        $atts['text'] = $atts['link'];
      }
    }

    //email
    if (!empty($atts['email'])) {
      if (substr(strtolower($atts['email']), 0, 7) != 'mailto:') {
        $atts['text'] = 'mailto:' . $atts['email'];
      } else {
        $atts['text'] = $atts['email'];
      }
    }

    //SMS
    if (!empty($atts['sms'])) {
      if (substr(strtolower($atts['sms']), 0, 6) != 'smsto:') {
        $atts['text'] = 'smsto:' . $atts['sms'];
      } else {
        $atts['text'] = $atts['sms'];
      }
    }

    // background
    if (strlen($atts['background']) != 6) {
      $atts['background'] = 'FFFFFF';
    } else {
      $atts['background'] = urlencode($atts['background']);
    }

    // class
    $atts['class'] = urlencode($atts['class']);

    // size
    $atts['size'] = (int) $atts['size'];

    // border
    $atts['border'] = (int) $atts['border'];

    // level
    switch (strtolower($atts['level'])) {
      case 'l':
        $atts['level'] = 'L';
        break;
      case 'm':
        $atts['level'] = 'M';
        break;
      case 'q':
        $atts['level'] = 'Q';
        break;
      case 'h':
        $atts['level'] = 'H';
        break;
      default:
        $atts['level'] = 'L';
    }

    if (empty($atts['title'])) {
      $atts['title'] = $atts['text'];
    } else {
      $atts['title'] = htmlspecialchars($atts['title']);
    }

    $atts['text'] = urlencode($atts['text']);


    if (strlen($atts['text']) > 4000) {
      $asqr_out .= 'Error: Text length exceeded! The maximum length of QR coded text is 4000 characters';
      return $asqr_out;
    }

    // build JS function
    $asqr_out .= '<img class="' . $atts['class'] . '" src="http://chart.apis.google.com/chart?';
    $asqr_out .= 'chf=bg,s,' . $atts['background'] . '&amp;chs=' . $atts['size'] . 'x' . $atts['size'] . '&amp;cht=qr&amp;chld=' . $atts['level'] . '|' . $atts['border'] . '&amp;chl=' . $atts['text'] . '" ';
    $asqr_out .= 'width="' . $atts['size'] . '" height="' . $atts['size'] . '" alt="' . $atts['title'] . '" title="' . $atts['title'] . '" />';

    return $asqr_out;
  }

  //For adding admin menu at the side bar
  public function asqAdminPage()
  {
    add_submenu_page('tools.php','Simple QR', 'Simple QR', 'manage_options', 'simple-qr', array($this, 'asqAdminPageLink'), null);
  }

  //Admin page function
  public function asqAdminPageLink()
  {
    require_once plugin_dir_path(__FILE__) . 'asq-admin.php';
  }
}

