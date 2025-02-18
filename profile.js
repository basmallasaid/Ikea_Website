var savebutton = document.getElementById('savebutton');
var readonly = true;
var inputs = document.querySelectorAll('input[type="text"],[type=email],[type=password],[type=tel]');

savebutton.addEventListener('click',function(){
    
     for (var i=0; i<inputs.length; i++) {
     inputs[i].toggleAttribute('readonly');
     inputs[i].toggleAttribute('required');

     };

    if (savebutton.innerHTML == "edit") {
      
      savebutton.innerHTML = "save";
         } else {
      savebutton.innerHTML = "edit";
      }



     
});