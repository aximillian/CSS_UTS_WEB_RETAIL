<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Link -->
  <link rel="stylesheet" href="css/style.css"/>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- Boostrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="img/KETHEBOOK RB.png" width="240" height="80" alt="">
      </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Kanan -->
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-4">
              <a class="nav-link" href="#"> Home</a>
            </li>
              
            <li class="nav-item dropdown mx-4">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                  Categories
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
                    
            <li class="nav-item mx-4">
              <a class="nav-link" href="#"> Shop</a>
            </li>
                    
            <li class="nav-item mx-4">
              <a class="nav-link" href="#"> Offers</a>
            </li>
          </ul>

                <!-- Search -->
                <div class="box">
                  <input class="search form-control" type="search" placeholder="" aria-label="Search">
                </div>

                <!-- Cart Icon -->
                <a href="#" class="mx-4 text-dark" >
                  <i class="fas fa-shopping-bag fs-3"></i>
                </a>

                <!-- Profile Icon -->
                <a href="#" class="mx-4 text-dark">
                  <i class="far fa-user-circle fs-3"></i>
                </a>
            </div>
        </div>
    </nav>



    <section class="subscription-section">
      <div class="subscription-wrapper">
          <div class="subscription__description">
              <h2>
                  Join 10k+ other readers!
              </h2>
              <p>
                  Stay up to date with our news and articles
              </p>
          </div>
          <form class="subscribe-form">
              <input type="email" spellcheck="false" placeholder="Your Email">
              <button type="submit">
                Subscribe
              </button>
          </form>
      </div>
  </section>


    <footer>
      <div class="footer-wrapper">

          <div class="social-wrapper">
              <div class='social-links'>
                  <ul>
                      <li>
                          <a href="#" title="Instagram">
                              <img src="icon/instagram.png" alt='Instagram'>                       
                          </a>
                      </li>
                      <li>
                          <a href="#" title="Linkedin">
                              <img src="icon/linkedin.png" alt='Linkedin'>
                          </a>
                      </li>
                      <li>
                          <a href="#" title="X">
                              <img src="icon/x.png" alt='X'>
                          </a>
                      </li>
                      <li>
                          <a href="#" title="Youtube">
                              <img src="icon/youtube.png" alt='YouTube'>
                          </a>
                      </li>
                      <li>
                          <a href="#" title="GitHub">
                              <img src="icon/github.png" alt='GitHub'>
                          </a>
                      </li>
                  </ul>
              </div>
          </div>
        
          <div class="footer-columns">
              <div class="footer-links">
                  <div class="footer-logo">
                      <svg width="1103" height="996" viewBox="0 0 1103 996" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M410.988 255.56L0 995.337H189.802L505.141 427.427L410.988 255.56ZM1102.94 995.337L647.119 170.373L551.471 0L457.317 170.373L551.471 340.746L711.79 629.718H498.683L405.461 786.972H799.034L914.634 995.337H1102.94Z" fill="#FAFBFC"/>
                      </svg>
                  </div>
                  <section>
                      <h3>Product</h3>
                      <ul>
                          <li>
                              <a href="#" title="API">API</a>
                          </li>
                          <li>
                              <a href="#" title="Pricing">Pricing</a>
                          </li>
                          <li>
                              <a href="#" title="Documentation">Documentation</a>
                          </li>
                          <li>
                              <a href="#" title="Release Notes">Release Notes</a>
                          </li>
                          <li>
                              <a href="#" title="Status">Status</a>
                          </li>
                      </ul>
                  </section>

                  <section>
                      <h3>Quick Links</h3>
                      <ul>
                          <li>
                              <a href="#" title="Home">Home</a>
                          </li>
                          <li>
                              <a href="#" title="Featured">Featured</a>
                          </li>
                          <li>
                              <a href="#" title="Arrivals">Arrivals</a>
                          </li>
                          <li>
                              <a href="#" title="Reviews">Reviews</a>
                          </li>
                          <li>
                              <a href="#" title="Blogs">Blogs</a>
                          </li>
                      </ul>
                  </section>

                  <section>
                      <h3>Extra Links</h3>
                      <ul>
                          <li>
                              <a href="#" title="Account Info">Account Info</a>
                          </li>
                          <li>
                              <a href="#" title="Ordered Items">Ordered Items</a>
                          </li>
                          <li>
                              <a href="#" title="Privacy Policy">Privacy Police</a>
                          </li>
                          <li>
                              <a href="#" title="Press">Payment Method</a>
                          </li>
                          <li>
                              <a href="#" title="Contact">Our Serivces</a>
                          </li>
                      </ul>
                  </section>

                  <section>
                      <h3>Contact Info</h3>
                      <ul>
                          <li>
                              <a href="#"> <i class="fas fa-identity"></i>
                                +210711010
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                +210711046
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                +210711453
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                <i class="fas fa-envelope"></i> Kethebook@Gmail.com
                              </a>
                          </li>
                      </ul>
                  </section>
              </div>
            
          </div>
          <div class="footer-bottom">
              <div class="footer-description">
                  <h3>Midterm Exam Website Project</h3>
                  <p>Development and design by Retail_4_B group<p>
              </div>
              <small>© KETHEBOOK Ltd. <span id="year"></span>, All rights reserved</small>
          </div>
      </div>
  </footer>



  <style>
    :root {
  --primary: #272829;
  --text-color: white;
  --white: white;
  --text-gray: #FEFEFE;
  --text-heading-gray: #61677A;
  --background: #D8D9DA;
  --border: #FFF6E0;
}

