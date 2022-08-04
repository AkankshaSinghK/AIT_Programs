var http = require('http');
http.createServer(function(request, response) {

    response.write("<h1>Hello, Welcome to the Browser</h1><p>This is a <b> paragraph <b> new.........</p>");
    response.end();
}).listen(3001);
console.log("Server Created");