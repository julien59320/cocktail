// query selector
const navbar = document.querySelector('aside');
const open = document.querySelector('.sidebar-toggle');
const close = document.querySelector('.close-btn');


//add event lister au click ajout de classe
open.addEventListener('click', function() {
  navbar.classList.add('show-sidebar');
})

//remove button close

close.addEventListener('click', () => {
  navbar.classList.remove('show-sidebar');
})


//Caroussel
document.body.onload=function(){
  nbr=5;
  p=0;
  container=document.getElementById('container');
  droite=document.getElementById('d');
  gauche=document.getElementById('g');


  container.style.width=(1000*nbr)+ "px";


  for (let i = 0; i < nbr ; i++) {
      div=document.createElement("div");
      div.className="photo"
      div.style.backgroundImage="url('https://127.0.0.1:8000/upload/img"+i+".jpeg')";
      container.appendChild(div);
      
  }
  afficherMasquer();
}

d.onclick=function(){
  if(p>-nbr+1){
      p--;
      container.style.transform="translate("+p*1000+"px)";
      container.style.transition="all 0.5 ease";
      
  }
  afficherMasquer();
}

g.onclick=function(){
  if(p < 0 ){
  p++;
  container.style.transform="translate("+p*1000+"px)";
  container.style.transition="all 0.5 ease";
  
  
}
afficherMasquer();
}

function afficherMasquer(){
  if(p==-nbr+1)
  d.style.visibility="hidden";
  else
  d.style.visibility="visible";
  if(p==0)
  g.style.visibility="hidden";
  else
  g.style.visibility="visible";
}

