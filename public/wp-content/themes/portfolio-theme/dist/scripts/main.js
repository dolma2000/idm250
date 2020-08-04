const nav_menu_slide = () => {

    const hamburger = document.querySelector(".hamburger");
    
    //To check if the Hamburger Element exist
    if(typeof(hamburger) == 'undefined' || hamburger == null){return;} 

    const nav_menu_list = document.querySelector('.navigation-menu-list');
    
    hamburger.addEventListener('click', () => {
        nav_menu_list.classList.toggle('nav-active')
    });
}
    
nav_menu_slide();