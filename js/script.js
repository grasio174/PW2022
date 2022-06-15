let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
}

document.querySelector('#login-btn').onclick = () =>{
  document.querySelector('.login-form-container').classList.toggle('active');
}


document.querySelector('#close-login-form').onclick = () =>{
  document.querySelector('.login-form-container').classList.remove('active');
}

function close (){
  document.querySelector('.login-form-container').classList.remove('active');
}

window.onscroll = () =>{

  menu.classList.remove('fa-times');
  navbar.classList.remove('active');

  if(window.scrollY > 0){
    document.querySelector('.header').classList.add('active');
  }else{
    document.querySelector('.header').classList.remove('active');
  };

};

document.querySelector('.beranda').onmousemove = (e) =>{

  document.querySelectorAll('.beranda-parallax').forEach(elm =>{

    let speed = elm.getAttribute('data-speed');

    let x = (window.innerWidth - e.pageX * speed) / 90;
    let y = (window.innerHeight - e.pageY * speed) / 90;

    elm.style.transform = `translateX(${y}px) translateY(${x}px)`;

  });

};


document.querySelector('.beranda').onmouseleave = (e) =>{

  document.querySelectorAll('.beranda-parallax').forEach(elm =>{

    elm.style.transform = `translateX(0px) translateY(0px)`;

  });

};

var swiper = new Swiper(".kendaraan-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".unggulan-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".review-slider", {
  grabCursor: true,
  centeredSlides: true,  
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 9500,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1024: {
      slidesPerView: 3,
    },
  },
});


//insert element after
function insertAfter(newElement, referenceElement) {
  referenceElement.parentNode.insertBefore(newElement, referenceElement.nextSibling);
}

function getCookie(name) {
  var nameEQ = name + "=";
  var ca = document.cookie.split(';');
  for(var i=0;i < ca.length;i++) {
      var c = ca[i];
      while (c.charAt(0)==' ') c = c.substring(1,c.length);
      if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
  }
  return null;
}

// Log out Log in button
window.onload = function (){
  if (window.location.href.indexOf('home.php') > -1){  
    if(getCookie('User') == null){
    window.location.href = 'beranda.html';
    alert('Harap Melakukan Login')
    }
  }
  if (getCookie('User') != null){  
    dup = document.getElementById('log1');
    dup1 = document.getElementById('log1_info');
    dup2 = document.getElementById('produk');
    if (dup1 !==null){
      dup1.remove();
    }
    if (dup2 !==null){
      dup2.remove();
    }
    if (dup !==null ){
        dup.remove();
    }
    const divlog_info = document.createElement('div');
    divlog_info.id = 'log1_info';
    const butt = document.createElement('button');
    const content_info = document.createTextNode('Log Out');
    butt.className = 'btn';
    divlog_info.appendChild(butt);
    butt.appendChild(content_info);
    element_info = document.getElementById('log_info');
    insertAfter(divlog_info, element_info);

    const href_produk = document.createElement('a');
    const href_content_produk = document.createTextNode('Produk');
    href_produk.appendChild(href_content_produk);
    href_produk.setAttribute("href", "home.php");
    element_produk = document.getElementById("check");
    insertAfter(href_produk, element_produk);

    const divlog = document.createElement('div');
    divlog.id='log1';
    const head = document.createElement('h3');
    const content = document.createTextNode('Konfirmasi');
    head.appendChild(content);
    const input = document.createElement('a');
    const button = document.createElement('button');
    button.setAttribute("type", "button");
    button.className = 'btn';
    input.setAttribute("href", "Logout.php");
    const button_content = document.createTextNode('Logout');
    button.appendChild(button_content);
    input.appendChild(button);
    divlog.appendChild(head);
    divlog.appendChild(input);
    element = document.getElementById('log');
    insertAfter(divlog, element);
  }
  else if (getCookie('User') == null){
    dup = document.getElementById('log1');
    if (dup !==null ){
        dup.remove();
    }
    const divlog_info = document.createElement('div');
    const butt = document.createElement('button');
    const content_info = document.createTextNode('Login');
    butt.className = 'btn';
    divlog_info.appendChild(butt);
    butt.appendChild(content_info);
    element_info = document.getElementById('log_info');
    insertAfter(divlog_info, element_info);
    const divlog = document.createElement('div');
    divlog.id='log1';
    const head = document.createElement('h3');
    const content = document.createTextNode('User Login');
    head.appendChild(content);
    const input_email = document.createElement('input');
    input_email.setAttribute("type", "text");
    input_email.setAttribute("placeholder", "Username / Email");
    input_email.setAttribute("name", "Username");
    input_email.id = "email";
    input_email.className='box';
    const input_password = document.createElement('input');
    input_password.setAttribute("type", "password");
    input_password.setAttribute("placeholder", "Password");
    input_password.setAttribute("name", "Password");
    input_password.id = "password";
    input_password.className='box';
    const input = document.createElement('input');
    input.setAttribute("type", "submit");
    input.setAttribute("value", "Login");
    input.className='btn';
    const para = document.createElement('p');
    const para_content = document.createTextNode('Belum punya akun?');
    const href = document.createElement('a');
    const href_content = document.createTextNode(' Klik disini');
    para.appendChild(para_content);
    href.setAttribute("href", "Daftar.html");
    href.appendChild(href_content);
    para.appendChild(href);
    divlog.appendChild(head);
    divlog.appendChild(input_email);
    divlog.appendChild(input_password);
    divlog.appendChild(input);
    divlog.appendChild(para);
    element = document.getElementById('log');
    insertAfter(divlog, element);
  }
}
function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