.navbar-brand, .navbar-nav .nav-link {
  font-family: 'Roboto', sans-serif;
}

.navbar-nav .nav-link {
  font-weight: bold;
  font-size: 18px; 
}

.navbar {
  background-color: var(--primary); 
}

.navbar-toggler-icon {
  background-color: #fff; 
}

.navbar-nav .nav-link:hover {
  color: black; 
}

.navbar-nav .nav-item.dropdown:hover .dropdown-menu {
  display: block;
}


.search{
  position: relative;
  width: 64px;
  height: 64px;
  border-radius: 40px;
  padding: 10px;
  cursor: pointer;
  background-repeat: no-repeat;
  font-size: 24px;
  color: transparent;
  border: 3px solid;
  transition: width 300ms, background-potition 300ms;
  overflow: hidden;
  background: url(https://thenounproject.com/api/private/icons/4143525/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0) no-repeat transparent;
  background-size: 40px;
  background-position: 45% 50%;
}

.search:hover{
  cursor: pointer;
  border: 3px solid #884a39;
  background: url(https://thenounproject.com/api/private/icons/4143525/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0) no-repeat transparent;
  background-size: 40px;
  background-position: 35% 40%;
}

.search:focus, .search:not(:placeholder-shown) {
  max-width: 300px;
  width: 100%;
  cursor: text;
  color: #884a39;
  padding-left: 60px;
  outline: none;
  transition: width 500ms, background-potition 300ms;
  border: 3px solid #884a39;
  background-color: transparent;
  background: url(https://thenounproject.com/api/private/icons/4143525/edit/?backgroundShape=SQUARE&backgroundShapeColor=%23000000&backgroundShapeOpacity=0&exportSize=752&flipX=false&flipY=false&foregroundColor=%23000000&foregroundOpacity=1&imageFormat=png&rotation=0) no-repeat;
  background-size: 40px;
  background-position: 10px 50%;
}

/*? footer reset */
*, *::after, *::before {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
}

body {
    font-size: 16px;
    font-family: 'Inter', 
        sans-serif;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: end;
    height: 100vh;
    min-width: 300px;
}

.subscription-section {
    margin: 0 auto;
    margin-top: auto;
    padding: 48px 16px;
    max-width: 1024px;
    width: 100%;
}

/*? subscribe section */
.subscription-wrapper {
    margin: 0 auto;
    border-radius: 16px;
    padding: 24px;
    display: flex;
    min-height: 180px;
    gap: 32px;
    color: var(--primary);
    background-color: var(--background);
    flex-wrap: wrap;
    justify-content: start;
    align-items: center;
    justify-content: space-between;
}

.subscription__description {
    display: flex;
    flex-direction: column;
    gap: 12px;
    flex-grow: 1;
}

.subscribe-form {
    display: flex;
    gap: 16px;
    flex-wrap: wrap;
    flex-grow: 1;
}

.subscribe-form > input {
    border: 1px solid var(
        --button-border);
    color: var(--primary);
    outline: none;
    min-height: 48px;
    background-color: var(
        --white);
    font-size: 1.2rem;
    flex-grow: 3;
    padding: 8px 12px;
    border-radius: 8px;
}

.subscribe-form > input:focus {
    border: 1px solid var(
        --primary);
}

.subscribe-form > 
input::placeholder {
    color: var(--text-heading-gray);
}

.subscribe-form > button {
    cursor: pointer;
    background-color: var(
        --primary);
    border-radius: 8px;
    color: var(--white);
    font-size: 1.25rem;
    min-height: 48px;
    flex-grow: 1;
    white-space: nowrap;
    padding: 8px 12px;
    border: 0px;
    outline: none;
    border: 1px solid var(
        --button-border);
}

/*? footer containers */
footer {
    bottom: 0px;
    background-color: var(
        --primary);
    width: 100%;
    min-width: 300px;
    bottom: 0px;
    display: flex;
    align-items: center;
    flex-direction: column;
}


.footer-wrapper {
    display: flex;
    flex-direction: column;
    max-width: 1024px;
    width: 100%;
    padding: 16px;
}

.footer-links {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    flex-grow: 4;
    gap: 48px 16px;
}

.footer-columns {
    display: flex;
    flex-wrap: wrap;
    padding: 24px 8px 36px 8px;
}

.footer-columns section, 
.footer-columns .footer-logo {
    display: flex;
    flex-direction: column;
    flex: 1 0 160px;
    max-width: 160px;
}

.footer-columns ul {
    display: flex;
    gap: 12px;
    list-style-type: none;
    padding: 0;
    margin: 0;
    flex-direction: column;
    font-weight: 600;
}

.footer-columns ul a {
    color: var(--text-color);
    text-decoration: none;
}

.footer-columns ul a:hover{
    text-decoration: underline;
}

.footer-columns h3 {
    color: var(--text-heading-gray);
    margin-top: 0;
    margin-bottom: 16px;
    font-size: 1rem;
}

.footer-logo {
    display: flex;
    gap: 16px;
    flex-grow: 1;
    max-width: 160px;
    margin-bottom: 48px;
}

.footer-logo svg {
    stroke: var(--text-color);
    stroke-width: 8px;
    width: 50px;
    height: 50px;
}

/*? Footer bottom */
.footer-bottom {
    margin-top: 48px;
    display: flex;
    align-items: end;
    width: 100%;
    gap: 16px;
    padding: 16px 0px;
    flex-wrap: wrap;
    justify-content: space-between;
    color: var(--text-color);
    border-top: 1px solid var(
        --border);
}

.footer-bottom > small {
    font-size: 16px;
    margin: 0 4px;
}

.footer-headline > h2 {
    margin: 0px;
    color: var(--text-primary);
}

.footer-headline > p {
    color: var(--text-color);
    margin: 4px 0px 20px 0px;
}

.footer-description {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.footer-description h3 {
    margin-bottom: 8px;
}

/*? socials */

.social-wrapper {
    display: flex;
    width: 100%;
    gap: 8px;
    padding: 8px 0px;
    justify-content: end;
    margin-bottom: 16px;
    align-items: center;
    color: var(--text-color);
}

.social-links {
    display: flex;
    gap: 8px;
    align-items: center;
}

.social-links img {
    width: 24px;
    height: 24px;
    transition: all 0.2s ease-in-out;
}

.social-links img:hover {
    transform: scale(1.1);
}

.social-links ul {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    list-style-type: none;
}

/*? mobile */

@media (min-width: 926px) {
    .footer-logo {
        margin-right: auto;
    }
}

@media (max-width: 800px) {
    .footer-top {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        padding: 16px 8px 32px 8px;
    }

    .footer-bottom {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        text-align: center;
    }

    .social-wrapper {
        justify-content: center;
    }
}


  </style>


  <script> document.getElementById("year").innerHTML = new Date().getFullYear();</script>
  <!-- Skrip JavaScript Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-KYSLmAOYkvMzW0En2xG4vPUdZkkucmF2KNPQkCFAALs2aQovlKuoXKF8kyB+Hx9fh" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-dY8FPLTJATWr1ouu8KOpD5Rdvqz3sPP9Txz7S6VbY3nKRlSAofBxuKb0Cunw9rbo" crossorigin="anonymous"></script>
</body>
</html>