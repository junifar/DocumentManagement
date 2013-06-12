<?php
class DocumentManagement extends CakeSchema {
	public $addresses = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 10, 'key' => 'primary'),
		'contact_id' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 10),
		'type' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'status' => array('type' => 'integer', 'null' => false, 'default' => '0', 'length' => 2),
		'email' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'utf8_unicode_ci', 'comment' => 'redundant', 'charset' => 'utf8'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_unicode_ci', 'engine' => 'MyISAM')
    );	
}
?>