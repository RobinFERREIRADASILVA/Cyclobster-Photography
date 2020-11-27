let picture = {
    containerElement : null,
    pictureElement : null,
    btnElement : null,
    closeElement : null,
    arrowRight : null,
    arrowLeft : null,

    init : function(){
        this.containerElement = document.querySelectorAll('.modal');
        this.pictureElement = document.querySelectorAll('.img-content');
        this.btnElement = document.querySelectorAll('.btn');
        this.closeElement = document.querySelectorAll('.close');
        this.arrowRight = document.querySelectorAll('.arrow-right');
        this.arrowLeft = document.querySelectorAll('.arrow-left');

        this.btnElement.forEach(function(element){
            element.addEventListener('click', picture.handleFullScreen);
        })

        this.closeElement.forEach(function(element){
            element.addEventListener('click', picture.handlerCloseFullScreen)
        })

        this.arrowRight.forEach(function(element){
            element.addEventListener('click', picture.handlerNextModal)
        })

        this.arrowLeft.forEach(function(element){
            element.addEventListener('click', picture.handlerPreviousModal)
        })

        

    },

    handleFullScreen : function(event)
    {
        console.log('yo');

        let divPicture = event.currentTarget.parentElement.parentElement;
        let currentModal = divPicture.nextElementSibling;
        currentModal.style.display = 'block'; 
        
        picture.adjustHeightPictureDesktop(currentModal);
        picture.adjustHeightPictureMobile(currentModal);
        
    },

    handlerCloseFullScreen :function(event)
    {
        event.currentTarget.parentElement.style.display = 'none';
        
    },

    handlerNextModal: function(event)
    {   
        let currentModal = event.currentTarget.parentElement;
        

        if(currentModal.nextElementSibling == null)
        {
            picture.containerElement[0].style.display = 'block';
            currentModal.style.display = 'none';
            picture.adjustHeightPictureDesktop(currentModal.nextElementSibling.nextElementSibling);
            picture.adjustHeightPictureMobile(currentModal.nextElementSibling.nextElementSibling);
            
        }
        else
        {
            event.currentTarget.parentElement.nextElementSibling.nextElementSibling.style.display = 'block';
            currentModal.style.display = 'none';
            picture.adjustHeightPictureDesktop(currentModal.nextElementSibling.nextElementSibling);
            picture.adjustHeightPictureMobile(currentModal.nextElementSibling.nextElementSibling);
        }
        
    },

    handlerPreviousModal: function(event)
    {   
        let currentModal = event.currentTarget.parentElement;
        let categoryElement = document.querySelector('.category');


        if(currentModal.previousElementSibling == categoryElement)
        {
            picture.containerElement[(picture.containerElement.length - 1)].style.display = 'block';
            currentModal.style.display = 'none';
            picture.adjustHeightPictureDesktop(currentModal.previousElementSibling.previousElementSibling);
            picture.adjustHeightPictureMobile(currentModal.previousElementSibling.previousElementSibling);
            
        }
        else
        {  
            event.currentTarget.parentElement.previousElementSibling.previousElementSibling.style.display = 'block';
            currentModal.style.display = 'none';
            picture.adjustHeightPictureDesktop(currentModal.previousElementSibling.previousElementSibling);
            picture.adjustHeightPictureMobile(currentModal.previousElementSibling.previousElementSibling);
        }
        
    },

    adjustHeightPictureDesktop : function(element)
    {
        if(window.innerWidth >= 892 && window.innerWidth < 1450){
            if(element.lastElementChild.clientHeight < 750)
            {
                
                    
                element.lastElementChild.style.paddingTop = "90px";
                
            }
          }
    },

    adjustHeightPictureMobile : function(element)
    {
        if(window.innerWidth > 370 && window.innerWidth < 650)
        {
            if(element.lastElementChild.clientHeight > 250 && element.lastElementChild.clientHeight < 500)
            {
                element.lastElementChild.style.marginTop = "50%";
            }
            else{
                element.lastElementChild.style.marginTop = "21%";
            }
        }
        else if(window.innerWidth >= 650 && window.innerWidth < 892)
        {
            if(element.lastElementChild.clientHeight > 300 && element.lastElementChild.clientHeight < 734)
            {
                element.lastElementChild.style.marginTop = "25%";
            }
        }
    }

}

picture.init();
