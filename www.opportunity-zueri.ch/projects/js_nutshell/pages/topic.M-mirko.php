<?php 
  require_once $_SERVER['HOME'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['HOME'].'/projects/js_nutshell/inc/header.inc.php';
  ?>

        <main>

    <div class="container">
        <h1>Js Object <?php echo $_SERVER['HOME'];?></h1> <!-- TITLE -->
        <div class="teaser">
            <p>
            Another method to store data besides using simple variables or arrays. This topic therefore deals again very briefly with a repetition to variables and arrays. 
            </p>
        </div>
    
        <div class="article variables">
            <h2>Variables</h2>
            <p>
            A variable is like a container storing data values. <!-- ARTICLE -->
            This includes e.g. integers, strings, booleans, numbers, null , ...
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <h3>Variables Example 1</h3>
            <p>
                Pressing the run button executes the function at the end of the code. The output then appears on the right hand, in the run window. 
                This little Example code creates a few variables containing different data types.
            </p>
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                    <code class="language-js"><pre>
/* Creating a variable with an emtpy strings */
let text = "";

/* Storing a HTML breakline tag in a variable called br */
let br = "&lt;br&gt;";

let age = 18;

/* Adding a String to the variable text */
text += "This is the first line added to the content";

/* Adding a breakine using the br variable */
text += br;

/* Adding more text and the age variable to the content */
text += "Legal Driving Age: " + age;

/* Simple Run function */
function run() {  
    document.getElementbyId('output').innerHTML = text;
}
                    </pre></code>
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>        
                    <code class="language-html"></code>
                </p>
                <button name="run1" onclick="runScript(0, this);">Run Script</button>
                <button name="reset1" onclick="reset(0, this);">Reset Script</button>
            </div>
        </div>



        <div class="article arrays">
            <h2>Arrays</h2>
            <p>
            Why do I need arrays when there are variables?
            In arrays you can store several data values.

            Values in arrays are indexed into keys. To call a variable these keys are used starting with 0. 
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <h3>Arrays Example 1</h3>
            <p>
                Pressing the run button executes the function at the end of the code. The output then appears on the right hand, in the run window. 
                Here we store some data in to an array person and use within our run function a foreach loop to output every value stored in the array.
            </p>
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                    <code class="language-js"><pre>
/* Creating an array person and storing some data in it */
let person = ["Hans", "Muster", 31, "WebDev", "Switzerland"];

/* To make this more readable you can write the array like this */
let person = [
    "Hans", 
    "Muster", 
    31, 
    "WebDev", 
    "Switzerland"
];

/* Calling a value in an array */
console.log(person[0]);
console.log(person[1]);

/* Run function */
function run() {
    /* Creating a Var output with an emtpy string */
    let output = "";

    /* Adding to string and values of the array to the empty string */
    output += "Name: " + person[0] + "&lt;br&gt;"
    output += "Lastame: " + person[1] + "&lt;br&gt;"
    output += "Age: " + person[2] + "&lt;br&gt;"
    output += "Job: " + person[3] + "&lt;br&gt;"
    output += "Country: " + person[4] + "&lt;br&gt;"

    document.getElementbyId('output').innerHTML = output;
}
                    </pre></code>
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>        
                    <code class="language-html"></code>
                </p>
                <button name="run2" onclick="runScript(1, this);">Run Script</button>
                <button name="reset2" onclick="reset(1, this);">Reset Script</button>
            </div>
        </div>

        <div class="codeArea flex-container codeExample">
            <h3>Arrays Example 2</h3>
            <p>
            Use forRach to loop through the values in the array 
            </p>
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                    <code class="language-js"><pre>
/* To make this more readable you can write the array like this */
let person = [
    "Hans", 
    "Muster", 
    31, 
    "WebDev", 
    "Switzerland"
    ];

/* Run function */
function run() {
    /* Creating a Var output with an emtpy string */
    let output = "";

    /* Using foreach to add to the output string */
    person.forEach(element => {
        output += element + "&lt;br&gt;"
});
    document.getElementbyId('output').innerHTML = output;
}
                    </pre></code>
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>        
                    <code class="language-html"></code>
                </p>
                <button name="run2" onclick="runScript(2, this);">Run Script</button>
                <button name="reset2" onclick="reset(2, this);">Reset Script</button>
            </div>
        </div>




        <div class="article multidimensional_array">
            <h2>Multidimensional Array</h2>
            <p>
            A variable is like a container storing data values. <!-- ARTICLE -->
            This includes e.g. integers, strings, booleans, numbers, null , ...
            </p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <h3>Multidimensional Array Example 1</h3>
            <p>
                Array can have as many "layers" as you wish. Here were using only 2 layers for a users array
            </p>
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                    <code class="language-js"><pre>
/* Creating the users array */
let users = [
    [
        "Hanna", 
        "Muster", 
        "hans.muster@mail.com"
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

/* Using a multidimensional array */
console.log(users[0][0]);
console.log(users[0][1]);
console.log(users[0][2]);
console.log(users[1][0]);
...

let output = "";

output += "Users name is " + users[0][0] + " " + users[0][1]
output += " Email: " + users[0][2] + "&lt;br&gt;"

output += "Users name is " + users[1][0] + " " + users[1][1]
output += " Email: " + users[1][2] + "&lt;br&gt;"

output += "Users name is " + users[2][0] + " " + users[2][1]
output += " Email: " + users[2][2] + "&lt;br&gt;"

/* Run function */
function run() {  
    document.getElementbyId('output').innerHTML = output;
}
                    </pre></code>
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>        
                    <code class="language-html"></code>
                </p>
                <button name="run1" onclick="runScript(3, this);">Run Script</button>
                <button name="reset1" onclick="reset(3, this);">Reset Script</button>
            </div>
        </div>

        <div class="codeArea flex-container codeExample">
            <h3>Multidimensional Array Example 2</h3>
            <p>
                Array can have as many "layers" as you wish. Here were using only 2 layers for a users array
            </p>
            <div class="col-6 code">
                <h4>Code:</h4>
                <p>
                    <!-- CODE -->
                    <code class="language-js"><pre>
/* Creating the users array */
let users = [
    [
        "Hanna", 
        "Muster", 
        "hans.muster@mail.com"
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

/* Using a multidimensional array */
console.log(users[0][0]);
console.log(users[0][1]);
console.log(users[0][2]);
console.log(users[1][0]);
...


/* Run function */
function run() {  
    let output = "";

    /* Creating a counter and setting it to 0 */
    let counter = 0;

    users.forEach(user => {
        counter++;
        output += "User " + counter + ":&lt;br&gt;";
        user.forEach(element => {
            output += element + ":&lt;br&gt;";
        });
        output += "&lt;br&gt;";
    });


    document.getElementbyId('output').innerHTML = output;
}
                    </pre></code>
                </p>
            </div>
            <div class="col-6 output">
                <h4>Output:</h4>
                <p>        
                    <code class="language-html"></code>
                </p>
                <button name="run1" onclick="runScript(4, this);">Run Script</button>
                <button name="reset1" onclick="reset(4, this);">Reset Script</button>
            </div>
        </div>



        <div class="article object">
            <h2>Object</h2>
            <p>
            In object it's possible to store more then only data values in it. For now we will only look on how
            we can use them to store data values. If you like to learn more about objects in Js check out <a href="https://www.w3schools.com/js/js_objects.asp">w3schools</a> and/or <a href="https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Global_Objects/Object">developer.mozilla.org</a>
            </p>
        </div>
    
    <div class="codeArea flex-container codeExample">
        <h3>Object Example 1</h3>
        <p>
            Creating a Dataobject and using it to output the values:
        </p>
        <div class="col-6 code">
            <h4>Code:</h4>
            <p>
                <!-- CODE -->
                <code class="language-js"><pre>
/* Creating a dataobject */
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


let text = "";

text += "Name: " + obj.name + "&lt;br&gt;";
text += "Lastame: " + obj.lastname + "&lt;br&gt;";
text += "Email: " + obj.email + "&lt;br&gt;";


/* Run function */
function run() {  /* Creating an array person and storing some data in it */
let number = 13;

/* Run function */
function run() {
    try {
        if(number&lt;100) throw "x is smaller then 100";
    } catch(error) {
        document.getElementbyId('output').innerHTML = output;
    }-6 output">
            <h4>Output:</h4>
            <p>        
                <code class="language-html"></code>
            </p>
            <button name="run1" onclick="runScript(5, this);">Run Script</button>
            <button name="reset1" onclick="reset(5, this);">Reset Script</button>
        </div>
    </div>
    
    <div class="codeArea flex-container codeExample">
        <h3>Object Example 2</h3>
        <p>
            Starting with an empty dataobject and adding new keys and values to it.
        </p>
        <div class="col-6 code">
            <h4>Code:</h4>
            <p>
                <!-- CODE -->
                <code class="language-js"><pre>
/* Creating an empty dataobject */
let obj = {};

/* adding new keys and values */
obj.name = "Hanae";
obj.lastname = "Satō"
obj.mail = "hs@mail.jp"

let text = "";

text += "Name: " + obj.name + "&lt;br&gt;";
text += "Lastame: " + obj.lastname + "&lt;br&gt;";
text += "Email: " + obj.email + "&lt;br&gt;";


/* Run function */
function run() {  
document.getElementbyId('output').innerHTML = text;
}
                </pre></code>
            </p>
        </div>
        <div class="col-6 output">
            <h4>Output:</h4>
            <p>        
                <code class="language-html"></code>
            </p>
            <button name="run1" onclick="runScript(6, this);">Run Script</button>
            <button name="reset1" onclick="reset(6, this);">Reset Script</button>
        </div>
    </div>




    </div>

<script src="/projects/js_nutshell/js/topic.M-mirko.js"></script>
    
    <?php include $_SERVER['HOME'].'/projects/js_nutshell/inc/footer.inc.php'; ?>