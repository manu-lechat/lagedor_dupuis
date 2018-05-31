<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');

/*

---------------------------------------
Kirby Configuration
---------------------------------------

*/

// url

//c::set('url',"http://localhost:8888/");


// autoupdate

c::set('cache.autoupdate',true);


// error

c::set('error','tmp_home');


// Temporary homePage

c::set('home','tmp_home');

// Debug
c::set('debug', true);

// Set a multilanguage site
c::set('languages', array(
  array(
    'code'    => 'fr',
    'name'    => 'french',
    'default' => true,
    'locale'  => 'fr_FR',
    'url'     => '/',
  ),
  array(
    'code'    => 'en',
    'name'    => 'English',
    'locale'  => 'en_US',
    'url'     => '/en',
  ),
  array(
    'code'    => 'it',
    'name'    => 'Italy',
    'locale'  => 'it_IT',
    'url'     => '/it',
  ),
));

// Set a panel stylesheet to customize it
c::set('panel.stylesheet', 'panel/assets/css/panel-plus.css');

// Set basic roles to prevent editor to be overide by translator
c::set('roles', [
  [
    'id'      => 'admin',
    'name'    => 'Admin',
    'default' => true,
    'panel'   => true
  ],
  [
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true
  ]
]);
