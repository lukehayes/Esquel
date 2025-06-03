
## Esquel

A small wrapper library for SQL for generating strings of queries.


A simple sql string can be generated using the `LDH\Esquel\Raw` class:

```php
use LDH\Esquel\Raw;

$raw = new Raw();

$query =
    $raw->select('id', 'username', 'email')
    $raw->from('users')
    $raw->getQuery(); // Return the query string here.

dump($query) // "select id, username, email from users"

```

