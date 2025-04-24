document.querySelectorAll('.dropdown-submenu > a').forEach(function (element) {
    element.addEventListener('click', function (e) {
      e.preventDefault();
      e.stopPropagation();
  
      // Fermer tous les autres sous-menus
      document.querySelectorAll('.dropdown-submenu').forEach(function (submenu) {
        if (submenu !== this.parentElement) {
          submenu.classList.remove('show');
        }
      }.bind(this));
  
      // Activer ou désactiver ce sous-menu
      this.parentElement.classList.toggle('show');
    });
    // if (getUrlParameter('var')=='index') {
    //     // alert('pageUSer')
    // }
    // Fermer sous-menus quand on clique ailleurs   
    document.addEventListener('click', function (e) {
      if (!element.parentElement.contains(e.target)) {
        element.parentElement.classList.remove('show');
      }
    });
  });
  function loadData(link) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "GET",
        dataType: "json",
        async: false,
        cache: false,
        timeout: 0,
        success: function (data) {
            result = data;
        },
        error: function (error) {
            console.log(error.responseText);
        },
    });
    return result;
}

function loadDataWhere(link, datas) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "POST",
        data: datas,
        dataType: "json",
        async: false,
        cache: false,
        timeout: 0,
        success: function (data) {
            result = data;
        },
        error: function (error) {
            console.log(error.responseText);
        },
    });
    return result;
}

function loadAcledData(link, id = 1) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "POST",
        data: { "id": id },
        dataType: "json",
        async: false,
        cache: false,
        timeout: 0,
        success: function (data) {
            result = data;
        },
        error: function (error) {
            console.log(error.responseText);
        },
    });
    return result;
}

function loadDataWhen(link, id) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "POST",
        data: { id: id },
        dataType: "json",
        async: false,
        cache: false,
        timeout: 0,
        success: function (data) {
            result = data;
        },
        error: function (error) {
            console.log(error.responseText);
        },
    });
    return result;
}
function getUrlParameter(sParam) {
    var sPageURL = window.location.search.substring(1),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++) {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam) {
            return sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
        }
    }
    return false;
};      
let table = new DataTable('#normalTable');

//tinymce

tinymce.init({
    license_key: 'gpl',
    selector: '.csmnote',
    plugins: 'lists table',
    branding: false, // Enlève "Build with TinyMCE"
    menubar: false,
    paste_auto_cleanup_on_paste: true,  // Active le nettoyage automatique
    paste_remove_styles: true,          // Supprime les styles CSS collés
    paste_remove_spans: true,           // Supprime les <span> collés
    paste_strip_class_attributes: 'all', // Supprime toutes les classes CSS
    paste_as_text:true,
    statusbar: false,
    toolbar: [
        'bold underline|align numlist bullist| forecolor backcolor | indent outdent | fontsize | hr | removeformat | clearContent'
    ],
    setup: function (editor) {
    editor.ui.registry.addButton('clearContent', {
        icon: 'remove',
        onAction: function () {
        editor.setContent('');
        }
    });
    }
});