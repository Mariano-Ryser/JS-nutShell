<?php 
  require_once '../config.php';
  require_once 'header.inc.php';

  // Used to add related links to the table content 
  $rel_links = [
    'topic.A.name.php',
    'topic.A.name.php'
  ];

?>


    <!-- Teaser -->
    <div class="teaser">
      <p>Short summary of your subject</p>
    </div>

    <!-- article -->
    <div class="article">
      <h2>Header 2 Something Cool</h2>

      <p>
        Icing jelly beans I love gummi bears wafer pudding jelly-o cotton candy.
        Dragée cotton candy cake I love halvah powder donut. Powder halvah
        pastry chocolate cake pudding I love I love croissant I love.
      </p>

      <h3>Heading 3 More Bla stuff</h3>

      <p>
        I love macaroon dragée liquorice pudding fruitcake I love jelly. I love
        dessert danish jelly marzipan pastry muffin marzipan. Jelly bonbon sweet
        bonbon jelly-o donut powder.
      </p>
    </div>

    <!-- Code Area -->
    <div class="codeArea">
      <h2>Heading 2 Code area stuff</h2>

      <p>
        Cheesecake lollipop jelly-o brownie powder marshmallow icing carrot cake
        chocolate bar. I love cake muffin tootsie roll bear claw jujubes
        marshmallow oat cake topping. Tart gummi bears sesame snaps I love
        pastry.
      </p>

      <div class="codeArea flex-container codeExample">
              <div class="col-6 code">
                <pre>
                  <code class = "language-css">
                    let a = 4;
                    let b = 17;

                    /*  statement string with math expression placeholders that
                        will be replaced by their respective results */
                    let statement = `Twenty-one is ${a + b} and not ${2 * a + b}.`;

                    console.log(statement);  
                  </code>
                </pre>
              </div>
              
            <div class="col-6 output">
              <h4>Output:</h4>
              
              <div id="outputbmi"></div>
             
              <button class="btn btn-run" onclick="run(this)">Run</button>
              <button class="btn btn-run" onclick="reset(this)">Reset</button>
            </div>
      </div>

      
    </div>

    <?php include $_SERVER['CONTEXT_DOCUMENT_ROOT'].'/projects/js_nutshell/inc/footer.inc.php'; ?>