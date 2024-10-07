<?php

use Latte\Runtime as LR;

/** source: /root/PRC1-2024-1/prcprojekt/app/UI/Character/default.latte */
final class Template_2c1fdc904e extends Latte\Runtime\Template
{
	public const Source = '/root/PRC1-2024-1/prcprojekt/app/UI/Character/default.latte';


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<h1>Seznam postav</h1>

<table>
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
		foreach ($characters as $character) /* line 16 */ {
			echo '        <tr>
            <td>';
			echo LR\Filters::escapeHtmlText($character->id) /* line 18 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->name) /* line 19 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->race) /* line 20 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->class) /* line 21 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->hp) /* line 22 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->strenght) /* line 23 */;
			echo '</td>
            <td>';
			echo LR\Filters::escapeHtmlText($character->intelligence) /* line 24 */;
			echo '</td>
        </tr>
';

		}

		echo '    </tbody>
</table>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['character' => '16'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}
}
