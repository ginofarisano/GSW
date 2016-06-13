var req;

function loadXMLDoc(url,params) 
{
    // blocco per FireFox, Safari, ...
    if (window.XMLHttpRequest) {
        req = new XMLHttpRequest();
        req.onreadystatechange = processReqChange;
        req.open("POST", url, true);
        req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        req.setRequestHeader("Content-length", params.length);
        req.setRequestHeader("Connection", "close");

        req.send(params);
   
    } 
}

function resetta() 
{
document.getElementById('loginCheckFailed').className = 'hidden';
}

function processReqChange() 
{
    // solo se la richiesta e' stata completata
    if (req.readyState == 4) {
        // solo se lo status della richiesta e'  "OK"
        if (req.status == 200) {
            // ...qui vanno le istruzioni per elaborare la risposta...
      response  = req.responseXML.documentElement;
      result    = response.getElementsByTagName('result')[0].firstChild.data;
      message   = document.getElementById('loginCheckFailed');
      if (result == '1')
        message.className = 'error';
      else
        message.className = 'hidden';
      } else {
            alert("C'e' stato un problema accedendo ai dati XML:\n" + 
                   req.statusText);
        }
    }
}

function checkLogin(input)
{
    var url  = 'verifica.php'
    var params = 'q=' + input;
    loadXMLDoc(url,params);
}
