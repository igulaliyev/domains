<?php
class IndexController implements IController {
  public function indexAction(){
	$fc = FrontController::getInstance();
	$params = $fc->getParams();
    $model = new FileModel();

    $output = $model->render("loading_app/views/index.php");
    $fc->setBody($output);
  }
}
