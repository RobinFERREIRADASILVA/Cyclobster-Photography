let picture = {
    containerElement : null,
    pictureElement : null,
    btnElement : null,

    init : function(){
        this.containerElement = document.querySelector('.category-container');
        this.pictureElement = document.querySelectorAll('.img');
        this.btnElement = document.querySelectorAll('.btn');

        this.btnElement.forEach(function(element){
            element.addEventListener('click', picture.handleFullScreen);
        })

    },

    handleFullScreen : function(evt)
    {
        console.log('yo')
                evt.target.parentElement.parentElement.classList.add('fullscreen-picture');
    }

}

picture.init();
