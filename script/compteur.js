const plus = document.querySelectorAll(".menuPlus");
const minus = document.querySelectorAll(".menuMoins");
const compteur = document.querySelector('.upgrade');


let valeur = 0;
let tabCount = [];

plus.forEach(ajoute => 
{
    ajoute.addEventListener('click', (e) =>
    {
        let tabCount = [];
        e.preventDefault(); //preventDefault empèche la fonction par défaut de se lancer (a > envois vers un autre endroit)

        const update = ajoute.parentNode.childNodes[3];
        let count = parseInt(update.value);
        count++;
        update.value = count;

        const nbPersonne = document.querySelectorAll('#update');
        nbPersonne.forEach(personne => 
        {
            let value = parseInt(personne.value);
            tabCount.push(value);
        });

        valeur = tabCount.reduce((a, b) => a + b);
        compteur.value = valeur;
    });
});

minus.forEach(enleve => 
{
    enleve.addEventListener('click', (e) =>
    {
        let tabCount = [];
        e.preventDefault(); //preventDefault empèche la fonction par défaut de se lancer (a > envois vers un autre endroit)

        const update = enleve.parentNode.childNodes[3];
        let count = parseInt(update.value);

        if(count > 0)
        {
            count--;
        }
        
        update.value = count;

        const nbPersonne = document.querySelectorAll('#update');
        nbPersonne.forEach(personne => 
        {
            let value = parseInt(personne.value);
            tabCount.push(value);
        });

        valeur = tabCount.reduce((a, b) => a + b);
        compteur.value = valeur;
    });
});

console.log(tabCount);