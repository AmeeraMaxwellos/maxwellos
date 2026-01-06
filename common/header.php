<?php include 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="<?php echo isset($metaDescription) ? $metaDescription : ''; ?>">
    <meta name="google-site-verification" content="U-OazpqimpD14jBh1Ulr8iJIhoPwjpBe1hUFghfebwI" />

    <title><?php echo isset($pageTitle) ? $pageTitle : ''; ?></title>

    <!-- SEO GEO TAGS -->
    <meta name="author" content="Maxwell Online Services" />
<meta name="copyright" content="Copyright <?php echo date('Y'); ?>  © Maxwell Online Services.">
<meta name="geo.region" content="QA" />
<meta name="geo.placename" content="Doha" />
<meta name="geo.position" content="25.333698;51.22953" />
<meta name="ICBM" content="25.333698, 51.22953" />
<meta name="Language" content="English" />
<meta name="Publisher" content="Maxwell Online Services" />
<meta name="YahooSeeker" content="INDEX, FOLLOW">
<meta name="googlebot" content="index,follow" />
<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1" />


<!-- Open Graph Meta Tags -->
<meta property="og:title" content="MaxwellOS: IT Company in Qatar | Marketing Agency in Qatar">
<meta property="og:description" content="MaxwellOS delivers end-to-end IT solutions in Qatar, including ERP systems, web design, mobile app development, digital marketing, branding & PRO services.">
<meta property="og:url" content="https://www.maxwellos.com/">
<meta property="og:type" content="website">
<meta property="og:image" content="https://www.maxwellos.com/assets/images/logo.webp">
<meta property="og:image:alt" content="MaxwellOS Logo">
<meta property="og:site_name" content="MaxwellOS">
<meta property="og:locale" content="en_US">

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="MaxwellOS: IT Company in Qatar | Marketing Agency in Qatar">
<meta name="twitter:description" content="MaxwellOS delivers end-to-end IT solutions in Qatar, including ERP systems, web design, mobile app development, digital marketing, branding & PRO services.">
<meta name="twitter:image" content="https://www.maxwellos.com/assets/images/logo.webp">

<!-- Canonical URL -->
<link rel="canonical" href="<?php echo isset($canonicalUrl) ? $canonicalUrl : 'https://www.maxwellos.com/'; ?>">
    <link rel="shortcut icon" type="image/png" href="./assets/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@300..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/assets/styles/maxwellos.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/assets/styles/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo $BASE_URL;?>/assets/styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/intl-tel-input@24.6.0/build/css/intlTelInput.css">
    <link rel="icon" type="image/png" sizes="50x50" href="<?php echo $BASE_URL;?>/assets/images/favicon.png">

    Google Analytic Code:
<!-- Google tag (gtag.js) --> 
 <script async src="https://www.googletagmanager.com/gtag/js?id=G-GC536FHVEB"></script> 
 <script> window.dataLayer = window.dataLayer || [];
 function gtag(){dataLayer.push(arguments);} 
 gtag('js', new Date()); 
 gtag('config', 'G-GC536FHVEB'); 
 </script>
 
</head>

