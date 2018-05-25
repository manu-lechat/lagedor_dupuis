<?php

return function($site, $pages, $page) {

  $test = $site->language();

  return compact('test');

};
