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
    if (getUrlParameter('var')=='index') {
        alert('pageUSer')
    }
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