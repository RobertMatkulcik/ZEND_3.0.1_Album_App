<?php
/**
 * Created by PhpStorm.
 * User: hlbinamyslenia
 * Date: 8/22/16
 * Time: 5:08 PM
 */

namespace Album\Controller;

use Album\Model\AlbumTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AlbumController extends AbstractActionController
{
	// Add this property:
	private $table;

	// Add this constructor:
	public function __construct(AlbumTable $table)
	{
		$this->table = $table;
	}

	public function indexAction()
	{
		return new ViewModel([
			'albums' => $this->table->fetchAll(),
		]);
	}

	public function addAction()
	{
	}

	public function editAction()
	{
	}

	public function deleteAction()
	{
	}
}