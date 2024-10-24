<?php

use Latte\Runtime as LR;

/** source: /home/marinakt/PRC1-2024-7/prcprojekt/app/UI/@layout.latte */
final class Template_4e4e38250e extends Latte\Runtime\Template
{
	public const Source = '/home/marinakt/PRC1-2024-7/prcprojekt/app/UI/@layout.latte';

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

    <!-- Google Fonts for RPG Styling -->
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

      <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom CSS -->
    <link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 20 */;
		echo '/css/style.css">
</head>

<body>

    <!-- Epic Title with Transparent Background -->
    <div class="epic-title-container">
        <h1 class="epic-title">RPG Character Manager</h1>
    </div>

    <div class="container">
        <!-- Flash messages -->
';
		foreach ($flashes as $flash) /* line 32 */ {
			echo '        <div class="alert alert-';
			echo LR\Filters::escapeHtmlAttr($flash->type) /* line 32 */;
			echo '" role="alert">
            ';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 33 */;
			echo '
        </div>
';

		}

		echo '
        <!-- Main content -->
        <main>
';
		$this->renderBlock('content', [], 'html') /* line 38 */;
		echo '        </main>
    </div>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <p>&copy; 2024 RPG Character Manager | All rights reserved.</p>
            <p>
                Follow us:
                <a href="https://twitter.com" target="_blank">Twitter</a> |
                <a href="https://facebook.com" target="_blank">Facebook</a> |
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </p>
        </div>
    </footer>

';
		$this->renderBlock('scripts', get_defined_vars()) /* line 55 */;
		echo '</body>
</html>
';
	}


	public function prepare(): array
	{
		extract($this->params);

		if (!$this->getReferringTemplate() || $this->getReferenceType() === 'extends') {
			foreach (array_intersect_key(['flash' => '32'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		return get_defined_vars();
	}


	/** {block scripts} on line 55 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
    <!-- Nette Forms Script -->
    <script src="https://unpkg.com/nette-forms@3"></script>
';
	}
}
