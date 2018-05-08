/*var xhr = new XMLHttpRequest();
xhr.open("GET", "https://api.rust-servers.info/status/598", false);
xhr.send();
console.log(xhr.responseText);*/

/*var xhr = new XMLHttpRequest();
xhr.open("GET", "https://www.codecademy.com/doesnt_exist", false);
xhr.send();
console.log(xhr.responseText);*/ 
/*
function createCORSRequest(method, url){
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr){
        xhr.open(method, url);
    } else if (typeof XDomainRequest != "undefined"){
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
    return xhr;
}

var request = createCORSRequest("get", "https://api.rust-servers.info/status/598");
if (request){
    request.onload = function(){
        //do something with request.responseText
    };
    request.send();
}
/*
function createCORSRequest(method, url){
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr){
        xhr.open(method, url);
    } else if (typeof XDomainRequest != "undefined"){
        xhr = new XDomainRequest();
        xhr.open(method, url);
    } else {
        xhr = null;
    }
    return xhr;
}

var url = 'https://api.rust-servers.info/status/598';
var xhr = createCORSRequest('GET', url);
xhr.setRequestHeader('X-Custom-header');
xhr.send();*/