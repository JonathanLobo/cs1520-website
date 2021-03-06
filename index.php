<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="author: jonathanlobo">

    <title>Jonathan Lobo</title>

    <link rel="icon" href="img/icon.png">
    <link rel="stylesheet" type="text/css" href="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="css/mysite.css" rel="stylesheet">

  </head>
  <body>

    <div id="home" class="navbar-fixed scrollspy">
      <nav class="indigo darken-4">
        <div class="nav-wrapper container">
          <a href="#home" class="brand-logo">Jonathan Lobo</a>
          <ul class="right hide-on-med-and-down">
            <li><a href="#aboutMe"><i class="material-icons">stars</i></a></li>
            <li><a href="#resume"><i class="material-icons">account_box</i></a></li>
            <li><a href="#projects"><i class="material-icons">work</i></a></li>
            <li><a href="#contactMe"><i class="material-icons">chat</i></a></li>
          </ul>
        </div>
      </nav>
    </div>

    <div class="section indigo white-text" id="mainBanner">
      <div class="container">
        <div class="row">
          <div class="col">
            <img class="responsive-img circle" src="./img/lobo-square.jpg" alt="Jonathan Lobo">
          </div>
          <div>
            <br>
            <h1 class="center bold header-text">Jonathan Lobo</h1>
            <h3 class="center header-text">University of Pittsburgh</h3>
            <h4 class="center header-text">Computer Science &amp; Economics</h4>
          </div>
        </div>
      </div>
    </div>

    <br> <br>

    <div id="aboutMe" class="section scrollspy">
      <div class="row">
        <div class="col l6 offset-l3">
          <div class="center-align">
            <i class="material-icons large indigo-text">stars</i>
            <h3>About Me</h3>
          </div>
          <div class="divider"></div>
          <p>Hello! My name is Jonathan Lobo and I am an undergraduate computer science and economics student in my third year at the University of Pittsburgh.
            I am also a passionate, driven software developer who is fascinated by statistics and data science.
            I love sleeping, stuffed animals, and fantasy football.</p>
          <div class="divider"></div>
        </div>
      </div>
    </div>

    <div class="section scrollspy" id="resume">
      <div class="center-align">
        <i class="material-icons large indigo-text">account_box</i>
        <h2 class="">R&eacute;sum&eacute;</h2>
      </div>
      <div class="row">
        <div class="col l6 m12 s12 offset-l3">
          <div class="carousel carousel-slider center z-depth-4" data-indicators="true">
            <div class="carousel-fixed-item center">
              <a href="JonathanLobo.pdf" target="_blank">
                <button class="black-text button">R&eacute;sum&eacute;</button>
              </a>
            </div>
            <div class="carousel-item indigo darken-2 white-text">
              <h2>Education</h2>
              <div class="row">
                <div class="col s6">
                  <p class="white-text bold">Archmere Academy, Claymont, DE (2010 - 2014)</p>
                  <img class="school-img" src="./img/archmere.jpg" alt="Archmere Academy campus">
                  <ul>
                    <li>Valedictorian of Class of 2014</li>
                    <li>National AP Scholar</li>
                    <li>National Merit Scholarship Finalist</li>
                    <li>Presidential Scholar Candidate</li> 
                  </ul>
                </div>
                <div class="col s6">
                  <p class="white-text bold">University of Pittsburgh (2014 - 2017)</p>
                  <img class="school-img" src="./img/pitt.jpg" alt="University of Pittsburgh campus">
                  <ul>
                    <li>B.S., Computer Science &amp; Economics</li>
                    <li>Cumulative GPA: 3.91</li>
                    <li>Full Tuition Scholarship</li>
                    <li>Dean's List (2014 - 2016)</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="carousel-item indigo darken-1 white-text">
              <h2>Work Experience</h2>
              <div>
                <p class="white-text bold">Risk Analytics Intern (May - August 2015)</p>
                <p class="white-text">Springleaf Financial Services, Wilmington, DE</p>
                <ul>
                  <li>Developed GUI‐based applet to access company database, generate reports </li>
                  <li>Translated company‐wide loan auto‐decisioning model from SAS language to Java</li>
                  <li>Analyzed data and generated statistical reports</li>
                </ul>
              </div>
              <div class="divider"></div>
              <div>
                <p class="white-text bold">Risk Analytics Intern (May 2016 - present)</p>
                <p class="white-text">OneMain Financial, Wilmington, DE</p>
                <ul>
                  <li>Co-developed Java app used for training branches in underwriting<li>
                  <li>Wrote code to access and pull data from restructured company database</li>
                  <li>Scored daily loan applications using SAS data analysis software</li>
                </ul>
              </div>
            </div>
            <div class="carousel-item indigo white-text">
              <h2>Technical Skills</h2>
              <p class="white-text bold">Platforms</p>
              <div class="chip">Unix</div>
              <div class="chip">Windows</div>
              <div class="chip">Mac OS X</div>
              <p class="white-text bold">Languages</p>
              <div class="chip">Java</div>
              <div class="chip">C</div>
              <div class="chip">Python</div>
              <div class="chip">SQL</div>
              <div class="chip">HTML</div>
              <div class="chip">JavaScript</div>
              <div class="chip">CSS</div>
              <div class="chip">PHP</div>
              <p class="white-text bold">Libraries &amp; Frameworks</p>
              <div class="chip">JavaFX</div>
              <div class="chip">Swing</div>
              <div class="chip">jQuery</div>
              <div class="chip">Materialize CSS</div>
              <div class="chip">Bootstrap</div>
              <p class="white-text bold">Other Skills</p>
              <div class="chip">Git (VCS)</div>
              <div class="chip">SAS</div>
              <div class="chip">Stata</div>
              <div class="chip">Microsoft Office</div>
            </div>
            <div class="carousel-item indigo lighten-1 white-text">
              <h2>Relevant Coursework</h2>
              <p class="white-text bold">Computer Science</p>
              <div class="chip">Data Structures</div>
              <div class="chip">Algorithm Design</div>
              <div class="chip">Algorithm Implementation</div>
              <div class="chip">Systems Software</div>
              <div class="chip">Operating Systems</div>
              <div class="chip">Web Applications</div>
              <div class="chip">Formal Methods</div>
              <div class="chip">Cryptography &amp; Network Security</div>
              <div class="chip">Assembly Language</div>
              <p class="white-text bold">Mathematics</p>
              <div class="chip">Calculus 1 &amp; 2</div>
              <div class="chip">Statistics</div>
              <div class="chip">Linear Algebra</div>
              <div class="chip">Discrete Mathematics</div>
              <p class="white-text bold">Economics</p>
              <div class="chip">Inter Macroeconomics</div>
              <div class="chip">Inter Microeconomics</div>
              <div class="chip">Econometrics</div>
              <div class="chip">International Finance</div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>

    <div class="section scrollspy" id="projects">
      <div class="container">
        <div class="center-align">
          <i class="material-icons large indigo-text">work</i>
          <h2 class="">Projects</h2>
        </div>
        <div class="row">
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/karat.JPG" alt="KARAT">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">Risk Assessment Tool</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">Risk Assessment Tool<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">The Keyword Automated Risk Assessment Tool, or KARAT, is a GUI-based java program
                  that I developed by myself using Swing while interning at Springleaf Financial Services during the summer of 2015.
                  The app, meant for in-office use only, allows loan underwriters to enter the key and date
                  of any application the company has received. The program connects to the company database to pull data for
                  that application and then scores it on the appropriate risk model. Finally, the program outputs a Microsoft
                  Excel report with model-specific data and the results.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/loanapp.JPG" alt="Loan Decisioning App">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">OneMain Financial <br> Loan Decisioning App</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">Loan Decisioning App<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">The OneMain Loan Decisioning App is a program that I co-developed using JavaFX
                  in the summer of 2016 while interning at OneMain Financial. The program is a "game" of sorts intended
                  to train branch employees in underwriting. Any company employee can register an account. Once logged in,
                  the user is shown any number of de-identified credit bureaus and loan applications and is asked to score the simulated
                  applications based on company guidelines. After doing so, the user is presented with aggregated data based
                  on the reviews of others and is also presented with the system's actual decision. Written using java, PHP, and CSS.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/kenken2.JPG" alt="KenKen Solver">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">KenKen Solver</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">KenKen Solver<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">My <a href="https://en.wikipedia.org/wiki/KenKen" target="_blank">KenKen</a>
                  Solver is a simple java program that solves any KenKen puzzle recursively
                  and then displays the results graphically.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/maze_solver.png" alt="Maze Solver Robot">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">Maze Solver</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">Maze Solver<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">This maze solver randomly generates maze of up to size 8x8 and then proceeds to solve it,
                  once using the left-hand rule and once using recursion and backtracking. The GUI displays the progress of a car
                  as it makes its way through the maze. The program keeps track of the optimal path through the maze and retraces this path
                  to return to the start of the maze before completing it a second time.
                </p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/huffman_coding.JPG" alt="Huffman coding GUI">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">Huffman Coding Simulator</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">Huffman Coding Simulator<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">One of my computer science class projects, this Huffman Coding simulator implements the well-known
                lossless data compression algorithm. It allows the user to enter any text and compresses and decompresses it on the fly.
                Some of my other favorite projects have been implementing the De La Briandais Trie data structure to run a password validation game,
                a program implementing LZW compression, a file sharing platform, and a filesystem.</p>
              </div>
            </div>
          </div>
          <div class="col s12 m6 l4">
            <div class="card img-expand">
              <div class="card-image waves-effect waves-block waves-dark">
                <img class="activator" src="./img/sudoku.JPG" alt="Sudoku Solver">
              </div>
              <div class="card-content">
                <span class="card-title activator"><p class="center">Sudoku Solver</p></span>
              </div>
              <div class="card-reveal">
                <span class="card-title center">Sudoku Solver<i class="material-icons right indigo white-text close-button">close</i></span>
                <p class="card-text-new">My Sudoku Solver is a simple java program that I wrote during my free time. It solves any Sudoku puzzle
                  using recursion and backtracking and displays the results graphically.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <br><br>

    <footer class="page-footer indigo-gradient">
      <div id="contactMe" class="container scrollspy">
        <div class="row">
          <div class="col l6 s12">
            <h5 class="white-text">Contact Me</h5>
            <form id="contactForm" class="col s12" method="post" action="./php/submit.php">
              <div class="row">
                <div class="input-field col s6">
                  <i class="material-icons prefix white-text">account_circle</i>
                  <input id="nameBox" type="text" name="name" class="white-text">
                  <label for="nameBox" class="white-text">Name</label>
                </div>
                <div class="input-field col s6">
                  <i class="material-icons prefix white-text">email</i>
                  <input id="email" type="email" name="email" class="white-text">
                  <label for="email" class="white-text">E-mail</label>
                </div>
                <div class="input-field col s12">
                  <i class="material-icons prefix white-text">mode_edit</i>
                  <textarea id="comments" name="comment" class="materialize-textarea white-text"></textarea>
                  <label for="comments" class="white-text">Comments</label>
                </div>
                <div class="center">
                  <input id="submitButton" class="black-text" type="submit" value="Submit">
                </div>

                <h6 id="errorText1" class="center white-text"><i class="material-icons red-text white circle">error</i> Please enter your name!</h6>
                <h6 id="errorText2" class="center white-text"><i class="material-icons red-text white circle">error</i> Please enter a valid e-mail address!</h6>
                <h6 id="errorText3" class="center white-text"><i class="material-icons red-text white circle">error</i> Please enter some comments!</h6>
                <h6 id="successText" class="center white-text"><i class="material-icons green-text white circle">check_circle</i> Success!</h6>
              </div>
            </form>
          </div>
          <div class="col l3 s12">
            <h5 class="white-text">Jonathan Lobo</h5>
            <ul>
              <li class="white-text">University of Pittsburgh</li>
              <li class="white-text">Computer Science &amp; Economics</li>
              <li><a class="white-text underline" href="mailto:jonathan.lobo@pitt.com" target="_blank">jonathan.lobo@pitt.edu</a></li>
              <br>
            </ul>
            <h5 class="white-text">Connect with Me</h2>
            <ul>
              <li><div class="brightness"><a class="white-text" href="https://www.linkedin.com/in/jonathan-lobo-8232b3103" target="_blank"><img src="./img/social-1_round-linkedin.svg"></div></a></li>
              <li><div class="brightness"><a class="white-text" href="https://github.com/JonathanLobo" target="_blank"><img src="./img/social-1_round-github.svg"></div></a></li>
              <li><div class="brightness"><a class="white-text" href="https://www.facebook.com/jlo.bro13" target="_blank"><img src="./img/social-1_round-facebook.svg"></div></a></li>
              <li><div class="brightness"><a class="white-text" href="https://twitter.com/Lo_Bro17" target="_blank"><img src="./img/social-1_round-twitter.svg"></div></a></li>
            </ul>
          </div>
          <div class="col l3 s12">
            <br>
            <div class="img-carousel">
              <div><img class="my-pic" src="./img/lobo.jpg" alt="Jonathan Lobo"></div>
              <div><img class="my-pic" src="./img/squad.JPG" alt="college friends"></div>
              <div><img class="my-pic" src="./img/cr3w.jpg" alt="high school friends"></div>
              <div><img class="my-pic" src="./img/grad.jpg" alt"family"></div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer-copyright indigo-gradient">
        <div class="container">
        Made by Jonathan Lobo, 2016
        </div>
      </div>

    </footer>

    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <script src="http://cdn.jsdelivr.net/jquery.slick/1.3.15/slick.min.js"></script>
    <script src="js/materialize.js"></script>
    <script src="js/mysite.js"></script>
    <noscript>Your browser does not support JavaScript!</noscript>

  </body>
</html>
