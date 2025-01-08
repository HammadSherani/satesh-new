let navbar = document.querySelector('.navbar');

document.querySelector('#menu').onclick = () =>{
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    navbar.classList.remove('active');
}


const navgbar = document.querySelector("#music-header");

const sticky = navgbar.offsetTop;

console.log(sticky);

window.addEventListener('scroll', () => {
  if(window.pageYOffset > sticky){
    navgbar.classList.add('sticky');
  }else{
    navgbar.classList.remove('sticky');
  }
});
