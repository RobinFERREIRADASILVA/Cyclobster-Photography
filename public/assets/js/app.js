let app = {

    /* Mobile hamburger menu */    
    hamburgerElement : null,
    closeElement : null,
    mobileExpand : null,
    mobileNav : null,
    
   init: function() {
        app.hamburgerElement = document.querySelector('.hamburger');
        app.mobileExpand = document.querySelector('#mobile-expand');
        app.mobileNav = document.querySelector('#mobile-nav');
        app.closeElement = document.querySelector('.fa-times');

        app.hamburgerElement.addEventListener('click', app.handleOpenNavBar);
        app.closeElement.addEventListener('click', app.handleCloseNavBar)
    },

    handleOpenNavBar : function(evt)
    {
           app.mobileExpand.style.display = 'block'
           app.hamburgerElement.style.display = 'none'

    },

    handleCloseNavBar : function(evt)
    {
       app.mobileExpand.style.display = 'none'
       app.hamburgerElement.style.display = 'inline-block'
    }

}

app.init();