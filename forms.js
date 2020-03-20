function prixU(){
  const test=document.getElementById("listearticle").value;

   if(test==1) {
    pu1 = 72500;
    document.getElementById("prix").value = pu1;
     qtite = document.getElementById("nbrexpl").value;
    montant = qtite*pu1;
    document.getElementById("totalapayer").value = montant;
  }
  else if (test==2) {
    pu2 = 5000;
    document.getElementById("prix").value = pu2;
    qtite = document.getElementById("nbrexpl").value;
    montant = qtite*pu2;
    document.getElementById("totalapayer").value = montant;
  }
  else if (test==3) {
    pu3 = 150000;
    document.getElementById("prix").value = pu3;
    qtite = document.getElementById("nbrexpl").value;
    montant = qtite*pu3;
    document.getElementById("totalapayer").value = montant;
  }
}
