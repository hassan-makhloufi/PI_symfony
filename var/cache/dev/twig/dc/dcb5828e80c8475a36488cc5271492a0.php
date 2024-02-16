<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_1ec61a52c847095cfef431f9ad115586 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "F<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Male_Fashion Template\">
    <meta name=\"keywords\" content=\"Male_Fashion, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>HWIJA | Template</title>

    <!-- Google Font -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap\"
          rel=\"stylesheet"), "html", null, true);
        // line 14
        echo "\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/elegant-icons.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/nice-select.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/slicknav.min.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">
</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"offcanvas__option\">
        <div class=\"offcanvas__links\">
            <a href=\"#\">Sign in</a>
            <a href=\"#\">FAQs</a>
        </div>
        <div class=\"offcanvas__top__hover\">
            <span>Usd <i class=\"arrow_carrot-down\"></i></span>
            <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class=\"offcanvas__nav__option\">
        <a href=\"#\" class=\"search-switch\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/search.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        <a href=\"#\"><img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/heart.png"), "html", null, true);
        echo "\" alt=\"\"></a>
        <a href=\"#\"><img src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/cart.png"), "html", null, true);
        echo "\" alt=\"\"> <span>0</span></a>
        <div class=\"price\">\$0.00</div>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"offcanvas__text\">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
";
        // line 64
        $this->displayBlock('header', $context, $blocks);
        // line 124
        echo "
<!-- Header Section End -->
";
        // line 126
        $this->displayBlock('body', $context, $blocks);
        // line 640
        echo "<!-- Footer Section Begin -->

<!-- Footer Section End -->

<!-- Search Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-3.3.1.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 657
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nice-select.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 659
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.nicescroll.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 661
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.countdown.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.slicknav.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/mixitup.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 664
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 665
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 64
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 65
        echo "<header class=\"header\">
    <div class=\"header__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-7\">
                    <div class=\"header__top__left\">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-5\">
                    <div class=\"header__top__right\">
                        <div class=\"header__top__links\">
                            <a href=\"#\">Sign in</a>
                            <a href=\"#\">FAQs</a>
                        </div>
                        <div class=\"header__top__hover\">
                            <span>Usd <i class=\"arrow_carrot-down\"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3\">
                <div class=\"header__logo\">
                    <a href=\"/home\"><img src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logoh.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <nav class=\"header__menu mobile-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        
                        <li><a href=\"/product/f\">Products</a></li>
                        <li><a href=\"\">Event</a></li>

                        <li><a href=\"#\">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3 col-md-3\">
                <div class=\"header__nav__option\">
                    <a href=\"#\" class=\"search-switch\"><img src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/search.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"";
        // line 115
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/heart.png"), "html", null, true);
        echo "\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/cart.png"), "html", null, true);
        echo "\" alt=\"\"> <span>0</span></a>
                    
                </div>
            </div>
        </div>
        <div class=\"canvas__open\"><i class=\"fa fa-bars\"></i></div>
    </div>
</header>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 126
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 127
        echo "<!-- Hero Section Begin -->
<section class=\"hero\">
    <div class=\"hero__slider owl-carousel\">
        <div class=\"hero__items set-bg\" data-setbg=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-1.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-5 col-lg-7 col-md-8\">
                        <div class=\"hero__text\">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2023</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.</p>
                            <a href=\"#\" class=\"primary-btn\">Shop now <span class=\"arrow_right\"></span></a>
                            <div class=\"hero__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"hero__items set-bg\" data-setbg=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/hero/hero-2.jpg"), "html", null, true);
        echo "\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-5 col-lg-7 col-md-8\">
                        <div class=\"hero__text\">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2023</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href=\"#\" class=\"primary-btn\">Shop now <span class=\"arrow_right\"></span></a>
                            <div class=\"hero__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class=\"banner spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7 offset-lg-4\">
                <div class=\"banner__item\">
                    <div class=\"banner__item__pic\">
                        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/banner-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Clothing Collections 2023</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <div class=\"banner__item banner__item--middle\">
                    <div class=\"banner__item__pic\">
                        <img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/banner-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Accessories</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7\">
                <div class=\"banner__item banner__item--last\">
                    <div class=\"banner__item__pic\">
                        <img src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/banner/banner-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Shoes Spring 2023</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
";
        // line 512
        echo "<!-- Product Section End -->

