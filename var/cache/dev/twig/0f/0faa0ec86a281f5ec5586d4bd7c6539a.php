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

/* front/base.html.twig */
class __TwigTemplate_aa390a698c10a55b2c3f9a37e3fc7d46 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">


    <!-- Google Web Fonts -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    <style>

        #map { height: 100%;width: 100% }
    </style>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/lightbox/css/lightbox.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/owlcarousel/assets/owl.carousel.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    ";
        // line 41
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 44
        echo "</head>

<body>

<!-- Spinner Start -->
<div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" role=\"status\"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">Ariana, Tunisia</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">contact@hwija.tn</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"index.html\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">hwija</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"";
        // line 76
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\" nav-item nav-link ";
        if ((array_key_exists("nav_bar_active", $context) && ((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 76, $this->source); })()) == "home"))) {
            echo " active ";
        }
        echo "\">Home</a>
                    <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" class=\"nav-item nav-link ";
        if ((array_key_exists("nav_bar_active", $context) && ((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 77, $this->source); })()) == "products"))) {
            echo " active ";
        }
        echo "\">Shop</a>
                    <a href=\"";
        // line 78
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        echo "\" class=\"nav-item nav-link ";
        if ((array_key_exists("nav_bar_active", $context) && ((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 78, $this->source); })()) == "forum"))) {
            echo " active ";
        }
        echo "\">Forum</a>

                    ";
        // line 80
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 80, $this->source); })()), "user", [], "any", false, false, false, 80)) {
            // line 81
            echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">profile</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products");
            echo "\" class=\"dropdown-item\">My products</a>
                                <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades");
            echo "\" class=\"dropdown-item\">My trades</a>
                                <a href=\"";
            // line 86
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_appointments");
            echo "\" class=\"dropdown-item\">My Appointments</a>
                                <a href=\"";
            // line 87
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
            echo "\" class=\"dropdown-item\">Update Profile</a>

                            </div>
                        </div>
                    ";
        } else {
            // line 92
            echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">account</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"";
            // line 95
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"dropdown-item\">login</a>
                                <a href=\"";
            // line 96
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"dropdown-item\">register</a>
                            </div>
                        </div>
                    ";
        }
        // line 100
        echo "
                    <a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"nav-item nav-link ";
        if ((array_key_exists("nav_bar_active", $context) && ((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 101, $this->source); })()) == "contact"))) {
            echo " active ";
        }
        echo "\">Contact</a>


                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell fa-2x\"></i>
                            <span id=\"notification-number\" class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\" >3</span>
                        </a>
                        <div id=\"notification-content\" class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            ";
        // line 113
        $this->loadTemplate("front/home/notifications/notifications.html.twig", "front/base.html.twig", 113)->display($context);
        // line 114
        echo "                        </div>

                    </div>
                    ";
        // line 117
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            echo "                    <a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products");
            echo "\" class=\"my-auto\">
                        <i class=\"fa fa-user fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        }
        // line 122
        echo "
                </div>
            </div>
        </nav>
    </div>
</div>
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body d-flex align-items-center\">
                <div class=\"input-group w-75 mx-auto d-flex\">
                    <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                    <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"response-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Response</h5>
            </div>
            <div class=\"modal-body\" id=\"response-content\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam corporis cupiditate dicta error fuga fugiat hic inventore nobis odio, provident quas, quia quod quos reprehenderit saepe sed temporibus, veniam.

            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"reclamation-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Write Your Reclamation !</h5>
            </div>
            <div class=\"modal-body\">
                <form action=\"";
        // line 164
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_create");
        echo "\" method=\"post\">
                   <textarea class=\"w-100 form-control border-0 mb-4\" id=\"reclamation-message\" name=\"message\"  rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                    <input type=\"hidden\" name=\"product_id\" id=\"reclamation-type\" value=\"\">
                    <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

