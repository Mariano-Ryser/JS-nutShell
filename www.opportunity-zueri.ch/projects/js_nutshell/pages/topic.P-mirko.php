<?php 
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/config.php';
  require_once $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/header.inc.php';
  ?>

    <main>
        <div class="container mb-2 w-75 mx-auto p-3">
            <h1>Js Try Catch</h1> <!-- TITLE -->
            <div class="teaser w-75 mr-auto mb-5">
                <p>
                Like the name tells us, try catch lets us try code and catch for example errors, catch will store those errors in an object.
                If your not familiar with objects check out <a href="js_dataobject.php">our</a> short introduction to objects in JavaScript.
                </p>
            </div>
        
            <div class="article tryCatch  w-75 mr-auto mb-5">
                <h2>Try, Catch, Throw, Finally</h2>
                <p>
                For the simplest try catch we do not need throw or finally. With throw you are able to throw your own errors. And finally is used to run code after the the try catch block has run, regardless of the result:
                If you like to know more about the catch-block and how to use finally take a look at <a href="https://www.w3schools.com/js/js_errors.asp">w3schools</a> or <a href="https://developer.mozilla.org/de/docs/Web/JavaScript/Reference/Statements/try...catch">developer.mozilla.org</a>.
                </p>
            </div>
        
            <div class="codeArea flex-container codeExample w-100 mr-auto mb-5">
                <h3>Try and Catch Example 1</h3>
                <p>
                    In this exaple we will use to try to run a not defined function abracadabra. The catch will then store the error and we will output the error message.
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js">
                            <pre>
                            /* Run function */
                            function run() {  
                            /* The run function is trying to run a function called abracadabra which does not exist */
                            try {
                                abracadabra();
                                } catch(error) {
                                    document.getElementbyId('output').innerHTML = error;
                                }
                            }
                            </pre>
                        </code>
                    </p>
                </div>
                <div class="col-6 output">
                    <h4>Output:</h4>
                    <p>        
                        <code class="language-html"></code>
                    </p>
                    <button class="btn" name="run1" onclick="runScript(0, this);">Run Script</button>
                    <button class="btn" name="reset1" onclick="reset(0, this);">Reset Script</button>
                </div>
            </div>



            <div class="article arrays">
                <h2>Try, Catch and Throw</h2>
                <p>
                Now lets throw in our own error.
                </p>
            </div>
        
            <div class="codeArea flex-container codeExample">
                <h3>Try, Catch and Throw Example 1</h3>
                <p>
                Lets define a variable number and give it the value of 13, the tryblock then will throw in a error if
                the number is not greater then 100.
                </p>
                <div class="col-6 code">
                    <h4>Code:</h4>
                    <p>
                        <!-- CODE -->
                        <code class="language-js"><pre>
/* Creating an array person and storing some data in it */
let number = 13;

/* Run function */
function run() {
    try {
        if(number&lt;100) throw "x is smaller then 100";
    } catch(error) {
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
                    <button button class="btn" name="run2" onclick="runScript(1, this);">Run Script</button>
                    <button button class="btn" name="reset2" onclick="reset(1, this);">Reset Script</button>
                </div>
            </div>
        </div>

        <!-- Loading the JavaScript for the Topic -->
    <script src="/projects/js_nutshell/js/topic.P-mirko.js"></script>
    
    <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>