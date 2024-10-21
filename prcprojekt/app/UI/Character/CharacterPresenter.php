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

    public function renderDetail($id): void
    {
        // Získání postavy podle ID
        $character = $this->facade->getCharacter($id);
        
        if (!$character) {
            $this->flashMessage("Postava nebyla nalezena.", 'error');
            $this->redirect('Character:default');
        }
    
        // Získání inventáře pro danou postavu
        $items = $this->facade->getItemsForCharacter($id);
        
        // Předání postavy a jejího inventáře do šablony
        $this->template->character = $character;
        $this->template->items = $items; // Předáme seznam předmětů do šablony
    }
    

    

    // Metoda pro odstranění postavy
    public function handleDelete($id): void
    {
        // Použijeme facade pro odstranění postavy
        $result = $this->facade->deleteCharacter($id);

        if (!$result) {
            $this->flashMessage("Postava nebyla nalezena.", 'error');
        } else {
            $this->flashMessage("Postava byla úspěšně odstraněna.", 'success');
        }

        $this->redirect('Character:default');
    }
}

 