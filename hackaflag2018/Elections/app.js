var http = require('http');
var url = require('url');
const express = require('express');
var path = require('path');
const app = express();

app.set('view engine', 'ejs');
app.use(express.static(__dirname));
console.log(__dirname);
'use strict';


var partidoUm = 6;
var partidoDois = 5;
var partidoTres = 3;
app.get('/',function(req,res){
	res.render('index');
});

app.get('/voto/:partido/:voto',function(req,res){
	partido = req.params.partido || '';
	voto = req.params.voto || '';
	if(partido == '1'){
		res.send("<div class='ui tag labels'><a class='ui label'>Votos: "+eval("partidoTres + '"+voto+"';")+"</a></div>");
	}else if(partido == '2'){
		res.send("<div class='ui tag labels'><a class='ui label'>Votos: "+eval("partidoTres + '"+voto+"';")+"</a></div>");
	}else{
		res.send("<div class='ui tag labels'><a class='ui label'>Votos: "+eval("partidoTres + '"+voto+"';")+"</a></div>");
	}
});

app.listen(3000, () => console.log('Node Task app listening on port 3000!'));
