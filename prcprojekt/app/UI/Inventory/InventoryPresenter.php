<?php

namespace App\UI\Inventory;

use Nette;
use App\Model\InventoryFacade;
use App\Model\CharacterFacade;

class InventoryPresenter extends Nette\Application\UI\Presenter
{
    private $inventoryFacade;
    private $characterFacade;

    public function __construct(InventoryFacade $inventoryFacade, CharacterFacade $characterFacade)
    {
        $this->inventoryFacade = $inventoryFacade;
        $this->characterFacade = $characterFacade;
    }

    public function renderShow($characterId)
    {
        // Získání informací o postavě podle ID
        $character = $this->characterFacade->getCharacterById($characterId);

        // Získání inventáře podle character_id
        $inventory = $this->inventoryFacade->getInventoryByCharacterId($characterId);

        // Předání informací o postavě a inventáře do šablony
        $this->template->character = $character;
        $this->template->inventory = $inventory;
    }
}