<!-- Categories Section Begin -->
<section class=\"categories spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"categories__text\">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"categories__hot__deal\">
                    <img src=\"";
        // line 525
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/product-sale.png"), "html", null, true);
        echo "\" alt=\"\">
                    <div class=\"hot__deal__sticker\">
                        <span>Sale Of</span>
                        <h5>\$29.99</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 offset-lg-1\">
                <div class=\"categories__deal__countdown\">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class=\"categories__deal__countdown__timer\" id=\"countdown\">
                        <div class=\"cd-item\">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href=\"#\" class=\"primary-btn\">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class=\"instagram spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"instagram__pic\">
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 568
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-1.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 569
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-2.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-3.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 571
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-4.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-5.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/instagram/instagram-6.jpg"), "html", null, true);
        echo "\"></div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"instagram__text\">
                        <h2>About Us</h2>
                    <p>\"Leaders\" est un groupe de jeunes tunisiens
                        qui souhaitent développer une application
                        Java,Web et mobile tout en assurant la
                        communication entre ces derniers.
                        Ce groupe a été fondée en Janvier 2023 à
                        Tunis selon la loi tunisienne.</p>
                    <h3>#Mall_For_All</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class=\"latest spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"";
        // line 607
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/blog-1.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"";
        // line 609
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/calendar.png"), "html", null, true);
        echo "\" alt=\"\"> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"";
        // line 617
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/blog-2.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"";
        // line 619
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/calendar.png"), "html", null, true);
        echo "\" alt=\"\"> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"";
        // line 627
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/blog/blog-3.jpg"), "html", null, true);
        echo "\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"";
        // line 629
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/icon/calendar.png"), "html", null, true);
        echo "\" alt=\"\"> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  587 => 629,  582 => 627,  571 => 619,  566 => 617,  555 => 609,  550 => 607,  513 => 573,  509 => 572,  505 => 571,  501 => 570,  497 => 569,  493 => 568,  447 => 525,  432 => 512,  415 => 204,  401 => 193,  387 => 182,  352 => 150,  329 => 130,  324 => 127,  314 => 126,  296 => 116,  292 => 115,  288 => 114,  268 => 97,  234 => 65,  224 => 64,  209 => 665,  205 => 664,  201 => 663,  197 => 662,  193 => 661,  189 => 660,  185 => 659,  181 => 658,  177 => 657,  173 => 656,  155 => 640,  153 => 126,  149 => 124,  147 => 64,  133 => 53,  129 => 52,  125 => 51,  95 => 24,  91 => 23,  87 => 22,  83 => 21,  79 => 20,  75 => 19,  71 => 18,  67 => 17,  62 => 14,  59 => 13,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("F<!DOCTYPE html>
<html lang=\"zxx\">

<head>
    <meta charset=\"UTF-8\">
    <meta name=\"description\" content=\"Male_Fashion Template\">
    <meta name=\"keywords\" content=\"Male_Fashion, unica, creative, html\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>HWIJA | Template</title>

    <!-- Google Font -->
    <link href=\"{{ asset('https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap\"
          rel=\"stylesheet') }}\">

    <!-- Css Styles -->
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/font-awesome.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/elegant-icons.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/nice-select.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/slicknav.min.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">
</head>

<body>
<!-- Page Preloder -->
<div id=\"preloder\">
    <div class=\"loader\"></div>
</div>

<!-- Offcanvas Menu Begin -->
<div class=\"offcanvas-menu-overlay\"></div>
<div class=\"offcanvas-menu-wrapper\">
    <div class=\"offcanvas__option\">
        <div class=\"offcanvas__links\">
            <a href=\"#\">Sign in</a>
            <a href=\"#\">FAQs</a>
        </div>
        <div class=\"offcanvas__top__hover\">
            <span>Usd <i class=\"arrow_carrot-down\"></i></span>
            <ul>
                <li>USD</li>
                <li>EUR</li>
                <li>USD</li>
            </ul>
        </div>
    </div>
    <div class=\"offcanvas__nav__option\">
        <a href=\"#\" class=\"search-switch\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a>
        <a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a>
        <a href=\"#\"><img src=\"{{ asset('img/icon/cart.png') }}\" alt=\"\"> <span>0</span></a>
        <div class=\"price\">\$0.00</div>
    </div>
    <div id=\"mobile-menu-wrap\"></div>
    <div class=\"offcanvas__text\">
        <p>Free shipping, 30-day return or refund guarantee.</p>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
{% block header %}
<header class=\"header\">
    <div class=\"header__top\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-lg-6 col-md-7\">
                    <div class=\"header__top__left\">
                        <p>Free shipping, 30-day return or refund guarantee.</p>
                    </div>
                </div>
                <div class=\"col-lg-6 col-md-5\">
                    <div class=\"header__top__right\">
                        <div class=\"header__top__links\">
                            <a href=\"#\">Sign in</a>
                            <a href=\"#\">FAQs</a>
                        </div>
                        <div class=\"header__top__hover\">
                            <span>Usd <i class=\"arrow_carrot-down\"></i></span>
                            <ul>
                                <li>USD</li>
                                <li>EUR</li>
                                <li>USD</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3 col-md-3\">
                <div class=\"header__logo\">
                    <a href=\"/home\"><img src=\"{{ asset('img/logoh.png') }}\" alt=\"\"></a>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <nav class=\"header__menu mobile-menu\">
                    <ul>
                        <li class=\"active\"><a href=\"#\">Home</a></li>
                        
                        <li><a href=\"/product/f\">Products</a></li>
                        <li><a href=\"\">Event</a></li>

                        <li><a href=\"#\">Contacts</a></li>
                    </ul>
                </nav>
            </div>
            <div class=\"col-lg-3 col-md-3\">
                <div class=\"header__nav__option\">
                    <a href=\"#\" class=\"search-switch\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a>
                    <a href=\"#\"><img src=\"{{ asset('img/icon/cart.png') }}\" alt=\"\"> <span>0</span></a>
                    
                </div>
            </div>
        </div>
        <div class=\"canvas__open\"><i class=\"fa fa-bars\"></i></div>
    </div>
