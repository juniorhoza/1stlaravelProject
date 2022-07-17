


 
  let search=document.getElementById('search');
let filter=search.innerText
let outputs=document.querySelectorAll('.output')
let products=document.querySelector(".products")
let a 
let txtValue
let b
let count=0
let no=document.querySelector("#no")
search.addEventListener("keyup",searc)

 function searc(){
    
     for (let i = 0; i <= outputs.length; i++) {
         b=search.value.toUpperCase()
        a = outputs[i].getElementsByTagName("a")[0]
      console.log(outputs);
         txtValue =a.innerText;
      
        if (txtValue.toUpperCase().indexOf(b) > -1) {
          outputs[i].style.display = "";
          count=0
        } else {
         outputs[i].style.display = "none";
         count++
        
        }
        console.log(count)
     }
 
      if(count>1){
        no.textContent="no products found"

      }
      else{

          no.textContent=" "
      }
 }
 




