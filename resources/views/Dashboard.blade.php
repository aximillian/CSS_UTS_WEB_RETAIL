<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- Link -->
  <link rel="stylesheet" href="styles.css"/>
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

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"> KeTheBooks</a>
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


    <footer>
      <div class="footer-line"></div>
      <div class="footer-warpper">
        <section class="footer-top">
          <div class="footer-headline">
            <h2>Subscribe</h2>
            <p>
              Stay up to date with our books 
            </p>
          </div>

          <div class="footer-subscribe">
            <input type="email" spellcheck="false" placeholder="Your Email">
            <button>
              Sign Up
            </button>
          </div>
        </section>

        <div class="footer-columns">
          <section class="footer-logo">
            <h2>
              <svg
                width="1103" height="996" viewBox="0 0  1103 996"
                fill="none" xmlns="http://www.w3.org/2000/svg"
                >
              
              </svg>
            </h2>
          </section>

          <section>
            <h3> Information</h3>
            <ul>
              <li>
                <a href="#" title="About Us"> About Us</a>
              </li>
              <li>
                <a href="#" title="Shipping & Delivery"> Shipping & Delivery</a>
              </li>
              <li>
                <a href="#" title="Terms & Conditions"> Terms & Conditions</a>
              </li>
              <li>
                <a href="#" title="Write Customer Review"> Write Customer Review</a>
              </li>
            </ul>
          </section>

          <section>
            <h3> Costomer Service</h3>
            <ul>
              <li>
                <a href="#" title="Contact Us"> Contact Us</a>
              </li>
              <li>
                <a href="#" title="Returns"> Returns</a>
              </li>
              <li>
                <a href="#" title="How to Register"> How to Register</a>
              </li>
              <li>
                <a href="#" title="How to Shop"> How to Shop</a>
              </li>
              <li>
                <a href="#" title="How to Ship & Pay"> How to Ship & Pay</a>
              </li>
            </ul>
          </section>

          <section>
            <h3> My Account</h3>
            <ul>
              <li>
                <a href="#" title="Account Details"> Account Details</a>
              </li>
              <li>
                <a href="#" title="Order History"> Order History</a>
              </li>
              <li>
                <a href="#" title="Wish List"> Wish List</a>
              </li>
              <li>
                <a href="#" title="Newsletter"> Newsletter</a>
              </li>
            </ul>
          </section>

          <section>
            <h3> Contact U</h3>
            <ul>
              <li>
                <a href="#" title="Contact Us"> Contact Us</a>
              </li>
              <li>
                <a href="#" title="Returns"> Returns</a>
              </li>
              <li>
                <a href="#" title="How to Register"> How to Register</a>
              </li>
              <li>
                <a href="#" title="How to Shop"> How to Shop</a>
              </li>
              <li>
                <a href="#" title="How to Ship & Pay"> How to Ship & Pay</a>
              </li>
            </ul>
          </section>

        </div>

        <div class="footer-bottom">
          <div class='social-links'>
            <ul>
              <li>
                <a href="#" title="Instagram">
                  <img src="https://cdn.iconscout.com/icon/free/png-512/free-instagram-1464521-1239436.png?f=webp&w=256" alt="">
                </a>
              </li>

            </ul>
          </div>
          <small>
            KeTheBooks Ltd. <span id="year"></span>,
            All rights reserved
          </small>
        </div>
      </div>
    </footer>


<style>
.navbar-brand, .navbar-nav .nav-link {
  font-family: 'Roboto', sans-serif;
}


.navbar-nav .nav-link {
  font-weight: bold;
  font-size: 18px; 
}

