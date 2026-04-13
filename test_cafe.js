import { Selector } from 'testcafe';

fixture `TP Test Café`
    .page `./index.html`;

test('Vérification de la mise en majuscule du nom', async t => {
    await t
        .typeText('#nom-input', 'toto')
        .click('#btn-enregistrer')
        // On vérifie que le texte dans la div de destination est bien TOTO
        .expect(Selector('#affichage-nom').innerText).eql('TOTO');
});