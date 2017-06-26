/*------------------formulaire-------------------*/

function formulaire(){

   confirm('votre message nous à bien été envoyé ');

}

/*-------------D A T E -----------------------------*/

document.getElementById('date').innerHTML=(j+m+a);

/*--------------------A L T------------------------*/

/*document.getElementByName('img').getAtribute('alt')*/





document.getElementById('date').innerHTML = Date ();
var d = new Date()
var j=d.getDate();
document.write(".")
var m=d.getMonth() + 1;
document.write(".")
var a=d.getFullYear();
