function runScript(input, output) {

    switch (input) {
        case 0:
            console.log("case 0");
            varExample1(output);
        break;

        case 1:
            console.log("case 1");
            arrayExample1(output);
        break;

        case 2:
            console.log("case 2");
            arrayExample2(output);
        break;

        case 3:
            console.log("case 3");
            multidimensional_arrayExample1(output);
        break;

        case 4:
            console.log("case 4");
            multidimensional_arrayExample2(output);
        break;

        case 5:
            console.log("case 5");
            dataobjectExample1(output);
        break;

        case 6:
            console.log("case 6");
            dataobjectExample2(output);
        break;
    
        default:
            console.log("Switch Error");
        break;
    }
}

function varExample1(target) {
    let outputText = "";

    let br = "<br>";
    let age = 18;
    
    outputText += "This is the first line added to the content";
    outputText += br;
    outputText += "Legal Driving Age: "+age+"<br>";

    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
    console.log(target);
}

function arrayExample1(target) {
    let outputText = "";
    let person = [
        "Hans", 
        "Muster", 
        31, 
        "WebDev", 
        "Switzerland"
        ];

        console.log(person[0]);
        console.log(person[1]);

        outputText += "Name: " + person[0] + "<br>"
        outputText += "Lastame: " + person[1] + "<br>"
        outputText += "Age: " + person[2] + "<br>"
        outputText += "Job: " + person[3] + "<br>"
        outputText += "Country: " + person[4] + "<br>"

    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function arrayExample2(target) {
    let outputText = "";

    let person = [
        "Hans", 
        "Muster", 
        31, 
        "WebDev", 
        "Switzerland"
        ];
    
    person.forEach( element => {
        outputText += element+"<br>";
    });

    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function multidimensional_arrayExample1(target) {
    let users = [
        [
            "Hanna", 
            "Muster", 
            "hanna.muster@mail.com"
        ],
        [
            "John",
            "Smith",
            "john.smith@mail.com"
        ], 
        [
            "Jill",
            "Scott",
            "js@code.it"
        ]
    ];
    console.log(users[0][0]);
    console.log(users[0][1]);
    console.log(users[0][2]);
    console.log(users[1][0]);
    let outputText = "";

    outputText += "Users name is " + users[0][0] + " " + users[0][1]
    outputText += " Email: " + users[0][2] + "<br>"

    outputText += "Users name is " + users[1][0] + " " + users[1][1]
    outputText += " Email: " + users[1][2] + "<br>"

    outputText += "Users name is " + users[2][0] + " " + users[2][1]
    outputText += " Email: " + users[2][2] + "<br>"
    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function multidimensional_arrayExample1(target) {
    let users = [
        [
            "Hanna", 
            "Muster", 
            "hanna.muster@mail.com"
        ],
        [
            "John",
            "Smith",
            "john.smith@mail.com"
        ], 
        [
            "Jill",
            "Scott",
            "js@code.it"
        ]
    ];
    console.log(users[0][0]);
    console.log(users[0][1]);
    console.log(users[0][2]);
    console.log(users[1][0]);
    let outputText = "";

    outputText += "Users name is " + users[0][0] + " " + users[0][1]
    outputText += " Email: " + users[0][2] + "<br>"

    outputText += "Users name is " + users[1][0] + " " + users[1][1]
    outputText += " Email: " + users[1][2] + "<br>"

    outputText += "Users name is " + users[2][0] + " " + users[2][1]
    outputText += " Email: " + users[2][2] + "<br>"
    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function multidimensional_arrayExample2(target) {
    var users = [
        [
            "Hanna", 
            "Muster", 
            "hanna.muster@mail.com"
        ],
        [
            "John",
            "Smith",
            "john.smith@mail.com"
        ], 
        [
            "Jill",
            "Scott",
            "js@code.it"
        ]
    ];
    console.log(users[0][0]);
    console.log(users[0][1]);
    console.log(users[0][2]);
    console.log(users[1][0]);
    let outputText = "";
    let counter = 0;

    users.forEach(user => {
        counter++;
        outputText += "User " + counter + ":<br>";
        user.forEach(element => {
            outputText += element + ":<br>";
        });
        outputText += "<br>";
    });
    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function dataobjectExample1(target) {    
    let obj = {
    "name":"Hans",
    "lastname": "Muster",
    "email":"hans.muster@mail.me"
    };

    /* Creating an array of all keys in the dataobject */
    console.log(Object.keys(obj));

    /* Creating an array of all values in the dataobject */
    console.log(Object.values(obj));

    /* Creating an array of arrays with key and value */
    console.log(Object.entries(obj));

    /* Output single values */
    console.log(obj.name);
    console.log(obj.lastname);
    console.log(obj.email);

    let outputText = "";

    outputText += "Name: " + obj.name + "<br>";
    outputText += "Lastame: " + obj.lastname + "<br>";
    outputText += "Email: " + obj.email + "<br>";

    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function dataobjectExample2(target) {
    /* Creating an empty dataobject */
    let obj = {};

    /* adding new keys and values */
    obj.name = "Hanae";
    obj.lastname = "Satō"
    obj.email = "hs@mail.jp"

    let outputText = "";

    outputText += "Name: " + obj.name + "<br>";
    outputText += "Lastame: " + obj.lastname + "<br>";
    outputText += "Email: " + obj.email + "<br>";

    target.previousElementSibling.previousElementSibling.innerHTML = outputText;
}

function reset(input, output) {
    
    output.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML = ""
    /*console.log(output.previousElementSibling.previousElementSibling.previousElementSibling.innerHTML);*/
}