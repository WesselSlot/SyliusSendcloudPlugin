<?php

declare(strict_types=1);

namespace Lockizer\SyliusSendcloudPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class LockizerSyliusSendcloudPlugin extends Bundle
{
    use SyliusPluginTrait;
}
