<?php

declare(strict_types=1);

use Latte\Runtime as LR;

/** source: /home/marinakt/PRC1-2024-2/prcprojekt/app/UI/Home/default.latte */
final class Template_a4e271633e extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/PRC1-2024-2/prcprojekt/app/UI/Home/default.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo 'fbiaegibudfbnjofsgnj';
	}
}
