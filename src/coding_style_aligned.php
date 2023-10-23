<?php

declare(strict_types=1);

use PhpCsFixer\Fixer\Operator\BinaryOperatorSpacesFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
	$ecsConfig->ruleWithConfiguration(
		BinaryOperatorSpacesFixer::class,
		[
			'operators' =>
			[
				'=' => 'align',
				'=>' => 'align',
			],
		]
	);

	$ecsConfig->sets([__DIR__ . '/coding_style.php']);
};
