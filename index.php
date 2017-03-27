<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <?php require_once("lib/partials/headUtils.php");?>
  </head>
  <body>

    <?php require_once("lib/partials/navbar.php");?>

    <h1>hello world</h1>

    <div id="stage">
      <div id="stage-caption">
        <h1 class = "display-3">Welcome to Gotham!!</h1>
        <h6>Hello Victim of Crime</h6>
        <p>
          We are here to save you...
        </p>
        <a href="#" class="btn btn-lg btn-success">Bat Signal Now</a>
      </div>
    </div>

    <!--section#feature-one>.container>.-->
    <section id="feature-one">
      <div class ="container">
        <div class ="feature-content">
          <div class ="row">
            <div class = "col-lg-6">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/Av77f9u3jlM" frameborder="0" allowfullscreen></iframe>
            </div>
            <div class = "col-lg-5 offset-lg-1">
              <h6>
                Watch This
              </h6>
              <h2>
                ...so you will know who I am
              </h2>
                <p class= "lead">
                  I'm Gotham's reckoning.
                </p>
                <p>
                  It'll end the ball of damns you've all been living on. A
                  necessary evil.
                </P>
                <p>
                  It doesn't matter who we are. What matters is our plan.
                </p>
                <p>
                  I seek the means to fight injustice. To turn fear against
                  those who prey on the fearful.
                </p>
                <p>
                  I'm Batman
                </p>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- section#feature-tow.feature-dark>.container>.row> feature-content
-->
    <section id= "feature-two" class="feature-dark">
      <div class = "container">
        <div class = "row">
          <div class = "feature-content">
           <div class = "col-lg-6 feature-caption">
             <h6>
              Incredible Heroism
             </h6>
             <h2>
               At your fingertips
             </h2>
             <p class= "lead">
               Because some men aren't looking for anything logical, like money.
             </p>
             <p>They can't be bought, bullied, reasoned or negotiated with.
               Some men just wanna watch the world burn.
             </p>
             <a href = "#" role= "button" class = " btn btn-outline-secondary btn-lg">
               Choose hero here
             </a>
           </div>
           <div class = "col-lg-6 text-sm-center hidden-sm-down">
             <img src ="lib/img/phn.jpg">
           </div>
          </div>
        </div>
      </div>
    </section>

    <section id= "feature-three">
      <div class = "container">
        <div class = "feature-content">
          <div class = "row">
           <div class = "col-lg-6 hidden-md-down">
             <img src= "lib/img/vils.png"  alt= "macbook">
           </div>


           </div>
           <div class = "col-lg-5 col-lg-offset-down">
            <h6>
              The Bad Factor
            </h6>
            <h2>
              Now a word from a local villain:

            </h2>
            <p class= "lead">
              Every man who has lotted here over the centuries, has looked up
              to the light and imagined climbing to freedom.

            </p>
            <p>
              You can watch me
               torture an entire city. And then when you've truly understood
               the depth of your failure, we will fulfill Ra's Al Ghul's
               destiny. We will destroy Gotham.
            </p>

            <a href = "#" role= "button" class = " btn btn-outline-primary">
              Help Me Now!
            </a>
           </div>
          </div>
        </div>
      </div>
    </section>

    <section id= "feature-four" class="feature-alt">
      <div class = "container">
        <div class = "row">
          <div class = "feature-content">
           <div class = "col-lg-6">
             <h6>
               A Notice to all Villains
             </h6>
             <blockquote class = "blockquote">
               &ldquo; You will be destroyed &rdquo;
             </blockquote>
             <footer class = "blockquote-footer">
               Batman, <cite>  Gotham's savior </cite>
           </footer>


           </div>
           <div class = "col-lg-6 hidden-md-down">
             <img src="lib/img/bat.png" alt="batman">
           </div>
          </div>
        </div>
      </div>
    </section>

    <section id=" feature-five" class= "feature-full">
      <div class="container">
        <div class="row">
          <div class="feature-content">
          <div class="col-lg-8 offset-lg-2">
            <h6>
            Powerfully Packed Action
            </h6>
            <h2>A question to ponder...</h2>
            <p class="lead">
              Why do we fall, sir?
            </p>
            <p>
              So that we can learn to pick ourselves up.
            </p>
            <h6>Think about:</h6>
            <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li>Playing Nice</li>
                    <li>Response</li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li>Who You Are</li>
                    <li>Doing...just Doing</li>
                  </ul>
                </div>

                <img src="lib/img/keybrd.jpg" height ="360px" alt="batlogo">

              </div>
            </div>
          </div>
        </div>
      </div>

    </section>

    <section id="feature-six" class= "feature-dark">
      <div class="container">
        <div class="row">
          <div class="feature-content">
            <div class="col-lg-6 hidden-md-down">
              <img src="lib/img/logo.png" alt="">
            </div>
            <div class="col-lg-5 offset-lg-1">
              <h6>This is our solution to evil</h6>
              <h2 style="color: gray">Nobody is immune to our progress</h2>
              <p class ="lead"></p>
              <a href="#" role="button" class="btn btn-outline-secondary">Click Here</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php require_once("lib/partials/scripts.php");?>

  </body>
</html>
