<?php

use Latte\Runtime as LR;

/** source: /home/hnatek/PRC1-2024/prcprojekt/app/UI/Character/default.latte */
final class Template_f406eba2c9 extends Latte\Runtime\Template
{
	public const Source = '/home/hnatek/PRC1-2024/prcprojekt/app/UI/Character/default.latte';

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


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['character' => '18'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);

		echo '
<h1 class="rpg-header">Seznam postav</h1>

<table class="table table-dark table-striped rpg-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Jméno</th>
            <th>Rasa</th>
            <th>Třída</th>
            <th>HP</th>
            <th>Síla</th>
            <th>Inteligence</th>
        </tr>
    </thead>
    <tbody>
';
		foreach ($characters as $character) /* line 18 */ {
			echo '        <tr>
            <td>';
			echo LR\Filters::escapeHtmlText($character->id) /* line 20 */;
			echo '</td>
            <td><a href="';
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
			echo '/inventory/show/';
			echo LR\Filters::escapeHtmlAttr($character->id) /* line 21 */;
			echo '">';
			echo LR\Filters::escapeHtmlText($character->name) /* line 21 */;
			echo '</a></td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->race) /* line 22 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->class) /* line 23 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->hp) /* line 24 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->strenght) /* line 25 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->intelligence) /* line 26 */;
			echo '</td>
        </tr>
';

		}

		echo '    </tbody>
</table>

';
	}
}
