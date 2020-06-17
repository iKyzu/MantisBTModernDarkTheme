<?php

class MantisBTModernDarkThemePlugin extends MantisPlugin {

  function register() {
    $this->name        = 'MantisBT Modern Dark Theme';
    $this->description = 'A clean and dark theme for MantisBT.';

    $this->version     = '1.0.1';
    $this->requires    = array(
      'MantisCore'       => '2.0.0',
    );

    $this->author      = 'iKyzu';
    $this->contact     = 'iKyzu@o2.pl';
	$this->url         = 'https://github.com/iKyzu';
  }

  function hooks() {
    return array(
        'EVENT_LAYOUT_RESOURCES' => 'add_css'
    );
  }

  function add_css($p_event) {
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('ModernDarkTheme.css') . '" />' . "\n";
      echo '<link rel="stylesheet" type="text/css" href="' . plugin_file('fonts/css/ibm-plex.min.css') . '" />' . "\n";

  }

}