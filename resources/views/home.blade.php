<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>City Taxi Maarssen</title>
  <link rel="icon" href="{{ asset('images/LOGO.png') }}" type="image/x-icon">
  <link rel="stylesheet" href="./style/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
  <div class="main-container">
    <header id="hdr">
      <div class="navbar">
        <div class="nav-left"><img class="logo" src="./images/LOGO.png" alt=""></div>

        <div class="nav-right" class="nav-bar">
          <div id="icon" class="bar-icon"></div>

          <ul>
            <li><a href="#section-one" class="active">thuis</a></li>
            <li><a href="#section-six">Over</a></li>
            <li><a href="#section-two">TARIEVEN</a></li>
            <li><a href="#section-three">diensten</a></li>
            <li><a href="#section-six">contact</a></li>
            <li><a href="#section-five">getuigenissen</a></li>
            <li><a href="#section-four" id="book-now">boek nu</a></li>
          </ul>
        </div>


      </div>

      <div class="header-bottom">
        <p class="header-book">BOEK NU EEN CABINE</p>
        <p>
          <a class="header-phone" href="tel:+06 229 962 22">+06 229 962 22</a>
        </p>
        <p class="header-website"><a href="mailto:citytaximaarssen.nl@gmail.com">stadstaximaarssen.nl</a></p>

        <img class="header-img" id="h-img" src="./images/car 1.png" alt="">
      </div>
    </header>
    <section class="home" id="section-one">
      <div class="home-btm">
        <div class="home-btm-left">
          <p class="best">beste in de stad</p>
          <h1 class="trust">vertrouwen autodiensten in Haaland</h1>
          <p class="info">Welkom bij onze toonaangevende taxiservice in Haaland, waar we de gemeenschap al vijf jaar met
            trots dienen. Onze
            toewijding aan uitstekende klantenservice en veilig, betrouwbaar transport onderscheidt ons als de favoriete
            optie voor
            al uw reisbehoeften. Of u nu naar het vliegveld gaat, de stad gaat ontdekken of gewoon een ritje door de
            stad nodig
            heeft, onze bekwame chauffeurs staan ​​klaar om u een aangename en effectieve reis te garanderen. Reserveer
            vandaag nog
            uw rit bij ons en geniet van het gemak en de uitmuntendheid die ons tot de beste taxiservice in Haaland
            hebben gemaakt!
          </p>
          <button class="best-btn">LEES VERDER</button>
        </div>
        <div class="home-btm-right">
          <iframe class="map"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d40845.67460968995!2d6.052531831349995!3d59.72117210317414!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x463c0834053d2023%3A0x27a6df218fe77e75!2s5590%20H%C3%A5land%2C%20Norway!5e0!3m2!1sen!2s!4v1720895557500!5m2!1sen!2s"
            width="500" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <!-- TRIFFS -->

    <section class="tariffs" id="section-two">
      <h3 class="our-header">ons</h3>
      <h3 class="tariffs-header">tarieven</h3>
      <div class="card-container">

        <div class="tariffs-card card-one">
          <img class="card-img" src="./images/car2 1.png" alt="">
          <h1 class="card-title">economie les</h1>
          <p class="card-detail">Discover our Economy Class service in Haaland. Affordable, reliable, and courteous
            service for budget-conscious travelers. From errands to airport trips, enjoy a smooth, cost-effective travel
            experience. Join us for reliable rides today!</p>
          <h3 class="card-price">$1.3/MI</h3>
          <a class="readmore" href="#">LEES VERDER</a>
          <div class="star-con">
            <img class="star" src="./images/star-solid.svg" alt="">
          </div>
        </div>

        <div class="tariffs-card card-two">
          <img class="card-img" src="./images/car2 1.png" alt="">
          <h1 class="card-title">standaard klasse</h1>
          <p class="card-detail">Experience convenience with our Standard Class service in Haaland. Enjoy efficient
            booking, comfortable rides, and
            friendly service. Whether it's a quick trip, airport ride, or city exploration, our card ensures hassle-free
            travel.
            Join us for a comfortable journey today!</p>
          <h3 class="card-price">$1.3/MI</h3>
          <a class="readmore" href="#">LEES VERDER</a>
          <div class="star-con">
            <img class="star" src="./images/star-solid.svg" alt="">
          </div>
        </div>

        <div class="tariffs-card" class="only-card">
          <img class="card-img" src="./images/car2 1.png" alt="">
          <h1 class="card-title">business class</h1>
          <p class="card-detail">Elevate your travel with our Business Class service in Haaland. Priority booking,
            upscale vehicles, and personalized
            service for business travelers. Whether for meetings, airports, or city rides, experience convenience,
            comfort, and
            professionalism.</p>
          <h3 class="card-price">$1.3/MI</h3>
          <a class="readmore" href="#">LEES VERDER</a>
          <div class="star-con">
            <img class="star" src="./images/star-solid.svg" alt="">
          </div>
        </div>
      </div>
    </section>

    <!-- SERVICES PART -->

    <section class="services" id="section-three">
      <div class="services-container">
        <h3 class="best-title">wij doen het beste</h3>
        <h3 class="wish-title">dan je wenst</h3>
        <div class="services-card-container">
          <div class="services-card">
            <div class="services-card-circle"><img src="./images/Star.png" alt=""></div>
            <div class="services-card-body">
              <h3 class="card-body-title">THUIS OPHALEN</h3>
              <p class="card-body-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                molestiae odio veniam necessitatibus assumenda!</p>
            </div>
          </div>
          <div class="services-card">
            <div class="services-card-circle"><img src="./images/Historical.png" alt=""></div>
            <div class="services-card-body">
              <h3 class="card-body-title">SNELLE BOEKING</h3>
              <p class="card-body-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                molestiae odio veniam necessitatibus assumenda!</p>
            </div>
          </div>
          <div class="services-card">
            <div class="services-card-circle"><img src="./images/Settings.png" alt=""></div>
            <div class="services-card-body">
              <h3 class="card-body-title">BONUSSEN VOOR RIT
              </h3>
              <p class="card-body-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                molestiae odio veniam necessitatibus assumenda!</p>
            </div>
          </div>
          <div class="services-card">
            <div class="services-card-circle"><img src="./images/Fort Awesome.png" alt=""></div>
            <div class="services-card-body">
              <h3 class="card-body-title">GPS-ZOEKEN
              </h3>
              <p class="card-body-content">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio
                molestiae odio veniam necessitatibus assumenda!</p>
            </div>
          </div>

        </div>
        <a href="#" class="services-readmore">LEES VERDER</a>
      </div>
    </section>

    <!--BOOK A CAR PART -->

    <section class="book-car" id="section-four">
      <div>
        <div>
          <h1 class="start-journey">Let's start your journey</h1>
          <p class="where-would">WHERE WOULD YOU WANT IT</p>
        </div>

        <form action="{{route('store')}}" method="POST" enctype="multipart/form-data" id="data-form">
          <!-- 2 column grid layout with text inputs for the first and last names -->
          @csrf
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example1">First name</label>
                <input type="text" id="form6Example1" name="first_name" class="form-control" required/>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example2">phone</label>
                <input type="text" id="form6Example2" name="phone" class="form-control" required/>
              </div>
            </div>
          </div>

          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example1">Where</label>
                <input type="text" id="form6Example1" name="where" class="form-control" required/>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example2">Time</label>
                <input type="time" id="form6Example2" name="time" class="form-control" required/>
              </div>
            </div>
          </div>


          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example1">Start</label>
                <input type="time" id="form6Example1" name="start_time" class="form-control" required/>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <label class="form-label" for="form6Example2">End</label>
                <input type="time" id="form6Example2" name="end_time" class="form-control" required />
              </div>
            </div>
          </div>


          <div data-mdb-input-init class="form-outline mb-4">
            <label class="form-label" for="form6Example7">Specail request</label>
            <textarea class="form-control" id="form6Example7" name="special_request" rows="4"></textarea>
          </div>

          <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">submit</button>
        </form>
      </div>
  </div>
  </div>
  </section>

  <!--CLIENATS TESTIMONAILS -->

  <section class="testimonails" id="section-five">
    <div class="container">
      <h2 class="clients-title">tevreden klant</h2>
      <h3 class="clients-subtitle">getuigenissen</h3>

      <div class="clients-row">
        <div class="clients-reviews clients-review-one">
          <p class="review-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sit repellendus
            voluptatibus deserunt voluptatum facere!</p>
          <div class="review-author">
            <img src="./images/profile-pic.png" alt="" class="review-img review-img-one">
            <div class="review-title">
              <p class="review-name">Mirwali Abdali</p>
              <p class="review-job">Web Developer</p>
            </div>
          </div>
        </div>

        <div class="clients-reviews clients-review-two">
          <p class="review-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi sit repellendus
            voluptatibus deserunt voluptatum facere!</p>
          <div class="review-author">
            <img src="./images/human.png" alt="" class="review-img">
            <div class="review-title">
              <p class="review-name">Joy Patel</p>
              <p class="review-job">Teacher</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CONTACT PART -->

  <section class="number" id="section-six">
    <h2 class="number-title">wij staan ​​24 uur per dag klaar om uw telefoontje te beantwoorden.</h2>
    <a class="header-phone number-tel" href="tel:+06 229 962 22">+06 229 962 22</a>

  </section>

  <!-- FOOTER PART -->

  <footer class="footer" id="footer">
    <div class="footer-container">

      <div class="footer-about">
        <h2 class="footer-title">About Taxi Maarssen</h2>
        <p class="footer-text">Premier taxi service in Haaland for five years. Outstanding customer service and
          secure transport. Whether it's airport
          travel or city exploration, our skilled drivers ensure a pleasant trip. Reserve today for reliable and
          convenient
          rides.</p>
        <div class="footer-icons">

          <a href="">
            <svg class="facebook svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
              <path
                d="M 25 3 C 12.861562 3 3 12.861562 3 25 C 3 36.019135 11.127533 45.138355 21.712891 46.728516 L 22.861328 46.902344 L 22.861328 29.566406 L 17.664062 29.566406 L 17.664062 26.046875 L 22.861328 26.046875 L 22.861328 21.373047 C 22.861328 18.494965 23.551973 16.599417 24.695312 15.410156 C 25.838652 14.220896 27.528004 13.621094 29.878906 13.621094 C 31.758714 13.621094 32.490022 13.734993 33.185547 13.820312 L 33.185547 16.701172 L 30.738281 16.701172 C 29.349697 16.701172 28.210449 17.475903 27.619141 18.507812 C 27.027832 19.539724 26.84375 20.771816 26.84375 22.027344 L 26.84375 26.044922 L 32.966797 26.044922 L 32.421875 29.564453 L 26.84375 29.564453 L 26.84375 46.929688 L 27.978516 46.775391 C 38.71434 45.319366 47 36.126845 47 25 C 47 12.861562 37.138438 3 25 3 z M 25 5 C 36.057562 5 45 13.942438 45 25 C 45 34.729791 38.035799 42.731796 28.84375 44.533203 L 28.84375 31.564453 L 34.136719 31.564453 L 35.298828 24.044922 L 28.84375 24.044922 L 28.84375 22.027344 C 28.84375 20.989871 29.033574 20.060293 29.353516 19.501953 C 29.673457 18.943614 29.981865 18.701172 30.738281 18.701172 L 35.185547 18.701172 L 35.185547 12.009766 L 34.318359 11.892578 C 33.718567 11.811418 32.349197 11.621094 29.878906 11.621094 C 27.175808 11.621094 24.855567 12.357448 23.253906 14.023438 C 21.652246 15.689426 20.861328 18.170128 20.861328 21.373047 L 20.861328 24.046875 L 15.664062 24.046875 L 15.664062 31.566406 L 20.861328 31.566406 L 20.861328 44.470703 C 11.816995 42.554813 5 34.624447 5 25 C 5 13.942438 13.942438 5 25 5 z">
              </path>
            </svg>
          </a>

          <a href="">
            <svg class="instagram svg-icon" xmlns="http://www.w3.org/2000/svg">
              <path
                d="M 11.46875 5 C 7.917969 5 5 7.914063 5 11.46875 L 5 20.53125 C 5 24.082031 7.914063 27 11.46875 27 L 20.53125 27 C 24.082031 27 27 24.085938 27 20.53125 L 27 11.46875 C 27 7.917969 24.085938 5 20.53125 5 Z M 11.46875 7 L 20.53125 7 C 23.003906 7 25 8.996094 25 11.46875 L 25 20.53125 C 25 23.003906 23.003906 25 20.53125 25 L 11.46875 25 C 8.996094 25 7 23.003906 7 20.53125 L 7 11.46875 C 7 8.996094 8.996094 7 11.46875 7 Z M 21.90625 9.1875 C 21.402344 9.1875 21 9.589844 21 10.09375 C 21 10.597656 21.402344 11 21.90625 11 C 22.410156 11 22.8125 10.597656 22.8125 10.09375 C 22.8125 9.589844 22.410156 9.1875 21.90625 9.1875 Z M 16 10 C 12.699219 10 10 12.699219 10 16 C 10 19.300781 12.699219 22 16 22 C 19.300781 22 22 19.300781 22 16 C 22 12.699219 19.300781 10 16 10 Z M 16 12 C 18.222656 12 20 13.777344 20 16 C 20 18.222656 18.222656 20 16 20 C 13.777344 20 12 18.222656 12 16 C 12 13.777344 13.777344 12 16 12 Z">
              </path>
            </svg>
          </a>

          <a href="">
            <svg class="twitter svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
              <path
                d="M 34.199219 5.5996094 C 28.256009 5.5996094 23.400391 10.457181 23.400391 16.400391 C 23.400391 16.785135 23.429781 17.149605 23.472656 17.509766 C 16.141762 16.814224 9.5591993 13.067494 5.0683594 7.6601562 A 1.0001 1.0001 0 0 0 4.2773438 7.3007812 A 1.0001 1.0001 0 0 0 3.4316406 7.8046875 C 2.5476787 9.351621 2 11.214034 2 13.199219 C 2 15.562405 2.8180434 17.715053 4.1230469 19.511719 C 3.8757846 19.410652 3.5889897 19.425349 3.3476562 19.304688 A 1.0001 1.0001 0 0 0 1.9003906 20.199219 L 1.9003906 20.300781 C 1.9003906 24.001469 3.807742 27.155702 6.6152344 29.128906 C 6.5637034 29.120706 6.5153064 29.121711 6.4648438 29.113281 A 1.0001 1.0001 0 0 0 5.3515625 30.416016 C 6.5123023 33.898235 9.3526931 36.662552 12.925781 37.576172 C 10.11331 39.223372 6.8834712 40.199219 3.4003906 40.199219 C 2.6003906 40.199219 1.8365929 40.194315 1.2421875 40.109375 A 1.0001 1.0001 0 0 0 0.5625 41.943359 C 5.1122086 44.838628 10.408743 46.5 16.199219 46.5 C 25.525462 46.5 32.830248 42.60559 37.738281 37.037109 C 42.646315 31.468628 45.199219 24.253846 45.199219 17.5 L 45.199219 16.652344 C 47.010105 15.254487 48.661337 13.60786 49.9375 11.644531 A 1.0001 1.0001 0 0 0 48.693359 10.185547 C 48.165362 10.420212 47.55475 10.474381 47.005859 10.658203 C 47.7011 9.7200127 48.301383 8.7065336 48.652344 7.6035156 A 1.0001 1.0001 0 0 0 47.199219 6.4355469 C 45.499905 7.41936 43.612969 8.1303268 41.558594 8.6132812 C 39.607275 6.8020984 37.038549 5.5996094 34.199219 5.5996094 z M 34.199219 7.5996094 C 36.713504 7.5996094 39.059904 8.6850853 40.673828 10.388672 A 1.0001 1.0001 0 0 0 41.613281 10.677734 C 42.934626 10.390485 44.182854 9.9844613 45.384766 9.5039062 C 44.688934 10.433412 43.854953 11.259684 42.884766 11.841797 A 1.0001 1.0001 0 0 0 43.548828 13.689453 C 44.53531 13.541481 45.439415 13.146528 46.388672 12.890625 C 45.537378 13.803338 44.61667 14.650874 43.607422 15.394531 A 1.0001 1.0001 0 0 0 43.199219 16.199219 L 43.199219 17.5 C 43.199219 23.746154 40.805248 30.531372 36.238281 35.712891 C 31.671315 40.89441 24.972976 44.5 16.199219 44.5 C 12.14649 44.5 8.3797763 43.635083 4.9570312 42.064453 C 9.1716125 41.741689 13.039926 40.216826 16.207031 37.794922 A 1.0004308 1.0004308 0 0 0 16.302734 36.287109 A 1.0001 1.0001 0 0 0 15.5 35.900391 C 12.240871 35.900391 9.5097656 33.985527 8.0117188 31.28125 C 8.0766008 31.28295 8.1346327 31.300781 8.1992188 31.300781 C 9.1732927 31.300781 10.147857 31.194481 11.042969 30.970703 A 1.0001 1.0001 0 0 0 11.017578 29.023438 C 7.4284817 28.225862 4.7618144 25.363329 4.1542969 21.738281 C 5.1792732 22.075097 6.2324618 22.329347 7.3378906 22.398438 A 1.0001 1.0001 0 0 0 7.9550781 20.568359 C 5.5205757 18.945358 4 16.265885 4 13.199219 C 4 12.071965 4.2776547 11.025922 4.6542969 10.044922 C 9.688803 15.495995 16.707779 19.212301 24.550781 19.599609 A 1.0002161 1.0002161 0 0 0 24.650391 19.599609 A 1.0002908 1.0002908 0 0 0 24.652344 19.599609 A 1.0002908 1.0002908 0 0 0 25.662109 18.326172 C 25.486299 17.710834 25.400391 17.117057 25.400391 16.400391 C 25.400391 11.543601 29.342429 7.5996094 34.199219 7.5996094 z">
              </path>
            </svg>
          </a>

          <a href="">
            <svg class="github svg-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
              <path
                d="M 25 2 C 12.311335 2 2 12.311335 2 25 C 2 37.688665 12.311335 48 25 48 C 37.688665 48 48 37.688665 48 25 C 48 12.311335 37.688665 2 25 2 z M 25 4 C 36.607335 4 46 13.392665 46 25 C 46 25.071371 45.994849 25.141688 45.994141 25.212891 C 45.354527 25.153853 44.615508 25.097776 43.675781 25.064453 C 42.347063 25.017336 40.672259 25.030987 38.773438 25.125 C 38.843852 24.634651 38.893205 24.137377 38.894531 23.626953 C 38.991361 21.754332 38.362521 20.002464 37.339844 18.455078 C 37.586913 17.601352 37.876747 16.515218 37.949219 15.283203 C 38.031819 13.878925 37.910599 12.321765 36.783203 11.269531 L 36.494141 11 L 36.099609 11 C 33.416539 11 31.580023 12.12321 30.457031 13.013672 C 28.835529 12.386022 27.01222 12 25 12 C 22.976367 12 21.135525 12.391416 19.447266 13.017578 C 18.324911 12.126691 16.486785 11 13.800781 11 L 13.408203 11 L 13.119141 11.267578 C 12.020956 12.287321 11.919778 13.801759 11.988281 15.199219 C 12.048691 16.431506 12.321732 17.552142 12.564453 18.447266 C 11.524489 20.02486 10.900391 21.822018 10.900391 23.599609 C 10.900391 24.111237 10.947969 24.610071 11.017578 25.101562 C 9.2118173 25.017808 7.6020996 25.001668 6.3242188 25.046875 C 5.3845143 25.080118 4.6454422 25.135713 4.0058594 25.195312 C 4.0052628 25.129972 4 25.065482 4 25 C 4 13.392665 13.392665 4 25 4 z M 14.396484 13.130859 C 16.414067 13.322043 17.931995 14.222972 18.634766 14.847656 L 19.103516 15.261719 L 19.681641 15.025391 C 21.263092 14.374205 23.026984 14 25 14 C 26.973016 14 28.737393 14.376076 30.199219 15.015625 L 30.785156 15.273438 L 31.263672 14.847656 C 31.966683 14.222758 33.487184 13.321554 35.505859 13.130859 C 35.774256 13.575841 36.007486 14.208668 35.951172 15.166016 C 35.883772 16.311737 35.577304 17.559658 35.345703 18.300781 L 35.195312 18.783203 L 35.494141 19.191406 C 36.483616 20.540691 36.988121 22.000937 36.902344 23.544922 L 36.900391 23.572266 L 36.900391 23.599609 C 36.900391 26.095064 36.00178 28.092339 34.087891 29.572266 C 32.174048 31.052199 29.152663 32 24.900391 32 C 20.648118 32 17.624827 31.052192 15.710938 29.572266 C 13.797047 28.092339 12.900391 26.095064 12.900391 23.599609 C 12.900391 22.134903 13.429308 20.523599 14.40625 19.191406 L 14.699219 18.792969 L 14.558594 18.318359 C 14.326866 17.530484 14.042825 16.254103 13.986328 15.101562 C 13.939338 14.14294 14.166221 13.537027 14.396484 13.130859 z M 8.8847656 26.021484 C 9.5914575 26.03051 10.40146 26.068656 11.212891 26.109375 C 11.290419 26.421172 11.378822 26.727898 11.486328 27.027344 C 8.178972 27.097092 5.7047309 27.429674 4.1796875 27.714844 C 4.1152068 27.214494 4.0638483 26.710021 4.0351562 26.199219 C 5.1622058 26.092262 6.7509972 25.994233 8.8847656 26.021484 z M 41.115234 26.037109 C 43.247527 26.010033 44.835728 26.108156 45.962891 26.214844 C 45.934234 26.718328 45.883749 27.215664 45.820312 27.708984 C 44.24077 27.41921 41.699674 27.086688 38.306641 27.033203 C 38.411945 26.739677 38.499627 26.438219 38.576172 26.132812 C 39.471291 26.084833 40.344564 26.046896 41.115234 26.037109 z M 11.912109 28.019531 C 12.508849 29.215327 13.361516 30.283019 14.488281 31.154297 C 16.028825 32.345531 18.031623 33.177838 20.476562 33.623047 C 20.156699 33.951698 19.86578 34.312595 19.607422 34.693359 L 19.546875 34.640625 C 19.552375 34.634325 19.04975 34.885878 18.298828 34.953125 C 17.547906 35.020374 16.621615 35 15.800781 35 C 14.575781 35 14.03621 34.42121 13.173828 33.367188 C 12.696283 32.72356 12.114101 32.202331 11.548828 31.806641 C 10.970021 31.401475 10.476259 31.115509 9.8652344 31.013672 L 9.7832031 31 L 9.6992188 31 C 9.2325521 31 8.7809835 31.03379 8.359375 31.515625 C 8.1485707 31.756544 8.003277 32.202561 8.0976562 32.580078 C 8.1920352 32.957595 8.4308563 33.189581 8.6445312 33.332031 C 10.011254 34.24318 10.252795 36.046511 11.109375 37.650391 C 11.909298 39.244315 13.635662 40 15.400391 40 L 18 40 L 18 44.802734 C 10.967811 42.320535 5.6646795 36.204613 4.3320312 28.703125 C 5.8629338 28.414776 8.4265387 28.068108 11.912109 28.019531 z M 37.882812 28.027344 C 41.445538 28.05784 44.08105 28.404061 45.669922 28.697266 C 44.339047 36.201504 39.034072 42.31987 32 44.802734 L 32 39.599609 C 32 38.015041 31.479642 36.267712 30.574219 34.810547 C 30.299322 34.368135 29.975945 33.949736 29.615234 33.574219 C 31.930453 33.11684 33.832364 32.298821 35.3125 31.154297 C 36.436824 30.284907 37.287588 29.220424 37.882812 28.027344 z M 23.699219 34.099609 L 26.5 34.099609 C 27.312821 34.099609 28.180423 34.7474 28.875 35.865234 C 29.569577 36.983069 30 38.484177 30 39.599609 L 30 45.398438 C 28.397408 45.789234 26.72379 46 25 46 C 23.27621 46 21.602592 45.789234 20 45.398438 L 20 39.599609 C 20 38.508869 20.467828 37.011307 21.208984 35.888672 C 21.950141 34.766037 22.886398 34.099609 23.699219 34.099609 z M 12.308594 35.28125 C 13.174368 36.179258 14.222525 37 15.800781 37 C 16.579948 37 17.552484 37.028073 18.476562 36.945312 C 18.479848 36.945018 18.483042 36.943654 18.486328 36.943359 C 18.36458 37.293361 18.273744 37.645529 18.197266 38 L 15.400391 38 C 14.167057 38 13.29577 37.55443 12.894531 36.751953 L 12.886719 36.738281 L 12.880859 36.726562 C 12.716457 36.421191 12.500645 35.81059 12.308594 35.28125 z">
              </path>
            </svg>
          </a>

        </div>
      </div>

      <div class="footer-about">
        <h2 class="footer-title">downloaden</h2>
        <p class="footer-text">Quisque sollicitudin feugiat risus, eu posuere ex euismod eu. Phasellus hendrerit,
          massa efficitur.Quisque sollicitudin feugiat risus, eu posuere ex euismod eu.</p>
        <div class="footer-icons">
          <p class="android-user">Android user</p>
          <a href="#section-one"> <img src="./images/Android OS.png" alt="" class="android-icon"> </a>
        </div>
      </div>

      <div class="footer-about">
        <h2 class="footer-title">contact</h2>
        <div class="footer-icons">
          <a href="">
            <img src="./images/Location.png" alt="" class="location-icon">
          </a>
          <p class="location-text"><a class="link" href="">Bloemstede 580
              Maarssen Utrecht</a>
          </p>
        </div>

        <div class="footer-icons">
          <img src="./images/iPhone 14.png" alt="" class="phone-icon">
          <!-- <p><a class="" href="#">+06 2299 6222</a> -->
          <a class="link" href="tel:+06 229 962 22">+06 229 962 22</a>
          </p>
        </div>
        <div class="footer-icons">
          <img src="./images/Group Message.png" alt="" class="email-icon">
          <p><a class="link" href="mailto:citytaximaarssen.nl@gmail.com">citytaximaarssen.nl@gmail.com</a></p>
        </div>
      </div>
    </div>
    <p class="copyright"></p>
  </footer>
  </div>

<script>
  const Toast = Swal.mixin({
  toast: true,
  position: "top-end",
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.onmouseenter = Swal.stopTimer;
    toast.onmouseleave = Swal.resumeTimer;
  }
});

@if(Session::has('success'))
Toast.fire({
  icon: "success",
  title: "{{Session::get('success')}}"
});
@endif

</script>

  <script src="./src/index.js"></script>
</body>

</html>