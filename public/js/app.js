(function (window, document) {

    var layout   = document.getElementById('layout'),
        menu     = document.getElementById('menu'),
        menuLink = document.getElementById('menuLink'),
        content  = document.getElementById('main');

    function toggleClass(element, className) {
        var classes = element.className.split(/\s+/),
            length = classes.length,
            i = 0;

        for(; i < length; i++) {
          if (classes[i] === className) {
            classes.splice(i, 1);
            break;
          }
        }
        // The className is not found
        if (length === classes.length) {
            classes.push(className);
        }

        element.className = classes.join(' ');
    }

    function toggleAll(e) {
        var active = 'active';

        e.preventDefault();
        toggleClass(layout, active);
        toggleClass(menu, active);
        toggleClass(menuLink, active);
    }

    menuLink.onclick = function (e) {
        toggleAll(e);
    };

    content.onclick = function(e) {
        if (menu.className.indexOf('active') !== -1) {
            toggleAll(e);
        }
    };

}(this, this.document));

/** Funcion para el despegable del submenu */
function desplegar(clase){
  var id = clase.id;
  var submenu = document.getElementById(id + '_');
  if(getComputedStyle(submenu).display == 'none'){
    submenu.style.display = "block";
  }else{
    submenu.style.display = "none";
  }
}
/** Fin Funcion para el despegable del submenu */

/** Desactivar el click derecho y para entrar en consola*/
document.oncontextmenu = function(){
  return false
}
document.onkeydown = function(){
  if (event.keyCode == 123) { 
    return false;
  }else{
    if (event.keyCode == 73) { 
      return false;
    }else{
      if (event.keyCode == 85) { 
        return false;
      }
    }
  }
  
  
}
/** Fin Desactivar el click derecho y para entrar en consola*/