";
        // line 175
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 175, $this->source); })()) == "my_products"))) {
            // line 176
            echo "<div class=\"modal fade\" id=\"add-product-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">


            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add a product</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">


                </div>
                ";
            // line 190
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 190, $this->source); })()), 'form_start');
            echo "


                <input type=\"text\" name=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "name", [], "any", false, false, false, 193)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 193, $this->source); })()), "name", [], "any", false, false, false, 193)), "html", null, true);
            echo "\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"product name ...\">
                <input type=\"text\" name=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "short_description", [], "any", false, false, false, 194)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 194, $this->source); })()), "short_description", [], "any", false, false, false, 194)), "html", null, true);
            echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"short description ...\">
                <input type=\"text\" name=\"";
            // line 195
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "long_description", [], "any", false, false, false, 195)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 195, $this->source); })()), "long_description", [], "any", false, false, false, 195)), "html", null, true);
            echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"long description ...\">
                ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "category", [], "any", false, false, false, 196), 'widget', ["attr" => ["class" => "w-100 form-control border-0 py-3 mb-4"]]);
            echo "
                <div class=\"input-group quantity mb-5\" style=\"width: 100px;\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                            <i class=\"fa fa-minus\"></i>
                        </button>
                    </div>

                    <input type=\"text\"  class=\"form-control form-control-sm text-center border-0\" name=\"";
            // line 204
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 204, $this->source); })()), "quanity", [], "any", false, false, false, 204)), "html", null, true);
            echo "\"  >
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                </div>
                ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 211, $this->source); })()), "image", [], "any", false, false, false, 211), 'widget');
            echo "

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                ";
            // line 215
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 215, $this->source); })()), 'form_end');
            echo "

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 225
        if (array_key_exists("livraison_lines", $context)) {
            // line 226
            echo "    <div class=\"modal fade\" id=\"location-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog  modal-fullscreen\" role=\"document\">
            <div class=\"modal-content rounded-0\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">please choose your location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body d-flex align-items-center\">
                    <div id=\"map\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <a type=\"button\" id=\"save-location\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save Changes</a>

                </div>
            </div>
        </div>
    </div>
";
        }
        // line 245
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 245, $this->source); })()) == "update_comment"))) {
            // line 246
            echo "    <div class=\"modal fade\" id=\"update-comment-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" >
            <div class=\"modal-content\">


                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Update Comment</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">


                    </div>
                    <form id=\"update_comment_form\" action=\"\" method=\"post\">
                        <textarea class=\"w-100 form-control border-0 mb-4\" name=\"content\" id=\"update_comment_input\" rows=\"5\" cols=\"10\" placeholder=\"Your Comment\"></textarea>
                        <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                    </form>

                </div>


            </div>
        </div>
    </div>
";
        }
        // line 272
        echo "
";
        // line 273
        if (array_key_exists("my_products", $context)) {
            // line 274
            echo "    <div class=\"modal fade\" id=\"trade-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog  modal-fullscreen\" role=\"document\">
            <div class=\"modal-content\">


                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Trade product</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-12\">
                            <div class=\"row g-4\">
                                ";
            // line 287
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["my_products"]) || array_key_exists("my_products", $context) ? $context["my_products"] : (function () { throw new RuntimeError('Variable "my_products" does not exist.', 287, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 288
                echo "                                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                        <div class=\"rounded position-relative fruite-item ";
                // line 289
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "quanity", [], "any", false, false, false, 289) == 0)) {
                    echo " out-stock ";
                }
                echo " \">

                                            <div class=\"fruite-img\">
                                                <img src=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 292))), "html", null, true);
                echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
                // line 294
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "category", [], "any", false, false, false, 294), "name", [], "any", false, false, false, 294), "html", null, true);
                echo "</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>";
                // line 296
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 296), "html", null, true);
                echo "</h4>
                                                <p>";
                // line 297
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "longDescription", [], "any", false, false, false, 297), "html", null, true);
                echo "</p>
                                                ";
                // line 298
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "quanity", [], "any", false, false, false, 298) == 0)) {
                    // line 299
                    echo "                                                    <div  out-stock  style=\"position: absolute;top: 1.5em;right: 1.5em;color: red;font-weight: 700\" >
                                                        out of stock
                                                    </div>
                                                ";
                }
                // line 303
                echo "                                                ";
                if ((twig_get_attribute($this->env, $this->source, $context["c"], "quanity", [], "any", false, false, false, 303) > 0)) {
                    // line 304
                    echo "                                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                    <form method=\"post\" action=\"";
                    // line 305
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trade");
                    echo "\" >
                                                        <input type=\"hidden\" name=\"from\" value=\"";
                    // line 306
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 306), "html", null, true);
                    echo "\">
                                                        <input type=\"hidden\" name=\"to\" value=\"";
                    // line 307
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 307, $this->source); })()), "id", [], "any", false, false, false, 307), "html", null, true);
                    echo "\">
                                                        <input class=\"from-quantity\" type=\"hidden\" name=\"fromQuantity\" value=\"1\">

                                                        <button class=\"btn border border-secondary rounded-pill px-3 text-primary\" type=\"submit\" > trade </button>
                                                    </form>

                                                </div>
                                                ";
                }
                // line 315
                echo "                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "
                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                 </div>
            </div>
        </div>
    </div>
