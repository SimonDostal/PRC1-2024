<?php

use Latte\Runtime as LR;

/** source: /root/PRC1-2024-2/prcprojekt/app/UI/Character/default.latte */
final class Template_b150504ea2 extends Latte\Runtime\Template
{
	public const Source = '/root/PRC1-2024-2/prcprojekt/app/UI/Character/default.latte';

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
            <th>Akce</th> <!-- Sloupec pro akce, jako je odstranění -->
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
            <td>
                <!-- Tlačítko pro úpravu -->
                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:create', ['id' => $character->id])) /* line 30 */;
			echo '" class="btn btn-primary">Upravit</a>
                
                <!-- Tlačítko pro odstranění s použitím signálu handleDelete -->
                <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('delete!', ['id' => $character->id])) /* line 33 */;
			echo '" class="btn btn-danger" onclick="return confirm(\'Opravdu chcete odstranit tuto postavu?\');">Odstranit</a>
            </td>
        </tr>
';

		}

		echo '    </tbody>
</table>

';
	}
}
