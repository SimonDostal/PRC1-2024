<?php
namespace App\UI\Edit;

use Nette;
use Nette\Application\UI\Form;
use App\Model\CharacterFacade;

final class EditPresenter extends Nette\Application\UI\Presenter
{
    public function __construct(
        private CharacterFacade $facade,
        private Nette\Database\Explorer $database,
    ) {
    }

    public function renderCreate(int $id = null): void
    {
        if ($id) {
            // Pokud je ID předáno, pokusíme se načíst postavu
            $character = $this->facade->getCharacter($id);
            if (!$character) {
                $this->flashMessage("Postava nebyla nalezena.", 'error');
                $this->redirect('Character:default');
            }
            $this->template->character = $character; // Předáme postavu do šablony
        }
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

        // Předvyplnění formuláře, pokud jde o úpravu
        $id = $this->getParameter('id');
        if ($id) {
            $character = $this->facade->getCharacter($id);
            if ($character) {
                $form->setDefaults($character->toArray());
            }
        }

        return $form;
    }

    public function CharacterFormSucceeded(Form $form, array $data): void
    {
        $id = $this->getParameter('id');

        if ($id) {
            // Úprava postavy
            $this->facade->updateCharacter($id, $data);
            $this->flashMessage("Postava byla úspěšně upravena.", 'success');
        } else {
            // Přidání nové postavy
            $this->facade->createCharacter($data);
            $this->flashMessage("Postava byla úspěšně přidána.", 'success');
        }

        $this->redirect('Character:default');
    }
}
