<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/PRC1-2024-4/prcprojekt/app/UI/Character/default.latte */
final class Template_70aaa11219 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/PRC1-2024-4/prcprojekt/app/UI/Character/default.latte';

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
			foreach (array_intersect_key(['character' => '19'], $this->params) as $ʟ_v => $ʟ_l) {
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
		foreach ($characters as $character) /* line 19 */ {
			echo '        <tr>
            <td>';
			echo LR\Filters::escapeHtmlText($character->id) /* line 21 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->name) /* line 22 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->race) /* line 23 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->class) /* line 24 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->hp) /* line 25 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->strenght) /* line 26 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->intelligence) /* line 27 */;
			echo '</td>
        </tr>
';

		}

		echo '    </tbody>
</table>
';
	}
}