</header>{% endblock %}

<!-- Header Section End -->
{% block body %}
<!-- Hero Section Begin -->
<section class=\"hero\">
    <div class=\"hero__slider owl-carousel\">
        <div class=\"hero__items set-bg\" data-setbg=\"{{ asset('img/hero/hero-1.jpg') }}\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-5 col-lg-7 col-md-8\">
                        <div class=\"hero__text\">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2023</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering commitment to exceptional quality.</p>
                            <a href=\"#\" class=\"primary-btn\">Shop now <span class=\"arrow_right\"></span></a>
                            <div class=\"hero__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"hero__items set-bg\" data-setbg=\"{{ asset('img/hero/hero-2.jpg') }}\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-xl-5 col-lg-7 col-md-8\">
                        <div class=\"hero__text\">
                            <h6>Summer Collection</h6>
                            <h2>Fall - Winter Collections 2023</h2>
                            <p>A specialist label creating luxury essentials. Ethically crafted with an unwavering
                                commitment to exceptional quality.</p>
                            <a href=\"#\" class=\"primary-btn\">Shop now <span class=\"arrow_right\"></span></a>
                            <div class=\"hero__social\">
                                <a href=\"#\"><i class=\"fa fa-facebook\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>
                                <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class=\"banner spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-7 offset-lg-4\">
                <div class=\"banner__item\">
                    <div class=\"banner__item__pic\">
                        <img src=\"{{ asset('img/banner/banner-1.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Clothing Collections 2023</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-5\">
                <div class=\"banner__item banner__item--middle\">
                    <div class=\"banner__item__pic\">
                        <img src=\"{{ asset('img/banner/banner-2.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Accessories</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-7\">
                <div class=\"banner__item banner__item--last\">
                    <div class=\"banner__item__pic\">
                        <img src=\"{{ asset('img/banner/banner-3.jpg') }}\" alt=\"\">
                    </div>
                    <div class=\"banner__item__text\">
                        <h2>Shoes Spring 2023</h2>
                        <a href=\"#\">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
{#<section class=\"product spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <ul class=\"filter__controls\">
                    <li class=\"active\" data-filter=\"*\">Best Sellers</li>
                    <li data-filter=\".new-arrivals\">New Arrivals</li>
                    <li data-filter=\".hot-sales\">Hot Sales</li>
                </ul>
            </div>
        </div>
        <div class=\"row product__filter\">
            <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-1.jpg') }}\">
                        <span class=\"label\">New</span>
                        <ul class=\"product__hover\">
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6>Piqué Biker Jacket</h6>
                        <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                        <div class=\"rating\">
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </div>
                        <h5>\$67.24</h5>
                        <div class=\"product__color__select\">
                            <label for=\"pc-1\">
                                <input type=\"radio\" id=\"pc-1\">
                            </label>
                            <label class=\"active black\" for=\"pc-2\">
                                <input type=\"radio\" id=\"pc-2\">
                            </label>
                            <label class=\"grey\" for=\"pc-3\">
                                <input type=\"radio\" id=\"pc-3\">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales\">
                <div class=\"product__item\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-2.jpg') }}\">
                        <ul class=\"product__hover\">
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                            <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6>Piqué Biker Jacket</h6>
                        <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                        <div class=\"rating\">
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </div>
                        <h5>\$67.24</h5>
                        <div class=\"product__color__select\">
                            <label for=\"pc-4\">
                                <input type=\"radio\" id=\"pc-4\">
                            </label>
                            <label class=\"active black\" for=\"pc-5\">
                                <input type=\"radio\" id=\"pc-5\">
                            </label>
                            <label class=\"grey\" for=\"pc-6\">
                                <input type=\"radio\" id=\"pc-6\">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals\">
                <div class=\"product__item sale\">
                    <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-3.jpg') }}\">
                        <span class=\"label\">Sale</span>
                        <ul class=\"product__hover\">
                            <li><a href=\"#\"><img src=\"img/icon/heart.png\" alt=\"\"></a></li>
                            <li><a href=\"#\"><img src=\"img/icon/compare.png\" alt=\"\"> <span>Compare</span></a></li>
                            <li><a href=\"#\"><img src=\"img/icon/search.png\" alt=\"\"></a></li>
                        </ul>
                    </div>
                    <div class=\"product__item__text\">
                        <h6>Multi-pocket Chest Bag</h6>
                        <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                        <div class=\"rating\">
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star\"></i>
                            <i class=\"fa fa-star-o\"></i>
                        </div>
                        <h5>\$43.48</h5>
                        <div class=\"product__color__select\">
                            <label for=\"pc-7\">
                                <input type=\"radio\" id=\"pc-7\">
                            </label>
                            <label class=\"active black\" for=\"pc-8\">
                                <input type=\"radio\" id=\"pc-8\">
                            </label>
                            <label class=\"grey\" for=\"pc-9\">
                                <input type=\"radio\" id=\"pc-9\">
                            </label>
                        </div>
                    </div>
                </div>
            </div>

    <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales\">
        <div class=\"product__item\">
            <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-4.jpg') }}\">
                <ul class=\"product__hover\">
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                </ul>
            </div>
            <div class=\"product__item__text\">
                <h6>Diagonal Textured Cap</h6>
                <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                <div class=\"rating\">
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                </div>
                <h5>\$60.9</h5>

                <div class=\"product__color__select\">
                    <label for=\"pc-10\">
                        <input type=\"radio\" id=\"pc-10\">
                    </label>
                    <label class=\"active black\" for=\"pc-11\">
                        <input type=\"radio\" id=\"pc-11\">
                    </label>
                    <label class=\"grey\" for=\"pc-12\">
                        <input type=\"radio\" id=\"pc-12\">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals\">
        <div class=\"product__item\">
            <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-5.jpg') }}\">
                <ul class=\"product__hover\">
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                </ul>
            </div>
            <div class=\"product__item__text\">
                <h6>Lether Backpack</h6>
                <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                <div class=\"rating\">
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                </div>
                <h5>\$31.37</h5>
                <div class=\"product__color__select\">
                    <label for=\"pc-13\">
                        <input type=\"radio\" id=\"pc-13\">
                    </label>
                    <label class=\"active black\" for=\"pc-14\">
                        <input type=\"radio\" id=\"pc-14\">
                    </label>
                    <label class=\"grey\" for=\"pc-15\">
                        <input type=\"radio\" id=\"pc-15\">
                    </label>
                </div>
            </div>
        </div>
    </div>

    <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales\">
        <div class=\"product__item sale\">
            <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-6.jpg') }}\">
                <span class=\"label\">Sale</span>
                <ul class=\"product__hover\">
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                </ul>
            </div>
            <div class=\"product__item__text\">
                <h6>Ankle Boots</h6>
                <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                <div class=\"rating\">
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star\"></i>
                    <i class=\"fa fa-star-o\"></i>
                </div>
                <h5>\$98.49</h5>
                <div class=\"product__color__select\">
                    <label for=\"pc-16\">
                        <input type=\"radio\" id=\"pc-16\">
                    </label>
                    <label class=\"active black\" for=\"pc-17\">
                        <input type=\"radio\" id=\"pc-17\">
                    </label>
                    <label class=\"grey\" for=\"pc-18\">
                        <input type=\"radio\" id=\"pc-18\">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals\">
        <div class=\"product__item\">
            <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-7.jpg') }}\">
                <ul class=\"product__hover\">
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                </ul>
            </div>

            <div class=\"product__item__text\">
                <h6>T-shirt Contrast Pocket</h6>
                <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                <div class=\"rating\">
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                </div>
                <h5>\$49.66</h5>
                <div class=\"product__color__select\">
                    <label for=\"pc-19\">
                        <input type=\"radio\" id=\"pc-19\">
                    </label>
                    <label class=\"active black\" for=\"pc-20\">
                        <input type=\"radio\" id=\"pc-20\">
                    </label>
                    <label class=\"grey\" for=\"pc-21\">
                        <input type=\"radio\" id=\"pc-21\">
                    </label>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales\">
        <div class=\"product__item\">
            <div class=\"product__item__pic set-bg\" data-setbg=\"{{ asset('img/product/product-8.jpg') }}\">
                <ul class=\"product__hover\">
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/heart.png') }}\" alt=\"\"></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/compare.png') }}\" alt=\"\"> <span>Compare</span></a></li>
                    <li><a href=\"#\"><img src=\"{{ asset('img/icon/search.png') }}\" alt=\"\"></a></li>
                </ul>
            </div>
            <div class=\"product__item__text\">
                <h6>Basic Flowing Scarf</h6>
                <a href=\"#\" class=\"add-cart\">+ Add To Cart</a>
                <div class=\"rating\">
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                    <i class=\"fa fa-star-o\"></i>
                </div>
                <h5>\$26.28</h5>
                <div class=\"product__color__select\">
                    <label for=\"pc-22\">
                        <input type=\"radio\" id=\"pc-22\">
                    </label>
                    <label class=\"active black\" for=\"pc-23\">
                        <input type=\"radio\" id=\"pc-23\">
                    </label>
                    <label class=\"grey\" for=\"pc-24\">
                        <input type=\"radio\" id=\"pc-24\">
                    </label>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
