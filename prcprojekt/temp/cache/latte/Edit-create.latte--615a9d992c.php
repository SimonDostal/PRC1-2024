<?php

use Latte\Runtime as LR;

/** source: /root/PRC1-2024-2/prcprojekt/app/UI/Edit/create.latte */
final class Template_615a9d992c extends Latte\Runtime\Template
{
	public const Source = '/root/PRC1-2024-2/prcprojekt/app/UI/Edit/create.latte';

	public const Blocks = [
		['content' => 'blockContent'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '<h1>Přidání postavy</h1>

';
		$ʟ_tmp = $this->global->uiControl->getComponent('characterForm');
		if ($ʟ_tmp instanceof Nette\Application\UI\Renderable) $ʟ_tmp->redrawControl(null, false);
		$ʟ_tmp->render() /* line 4 */;
	}
}
