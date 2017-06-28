<?php

class Module {
  public $name, $id, $handle, $path;

  function __construct($directory) {
    $this->path = $directory->path;
    $this->handle = $directory->handle;
    $this->id = strtok($handle, "-");
    $this->name = strtok("-");
  }

}
?>
