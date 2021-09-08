<?php 
  require_once '../config.php';
  require_once 'header.inc.php';
  
  
?>

<main>
    <div class="container">
        <h1>Date and Time</h1>  <!-- TITLE -->
        <div class="teaser">
            <p>
            a simple Time and Date function, have fun! 
                <!-- TEASER -->
            </p>
        </div>
    
        <div class="article">
            <p> <pre>   <!-- ARTICLE -->
            Click on the button will show you the time. Its like magic, like reading the description, nobody is expecting someone to actually read the whole paragraph. 
            But, just in case; An HTML event can be something the browser does, or something a user does.
            HTML allows event handler attributes, with JavaScript code, to be added to HTML elements.
            In the following example, an onclick attribute with code, is added to a button element:<br>             
</pre></p>
        </div>
    
        <div class="codeArea flex-container codeExample">
            <div class="col-md-6 col-sm-12 code">
                
                  <h4>Code:</h4>
                      
                  <pre>
                    <!-- der erste button plooppt mit einem Text auf der rechten Seite auf -->
                    <button onclick="document.getElementById('Spezial').innerHTML=Date()">Wie spät ist es?</button>  
                    <p id="Spezial" class= "Spezial"></p>


                    <!-- der zweite Button ändert den text auf dem Button -->
                    <button onclick="this.innerHTML = Date()">The time is?</button>

                    <!-- CODE HERE-->
                  </pre>
            </div>
              <div class="col-md-6 col-sm-12 output">
                <h4>Output:</h4>
                <p>
                    <!-- OUTPUT HERE -->
                </p>
                  <button class="btn run " id="btnRun" onclick="run(this)">Run</button>
                  <button class="btn reset" id="btnReset" onclick="reset(this)">Reset</button>
              </div>
            <p><br>Many different methods can be used to let JavaScript work with events:<br>
                Things that should be done every time a page loads<br>
                Things that should be done when the page is closed<br>
                Action that should be performed when a user clicks a button<br>
                Content that should be verified when a user inputs data<br>
                And more ...
    
           <div class="tableOfContent">
        <ul>
            <li> go to <a href="https://www.w3schools.com/js/js_events.asp">w3schools.com/js/js_events.asp </a> for further Infos and deeper explanation</li>
        </ul>
    </div>
</main>
      

    <!-- Table of Content -->
    <div class="toc">
      <ul>
        <li><a href="/projects/js_nutshell/home.php">Home</a></li>
        <li><a href="/projects/js_nutshell/pages/topic.I-urs.php">Topic Page</a></li>
        <li><a href="#">link 3</a></li>
        <li><a href="#">link 4</a></li>
        <li><a href="#">link 5</a></li>
        <li><a href="#">link 6</a></li>
      </ul>
    </div>
