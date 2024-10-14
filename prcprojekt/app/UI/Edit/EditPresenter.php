<?php
namespace App\UI\Edit;

use Nette;
use Nette\Application\UI\Form;
use App\Model\CharacterFacade;

final class EditPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private CharacterFacade $facade, // Přidejte $facade jako parametr konstruktoru
        private Nette\Database\Explorer $database, // Taktéž neodstraňte existující databázovou instanci
    ) {
    }

    protected function createComponentCharacterForm(): Form
    {
        $form = new Form;

        // Textová pole
        $form->addText('name', 'Jméno:')
            ->setRequired();
        $form->addText('race', 'Rasa:')
            ->setRequired();
        $form->addText('class', 'Třída:')
            ->setRequired();

        // Číselná pole
        $form->addText('hp', 'HP:')
            ->setRequired()
            ->addRule($form::INTEGER, 'HP musí být číslo');
        $form->addText('strenght', 'Síla:')
            ->setRequired()
            ->addRule($form::INTEGER, 'Síla musí být číslo');
        $form->addText('intelligence', 'Inteligence:')
            ->setRequired()
            ->addRule($form::INTEGER, 'Inteligence musí být číslo');

        // Odeslání formuláře
        $form->addSubmit('send', 'Uložit');
        $form->onSuccess[] = [$this, 'CharacterFormSucceeded'];

        // Pokud jde o úpravu postavy (existuje ID), předvyplníme formulář
        $id = $this->getParameter('id');
        if ($id) {
            $character = $this->facade->getCharacter($id);
            if ($character) {
                $form->setDefaults($character->toArray()); // Předvyplnění formuláře daty postavy
            }
        }

        return $form;
    }

    // Metoda pro zpracování formuláře
    public function CharacterFormSucceeded(Form $form, array $data): void
    {
        $id = $this->getParameter('id'); // Získáme ID postavy, pokud jde o úpravu

        if ($id) {
            // Úprava postavy
            $character = $this->facade->getCharacter($id);
            if ($character) {
                $character->update($data);
                $this->flashMessage("Postava byla úspěšně upravena.", 'success');
            } else {
                $this->flashMessage("Postava nebyla nalezena.", 'error');
            }
        } else {
            // Přidání nové postavy
            $this->facade->createCharacter($data);
            $this->flashMessage("Postava byla úspěšně přidána.", 'success');
        }

        $this->redirect('Character:default');
    }
}
