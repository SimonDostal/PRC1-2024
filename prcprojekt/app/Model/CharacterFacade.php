<?php

namespace App\Model;

use Nette\Database\Explorer;

class CharacterFacade
{
    private $database;

    public function __construct(Explorer $database)
    {
        $this->database = $database;
    }

    // Načtení konkrétní postavy podle jejího ID
    public function getCharacterById($characterId)
    {
        return $this->database->table('characters')
            ->get($characterId);
    }
}