";
        }
        // line 331
        $this->displayBlock('content', $context, $blocks);
        // line 334
        echo "<div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
    <div class=\"container py-5\">
        <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3\">
                    <a href=\"#\">
                        <h1 class=\"text-primary mb-0\">exchange</h1>
                        <p class=\"text-secondary mb-0\">products</p>
                    </a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Your Email\">
                        <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">Subscribe Now</button>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"d-flex justify-content-end pt-3\">
                        <a class=\"btn  btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-item\">
                    <h4 class=\"text-light mb-3\">Why People Like us!</h4>
                    <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                    <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <a class=\"btn-link\" href=\"\">About Us</a>
                    <a class=\"btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn-link\" href=\"\">Return Policy</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <h4 class=\"text-light mb-3\">Account</h4>
                    <a class=\"btn-link\" href=\"\">register</a>
                    <a class=\"btn-link\" href=\"\">login</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-item\">
                    <h4 class=\"text-light mb-3\">Contact</h4>
                    <p>Address: Ariana, Tunisia</p>
                    <p>Email: contact@hwija.com</p>
                    <p>Phone: +216 22777777</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class=\"container-fluid copyright bg-dark py-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>exchange</a>, All right reserved.</span>
            </div>
            <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>


<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
        integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
        crossorigin=\"\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/easing/easing.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/waypoints/waypoints.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/lightbox/js/lightbox.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/owlcarousel/owl.carousel.min.js")), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/main.js")), "html", null, true);
        echo "\"></script>
<script>
    const NotificationsPath = \"";
        // line 434
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notification");
        echo "\"
    const notificationSpan = document.querySelector('#notification-number');
    const notificationContent = document.querySelector('#notification-content');
     (async function (){
       await fetch(NotificationsPath).then(data=>{

            return data.json()
        }).then(d=>{
            if(d.status!==400){
                notificationContent.innerHTML = d.data
                notificationSpan.innerHTML = d.notification
            }
            else{
                return null
            }
        })
    })()
