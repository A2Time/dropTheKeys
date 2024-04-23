const burger = document.getElementById("burger");
const closeBurger = document.getElementById("close_burger")


let width = screen.width
let ok = "ca marche"
let no ="no"
// function navBar (width){
    // do{
  
    // }


    burger.onclick = function(){
        document.getElementById("nav_links").style.display = "flex"
        document.getElementById("close_burger").style.display = "flex"
        document.getElementById("burger").style.display = "none"
    }
    
    closeBurger.onclick = function(){
            
console.log(   document.getElementById("nav_links").style.display)
        document.getElementById("nav_links").style.display = "none"
        document.getElementById("close_burger").style.display = "none"
        document.getElementById("burger").style.display = "flex"
    
    }  

        
    
  

// }
