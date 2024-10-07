<?php
namespace App\UI\Character;

use App\Model\CharacterFacade;
use Nette\Application\UI\Presenter;

final class CharacterPresenter extends Presenter
{
    public function __construct(
        private CharacterFacade $facade,
    ) {
    }

    public function renderDefault(): void
    {
        // Předání seznamu postav do šablony
        $this->template->characters = $this->facade->getCharacters();
    }
}

