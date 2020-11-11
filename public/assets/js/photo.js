let picture = {
    containerElement : null,
    pictureElement : null,
    btnElement : null,
    closeElement : null,
    arrowRight : null,
    arrowLeft : null,

    init : function(){
        this.containerElement = document.querySelectorAll('.modal');
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
        
        let picture = event.currentTarget.parentElement.parentElement;
        let currentModal = picture.nextElementSibling;
        currentModal.style.display = 'block';
        
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
            currentModal.style.display = 'none'
            
        }
        else
        {
            event.currentTarget.parentElement.nextElementSibling.nextElementSibling.style.display = 'block';
            currentModal.style.display = 'none';
        }
        
    },

    handlerPreviousModal: function(event)
    {   
        let currentModal = event.currentTarget.parentElement;
        let categoryElement = document.querySelector('.category')

        if(currentModal.previousElementSibling == categoryElement)
        {
            picture.containerElement[(picture.containerElement.length - 1)].style.display = 'block';
            currentModal.style.display = 'none'
            
        }
        else
        {  
            event.currentTarget.parentElement.previousElementSibling.previousElementSibling.style.display = 'block';
            currentModal.style.display = 'none';
        }
        
    }

}

picture.init();
