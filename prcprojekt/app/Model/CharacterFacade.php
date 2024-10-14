<?php
namespace App\Model;

use Nette\Database\Explorer;

final class CharacterFacade
{
    public function __construct(
        private Explorer $database,
    ) {
    }

// Získání jedné postavy podle ID
public function getCharacter($id)
{
    return $this->database
        ->table('characters')
        ->get($id);
}

// Získání všech postav (pro zobrazení seznamu)
public function getCharacters()
{
    return $this->database
        ->table('characters')
        ->fetchAll();
}

// Vytvoření nové postavy
public function createCharacter(array $data)
{
    return $this->database
        ->table('characters')
        ->insert($data);
}


    public function deleteCharacter($id): bool
    {
        $character = $this->database
            ->table('characters')
            ->get($id);

        if (!$character) {
            return false; // Postava nebyla nalezena
        }

        $character->delete();
        return true; // Postava byla odstraněna
    }
}

