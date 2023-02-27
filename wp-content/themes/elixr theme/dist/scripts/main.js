const courses = document.querySelector ("#menu-item-32");
const submenu = document.querySelector (".sub-menu");
const hamburger = document.querySelector ("#hamburger");


  //hover on pin button
  courses.addEventListener('mouseenter', () => {
    // window.alert("test");
    submenu.style.display="block";
    // imgObj.classList.add('fadeInFilter');

    // buttonObj.classList.add('button-hover-on');
    // buttonObj.classList.remove('button-hover-off');
    // buttonObj.style.cssText= ' cursor: pointer;';
    // buttonObj.style.display="block";
   
  })

   //hover off pin button
   courses.addEventListener('mouseleave', () => {
    submenu.style.display="none";
    
  })

  submenu.addEventListener('mouseenter', () => {
    submenu.style.display="block";
    
  })

  // hamburger 

  hamburger.addEventListener('onClick', () => {
    hamburger.classList.toggle("open");
    
  })
