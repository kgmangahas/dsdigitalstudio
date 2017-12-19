import $ from 'jquery';

class MobileMenu {

    constructor() {

        this.siteHeader = $(".site-header");
        this.logo = $(".site-header__logo");
        this.menuIcon = $(".site-header__menu-icon");
        this.menuContent = $(".site-header__menu-content");
        this.name = $(".site-header__name");
        this.socialIcons = $(".social-icons__icon");
        this.body = $("body");
        this.nav = $(".primary-nav");
        this.navigationText = $(".primary-nav a");
        this.window = $(window);
        this.isMobileMenu = false;
        this.socialIconsMain = $(".social-icons__icon .icon");





        this.events();
        
      
       
       
    }
    events() {
      

        this.menuIcon.click(this.toggleTheMenu.bind(this));
        this.socialIcons.hover(this.toggleTheIcon.bind(this));
       
    }
    
    toggleTheMenu() {
       this.menuContent.toggleClass("site-header__menu-content--is-visible");
       this.siteHeader.toggleClass("site-header--is-expanded");
       this.logo.toggleClass("site-header__logo--is-not-visible");
       this.body.toggleClass("body--no-scroll");
       this.menuIcon.toggleClass("site-header__menu-icon--is-clicked");
      // this.navigationText.toggleClass("primary-nav a--is-visible");
       /* this.name.toggleClass("site-header__name--is-visible");
        this.socialIcons.toggleClass("site-header__b-accent--is-visible"); */
        this.menuIcon.toggleClass("site-header__menu-icon--close-x");
        this.siteHeader.toggleClass("site-header__menu-icon__container--is-visible");
    
      
    }

   
   toggleTheIcon() {
      console.log("toggletheicon");
      this.socialIcons.toggleClass("social-icons__icon.icons.social-icons__icon--is-not-hover");
   }
    
    
    
}


export default MobileMenu;