<body>
    <header>
        <div class="row-flex ai-c jc-sb">
            <div class="left row-flex ai-c jc-s">
                <div class="logo">
                    <a href="<?php echo $BASE_URL;?>"><img src="<?php echo $BASE_URL;?>/assets/images/logo.webp" alt="logo" height="100" width="341" /></a>
                </div>
                <div class="main-menu">
                    <ul class="nav">
                        <li><a href="<?php echo $BASE_URL;?>">Home</a></li>
                        <li><a href="<?php echo $BASE_URL;?>services">Services</a></li>
                        <li><a href="<?php echo $BASE_URL;?>careers">Careers</a></li>
                        <li><a href="<?php echo $BASE_URL;?>contact-us">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="right">
                <ul class="nav top-nav">
                    <li><a href="tel:+974 3030 5266" target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="17"
                                height="16" viewBox="0 0 17 16" fill="none" class="fill-black menu-svg-size">
                                <path
                                    d="M3.79337 10.3987C5.32893 12.2431 7.17741 13.6952 9.28719 14.7228C10.0905 15.1053 11.1647 15.5591 12.3615 15.6369C12.4357 15.6401 12.5067 15.6434 12.5809 15.6434C13.3842 15.6434 14.0294 15.3646 14.5552 14.7909C14.5584 14.7876 14.5649 14.7811 14.5681 14.7747C14.7552 14.5478 14.9681 14.3435 15.1907 14.1264C15.3423 13.9805 15.4972 13.8281 15.6456 13.6726C16.3327 12.9529 16.3327 12.0389 15.6391 11.3419L13.7003 9.3938C13.3713 9.05021 12.9777 8.86869 12.5648 8.86869C12.1519 8.86869 11.7551 9.05021 11.4163 9.39056L10.2614 10.551C10.155 10.4894 10.0453 10.4343 9.94207 10.3825C9.81303 10.3176 9.69367 10.256 9.58721 10.188C8.53554 9.51698 7.58066 8.64178 6.66771 7.51699C6.20639 6.93028 5.8967 6.43758 5.68056 5.93515C5.9838 5.65962 6.26769 5.37113 6.54189 5.08912C6.63867 4.98864 6.73868 4.88815 6.83868 4.78766C7.18709 4.43758 7.3742 4.0324 7.3742 3.62073C7.3742 3.20906 7.19031 2.80388 6.83868 2.4538L5.87734 1.48784C5.76444 1.37439 5.65798 1.26418 5.5483 1.15072C5.33538 0.930304 5.11279 0.703401 4.89342 0.499188C4.56115 0.171798 4.17081 0 3.75788 0C3.34818 0 2.95462 0.171798 2.60944 0.502429L1.40293 1.71474C0.964193 2.15558 0.715794 2.69043 0.664178 3.30955C0.602885 4.08426 0.744827 4.9076 1.11259 5.90273C1.67713 7.44244 2.52879 8.87193 3.79337 10.3987ZM1.45131 3.37762C1.49003 2.9465 1.65455 2.5867 1.96424 2.27552L3.1643 1.06969C3.35141 0.888165 3.55787 0.794162 3.75788 0.794162C3.95467 0.794162 4.15468 0.888165 4.33856 1.07617C4.5547 1.27714 4.75793 1.48784 4.9773 1.7115C5.08698 1.82495 5.19989 1.9384 5.3128 2.0551L6.27414 3.02106C6.47415 3.22203 6.57738 3.42624 6.57738 3.62721C6.57738 3.82819 6.47415 4.0324 6.27414 4.23337C6.17413 4.33386 6.07413 4.43758 5.97412 4.53807C5.67411 4.84277 5.39345 5.13126 5.08376 5.40679L5.06763 5.42299C4.79987 5.69204 4.84181 5.94811 4.90633 6.1426C4.90955 6.15233 4.91278 6.15881 4.91601 6.16853C5.16441 6.76821 5.50958 7.33871 6.04832 8.01942C7.01611 9.21877 8.03552 10.1491 9.15816 10.8654C9.29687 10.9562 9.44527 11.0275 9.58398 11.0988C9.71302 11.1637 9.83238 11.2252 9.93884 11.2933C9.95174 11.2998 9.96142 11.3063 9.97433 11.3128C10.0808 11.3679 10.184 11.3938 10.2872 11.3938C10.5453 11.3938 10.7131 11.2285 10.7679 11.1734L11.9744 9.96106C12.1615 9.77306 12.3648 9.67257 12.5648 9.67257C12.81 9.67257 13.01 9.82492 13.1358 9.96106L15.081 11.9124C15.4682 12.3014 15.4649 12.7228 15.0714 13.1345C14.9359 13.2803 14.7939 13.4197 14.6423 13.5656C14.4165 13.786 14.181 14.0129 13.9681 14.269C13.5971 14.6709 13.1551 14.8589 12.5841 14.8589C12.5293 14.8589 12.4712 14.8557 12.4164 14.8525C11.3583 14.7844 10.3743 14.3695 9.6356 14.0162C7.62905 13.0405 5.86767 11.6564 4.4063 9.89948C3.20302 8.44405 2.3933 7.08911 1.85779 5.63693C1.52551 4.74552 1.3997 4.02916 1.45131 3.37762Z"
                                    fill="black" style="
                                fill: #fff;
                            "></path>
                            </svg>+974 3120 7350</a></li>
                    <li><a class="lower" href="mailto:info@maxwellos.com" target="_blank"><svg xmlns="http://www.w3.org/2000/svg"
                                width="19" height="12" viewBox="0 0 19 12" fill="none" class="fill-black menu-svg-size">
                                <path
                                    d="M17.1979 0.00028H2.11089C1.77757 0.000650671 1.45803 0.118834 1.22234 0.328911C0.986647 0.538987 0.854054 0.823805 0.853638 1.1209V10.5898C0.854054 10.8869 0.986647 11.1717 1.22234 11.3818C1.45803 11.5919 1.77757 11.7101 2.11089 11.7104H17.1979C17.5312 11.7101 17.8508 11.5919 18.0864 11.3818C18.3221 11.1717 18.4547 10.8869 18.4551 10.5898V1.12062C18.4547 0.823525 18.3221 0.538707 18.0864 0.32863C17.8508 0.118554 17.5312 0.000650671 17.1979 0.00028ZM17.1979 0.560589C17.2521 0.561235 17.306 0.568205 17.3582 0.58132L10.1802 6.97948C10.0406 7.10351 9.85152 7.17316 9.65439 7.17316C9.45726 7.17316 9.26817 7.10351 9.12855 6.97948L1.95059 0.58132C2.2011 0.505678 16.9618 0.592526 17.1979 0.560589ZM17.8265 10.5898C17.8264 10.7384 17.7601 10.8808 17.6422 10.9859C17.5244 11.0909 17.3646 11.15 17.1979 11.1501H2.11089C1.94422 11.15 1.78442 11.0909 1.66657 10.9859C1.54871 10.8808 1.48243 10.7384 1.48226 10.5898V1.12062C1.48303 1.07209 1.49095 1.02386 1.50584 0.977178L8.68411 7.37534C8.94162 7.60441 9.29057 7.73307 9.65439 7.73307C10.0182 7.73307 10.3672 7.60441 10.6247 7.37534L17.8029 0.977738C17.8178 1.02424 17.8257 1.07228 17.8265 1.12062V10.5898Z"
                                    fill="black" style="
                                fill: #fff;
                            "></path>
                                <path
                                    d="M12.9034 6.53409C12.8442 6.48305 12.7648 6.45482 12.6824 6.45545C12.5999 6.45609 12.5211 6.48556 12.4628 6.5375C12.4046 6.58944 12.3715 6.65971 12.3708 6.73316C12.3701 6.80662 12.4018 6.87739 12.459 6.93023L16.4728 10.5078C16.5321 10.5588 16.6115 10.5871 16.6939 10.5864C16.7763 10.5858 16.8551 10.5563 16.9134 10.5044C16.9717 10.4524 17.0047 10.3822 17.0054 10.3087C17.0062 10.2353 16.9745 10.1645 16.9172 10.1117L12.9034 6.53409ZM6.40535 6.53409L2.39158 10.1117C2.33432 10.1645 2.30264 10.2353 2.30336 10.3087C2.30407 10.3822 2.33713 10.4524 2.3954 10.5044C2.45368 10.5563 2.53251 10.5858 2.61493 10.5864C2.69734 10.5871 2.77673 10.5588 2.83601 10.5078L6.84979 6.93023C6.90704 6.87739 6.93872 6.80662 6.938 6.73316C6.93729 6.65971 6.90423 6.58944 6.84596 6.5375C6.78768 6.48556 6.70885 6.45609 6.62644 6.45545C6.54402 6.45482 6.46463 6.48305 6.40535 6.53409Z"
                                    fill="black" style="
                                fill: #fff;
                            "></path>
                            </svg>info@maxwellos.com</a></li>
                    <li>
                        <a href="javascript:void(0)" class="menu-btn">Menu
                            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="22" viewBox="0 0 27 22"
                                fill="none" class="fill-black menu-svg-size">
                                <path
                                    d="M3.83537 7.56304C3.83537 6.96138 4.32422 6.47253 4.92588 6.47253L25.3775 6.47253C25.9792 6.47253 26.468 6.96138 26.468 7.56304C26.468 8.16469 25.9792 8.65354 25.3775 8.65354L4.92588 8.65354C4.32422 8.65354 3.83537 8.16469 3.83537 7.56304Z"
                                    fill="#fff" style="
                                        fill: #fff;
                                    "></path>
                                <path
                                    d="M0.249008 1.0905C0.249008 0.488846 0.737854 0 1.33951 0L20.2447 0C20.8464 0 21.3352 0.488846 21.3352 1.0905C21.3352 1.69216 20.8464 2.18101 20.2447 2.18101L1.33951 2.18101C0.737854 2.18101 0.249008 1.69216 0.249008 1.0905Z"
                                    fill="black" style="
                                        fill: #fff;
                                    "></path>
                                <path
                                    d="M3.71782 14.0356C3.71782 13.4339 4.20667 12.9451 4.80833 12.9451L19.3985 12.9451C20.0002 12.9451 20.489 13.4339 20.489 14.0356C20.489 14.6372 20.0002 15.1261 19.3985 15.1261H4.81303C4.21137 15.1261 3.72252 14.6372 3.72252 14.0356H3.71782Z"
                                    fill="black" style="
                                        fill: #fff;
                                    "></path>
                                <path
                                    d="M0.573075 20.508C0.573075 19.9063 1.06192 19.4175 1.66358 19.4175H12.202C12.8036 19.4175 13.2925 19.9063 13.2925 20.508C13.2925 21.1096 12.8036 21.5985 12.202 21.5985H1.66358C1.06192 21.5985 0.573075 21.1096 0.573075 20.508Z"
                                    fill="black" style="
                                        fill: #fff;
                                    "></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>

        </div>

    </header>
    <div class="side-menu col-flex">
                <a class="close-menu" href="javascript:void(0)"><img src="<?php echo $BASE_URL;?>/assets/images/close.png" width="32" height="32" alt="close"/></a>
                <ul class="col-flex gap-0">
                        <li><a href="<?php echo $BASE_URL;?>">Home</a></li>
                        <li class="col-flex gap-0 has-sub-menu">
                            
                            <div><a href="<?php echo $BASE_URL;?>services">Services</a> 
                            <button class="toggle-btn">
                                <img src="<?php echo $BASE_URL;?>/assets/images/down-arrow.png" alt="" width="24" height="24"/>
                            </button>
                        </div>
                             <ul class="col-flex gap-0 sub-menu">
                                <li><a href="<?php echo $BASE_URL;?>services/erp-next">ERP Next</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/web-development">Web Development</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/app-development">App Development</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/e-commerce">E-commerce</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/digital-marketing">Digital Marketing</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/branding">Branding & Design</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/pro-services">PRO Services</a></li>
                                <li><a href="<?php echo $BASE_URL;?>services/seo">SEO</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo $BASE_URL;?>our-team">Our Team</a></li>
                        <li><a href="<?php echo $BASE_URL;?>careers">Careers</a></li>
                        <li><a href="<?php echo $BASE_URL;?>contact-us">Contact</a></li>
                </ul>
            </div>
    <main>