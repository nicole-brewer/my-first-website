<?php
  class Link {
    public $name, $link, $favicon;

    function __construct($name, $link, $favicon) {
      $this->name = $name;
      $this->link = $link;
      $this->favicon = $favicon;
    }
  }
