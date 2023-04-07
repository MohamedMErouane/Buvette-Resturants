function login() {
    var randomNumber = Math.floor(Math.random() * 100) + 1;
    let name =document.getElementById('name');
    let number = document.getElementById('number');
    let p=document.getElementById('p11');
    p.innerHTML= (name.value)+"\t"+ number.value+ "<br>"+"  Your Turn is: " + randomNumber +"<br>"+Date();
  }
  

