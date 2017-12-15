window.onload = function(){

    // get all elemments by class
    let uploadBtns = document.getElementsByClassName("uploadBtn");
    
    // add eventListener on each element
    for (var i = uploadBtns.length - 1; i >= 0; i--) {

       uploadBtns[i].addEventListener('change', function(e){

        let attrFor = e.currentTarget.attributes.for.value, // value of FOR attribute
            bindContainer = document.getElementById(attrFor), // get conteiner for preview
            bindInput = document.getElementById("input-" + attrFor); // get input for save img src
            
        // upload image if input['file'] was change
        uploadImage(e.currentTarget.files[0], r => {

            // Create preview
            let img = new Image();
            img.src = "/uploads/300x200/" + r.src;
            img.onload = response => {
                // if(bindContainer.firstChild) bindContainer.firstChild.remove();
                for(let i = 0; i < bindContainer.children.length; i++){
                    bindContainer.children[i].remove();
                }
                bindContainer.append(img);
                bindInput.value = r.src;
            }
        })
       })
    }

    // Upload image to server
    function uploadImage(image, callback){
        let fd = new FormData();
        fd.append('image', image);
        let xhr = new XMLHttpRequest();
        xhr.open("POST", '/upload/resize', true);
        xhr.onload = r => {
            if(r.currentTarget.status == 200)
            callback(JSON.parse(r.currentTarget.response));
        }
        xhr.send(fd);
    }
}