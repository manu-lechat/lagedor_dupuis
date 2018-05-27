<?php
return [
  'name'        => 'Italian editor',
  'default'     => false,
  'permissions' => [
    '*'                 => true,
    'panel.page.update' => function() {
      return $this->site()->language()->code() == 'it';
    }
  ]
];
