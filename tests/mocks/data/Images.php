<?php
namespace li3_mssql\tests\mocks\data;

class Images extends \lithium\data\Model {

	protected $_meta = array('connection' => 'mssql_test');

	public $belongsTo = array('Galleries');
}
?>