</section>#}
<!-- Product Section End -->

<!-- Categories Section Begin -->
<section class=\"categories spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-3\">
                <div class=\"categories__text\">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"categories__hot__deal\">
                    <img src=\"{{ asset('img/product-sale.png') }}\" alt=\"\">
                    <div class=\"hot__deal__sticker\">
                        <span>Sale Of</span>
                        <h5>\$29.99</h5>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 offset-lg-1\">
                <div class=\"categories__deal__countdown\">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class=\"categories__deal__countdown__timer\" id=\"countdown\">
                        <div class=\"cd-item\">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class=\"cd-item\">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href=\"#\" class=\"primary-btn\">Shop now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class=\"instagram spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-8\">
                <div class=\"instagram__pic\">
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-1.jpg') }}\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-2.jpg') }}\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-3.jpg') }}\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-4.jpg') }}\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-5.jpg') }}\"></div>
                    <div class=\"instagram__pic__item set-bg\" data-setbg=\"{{ asset('img/instagram/instagram-6.jpg') }}\"></div>
                </div>
            </div>
            <div class=\"col-lg-4\">
                <div class=\"instagram__text\">
                        <h2>About Us</h2>
                    <p>\"Leaders\" est un groupe de jeunes tunisiens
                        qui souhaitent développer une application
                        Java,Web et mobile tout en assurant la
                        communication entre ces derniers.
                        Ce groupe a été fondée en Janvier 2023 à
                        Tunis selon la loi tunisienne.</p>
                    <h3>#Mall_For_All</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class=\"latest spad\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-12\">
                <div class=\"section-title\">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"{{ asset('img/blog/blog-1.jpg') }}\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"{{ asset('img/icon/calendar.png') }}\" alt=\"\"> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"{{ asset('img/blog/blog-2.jpg') }}\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"{{ asset('img/icon/calendar.png') }}\" alt=\"\"> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-4 col-md-6 col-sm-6\">
                <div class=\"blog__item\">
                    <div class=\"blog__item__pic set-bg\" data-setbg=\"{{ asset('img/blog/blog-3.jpg') }}\"></div>
                    <div class=\"blog__item__text\">
                        <span><img src=\"{{ asset('img/icon/calendar.png') }}\" alt=\"\"> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href=\"#\">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->
{% endblock %}
<!-- Footer Section Begin -->

<!-- Footer Section End -->

<!-- Search Begin -->
<div class=\"search-model\">
    <div class=\"h-100 d-flex align-items-center justify-content-center\">
        <div class=\"search-close-switch\">+</div>
        <form class=\"search-model-form\">
            <input type=\"text\" id=\"search-input\" placeholder=\"Search here.....\">
        </form>
    </div>
</div>
<!-- Search End -->

<!-- Js Plugins -->
<script src=\"{{ asset('js/jquery-3.3.1.min.js') }}\"></script>
<script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nice-select.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.nicescroll.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.countdown.min.js') }}\"></script>
<script src=\"{{ asset('js/jquery.slicknav.js') }}\"></script>
<script src=\"{{ asset('js/mixitup.min.js') }}\"></script>
<script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
<script src=\"{{ asset('js/main.js') }}\"></script>
</body>

</html>
", "base.html.twig", "/Users/hassan/Desktop/ProductsManagement /templates/base.html.twig");
    }
}
