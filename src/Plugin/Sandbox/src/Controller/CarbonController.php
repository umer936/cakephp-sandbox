<?php
namespace Sandbox\Controller;

use Sandbox\Controller\SandboxAppController;
use Cake\Event\Event;

/**
 * Start page controller.
 */
class CarbonController extends SandboxAppController {

	public $uses = array();

	public function beforeFilter(Event $event) {
		$this->Auth->allow('index');
	}

	public function index() {
	}

}
