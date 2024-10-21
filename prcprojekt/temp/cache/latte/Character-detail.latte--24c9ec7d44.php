<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/PRC1-2024-7/prcprojekt/app/UI/Character/detail.latte */
final class Template_24c9ec7d44 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/PRC1-2024-7/prcprojekt/app/UI/Character/detail.latte';

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

		echo '    <h1 class="rpg-header">Detail postavy</h1>

';
		if ($character) /* line 4 */ {
			echo '        <div class="character-details">
            <h2>';
			echo LR\Filters::escapeHtmlText($character->name) /* line 6 */;
			echo '</h2>
            <p><strong>Rasa:</strong> ';
			echo LR\Filters::escapeHtmlText($character->race) /* line 7 */;
			echo '</p>
            <p><strong>Třída:</strong> ';
			echo LR\Filters::escapeHtmlText($character->class) /* line 8 */;
			echo '</p>
            <p><strong>HP:</strong> ';
			echo LR\Filters::escapeHtmlText($character->hp) /* line 9 */;
			echo '</p>
            <p><strong>Síla:</strong> ';
			echo LR\Filters::escapeHtmlText($character->strenght) /* line 10 */;
			echo '</p>
            <p><strong>Inteligence:</strong> ';
			echo LR\Filters::escapeHtmlText($character->intelligence) /* line 11 */;
			echo '</p>
        </div>

        <!-- Tlačítka pro úpravu nebo odstranění -->
        <div class="actions">
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('Edit:edit', ['id' => $character->id])) /* line 16 */;
			echo '" class="btn btn-primary">Upravit</a>
            <a href="';
			echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link('delete!', ['id' => $character->id])) /* line 17 */;
			echo '" class="btn btn-danger" onclick="return confirm(\'Opravdu chcete odstranit tuto postavu?\');">Odstranit</a>
        </div>
';
		} else /* line 19 */ {
			echo '        <p>Postava nebyla nalezena.</p>
';
		}
	}
}
