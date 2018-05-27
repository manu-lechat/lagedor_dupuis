<?php
return [
  'name'        => 'English editor',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.page.update' => function() {
      return $this->site()->language()->code() == 'en';
    }
  ]
];
