<?php

/* TablePostsTableTags schema generated on: 2011-04-24 03:04:43 : 1303583083 */

class TablePostsTableTagsSchema extends CakeSchema {

	public $name = 'TablePostsTableTags';

	public $file = 'table_posts_table_tags.php';

	public $connection = 'plugin';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $table_posts_table_tags = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 8, 'key' => 'primary'),
		'table_post_id' => array('type' => 'integer', 'null' => false, 'length' => 8),
		'table_tag_id' => array('type' => 'integer', 'null' => false, 'length' => 8),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => null),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);

}
