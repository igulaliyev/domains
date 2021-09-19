<?php
class FileModel{
  public function render($file) {
    ob_start();
    include($file);
    return ob_get_clean();
  }
}
