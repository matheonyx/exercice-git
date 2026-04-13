import { Selector } from 'testcafe';

fixture `TP Test Café PHP`
    .page `http://localhost:8000/index.php`; // URL du serveur local

test('Vérification de la mise en majuscule via PHP', async t => {
    await t
        .typeText('#nom-input', 'alexis')
        .click('#btn-enregistrer')
        .expect(Selector('#affichage-nom').innerText).eql('ALEXIS');
});