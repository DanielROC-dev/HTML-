<!DOCTYPE html>
<html>
<head>
  <title>TRUE MUSIC INSTRUMENTS</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  * {
    box-sizing: border-box;
  }


  body {
    margin: 0;
    font-family: 'Raleway', sans-serif;
  }


/* header text true music intruments*/
  .header {
    padding: 20px;
    text-align: center;
    background: #CAECDE;
   
  }


/* style navigation bar */
  .nav {
    display: flex;
    background-color: gray;
  }


/* style navigation bar ahref */
  .nav a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
  }


/* container */
  .row {
    display: flex;
    flex-wrap: wrap;
  }


/* two next to eachother */
  .side {
    flex: 30%;
    padding: 20px;
    background-color: #FBF0EC;
  }


/* main text colum */
  .main {
    flex: 70%;
    padding: 20px;
    background-color: #FBF0EC;

  }
 

/* text/img fix */
  img, p, h2 {
    width: 100%;
    max-width: 430px;
    padding: 15px;
  }
  h2 {
    color: #D27666;
    font-size: 25px;
  }
  p {
    font-size: 20px;
  }


  /* Footer */
  .footer {
    padding: 20px;
    text-align: left;
    background: gray;
    color: white;
  }

/* responsive system */
  @media (max-width: 724px) {
    .row, .nav {
      flex-direction: column;
    }
  }

  @media (min-width: 1300px){
    section {
    float:left;
    }
  }

</style>
</head>
<body>


  <div class="header">
    <img src="HTML/truemusic-logo.svg" alt="Logo picture">
  </div>

  
  <!-- Navigation bar -->
  <div class="nav">
    <a href="#gitaar">Gitaar</a>
    <a href="#drums">Drums</a>
    <a href="#trompet">Trompet</a>
    <a href="#saxofoon">Saxofoon</a>
    <a href="#contact">Contact</a>
  </div>


  <!-- content -->
  <div class="row">
    <div class="side">
      <h2> news </h2>
      <p> Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco. Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco </p>
    </div>
    <div class="main">
      <section>
      <h2 id="gitaar">GITAAR</h2>
      <div class="img"><img src='HTML/gitaar.jpg'></div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      </section>
      <section>
      <h2 id="drums">DRUMS</h2>
      <div class="img"><img src='HTML/drums.jpg'></div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      </section>
      <section>
      <h2 id="trompet">TROMPET</h2>
      <div class="img"><img src='HTML/trompet.jpg'></div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      </section>
      <section>
      <h2 id="saxofoon">SAXOFOON</h2>
      <div class="img"><img src='HTML/saxofoon.jpg'></div>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco</p>
      </section>
    </div>
  </div>


  <!-- Footer -->
  <div class="footer">
    <h3>Contact info <br>Sunt in culpa qui <br>officia deserunt <br>mollit anim id <br>est laborum consectetur adipiscing <br>elit sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud exercitation ullamco</h3>
  </div>



  
</body>
</html>