.navbar {
  background-color: #605DFF; 
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


:root{
  --footer-background: #884a39;
  --text-color: #FAFBFC;
  --text-gray: #FEFEFE;
  --text-heading-gray: #F4F5F6;
  --text-primary: #FAFBFC;
  --button-color: #C38154;
  --button-border: #6B707C;
}

*, *::after, *::before{
  margin: 0px;
  padding: 0px;
  box-sizing: border-box;
}

footer{
  position: absolute;
  bottom: 0px;
  background-color: var(--footer-background);
  min-width: 300px;
  width: 100vw;
  bottom: 0px;
  display: flex;
  align-items: center;
  flex-direction: column;
}

.footer-warpper{
  display: flex;
  background: var(--footer-background);
  flex-direction: column;
  max-width: 1320px;
  padding: 16px;
}

.footer-top{
  display: flex;
  flex-wrap: wrap;
  justify-content: start;
  align-items: start;
  padding: 16px 0px;
  justify-content: space-between;
}

.footer-line{
  display: block;
  width: 100%;
  height: 8px;
}

.footer-subscribe{
  display: flex;
  gap: 12px;
  flex-wrap: wrap;
}

.footer-subscribe > input {
  border: 1px solid var(--text-color);
  color: var(--text-color);
  outline: none;
  min-height: 36px;
  background-color: var(--footer-background);
  font-size: 1.2rem;
  flex: 1 0 120 px;
  padding: 8px 12px;
  border-radius: 8px;
}

.footer-subscribe > input::placeholder{
  color: var(--text-color);
}

.footer-subscribe > button{
  cursor: pointer;
  background-color: var(--button-color);
  border-radius: 8px;
  color: white;
  font-size: 1,25rem;
  min-width: 120px;
  min-height: 36px;
  flex: 1 0 80px;
  white-space: nowrap;
  padding: 8px 12px;
  border: 0px;
  outline: none;
  border: 1px solid var(--text-color);
}

.footer-columns{
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  justify-content: start;
  align-items: start;
  flex: 2 0 140px;
  width: 100%;
  gap: 16px;
  padding: 24px 8px 16px 8px;
  margin: 0 auto;
}

.footer-columns ul{
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.footer-columns ul a{
  color: var(--text-color);
  text-align: none;
}

.footer-columns ul a:hover{
  text-decoration: underline;
}

.footer-columns ul li{
  margin-bottom: 16px;
}

.footer-columns h3{
  color: var(--text-primary);
  margin-top: 0;
  margin-bottom: 25px;
  font-size: 1.125rem;
}

.footer-centering{
  margin: 0 auto;
}

.footer-columns > section{
  min-width: 150pz;
}

.footer-logo{
  display: flex;
  flex-direction: row;
  align-items: start;
  justify-content: start;
  gap: 16px;
  color: var(--text-color);
  margin-bottom: 60px;
}

.footer-logo svg{
  stroke: var(--text-color);
  stroke-width: 8px;
  width: 50px;
  height: 50px;
}

.footer-bottom{
  text-align: center;
  margin-top: 48px;
  display: flex;
  align-items: center;
  width: 100%;
  gap: 16px;
  padding: 16px 0px;
  flex-wrap: wrap;
  justify-content: space-between;
  color: var(--text-gray);
}

.footer-bottom > small{
  font-size: 16px;
  margin: 0 4px;
}

.footer-headline > h2 {
  margin: 0px;
  color: var(--text-primary);
}

.footer-headline > p{
  color: var(--text-gray);
  margin: 4px 0px 20px 0px;
}

.footer-line{
  display: block;
  min-width: 40px;
  height: 2px;
  background-color: var(--text-gray);
}

.social-links{
  display: flex;
  gap: 8px;
  align-items: center;
}

.social-text{
  display: flex;
  align-items: center;
  gap: 8px;
}

.social-links img {
  width: 24px;
  height: 24px;
  transition: all 0.2s ease-in-out;
}

.social-links img:hover{
  transform: scale(1.1);
}

.social-links ul{
  display: flex;
  gap: 12px;
  list-style-type: none;
}

@media(max-width: 800px) {
  .footer-top{
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    padding: 16px 8px 32px 8px;
  }

  .footer-bottom{
    display: flex;
    flex-direction: column-reverse;
    align-items: space-between;
    justify-content: center;
    margin: 0 auto;
  }
}
</style>

  <script> document.getElementById("year").innerHTML = new Date().getFullYear();</script>
  <!-- Skrip JavaScript Bootstrap 5 -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-KYSLmAOYkvMzW0En2xG4vPUdZkkucmF2KNPQkCFAALs2aQovlKuoXKF8kyB+Hx9fh" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-dY8FPLTJATWr1ouu8KOpD5Rdvqz3sPP9Txz7S6VbY3nKRlSAofBxuKb0Cunw9rbo" crossorigin="anonymous"></script>
</body>
</html>