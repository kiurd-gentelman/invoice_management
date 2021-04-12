<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('themes/bikin/css/style.css') }}">

    <title>AnalytiQ Invoice</title>
  </head>
  <body>

    <section id="menu">
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
            <div class="container">
              <a class="navbar-brand" href="#">Invoice System</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{ route('Generate-invoice') }}">Invoice</a>
                  </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">Login</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </section>
    <section id="banner" class="pt-5">
        <div id="banner-area">
            <div class="container banner-content pb-5">
                <h2 class=" pt-5">Quick & Easy Online Billing & Accounting Software</h2>
                <div class="row">
                    <div class="col-md-7" >
                    <p data-aos="fade-down" class="pt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi perferendis molestiae assumenda? Fugit soluta labore molestiae impedit pariatur, quam ea facilis itaque, commodi deleniti recusandae libero odio exercitationem sequi neque?</p>
                </div>
                <div class="col-md-4">
                    <img src="https://www.onlineinvoices.com/js/1/images/2.png" alt="" class="img-fluid animate__animated animate__pulse animate__delay-1s animate__infinite infinite d-none d-md-block">
                </div>
                </div>
            </div>

        </div>
    </section>
    <section id="about" class="pt-5 pb-5 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <img src="https://www.onlineinvoices.com/css/images/features/additional_features.png" alt="" class="img-fluid w-50" data-aos="fade-left">
                <h1 class="text-center">Track Sales, Invoices & Clients' Payments Easily</h1>
                <div class="heading-bar mt-2"></div>
                <p class="text-center p-5" data-aos="fade-right">The Online Invoices innovative system enables you to invoice clients fast - receive and track payments online. Use built-in powerful features to manage recurring invoices and payments. Combine this with easy transitions from estimates and quotes to active invoices and you will discover how it will help you to develop your business .</p>
            </div>
        </div>
    </section>
    <section class="register p-5">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center">
                <div class="me-5">
                    <h2>Get Started Now</h2>
                </div>
                <div>
                    <a href="#" class="btn btn-success btn-lg p-3 fs-1">Create a free account</a>
                </div>
            </div>
        </div>
    </section>
    <section id="products" class="pt-5 pb-5 bg-light" data-aos="flip-left">
        <div class="container">
            <div class="row justify-content-center">
                <h1 class="text-center">Track Sales, Invoices & Clients' Payments Easily</h1>
                <div class="heading-bar mt-2"></div>
            </div>
            <div class="row mt-5 pt-5" >
                <div class="col-md-3 product-item" data-aos="fade-left">
                    <a href="">
                        <div class="row justify-content-center">
                                <img src="https://www.onlineinvoices.com/css/images/landing/dd1.png" alt="" class="img-fluid w-75">
                                <p class="text-center">Product Name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 product-item" data-aos="fade-left">
                    <a href="">
                        <div class="row justify-content-center">
                                <img src="https://www.onlineinvoices.com/css/images/landing/dd1.png" alt="" class="img-fluid w-75">
                                <p class="text-center">Product Name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 product-item" data-aos="fade-left">
                    <a href="">
                        <div class="row justify-content-center">
                                <img src="https://www.onlineinvoices.com/css/images/landing/dd1.png" alt="" class="img-fluid w-75">
                                <p class="text-center">Product Name</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 product-item" data-aos="fade-left">
                    <a href="">
                        <div class="row justify-content-center">
                                <img src="https://www.onlineinvoices.com/css/images/landing/dd1.png" alt="" class="img-fluid w-75">
                                <p class="text-center">Product Name</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section id="inventory" class="pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4">
            <img src="https://www.onlineinvoices.com/css/images/cart3.png" alt="" data-aos="fade-down-right">
          </div>
          <div class="col-md-8">
            <h1>Track Sales, Invoices & Clients' Payments Easily</h1>
            <div class="heading-bar mt-2 mb-5"></div>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam quas quidem mollitia. Enim odio eaque, veritatis, repellendus neque commodi voluptatum, harum non architecto earum dignissimos sit et ea molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur ab soluta distinctio ipsum cum nesciunt quod harum ex est obcaecati quasi mollitia reprehenderit, odio expedita laborum voluptas ratione numquam!</p>
          </div>
        </div>
      </div>
    </section>

    <section id="follow-up" class="pt-5 pb-5 bg-light">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-8">
            <h1>Client follow-up and management system</h1>
            <div class="heading-bar mt-2 mb-5"></div>
            <h4>Provides your business with the optimal method of communicating with your clients, and viewing the history of your transactions.</h4>
            <p data-aos="fade-right" class="fs-5 text-success" >
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tomato" class="bi bi-check2-all" viewBox="0 0 16 16">
              <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
              <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
              </svg>
            Create a profile for Each Client and add related notes or attach files to it (with the ability to share with the client).
          </p>
          <p data-aos="fade-right" class="fs-5 text-success" >
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tomato" class="bi bi-check2-all" viewBox="0 0 16 16">
            <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
            <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
            </svg>
          Create a profile for Each Client and add related notes or attach files to it (with the ability to share with the client).
        </p>
        <p data-aos="fade-right" class="fs-5 text-success" >
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tomato" class="bi bi-check2-all" viewBox="0 0 16 16">
          <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
          <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
          </svg>
        Create a profile for Each Client and add related notes or attach files to it (with the ability to share with the client).
      </p>
      <p data-aos="fade-right" class="fs-5 text-success" >
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="tomato" class="bi bi-check2-all" viewBox="0 0 16 16">
        <path d="M12.354 4.354a.5.5 0 0 0-.708-.708L5 10.293 1.854 7.146a.5.5 0 1 0-.708.708l3.5 3.5a.5.5 0 0 0 .708 0l7-7zm-4.208 7l-.896-.897.707-.707.543.543 6.646-6.647a.5.5 0 0 1 .708.708l-7 7a.5.5 0 0 1-.708 0z"/>
        <path d="M5.354 7.146l.896.897-.707.707-.897-.896a.5.5 0 1 1 .708-.708z"/>
        </svg>
      Create a profile for Each Client and add related notes or attach files to it (with the ability to share with the client).
    </p>
          </div>
          <div class="col-md-4">
            <img src="https://www.onlineinvoices.com/css/images/landing/follow.png" alt="" class="img-fluid" data-aos="flip-right">
          </div>
        </div>
      </div>
    </section>

    <section id="manage">
      <div class="manage-content pt-5 pb-5">
        <div class="container text-white">
        <h1 class="pt-5 pb-5">Manage your Staff</h1>
        <p class="pb-5 fs-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus eius nobis quidem vel tempore obcaecati eos dolorum molestias illo pariatur? Voluptates enim molestias quam illo tempora quae blanditiis quasi dolorem. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet qui esse deleniti iure sapiente odio aliquid distinctio quaerat eos delectus. Vel sed aspernatur quae tempora iure blanditiis at nobis aperiam?</p>
      </div>
    </div>
    </section>

    <section id="time-tracking" class="pt-5 pb-5">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4">
            <img src="https://www.onlineinvoices.com/css/images/cart3.png" alt="" data-aos="fade-down-right" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h1>Track Sales, Invoices & Clients' Payments Easily</h1>
            <div class="heading-bar mt-2 mb-5"></div>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam quas quidem mollitia. Enim odio eaque, veritatis, repellendus neque commodi voluptatum, harum non architecto earum dignissimos sit et ea molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur ab soluta distinctio ipsum cum nesciunt quod harum ex est obcaecati quasi mollitia reprehenderit, odio expedita laborum voluptas ratione numquam!</p>
          </div>
        </div>
      </div>
    </section>
    <section id="income" class="pt-5 pb-5 bg-primary text-white">
      <div class="container">
        <div class="row align-items-center">

          <div class="col-md-8">
            <h1>Track Sales, Invoices & Clients' Payments Easily</h1>
            <div class="heading-bar mt-2 mb-5"></div>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam quas quidem mollitia. Enim odio eaque, veritatis, repellendus neque commodi voluptatum, harum non architecto earum dignissimos sit et ea molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur ab soluta distinctio ipsum cum nesciunt quod harum ex est obcaecati quasi mollitia reprehenderit, odio expedita laborum voluptas ratione numquam!</p>
          </div>
          <div class="col-md-4">
            <img src="https://www.onlineinvoices.com/css/images/track_your_bills.png" alt="" data-aos="fade-down-right" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <section id="open-account" class="pt-5 pb-5 bg-light">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-4">
            <img src="https://www.onlineinvoices.com/css/images/screen-visit.png" alt="" data-aos="fade-down-right" class="img-fluid">
          </div>
          <div class="col-md-8">
            <h1>You don't need to be an accountant to manage your business</h1>
            <div class="heading-bar mt-2 mb-5"></div>
            <p data-aos="fade-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab numquam quas quidem mollitia. Enim odio eaque, veritatis, repellendus neque commodi voluptatum, harum non architecto earum dignissimos sit et ea molestias?Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci consequuntur ab soluta distinctio ipsum cum nesciunt quod harum ex est obcaecati quasi mollitia reprehenderit, odio expedita laborum voluptas ratione numquam!</p>
            <a href="#" class="btn btn-primary btn-lg p-3 fs-1">Create a free account</a>
          </div>
        </div>
      </div>
    </section>
    <section id="why" class="pt-5 pb-5">
      <div class="container">
        <div class="row justify-content-center">
          <h1 class="text-center">Track Sales, Invoices & Clients' Payments Easily</h1>
          <div class="heading-bar mt-2 mb-5"></div>
      </div>
        <div class="row">
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 mb-5">
            <div class="flip-box">
              <div class="flip-box-inner">
                <div class="flip-box-front">
                  <div class="row align-items-center justify-content-center">
                    <img src="https://www.onlineinvoices.com/img/uploads/54bbc6efc854e_bill.png" alt="Paris" class="img-fluid w-50">
                    <p>Free and quick support</p>
                  </div>

                </div>
                <div class="flip-box-back rounded">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime voluptate eaque consectetur iste error voluptatum minima eius. Ducimus voluptates dicta exercitationem! Reprehenderit delectus distinctio blanditiis inventore modi a, ullam eius.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.2.0/mdb.min.js"
></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('themes/bikin/js/script.js') }}"></script>
    <script>
      AOS.init();

    </script>
  </body>
</html>
