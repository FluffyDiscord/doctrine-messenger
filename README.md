Doctrine Messenger Igbinary
==================

Provides Doctrine integration for Symfony Messenger using `igbinary` as serializer.

Make sure you set the serializer as default, eg in `config/packages/messenger.php`
```php
<?php

declare(strict_types=1);

use Symfony\Component\Messenger\Bridge\Doctrine\Transport\IgbinarySerializer;
use Symfony\Config\FrameworkConfig;

return static function (FrameworkConfig $config): void {
    $config->messenger()->serializer()->defaultSerializer(IgbinarySerializer::class);
};
```

and add it to autoload, eg. in `config/services.php`
```php
<?php

declare(strict_types=1);

use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\Messenger\Bridge\Doctrine\Transport\IgbinarySerializer;

return static function (ContainerConfigurator $containerConfigurator): void {
    $containerConfigurator->services()->set(IgbinarySerializer::class);
};
```

Resources
---------

 * [Contributing](https://symfony.com/doc/current/contributing/index.html)
 * [Report issues](https://github.com/symfony/symfony/issues) and
   [send Pull Requests](https://github.com/symfony/symfony/pulls)
   in the [main Symfony repository](https://github.com/symfony/symfony)
