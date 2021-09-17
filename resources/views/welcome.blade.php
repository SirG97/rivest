<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script>
            addEventListener("load", function () {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
        <!-- Custom Theme files -->
        <link href="{{ asset('css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
        <!-- gallery smoothbox -->
        <link rel="stylesheet" href="{{ asset('css/smoothbox.css')}}" type='text/css' media="all" />
        <!-- team deoslide -->
        <link rel="stylesheet" href="{{ asset('css/jquery.desoslide.css')}}">
        <link href="{{ asset('css/style.css')}}" type="text/css" rel="stylesheet" media="all">
        <link href="{{ asset('css/font-awesome.css')}}" rel="stylesheet">
        <!-- Styles -->
{{--        <style>--}}
{{--            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}--}}
{{--        </style>--}}

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>

    <body>
    <div class="top-nav">
        <!--nav top-->
        <div class="container">

            <div class="navbar-top">
                <div class="nav-top-left">
                    <ul>
                        <li>
                            <a href="/login" class="log">Login</a>
                        </li>
                        <li>
                            <a href="/register" class="log">register</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-top-right">
                    <ul>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i> (+000) 009 455 4088</li>
                        <li>
                            <i class="fa fa-envelope-o list-icon" aria-hidden="true"></i>
                            <a href="mailto:info@example.com">info@example.com</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- nav-bottom -->
        <div class="inner-header">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1>
                        <a href="/">
                            Rivest Bank</a>
                    </h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="#about" class="scroll">About</a>
                        </li>
                        <li>
                            <a href="#services" class="scroll">Services</a>
                        </li>
                        <li>
                            <a href="#gallery" class="scroll">gallery</a>
                        </li>
{{--                        <li>--}}
{{--                            <a href="#team" class="scroll">Team</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a href="#testimonials" class="scroll">Testimonials</a>--}}
{{--                        </li>--}}
                        <li>
                            <a href="#contact" class="scroll">contact</a>
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </nav>
        </div>
    </div>
    <!--/nav ends here-->
    <!-- banner -->
    <div class="banner">
        <div class="banner-right">
            <img src="{{ asset('images/new.png')}}" alt="" class="img-responsive" />
        </div>
        <div class="banner-text">
            <div id="top" class="callbacks_container">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Welcome To Rivest Bank</h6>
                            <h3>For Your Personal And Professional Banking Needs.</h3>
                            <p>From sole traders to international corporates, our Relationship managers will get to know your needs.</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>The Internet banking portal</h6>
                            <h3>Ensuring a high level of customer service.</h3>
                            <p>We believe in offering all our business customers an expert and personal level of service.</p>

                        </div>
                    </li>
                    <li>
                        <div class="banner-textagileinfo">
                            <h6>Ideal for Personal Banking</h6>
                            <h3>For Your Personal And Professional Banking Needs.</h3>
                            <p>We provide credit facilities to large scale enterprises with a minimum asset. </p>

                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
    <!-- //banner -->
    <!--about -->
    <div id="about" class="section">
        <h3 class="title-txt">
            <span>a</span>bout us</h3>
        <div class="abt-container">
            <fieldset>
                <legend>Building the Finest Quality Bank.</legend>
                <div class="stats-info">
                    <div class="col-sm-3 col-xs-3 stats-grid">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='324' data-delay='.5' data-increment="1">324</div>
                        <div class="stats-img stat2">
                            <p>branches</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='574' data-delay='.5' data-increment="1">574</div>
                        <div class="stats-img stat2">
                            <p>personal loans</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid stat1">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='350' data-delay='.5' data-increment="1">350</div>
                        <div class="stats-img stat2">
                            <p>ATM's</p>
                        </div>
                    </div>
                    <div class="col-sm-3 col-xs-3 stats-grid stat1">
                        <div class='numscroller numscroller-big-bottom' data-slno='1' data-min='0' data-max='874' data-delay='.5' data-increment="1">874</div>
                        <div class="stats-img stat2">
                            <p>Deposit Accounts</p>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="abt-pos">
                    <div class="col-md-6  about-left">
                        <h3 class="title">We are Rivest Bank.</h3>
                        <p>RB is the largest private sector bank with total assets of US$ 503 billion at March 31,
                            2019 and profit after tax US$ 2,788 million for the year ended March 31, 2016. SRB currently has a
                            network of 10,050 Branches and 22,890 Affliated with banks ATM's across. </p>
                        <p>RB offers a wide range of banking products and financial services to corporate and
                            retail customers through a variety of delivery channels and through its group companies.</p>
{{--                        <a href="#services" class="abtlink scroll">read more</a>--}}

                        <img src="{{ asset('images/c.png')}}" class="img-responsive" alt="" />
                    </div>
                    <div class="col-md-6 w3ls-row">
                        <img src="{{ asset('images/a.jpg')}}" class="img-responsive" alt="" />
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </fieldset>
        </div>
    </div>
    <!-- //about -->
    <!-- services -->
    <div class="services section" id="services">
        <div class="container2">
            <h3 class="title-txt">
                <span>s</span>ervices</h3>
            <h5>we offer products and services for your
                <span>personal</span> and
                <span>professional banking</span> needs.</h5>
            <div class="col-md-5 service-left-grid">
                <div class="services-left">

                    <h4> RB Group Companies</h4>
                    <p> RB offers a wide range of banking products and financial services to corporate and retail customers
                        through a variety of delivery channels and through its group companies. </p>
                    <ul class="serv-list">
                        <li>
                            <a href="#gallery" class="abtlink scroll">view more</a>
                        </li>
                        <li>
                            <a href="#contact" class="abtlink scroll">contact us</a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-md-7 text-center agileinfo-about-grid">
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-cc-diners-club" aria-hidden="true"></i>
                        <h6>Deposits</h6>
                        <p>Deposit and withdraw your cash safely with us</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-google-wallet" aria-hidden="true"></i>
                        <h6>loans</h6>
                        <p> We can help with soft loans for your business</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-check" aria-hidden="true"></i>
                        <h6>prepaid card</h6>
                        <p> For easier bill payment and shopping </p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                        <h6>net banking</h6>
                        <p> Internet banking for easier online access</p>
                    </div>
                </div>

                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-inbox" aria-hidden="true"></i>
                        <h6>Investment</h6>
                        <p> Our coporate banking services are top notch</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-4 service-subgrids">
                    <div class="w3ls-about-grid">
                        <i class="fa fa-cc-mastercard" aria-hidden="true"></i>
                        <h6>Fund transfer</h6>
                        <p> We can do Instant wire transfer to any bank</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>

        </div>
    </div>
    <!-- //services -->
    <!--about manager -->
    <div class="section manager" id="manger">
        <div class="container">
            <h3 class="title-txt">
                <span>K</span>now more</h3>
            <div class="about-main">
                <div class="col-md-4 man-grid2">
                    <h5>Ensuring there's a high level of customer service.</h5>
                    <p class="about-text-w3l">RB's Board members include eminent individuals with a wealth of experience in international business, management consulting, banking and financial services.</p>
                    <img src="{{ asset('images/sign.png')}}" alt="" class="img-responsive" />
                    <h4 class="man-txt">Samuel C. Kelly</h4>
                    <p> Chairman of the Board</p>
                </div>
                <div class="col-md-8 man-right">
                    <div class="col-md-5 col-sm-5 man-grid">
                        <ul>
                            <li>
                                <i class="fa fa-square" aria-hidden="true"></i>History
                                <p>RB was originally promoted in 1994 by SRB Limited, a financial institution, and was its wholly-owned subsidiary.</p>
                            </li>
                            <li>
                                <i class="fa fa-square" aria-hidden="true"></i>Investors Relation
                                <p>All the latest, in-depth information about RB's financial performance and business initiatives.</p>
                            </li>

                            <li>
                                <i class="fa fa-square" aria-hidden="true"></i>Career Opportunities
                                <p>Explore diverse openings with the second-largest bank.</p>
                            </li>

                        </ul>
                    </div>
                    <div class="w3ls-about-right col-md-7 col-sm-7">
                        <img class="img-responsive" src="{{ asset('images/man.jpg')}}" alt="about-image" />
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- //about manager -->
    <!-- faq -->
{{--    <div class="section faq">--}}
{{--        <div class="container">--}}
{{--            <h3 class="title-txt text-center">--}}
{{--                <span>F</span>AQ</h3>--}}

{{--            <div class="faq-info">--}}
{{--                <!-- Nav tabs -->--}}
{{--                <ul class="nav nav-tabs" role="tablist">--}}
{{--                    <li role="presentation" class="active">--}}
{{--                        <a href="#testi" aria-controls="testi" role="tab" data-toggle="tab">tab1</a>--}}
{{--                    </li>--}}
{{--                    <li role="presentation">--}}
{{--                        <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">tab2</a>--}}
{{--                    </li>--}}
{{--                    <li role="presentation">--}}
{{--                        <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">tab3</a>--}}
{{--                    </li>--}}
{{--                    <li role="presentation">--}}
{{--                        <a href="#tab4" aria-controls="messages" role="tab" data-toggle="tab">tab4</a>--}}
{{--                    </li>--}}
{{--                    <li role="presentation">--}}
{{--                        <a href="#tab5" aria-controls="messages" role="tab" data-toggle="tab">tab5</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--                <!-- Tab panes -->--}}
{{--                <div class="tab-content">--}}
{{--                    <div role="tabpanel" class="tab-pane active" id="testi">--}}
{{--                        <div class="faqmain-info">--}}
{{--                            <div class="faq-subinfo">--}}
{{--                                <div class="col-md-6  latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-6 latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"> </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane" id="profile">--}}
{{--                        <div class="faqmain-info">--}}
{{--                            <div class="faq-subinfo">--}}
{{--                                <div class="col-md-6  latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-6 latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"> </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane" id="messages">--}}
{{--                        <div class="faqmain-info">--}}
{{--                            <div class="faq-subinfo">--}}
{{--                                <div class="col-md-6  latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-6 latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"> </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane" id="tab4">--}}
{{--                        <div class="faqmain-info">--}}
{{--                            <div class="faq-subinfo">--}}
{{--                                <div class="col-md-6  latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> eiusmod conse ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> eiusmod ed do sit amet conse ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do conse eiusmod sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-6 latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"> </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div role="tabpanel" class="tab-pane" id="tab5">--}}
{{--                        <div class="faqmain-info">--}}
{{--                            <div class="faq-subinfo">--}}
{{--                                <div class="col-md-6  latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}

{{--                                </div>--}}
{{--                                <div class="col-md-6 latest-grid">--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> ed do sit amet conse eiusmod ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                    <div class="faq-left">--}}
{{--                                        <h5>--}}
{{--                                            <i class="fa fa-question-circle" aria-hidden="true"></i> conse eiusmod ed do sit amet ?</h5>--}}
{{--                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do sit amet conse eiusmod.</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="clearfix"> </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- //faq -->
    <!-- gallery -->
    <div class="jarallax section gallery" id="gallery">
        <div class="container">
            <div class="w3ls-title">
                <h3 class="title-txt">
                    <span>G</span>allery</h3>
            </div>
            <div class="w3ls_gallery_grids">
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="{{ asset('images/g1.jpg')}}" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="{{ asset('images/g2.jpg')}}" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="{{ asset('images/g2.jpg')}}" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g6.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g6.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g4.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g4.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g5.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g5.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-4 agileits_w3layouts_gallery_grid">
                    <div class="agileits_w3layouts_gallery_grid1 w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g6.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g6.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g2.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g2.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="agileits_w3layouts_gallery_grid1 hover14 column">
                        <div class="w3_agile_gallery_effect">
                            <a href="images/g1.jpg" class="sb" title="quis nostrud exercitation ullamco laboris quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum">
                                <figure>
                                    <img src="images/g1.jpg" alt=" " class="img-responsive" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>

            </div>
        </div>
    </div>
    <!-- //gallery -->


    <!-- contact -->
    <div class="contact-main section" id="contact">
        <div class="container">
            <h3 class="title-txt">
                <span>c</span>ontact us</h3>
            <div class="col-md-4 contact-leftgrid">
                <div class="contact-g1">
                    <h6>Get In Touch</h6>
                    <ul class="address">
                        <li>
                            <span class="fa fa-phone" aria-hidden="true"></span>
                            +1 234 567 8901
                        </li>
                        <li>
                            <span class="fa fa-envelope" aria-hidden="true"></span>
                            <a href="mailto:example@email.com"> mail@example.com</a>
                        </li>
                        <li>
                            <span class="fa fa-map-marker" aria-hidden="true"></span>
                            Broome St, California.

                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-8 contact-center">
                <div class="col-md-4 contact-g2">
                    <h6>Follow us</h6>
                    <div class="address-grid">

                        <ul class="social-icons3">

                            <li>
                                <a href="#" class="s-iconfacebook">
                                    <span class="fa fa-facebook" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icontwitter">
                                    <span class="fa fa-twitter" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-icondribbble">
                                    <span class="fa fa-dribbble" aria-hidden="true"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="s-iconbehance">
                                    <span class="fa fa-behance" aria-hidden="true"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 contact-g3">
                    <div class="subscribe-grid ">
                        <p>subscribe To receive helpful articles, customer alerts,services & more.</p>

                        <form action="#" method="post">
                            <input type="email" placeholder="Your Email" name="Subscribe" required="">
                            <button class="btn1">
                                <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
        </div>
        <div class="map text-center">
            <h2>Our wide range of Branches </h2>

            <img src="images/map.jpg" alt="" class="img-responsive" />
        </div>
        <div class="section contact-bottom">
            <div class="container">
                <div class="col-lg-6 col-md-6  contact-right-grid">
                    <h6>send us a message</h6>
                    <div class="agileits-main-right">
                        <form action="#" method="post" class="agile_form">
                            <label class="header">Name</label>
                            <div class="icon1 w3ls-name1">
                                <input placeholder=" " name="first name" type="text" required="">
                            </div>
                            <div class="icon2">
                                <label class="header">Email</label>
                                <input placeholder=" " name="Email" type="email" required="">
                            </div>
                            <label class="header">your message</label>
                            <textarea class="w3l_summary" required=""></textarea>
                            <input type="submit" value="SEND">
                        </form>
                    </div>
                </div>
                <div class="col-md-6 contact-bot">
                    <div class="contact-list">

                        <h6> Open a free checking account online today </h6>
                        <ul class="cbot-list">
                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>Maece placerat eget mi
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>
                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>sodales blandit urna
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>

                            <li>
                                <i class="fa fa-check-square-o" aria-hidden="true"></i>vitae pellentesque ac
                                <p>les blandit urna urna sodales vitae pellentesq urna sodales vitaeue</p>
                            </li>

                        </ul>
                        <a href="#" class="log contact-link" data-toggle="modal" data-target="#myModal">create a new account</a>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!-- contact -->
    <!-- copy right -->
    <p class="footer-class">© 2018 Revenue. All Rights Reserved | Design by
        <a href="http://w3layouts.com/" target="_blank">W3layouts</a>
    </p>
    <!-- //copy right -->
    <!-- bootstrap-pop-up for login and register -->
    <div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    Be a Member of Revenue
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <section>
                    <div class="modal-body">
                        <div class="loginf_module">
                            <div class="module form-module">
                                <div class="toggle">
                                    <i class="fa fa-times fa-pencil"></i>
                                    <div class="tooltip">Click Me</div>
                                </div>
                                <div class="form">
                                    <h3>Login to your account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="submit" value="Login">
                                    </form>
                                    <div class="cta">
                                        <a href="#">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form">
                                    <h3>Create a new account</h3>
                                    <form action="#" method="post">
                                        <input type="text" name="Username" placeholder="Username" required="">
                                        <input type="password" name="Password" placeholder="Password" required="">
                                        <input type="email" name="Email" placeholder="Email address" required="">
                                        <input type="text" name="Phone" placeholder="Phone Number" required="">
                                        <input type="submit" value="Register">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- //bootstrap-pop-up for login and register-->

    <!-- js -->
    <script src="{{ asset('js/jquery-2.2.3.min.js')}}"></script>
    <!-- //js -->
    <!-- about numscroller -->
    <script src="{{ asset('js/numscroller-1.0.js')}}"></script>
    <!-- //about numscroller -->
    <!-- banner Slider starts Here -->
    <script src="{{ asset('js/responsiveslides.min.js')}}"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {
            // Slideshow 3
            $("#slider3").responsiveSlides({
                auto: true,
                pager: true,
                nav: false,
                speed: 500,
                namespace: "callbacks",
                before: function () {
                    $('.events').append("<li>before event fired.</li>");
                },
                after: function () {
                    $('.events').append("<li>after event fired.</li>");
                }
            });

        });
    </script>
    <!-- //banner slider script ends -->
    <!-- sign in and signup pop up toggle script -->
    <script>
        $('.toggle').click(function () {
            // Switches the Icon
            $(this).children('i').toggleClass('fa-pencil');
            // Switches the forms
            $('.form').animate({
                height: "toggle",
                'padding-top': 'toggle',
                'padding-bottom': 'toggle',
                opacity: "toggle"
            }, "slow");
        });
    </script>
    <!-- sign in and signup pop up toggle script -->
    <!-- team desoslide-JavaScript -->
    <script src="{{ asset('js/jquery.desoslide.js')}}"></script>
    <script>
        $('#demo1_thumbs').desoSlide({
            main: {
                container: '#demo1_main_image',
                cssClass: 'img-responsive'
            },
            effect: 'sideFade',
            caption: true
        });
    </script>
    <!-- //team desoslide-JavaScript -->
    <!-- Flexslider-js for-testimonials -->
    <script src="{{ asset('js/jquery.flexisel.js') }}"></script>
    <script>
        $(window).load(function () {
            $("#flexiselDemo1").flexisel({
                visibleItems: 1,
                animationSpeed: 1000,
                autoPlay: false,
                autoPlaySpeed: 3000,
                pauseOnHover: true,
                enableResponsiveBreakpoints: true,
                responsiveBreakpoints: {
                    portrait: {
                        changePoint: 480,
                        visibleItems: 1
                    },
                    landscape: {
                        changePoint: 640,
                        visibleItems: 1
                    },
                    tablet: {
                        changePoint: 768,
                        visibleItems: 1
                    }
                }
            });

        });
    </script>
    <!-- //Flexslider-js for-testimonials -->
    <!-- start-smooth-scrolling -->
    <script src="{{ asset('js/move-top.js')}}"></script>
    <script src="{{ asset('js/easing.js')}}"></script>
    <script>
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();

                $('html,body').animate({
                    scrollTop: $(this.hash).offset().top
                }, 1000);
            });
        });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script>
        $(document).ready(function () {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({
                easingType: 'easeOutQuart'
            });

        });
    </script>
    <script src="{{ asset('js/SmoothScroll.min.js')}}"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- gallery smoothbox -->
    <script src="{{ asset('js/smoothbox.jquery2.js')}}"></script>
    <!-- //gallery smoothbox -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    </body>
</html>
