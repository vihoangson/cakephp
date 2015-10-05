<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * News Controller
 *
 * @property \App\Model\Table\NewsTable $News
 */
class NewsController extends AppController
{
	public function index(){
		$this->assign("variable","value1");
	}
}
