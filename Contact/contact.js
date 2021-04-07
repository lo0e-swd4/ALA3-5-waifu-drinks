window.onclick = function(element){
    var panel = element.target.nextElementSibling;

    switch(element.target.id){
        case 'accPanel1':
            if(panel.style.height == "0px"){
              panel.style.height = "200px";
            }else {
              panel.style.height = "0px";
            }
        break;
    }
}
