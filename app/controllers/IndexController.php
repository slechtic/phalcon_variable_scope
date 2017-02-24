<?php

class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$content = $this->view->getRender('index', 'index', [
			'viewParam' => 'Test view param'
		]);
		var_dump($content);
		var_dump($viewParam);
		var_dump($paramFromService);
		die;
    }

}

