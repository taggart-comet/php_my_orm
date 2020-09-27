# php_my_orm
Simple, light-weight, MySql ORM for php7 with Django-like interface

### `Step #1`: Creating a model
Wherever in your code define a model with table structure like this:
```php
class TestModel extends PhpMyOrm\Model {

	public $table_name  = 'php_myorm_test_table';
	public $db_name     = 'test';
	public $description = 'This table is for tests';

	public function fields() {

		return [
			'id'         => new PhpMyOrm\IntField(true, true),
			'status'     => new PhpMyOrm\TinyIntField(),
			'date_added' => new PhpMyOrm\IntField(),
			'content'    => new PhpMyOrm\CharField(200),
			'extra'      => new PhpMyOrm\JSONField(),
		];
	}

	public function indexes() {

		return [
			['status'],
		];
	}
}
```
 
### `Step #2`: Migrating the model
- Insert paths to your models in `./conf.php:MODEL_CLASSES`
- Make sure `migrate.php` can 'see' your classes
- Run this script: `php ./migrate.php` It will create tables.
 
### `Step #3`: Using the model 
Insert
```php
$obj = new TestModel([
	'date_added' => time(),
]);
$obj->save();
```

Select
```php
$obj = TestModel::objects()
	->filter_equal('status', 0)
	->order_desc('id')
	->get()
```

All the possible examples can be found in test classes in `./test/tests`