</script>
";
        // line 452
        $this->displayBlock('scripts', $context, $blocks);
        // line 454
        echo "</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 41
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 42
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 331
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 332
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 452
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/base.html.twig";
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
        return array (  724 => 452,  716 => 332,  709 => 331,  701 => 42,  694 => 41,  685 => 454,  683 => 452,  662 => 434,  657 => 432,  651 => 429,  647 => 428,  643 => 427,  639 => 426,  545 => 334,  543 => 331,  529 => 319,  520 => 315,  509 => 307,  505 => 306,  501 => 305,  498 => 304,  495 => 303,  489 => 299,  487 => 298,  483 => 297,  479 => 296,  474 => 294,  469 => 292,  461 => 289,  458 => 288,  454 => 287,  439 => 274,  437 => 273,  434 => 272,  406 => 246,  404 => 245,  383 => 226,  381 => 225,  368 => 215,  361 => 211,  351 => 204,  340 => 196,  334 => 195,  328 => 194,  322 => 193,  316 => 190,  300 => 176,  298 => 175,  284 => 164,  240 => 122,  232 => 118,  230 => 117,  225 => 114,  223 => 113,  204 => 101,  201 => 100,  194 => 96,  190 => 95,  185 => 92,  177 => 87,  173 => 86,  169 => 85,  165 => 84,  160 => 81,  158 => 80,  149 => 78,  141 => 77,  133 => 76,  99 => 44,  97 => 41,  92 => 39,  86 => 36,  79 => 32,  75 => 31,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">

<head>
    <meta charset=\"utf-8\">
    <title>Fruitables - Vegetable Website Template</title>
    <meta content=\"width=device-width, initial-scale=1.0\" name=\"viewport\">
    <meta content=\"\" name=\"keywords\">
    <meta content=\"\" name=\"description\">


    <!-- Google Web Fonts -->
    <link rel=\"stylesheet\" href=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.css\"
          integrity=\"sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=\"
          crossorigin=\"\"/>
    <style>

        #map { height: 100%;width: 100% }
    </style>
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->

    <!-- Libraries Stylesheet -->
    <link href=\"{{ absolute_url(asset('assets/front/lib/lightbox/css/lightbox.min.css')) }}\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/front/lib/owlcarousel/assets/owl.carousel.min.css'))}}\" rel=\"stylesheet\">


    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"{{ absolute_url(asset('assets/front/css/bootstrap.min.css'))}}\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"{{ absolute_url(asset('assets/front/css/style.css'))}}\" rel=\"stylesheet\">

    {% block stylesheets %}

    {% endblock %}
</head>

<body>

<!-- Spinner Start -->
<div id=\"spinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
    <div class=\"spinner-grow text-primary\" role=\"status\"></div>
</div>
<!-- Spinner End -->


<!-- Navbar start -->
<div class=\"container-fluid fixed-top\">
    <div class=\"container topbar bg-primary d-none d-lg-block\">
        <div class=\"d-flex justify-content-between\">
            <div class=\"top-info ps-2\">
                <small class=\"me-3\"><i class=\"fas fa-map-marker-alt me-2 text-secondary\"></i> <a href=\"#\" class=\"text-white\">Ariana, Tunisia</a></small>
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">contact@hwija.tn</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"index.html\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">hwija</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"{{ path('app_home') }}\" class=\" nav-item nav-link {% if nav_bar_active is defined and nav_bar_active=='home' %} active {% endif %}\">Home</a>
                    <a href=\"{{ path('app_products') }}\" class=\"nav-item nav-link {% if nav_bar_active is defined and nav_bar_active=='products' %} active {% endif %}\">Shop</a>
                    <a href=\"{{ path('app_forum') }}\" class=\"nav-item nav-link {% if nav_bar_active is defined and nav_bar_active=='forum' %} active {% endif %}\">Forum</a>

                    {% if app.user %}
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">profile</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"{{ path('app_profile_products') }}\" class=\"dropdown-item\">My products</a>
                                <a href=\"{{ path('app_profile_trades') }}\" class=\"dropdown-item\">My trades</a>
                                <a href=\"{{ path('app_profile_appointments') }}\" class=\"dropdown-item\">My Appointments</a>
                                <a href=\"{{ path('app_profile_update') }}\" class=\"dropdown-item\">Update Profile</a>

                            </div>
                        </div>
                    {% else %}
                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">account</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"{{ path('app_login') }}\" class=\"dropdown-item\">login</a>
                                <a href=\"{{ path('app_register') }}\" class=\"dropdown-item\">register</a>
                            </div>
                        </div>
                    {% endif %}

                    <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link {% if nav_bar_active is defined and nav_bar_active=='contact' %} active {% endif %}\">Contact</a>


                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>
                    <div class=\"nav-item dropdown\">
                        <a href=\"#\" class=\"nav-link\" data-bs-toggle=\"dropdown\">
                            <i class=\"fa fa-bell fa-2x\"></i>
                            <span id=\"notification-number\" class=\"position-absolute bg-secondary rounded-circle d-flex align-items-center justify-content-center text-dark px-1\" style=\"top: -5px; left: 15px; height: 20px; min-width: 20px;\" >3</span>
                        </a>
                        <div id=\"notification-content\" class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                            {% include 'front/home/notifications/notifications.html.twig' %}
                        </div>

                    </div>
                    {% if app.user %}
                    <a  href=\"{{ path('app_profile_products') }}\" class=\"my-auto\">
                        <i class=\"fa fa-user fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                    {% endif %}

                </div>
            </div>
        </nav>
    </div>
</div>
<div class=\"modal fade\" id=\"searchModal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-fullscreen\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Search by keyword</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body d-flex align-items-center\">
                <div class=\"input-group w-75 mx-auto d-flex\">
                    <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                    <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"response-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Response</h5>
            </div>
            <div class=\"modal-body\" id=\"response-content\">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aperiam corporis cupiditate dicta error fuga fugiat hic inventore nobis odio, provident quas, quia quod quos reprehenderit saepe sed temporibus, veniam.

            </div>
        </div>
    </div>
</div>
<div class=\"modal fade\" id=\"reclamation-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content rounded-0\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Write Your Reclamation !</h5>
            </div>
            <div class=\"modal-body\">
                <form action=\"{{ path('app_reclamation_create') }}\" method=\"post\">
                   <textarea class=\"w-100 form-control border-0 mb-4\" id=\"reclamation-message\" name=\"message\"  rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                    <input type=\"hidden\" name=\"product_id\" id=\"reclamation-type\" value=\"\">
                    <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                </form>
            </div>
        </div>
    </div>
</div>

{% if active is defined and  active=='my_products' %}
<div class=\"modal fade\" id=\"add-product-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">


            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"exampleModalLabel\">Add a product</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">


                </div>
                {{ form_start(form) }}


                <input type=\"text\" name=\"{{ field_name(form.name) }}\" value=\"{{ field_value(form.name) }}\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"product name ...\">
                <input type=\"text\" name=\"{{ field_name(form.short_description) }}\" value=\"{{ field_value(form.short_description) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"short description ...\">
                <input type=\"text\" name=\"{{ field_name(form.long_description) }}\" value=\"{{ field_value(form.long_description) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"long description ...\">
                {{ form_widget(form.category, {'attr': {'class': 'w-100 form-control border-0 py-3 mb-4'}}) }}
                <div class=\"input-group quantity mb-5\" style=\"width: 100px;\">
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                            <i class=\"fa fa-minus\"></i>
                        </button>
                    </div>

                    <input type=\"text\"  class=\"form-control form-control-sm text-center border-0\" name=\"{{ field_name(form.quanity) }}\"  >
                    <div class=\"input-group-btn\">
                        <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                            <i class=\"fa fa-plus\"></i>
                        </button>
                    </div>
                </div>
                {{ form_widget(form.image) }}

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                {{ form_end(form) }}

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
            </div>
        </div>
    </div>
</div>
{% endif %}
{%  if livraison_lines is defined %}
    <div class=\"modal fade\" id=\"location-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog  modal-fullscreen\" role=\"document\">
            <div class=\"modal-content rounded-0\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">please choose your location</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body d-flex align-items-center\">
                    <div id=\"map\"></div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                    <a type=\"button\" id=\"save-location\" class=\"btn btn-primary\" data-bs-dismiss=\"modal\">Save Changes</a>

                </div>
            </div>
        </div>
    </div>
{% endif %}
{% if active is defined and  active=='update_comment' %}
    <div class=\"modal fade\" id=\"update-comment-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" >
            <div class=\"modal-content\">


                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Update Comment</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">


                    </div>
                    <form id=\"update_comment_form\" action=\"\" method=\"post\">
                        <textarea class=\"w-100 form-control border-0 mb-4\" name=\"content\" id=\"update_comment_input\" rows=\"5\" cols=\"10\" placeholder=\"Your Comment\"></textarea>
                        <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                    </form>

                </div>


            </div>
        </div>
    </div>
{% endif %}

{% if my_products is defined %}
    <div class=\"modal fade\" id=\"trade-modal\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
        <div class=\"modal-dialog  modal-fullscreen\" role=\"document\">
            <div class=\"modal-content\">


                <div class=\"modal-header\">
                    <h5 class=\"modal-title\" id=\"exampleModalLabel\">Trade product</h5>
                    <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                </div>
                <div class=\"modal-body\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-12\">
                            <div class=\"row g-4\">
                                {% for c in my_products %}
                                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                                        <div class=\"rounded position-relative fruite-item {% if c.quanity==0 %} out-stock {% endif %} \">

                                            <div class=\"fruite-img\">
                                                <img src=\"{{ absolute_url(asset(c.image)) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                            </div>
                                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">{{ c.category.name }}</div>
                                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                                <h4>{{ c.name }}</h4>
                                                <p>{{ c.longDescription }}</p>
                                                {% if c.quanity==0 %}
                                                    <div  out-stock  style=\"position: absolute;top: 1.5em;right: 1.5em;color: red;font-weight: 700\" >
                                                        out of stock
                                                    </div>
                                                {% endif %}
                                                {% if c.quanity>0 %}
                                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                    <form method=\"post\" action=\"{{path('app_trade')}}\" >
                                                        <input type=\"hidden\" name=\"from\" value=\"{{ c.id }}\">
                                                        <input type=\"hidden\" name=\"to\" value=\"{{ product.id }}\">
                                                        <input class=\"from-quantity\" type=\"hidden\" name=\"fromQuantity\" value=\"1\">

                                                        <button class=\"btn border border-secondary rounded-pill px-3 text-primary\" type=\"submit\" > trade </button>
                                                    </form>

                                                </div>
                                                {% endif %}
                                            </div>
                                        </div>
                                    </div>
                                {% endfor %}

                            </div>
                        </div>
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                 </div>
            </div>
        </div>
    </div>
{% endif %}
{% block content %}

{% endblock %}
<div class=\"container-fluid bg-dark text-white-50 footer pt-5 mt-5\">
    <div class=\"container py-5\">
        <div class=\"pb-4 mb-4\" style=\"border-bottom: 1px solid rgba(226, 175, 24, 0.5) ;\">
            <div class=\"row g-4\">
                <div class=\"col-lg-3\">
                    <a href=\"#\">
                        <h1 class=\"text-primary mb-0\">exchange</h1>
                        <p class=\"text-secondary mb-0\">products</p>
                    </a>
                </div>
                <div class=\"col-lg-6\">
                    <div class=\"position-relative mx-auto\">
                        <input class=\"form-control border-0 w-100 py-3 px-4 rounded-pill\" type=\"number\" placeholder=\"Your Email\">
                        <button type=\"submit\" class=\"btn btn-primary border-0 border-secondary py-3 px-4 position-absolute rounded-pill text-white\" style=\"top: 0; right: 0;\">Subscribe Now</button>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"d-flex justify-content-end pt-3\">
                        <a class=\"btn  btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-twitter\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-facebook-f\"></i></a>
                        <a class=\"btn btn-outline-secondary me-2 btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-youtube\"></i></a>
                        <a class=\"btn btn-outline-secondary btn-md-square rounded-circle\" href=\"\"><i class=\"fab fa-linkedin-in\"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row g-5\">
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-item\">
                    <h4 class=\"text-light mb-3\">Why People Like us!</h4>
                    <p class=\"mb-4\">typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the like Aldus PageMaker including of Lorem Ipsum.</p>
                    <a href=\"\" class=\"btn border-secondary py-2 px-4 rounded-pill text-primary\">Read More</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <a class=\"btn-link\" href=\"\">About Us</a>
                    <a class=\"btn-link\" href=\"\">Contact Us</a>
                    <a class=\"btn-link\" href=\"\">Privacy Policy</a>
                    <a class=\"btn-link\" href=\"\">Terms & Condition</a>
                    <a class=\"btn-link\" href=\"\">Return Policy</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"d-flex flex-column text-start footer-item\">
                    <h4 class=\"text-light mb-3\">Account</h4>
                    <a class=\"btn-link\" href=\"\">register</a>
                    <a class=\"btn-link\" href=\"\">login</a>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"footer-item\">
                    <h4 class=\"text-light mb-3\">Contact</h4>
                    <p>Address: Ariana, Tunisia</p>
                    <p>Email: contact@hwija.com</p>
                    <p>Phone: +216 22777777</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Copyright Start -->
<div class=\"container-fluid copyright bg-dark py-4\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-6 text-center text-md-start mb-3 mb-md-0\">
                <span class=\"text-light\"><a href=\"#\"><i class=\"fas fa-copyright text-light me-2\"></i>exchange</a>, All right reserved.</span>
            </div>
            <div class=\"col-md-6 my-auto text-center text-md-end text-white\">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from \"https://htmlcodex.com/credit-removal\". ***/-->
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->



<!-- Back to Top -->
<a href=\"#\" class=\"btn btn-primary border-3 border-primary rounded-circle back-to-top\"><i class=\"fa fa-arrow-up\"></i></a>


<script src=\"https://unpkg.com/leaflet@1.9.4/dist/leaflet.js\"
        integrity=\"sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=\"
        crossorigin=\"\"></script>
<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/easing/easing.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/waypoints/waypoints.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/lightbox/js/lightbox.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/owlcarousel/owl.carousel.min.js'))}}\"></script>

<!-- Template Javascript -->
<script src=\"{{ absolute_url(asset('assets/front/js/main.js'))}}\"></script>
<script>
    const NotificationsPath = \"{{ path('app_notification') }}\"
    const notificationSpan = document.querySelector('#notification-number');
    const notificationContent = document.querySelector('#notification-content');
     (async function (){
       await fetch(NotificationsPath).then(data=>{

            return data.json()
        }).then(d=>{
            if(d.status!==400){
                notificationContent.innerHTML = d.data
                notificationSpan.innerHTML = d.notification
            }
            else{
                return null
            }
        })
    })()
</script>
{% block scripts %}
{% endblock %}
</body>

</html>", "front/base.html.twig", "/Users/hassan/Downloads/test/templates/front/base.html.twig");
    }
}
