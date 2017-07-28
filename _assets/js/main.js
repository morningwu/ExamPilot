function showDiv(this){
    if(elem.value == "Mutiple Choice"){
      document.getElementById('Mutiple Choice').style.display      = "block";
      document.getElementById('Fill in the Blanks').style.display      = "none";
 
   }
    if(elem.value == "Fill in the Blanks"){
      document.getElementById('Mutiple Choice').style.display      = "none";
      document.getElementById('Fill in the Blanks').style.display      = "block";
     
   }
}
