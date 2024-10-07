<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /root/PRC1-2024-1/prcprojekt/app/UI/Home/default.latte */
final class Template_bfd68b2dd4 extends Latte\Runtime\Template
{
	public const Source = '/root/PRC1-2024-1/prcprojekt/app/UI/Home/default.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}
	}
}
