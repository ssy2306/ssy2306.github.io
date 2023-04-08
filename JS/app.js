const express = require("express");
const { MongoClient } = require("mongodb");
const { STATUS_CODES } = require("http");
const app = express();
const https = require("https");
const { stringify } = require("querystring");
const bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({ extended: true }));
app.use(express.static("Public"));

app.get("../../HTML/index/", function (req, res) {

    res.sendFile(__dirname + "/index.html");


});

app.post("../../HTML/index/index.html", function (req, res) {

    const uri = "mongodb+srv://shahilssy:0123456789@cluster0.tbellac.mongodb.net/?retryWrites=true&w=majority";
    const client = new MongoClient(uri);

    async function run() {
        try {
            const database = client.db('portfolio');
            const responses = database.collection('responses');

            // Query for a movie that has the title 'Back to the Future'
            const e=req.body.Email;
            const n=req.body.Name;
            const s=req.body.subject;
            const m=req.body.message;
            const q=req.body.query;
            const query = { 
                name:n,
                email:e,
                subject:s,
                message:m,
                query: q
             };
            const response = await responses.insertOne(query);

            console.log(response);
        } finally {
            // Ensures that the client will close when you finish/error
            await client.close();
        }
    }
    run().catch(console.dir);
});