<?php

use Latte\Runtime as LR;

/** source: /home/hnatek/PRC1-2024/prcprojekt/app/UI/Inventory/show.latte */
final class Template_152db373db extends Latte\Runtime\Template
{
	public const Source = '/home/hnatek/PRC1-2024/prcprojekt/app/UI/Inventory/show.latte';

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
			foreach (array_intersect_key(['item' => '24'], $this->params) as $ʟ_v => $ʟ_l) {
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
<h1>Inventář postavy ';
		echo LR\Filters::escapeHtmlText($character->name) /* line 3 */;
		echo '</h1>

<h2>Informace o postavě</h2>
<ul>
    <li><strong>Jméno:</strong> ';
		echo LR\Filters::escapeHtmlText($character->name) /* line 7 */;
		echo '</li>
    <li><strong>Rasa:</strong> ';
		echo LR\Filters::escapeHtmlText($character->race) /* line 8 */;
		echo '</li>
    <li><strong>Třída:</strong> ';
		echo LR\Filters::escapeHtmlText($character->class) /* line 9 */;
		echo '</li>
    <li><strong>HP:</strong> ';
		echo LR\Filters::escapeHtmlText($character->hp) /* line 10 */;
		echo '</li>
    <li><strong>Síla:</strong> ';
		echo LR\Filters::escapeHtmlText($character->strenght) /* line 11 */;
		echo '</li>
    <li><strong>Inteligence:</strong> ';
		echo LR\Filters::escapeHtmlText($character->intelligence) /* line 12 */;
		echo '</li>
</ul>

<h2>Inventář</h2>
<table class="table table-dark table-striped rpg-table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Předmět</th>
        </tr>
    </thead>
    <tbody>
';
		foreach ($inventory as $item) /* line 24 */ {
			echo '        <tr>
            <td>';
			echo LR\Filters::escapeHtmlText($item->id) /* line 26 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($item->item) /* line 27 */;
			echo '</td>
        </tr>
';

		}

		echo '    </tbody>
</table>

';
	}
}
