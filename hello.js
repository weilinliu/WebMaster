const express = require('express');
var app = express();
app.use(express.static('public'))
xml = require('xml')

var fs = require('fs');
const path = require('path')

app.get('/', (req, res) => {
    fs.readFile("./public/team.html", "UTF-8", function(err, html){
        res.writeHead(200, {"Content-Type": "text/html;charset=UTF-8"});
        res.write(html);
        res.end();
    });
});

app.get('/helloworld', (req, res) => {
    fs.readFile("./public/helloworld.html", "UTF-8", function(err, html){
        res.writeHead(200, {"Content-Type": "text/html;charset=UTF-8"});
        res.write(html);
        res.end();
    });
});

app.get('/hellodata', (req, res) => {
    var type = req.param('response')
    let d = new Date();

    if(type === "XML") {
        var XMLObj = xml({"msg": "Hello Data it is "+d})
        res.writeHead(200, {"Content-Type": "text/xml"});
        res.write(XMLObj)
        res.end()
        return
    } else if (type === "JSON") {
        var JSONObj = { "msg":"Hello Data it is "+d };
        res.writeHead(200, {"Content-Type": "application/json"});
        res.write(JSON.stringify(JSONObj))
        res.end()
        return;
    }
    if(type == null || type === "") {
        var fileStream = fs.createReadStream('./public/404.html', "UTF-8");
        res.writeHead(404, {"Content-Type": "text/html"});
        fileStream.pipe(res);
        return
    } else if(type === "XML")
    res.send(type)
});

app.get('/robots*', (req, res) => {
    fs.readFile("./robots.txt", "UTF-8", function(err, robotsFile){
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write(robotsFile);
        res.end();
    });
});

app.all('*', (req, res, next) => {
    var fileStream = fs.createReadStream('./public/404.html', "UTF-8");
    res.writeHead(404, {"Content-Type": "text/html"});
    fileStream.pipe(res);
});

app.listen(3000, () => console.log('Gator app listening on port 3000!'));