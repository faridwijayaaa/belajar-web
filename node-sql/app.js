const express = require("express");
const path = require('path');
const mysql = require("mysql");
const dotenv = require('dotenv');

const app = express();

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "Polopo.90",
    database: "online_course"
});

const publicDirectory = path.join(__dirname, './css');
app.use(express.static(publicDirectory));

//parse url-encoded bodies (as sent by HTML forms)
app.use(express.urlencoded({ extended: false}));
//parse json
app.use(express.json());

app.set('view engine', 'hbs');

db.connect( (error) => {
    if (error) {
        console.log(error);
    } else {
        console.log("MYSQL connected..");
    }
})

//Define routes
app.use('/', require('./routes/pages'));
app.use('/auth', require('./routes/auth'))

app.listen(5000, () => {
    console.log("this using 5000 port");
});