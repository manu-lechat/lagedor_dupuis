<?php
return [
  'name'        => 'French editor',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.page.update' => function() {
      return $this->site()->language()->code() == 'fr';
    }
  ]
];
