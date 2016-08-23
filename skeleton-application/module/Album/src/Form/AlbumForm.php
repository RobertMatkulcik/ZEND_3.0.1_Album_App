<?php
/**
 * Created by PhpStorm.
 * User: hlbinamyslenia
 * Date: 8/23/16
 * Time: 10:15 AM
 */

namespace Album\Form;

use Zend\Form\Form;

//Default is ZEND uncoment for GET
//$this->setAttribute('method', 'GET');


class AlbumForm extends Form
{
	public function __construct($name = null)
	{
		// We will ignore the name provided to the constructor
		parent::__construct('album');

		$this->add([
			'name' => 'id',
			'type' => 'hidden',
		]);
		$this->add([
			'name' => 'title',
			'type' => 'text',
			'options' => [
				'label' => 'Title',
			],
		]);
		$this->add([
			'name' => 'artist',
			'type' => 'text',
			'options' => [
				'label' => 'Artist',
			],
		]);
		$this->add([
			'name' => 'submit',
			'type' => 'submit',
			'attributes' => [
				'value' => 'Go',
				'id'    => 'submitbutton',
			],
		]);
	}
}