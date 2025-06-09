function jsonData(link, data) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "POST",
        data: data,
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

function getMapData(link, data) {
    let result = null;
    $.ajax({
        url: "ajax/" + link + ".php",
        method: "POST",
        data: mapElement,
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