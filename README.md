Doctrine Messenger Igbinary
==================

Provides Doctrine integration for Symfony Messenger using `igbinary` as serializer.

Make sure you set the serializer as default, eg `config/packages/messenger.php`
```php
<?php

declare(strict_types=1);

use Symfony\Component\Messenger\Bridge\Doctrine\Transport\IgbinarySerializer;
use Symfony\Config\FrameworkConfig;

return static function (FrameworkConfig $config): void {
    $config->messenger()->serializer()->defaultSerializer(IgbinarySerializer::class);
};
```

Resources
---------

 * [Contributing](https://symfony.com/doc/current/contributing/index.html)
 * [Report issues](https://github.com/symfony/symfony/issues) and
   [send Pull Requests](https://github.com/symfony/symfony/pulls)
   in the [main Symfony repository](https://github.com/symfony/symfony)
