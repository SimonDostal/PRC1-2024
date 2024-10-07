<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/PRC1-2024-4/prcprojekt/app/UI/@layout.latte */
final class Template_0228df59c4 extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/PRC1-2024-4/prcprojekt/app/UI/@layout.latte';

	public const Blocks = [
		['scripts' => 'blockScripts'],
	];


	public function main(array $ʟ_args): void
	{
		extract($ʟ_args);
		unset($ʟ_args);

		if ($this->global->snippetDriver?->renderSnippets($this->blocks[self::LayerSnippet], $this->params)) {
			return;
		}

		echo '<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>';
		if (isset($title)) /* line 7 */ {
			$this->createTemplate($title, $this->params, 'include')->renderToContentType(function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('stripHtml', $ʟ_fi, $s));
			}) /* line 7 */;
			echo ' | ';
		}
		echo 'RPG Character Manager</title>
    
    <!-- Link to your custom CSS -->
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */;
		echo '/css/style.css">
</head>

<body>
    <div class="container">
        <!-- Navigation Menu -->
        <nav class="navbar">
            <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 17 */;
		echo '/">RPG Character Manager</a>
            <ul class="navbar-nav">
                <li><a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 19 */;
		echo '/character">Postavy</a></li>
                <li><a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
		echo '/inventory">Inventář</a></li>
                <li><a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */;
		echo '/about">O aplikaci</a></li>
                <li><a class="nav-link" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 22 */;
		echo '/contact">Kontakt</a></li>
            </ul>
        </nav>

        <!-- Flash messages -->
';
		foreach ($flashes as $flash) /* line 27 */ {
			echo '        <div class="alert alert-';
			echo LR\Filters::escapeHtmlAttr($flash->type) /* line 27 */;
			echo '" role="alert">
            ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 28 */;
			echo '
        </div>
';

		}

		echo '
        <!-- Main content -->
        <main>
';
		$this->renderBlock('content', [], 'html') /* line 33 */;
		echo '        </main>
    </div>

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 37 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '27'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block scripts} on line 37 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '    <!-- Nette Forms Script -->
    <script src="https://unpkg.com/nette-forms@3"></script>
';
	}
}
