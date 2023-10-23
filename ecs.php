<?php

declare(strict_types=1);

use Codelytv\CodingStyle\CodelyRules;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([__DIR__ . '/src',]);

    $ecsConfig->sets([CodelyRules::CODING_STYLE]);
};
