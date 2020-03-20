function calcul(){
  let val1, val2, resultat;
  val1= document.getElementById("nbr1").value ;
  val2= document.getElementById("nbr2").value;
  resultat = document.getElementById("result").value;

  if (document.getElementById("add").selected){
    resultat= val1 + val2;
     document.getElementById("result").value = resultat;

  }
  else if  (document.getElementById("sous").selected){
    resultat = val1 - val2;
  }
  else if (document.getElementById("multi").selected) {
    resultat = val1 * val2;
  }
  else if {
    resultat = val1 / val2;
      }
      document.getElementById("btn").onclick = calcul();
   }
