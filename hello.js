const express = require('express');
const path = require('path');

var app = express();
app.use(express.static('public'));
app.use(express.urlencoded());
app.set('view engine', 'pug');
app.set('views', path.join(__dirname, 'public'));
xml = require('xml');

var fs = require('fs');

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
    var type = req.param('response');
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
    } else {
        fs.readFile("./public/error.html", "UTF-8", function(err, html){
            res.writeHead(200, {"Content-Type": "text/html;charset=UTF-8"});
            res.write(html);
            res.end();
        });
    }
});

app.get('/env', (req, res) =>{
    let headers = req.headers;
    res.send(headers);
    return
});

app.get('/robots*', (req, res) => {
    fs.readFile("./robots.txt", "UTF-8", function(err, robotsFile){
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write(robotsFile);
        res.end();
    });
});

app.get('/form', (req, res) => {
    fs.readFile("./public/form.html", "UTF-8", function(err, robotsFile){
        res.writeHead(200, {"Content-Type": "text/html"});
        res.write(robotsFile);
        res.end();
    });
});

app.get('/formsubmit', (req, res) => {
    console.log(req.body);
    let firstname = req.body.firstname;
    let lastname = req.body.lastname;
    let color = req.body.color;
    res.render('formsubmit', {lastname :lastname, firstname: firstname, color: color});
});

app.post('/formsubmit', (req, res) => {
    let firstname = req.body.firstname;
    let lastname = req.body.lastname;
    let color = req.body.color;
    res.render('formsubmit', {lastname :lastname, firstname: firstname, color: color});
});

app.all('*', (req, res, next) => {
    var fileStream = fs.createReadStream('./public/404.html', "UTF-8");
    res.writeHead(404, {"Content-Type": "text/html"});
    fileStream.pipe(res);
});

app.listen(8083, () => console.log('Gator app listening on port 3000!'));