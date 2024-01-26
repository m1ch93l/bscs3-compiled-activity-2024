// Define an array of animals with name and hints
var animalsArr = [
    { name: "Lion", hints: ["King of the jungle", "Has a mane", "Roars loudly", "Carnivorous", "Big cat"] },
    { name: "Elephant", hints: ["Has a trunk", "Large ears", "Herbivorous", "Gray in color", "Biggest land mammal"] },
    { name: "Giraffe", hints: ["Long neck", "Spotted coat", "Herbivorous", "Tallest land animal", "Distinctive pattern"] },
    { name: "Kangaroo", hints: ["Hops on two hind legs", "Has a pouch", "Marsupial", "Found in Australia", "Leaps great distances"] },
    { name: "Dolphin", hints: ["Marine mammal", "Highly intelligent", "Echolocation", "Sleek and streamlined body", "Social animals"] },
    { name: "Penguin", hints: ["Flightless bird", "Lives in Antarctica", "Waddles when it walks", "Black and white feathers", "Nest in colonies"] },
    { name: "Tiger", hints: ["Striped fur", "Carnivorous", "Powerful hunter", "Solitary creature", "Distinctive orange coat"] },
    { name: "Panda", hints: ["Black and white bear", "Eats bamboo", "Endangered species", "Found in China", "Sleeps a lot"] },
    { name: "Cheetah", hints: ["Fastest land animal", "Spotted coat", "Excellent sprinter", "Found in Africa", "Distinctive tear marks"] },
    { name: "Hippopotamus", hints: ["Large aquatic mammal", "Semi-aquatic", "Herbivorous", "Aggressive nature", "Thick skin"] }
];


let theAnimal = animalsArr[Math.floor(Math.random() * 10)]
let tries = 3;
let hintItterator = 0;

console.log(theAnimal);


const btn = document.querySelector('button');
const inp = document.querySelector('input');
const result = document.querySelector('.result');
const triesCount = document.querySelector('.tryCounter');
const hinter = document.querySelector('.hint p');



triesCount.innerHTML = tries;
hinter.innerHTML = theAnimal.hints[hintItterator]



btn.addEventListener('click', () => {
    if(inp.value === theAnimal.name)
    {
        alert("Correct")
    }
    else
    {
        alert("Wrong")
        
        hintItterator = hintItterator + 1;
        hinter.innerHTML = theAnimal.hints[hintItterator]

        console.log(tries);
        if(tries > 0) {
            tries--;
            triesCount.innerHTML = tries;
        }
        else
        {
            alert("failed");
        }
    }
})







