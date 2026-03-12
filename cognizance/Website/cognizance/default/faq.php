<!DOCTYPE html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/flaticon.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="assets/css/boxicons.min.css">
        <link rel="stylesheet" href="assets/css/nice-select.min.css">
        <link rel="stylesheet" href="assets/css/slick.min.css">
        <link rel="stylesheet" href="assets/css/odometer.min.css">
        <link rel="stylesheet" href="assets/css/datatables.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">

        <title>Cognizance - Medical Health & Corona Treatment Template</title>

        <link rel="icon" type="image/png" href="assets/img/favicon.png">
    </head>
    <body>

        <!-- Preloader -->
        <div class="preloader">
            <div class="loader">
                <div class="shadow"></div>
                <div class="box"></div>
            </div>
        </div>
        <!-- End Preloader -->

            

             <?php
        require 'db.php';
        require 'header.php';
        ?>

        <!-- Start Search Overlay -->
        <div class="search-overlay">
            <div class="d-table">
                <div class="d-table-cell">
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    <div class="search-overlay-layer"></div>
                    
                    <div class="search-overlay-close">
                        <span class="search-overlay-close-line"></span>
                        <span class="search-overlay-close-line"></span>
                    </div>

                    <div class="search-overlay-form">
                        <form>
                            <input type="text" class="input-search" placeholder="Search here...">
                            <button type="submit"><i class='bx bx-search-alt'></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Search Overlay -->

        <!-- Start Page Title Area -->
        <section class="page-title-area">
            <div class="container">
                <div class="page-title-content">
                    <h2>FAQ's</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li>FAQ's</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End Page Title Area -->

        <!-- Start FAQ Area -->
        <section class="faq-section-two ptb-100">
            <div class="container">
                <div class="tab faq-accordion-tab">
                    <ul class="tabs d-flex flex-wrap justify-content-center">
                        <li><a href="#"><i class='bx bx-book-reader'></i><span>COVID-19 Basics</span></a></li>
                        
                        <li><a href="#"><i class='bx bx-command'></i><span>Prevention</span></a></li>

                        <li><a href="#"><i class='bx bx-user-check'></i><span>Self Quarantine</span></a></li>

                        <li><a href="#"><i class='bx bx-user-pin'></i><span>For Caregivers</span></a></li>

                        <li><a href="#"><i class='bx bx-info-square'></i><span>Terms to Know</span></a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tabs-item">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What is coronavirus? What is COVID-19?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p>The COVID-19 outbreak has caused markets to collapse and worldwide health systems to become overwhelmed. When there's a global pandemic, it's nice to hear from the steady, transparent and yes even reassuring voice of experts on the front lines. </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What are the symptoms of COVID-19?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>There's a lot we don't know about the novel coronavirus that's shutting down the world. But we do know this: the sick, the elderly, and the immune-compromised are particularly at risk. If you or a loved one fall into this category, there are some things you can do to help keep COVID-19 at bay.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What can I do to prevent myself and others from getting coronavirus?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>It has spread so rapidly and to so many countries that the World Health Organization has declared it a pandemic (a term indicating that it has affected a large population, region, country, or continent).</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What should I do if I feel sick?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>If you do get sick with the flu, your doctor can prescribe an antiviral drug that can reduce the severity of your illness and shorten its duration. There are currently no antiviral drugs available to treat COVID-19.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            If a loved one gets sick, how can I care for them?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Some people infected with the virus have no symptoms. When the virus does cause symptoms, common ones include low-grade fever, body aches, coughing, nasal congestion, runny nose, and sore throat.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What is coronavirus? What is COVID-19?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p>The COVID-19 outbreak has caused markets to collapse and worldwide health systems to become overwhelmed. When there's a global pandemic, it's nice to hear from the steady, transparent and yes even reassuring voice of experts on the front lines. </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What are the symptoms of COVID-19?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>There's a lot we don't know about the novel coronavirus that's shutting down the world. But we do know this: the sick, the elderly, and the immune-compromised are particularly at risk. If you or a loved one fall into this category, there are some things you can do to help keep COVID-19 at bay.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What can I do to prevent myself and others from getting coronavirus?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>It has spread so rapidly and to so many countries that the World Health Organization has declared it a pandemic (a term indicating that it has affected a large population, region, country, or continent).</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What should I do if I feel sick?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>If you do get sick with the flu, your doctor can prescribe an antiviral drug that can reduce the severity of your illness and shorten its duration. There are currently no antiviral drugs available to treat COVID-19.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            If a loved one gets sick, how can I care for them?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Some people infected with the virus have no symptoms. When the virus does cause symptoms, common ones include low-grade fever, body aches, coughing, nasal congestion, runny nose, and sore throat.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What is coronavirus? What is COVID-19?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p>The COVID-19 outbreak has caused markets to collapse and worldwide health systems to become overwhelmed. When there's a global pandemic, it's nice to hear from the steady, transparent and yes even reassuring voice of experts on the front lines. </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What are the symptoms of COVID-19?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>There's a lot we don't know about the novel coronavirus that's shutting down the world. But we do know this: the sick, the elderly, and the immune-compromised are particularly at risk. If you or a loved one fall into this category, there are some things you can do to help keep COVID-19 at bay.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What can I do to prevent myself and others from getting coronavirus?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>It has spread so rapidly and to so many countries that the World Health Organization has declared it a pandemic (a term indicating that it has affected a large population, region, country, or continent).</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What should I do if I feel sick?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>If you do get sick with the flu, your doctor can prescribe an antiviral drug that can reduce the severity of your illness and shorten its duration. There are currently no antiviral drugs available to treat COVID-19.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            If a loved one gets sick, how can I care for them?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Some people infected with the virus have no symptoms. When the virus does cause symptoms, common ones include low-grade fever, body aches, coughing, nasal congestion, runny nose, and sore throat.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What is coronavirus? What is COVID-19?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p>The COVID-19 outbreak has caused markets to collapse and worldwide health systems to become overwhelmed. When there's a global pandemic, it's nice to hear from the steady, transparent and yes even reassuring voice of experts on the front lines. </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What are the symptoms of COVID-19?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>There's a lot we don't know about the novel coronavirus that's shutting down the world. But we do know this: the sick, the elderly, and the immune-compromised are particularly at risk. If you or a loved one fall into this category, there are some things you can do to help keep COVID-19 at bay.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What can I do to prevent myself and others from getting coronavirus?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>It has spread so rapidly and to so many countries that the World Health Organization has declared it a pandemic (a term indicating that it has affected a large population, region, country, or continent).</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What should I do if I feel sick?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>If you do get sick with the flu, your doctor can prescribe an antiviral drug that can reduce the severity of your illness and shorten its duration. There are currently no antiviral drugs available to treat COVID-19.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            If a loved one gets sick, how can I care for them?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Some people infected with the virus have no symptoms. When the virus does cause symptoms, common ones include low-grade fever, body aches, coughing, nasal congestion, runny nose, and sore throat.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tabs-item">
                            <div class="faq-accordion-content">
                                <ul class="accordion">
                                    <li class="accordion-item">
                                        <a class="accordion-title active" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What is coronavirus? What is COVID-19?
                                        </a>
        
                                        <div class="accordion-content show">
                                            <p>The COVID-19 outbreak has caused markets to collapse and worldwide health systems to become overwhelmed. When there's a global pandemic, it's nice to hear from the steady, transparent and yes even reassuring voice of experts on the front lines. </p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What are the symptoms of COVID-19?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>There's a lot we don't know about the novel coronavirus that's shutting down the world. But we do know this: the sick, the elderly, and the immune-compromised are particularly at risk. If you or a loved one fall into this category, there are some things you can do to help keep COVID-19 at bay.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What can I do to prevent myself and others from getting coronavirus?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>It has spread so rapidly and to so many countries that the World Health Organization has declared it a pandemic (a term indicating that it has affected a large population, region, country, or continent).</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            What should I do if I feel sick?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>If you do get sick with the flu, your doctor can prescribe an antiviral drug that can reduce the severity of your illness and shorten its duration. There are currently no antiviral drugs available to treat COVID-19.</p>
                                        </div>
                                    </li>

                                    <li class="accordion-item">
                                        <a class="accordion-title" href="javascript:void(0)">
                                            <i class='bx bx-chevron-down'></i>
                                            If a loved one gets sick, how can I care for them?
                                        </a>
        
                                        <div class="accordion-content">
                                            <p>Some people infected with the virus have no symptoms. When the virus does cause symptoms, common ones include low-grade fever, body aches, coughing, nasal congestion, runny nose, and sore throat.</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start FAQ Area -->
        <section class="faq-area ptb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Faq's</span>
                    <h2>Frequently Asked & Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="faq-image faq-bg1">
                            <img src="assets/img/faq-img.jpg" alt="image">

                            <a href="https://www.youtube.com/watch?v=BtN-goy9VOY" class="video-btn popup-youtube"><i class="flaticon-play-button"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is the source of the virus?
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        How does the virus spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        who has had COVID-19 spread the illness to others?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        Will warm weather stop the outbreak of COVID-19?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is community spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="faq-shape1"><img src="assets/img/faq-shape1.png" alt="image"></div>
            <div class="faq-shape2"><img src="assets/img/faq-shape2.png" alt="image"></div>
        </section>
        <!-- End FAQ Area -->

        <!-- Start FAQ Area -->
        <section class="faq-section pt-100 pb-100">
            <div class="container">
                <div class="section-title">
                    <span class="sub-title">Faq's</span>
                    <h2>Frequently Asked & Questions</h2>
                </div>

                <div class="row justify-content-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is the source of the virus?
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        How does the virus spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        who has had COVID-19 spread the illness to others?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        Will warm weather stop the outbreak of COVID-19?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is community spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12">
                        <div class="faq-accordion">
                            <ul class="accordion">
                                <li class="accordion-item">
                                    <a class="accordion-title active" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is the source of the virus?
                                    </a>
    
                                    <div class="accordion-content show">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        How does the virus spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        who has had COVID-19 spread the illness to others?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        Will warm weather stop the outbreak of COVID-19?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>

                                <li class="accordion-item">
                                    <a class="accordion-title" href="javascript:void(0)">
                                        <i class="flaticon-add"></i>
                                        What is community spread?
                                    </a>
    
                                    <div class="accordion-content">
                                        <p>Coronaviruses are a large family of viruses. Some cause illness in people, and others, such as canine and feline coronaviruses, only infect animals. Rarely, animal coronaviruses that infect animals have emerged to infect people and can spread between people.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="faq-img">
                    <img src="assets/img/faq-img2.jpg" alt="image">

                    <a href="https://www.youtube.com/watch?v=BtN-goy9VOY" class="video-btn popup-youtube"><i class="flaticon-play-button"></i></a>
                </div>
            </div>

            <div class="faq-shape1"><img src="assets/img/faq-shape1.png" alt="image"></div>
            <div class="faq-shape2"><img src="assets/img/faq-shape2.png" alt="image"></div>
        </section>
        <!-- End FAQ Area -->

        <p class="text-center">If have any another question use our chatbot</p>

        <br>

       <?php
       require 'footer.php';
       ?>

        <!-- Links of JS files -->
        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/parallax.min.js"></script>
        <script src="assets/js/mixitup.min.js"></script>
        <script src="assets/js/datatables.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/appear.min.js"></script>
        <script src="assets/js/odometer.min.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/meanmenu.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/form-validator.min.js"></script>
        <script src="assets/js/contact-form-script.js"></script>
        <script src="assets/js/ajaxchimp.min.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
(function(){if(!window.chatbase||window.chatbase("getState")!=="initialized"){window.chatbase=(...arguments)=>{if(!window.chatbase.q){window.chatbase.q=[]}window.chatbase.q.push(arguments)};window.chatbase=new Proxy(window.chatbase,{get(target,prop){if(prop==="q"){return target.q}return(...args)=>target(prop,...args)}})}const onLoad=function(){const script=document.createElement("script");script.src="https://www.chatbase.co/embed.min.js";script.id="gDGeWkkHUJdf3-sN41oxv";script.domain="www.chatbase.co";document.body.appendChild(script)};if(document.readyState==="complete"){onLoad()}else{window.addEventListener("load",onLoad)}})();
</script>
    </body>


</html>