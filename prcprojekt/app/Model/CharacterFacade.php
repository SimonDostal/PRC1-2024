<?php
namespace App\Model;

use Nette\Database\Explorer;

final class CharacterFacade
{
    public function __construct(
        private Explorer $database,
    ) {
    }

    // Tato metoda vrací všechny postavy z tabulky 'character'
    public function getCharacters()
    {
        return $this->database
            ->table('characters')  // Pokud máte tabulku pojmenovanou jinak, změňte 'character' na její název
            ->fetchAll();  // fetchAll() vrátí všechny řádky
    }
}


