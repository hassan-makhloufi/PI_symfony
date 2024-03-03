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
class __TwigTemplate_7da48eaf9e9035a93b28f0d09fa57892 extends Template
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
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
    <link href=\"https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap\" rel=\"stylesheet\">

    <!-- Icon Font Stylesheet -->
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.15.4/css/all.css\"/>
    <link href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css\" rel=\"stylesheet\">

    <!-- Libraries Stylesheet -->

    <!-- Libraries Stylesheet -->
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/lightbox/css/lightbox.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/owlcarousel/assets/owl.carousel.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">


    <!-- Customized Bootstrap Stylesheet -->
    <link href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/bootstrap.min.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

    <!-- Template Stylesheet -->
    <link href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/style.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">
    ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
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
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">contact@project.tn</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"index.html\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Project</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"";
        // line 67
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        echo "\" class=\" nav-item nav-link ";
        if (((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 67, $this->source); })()) == "home")) {
            echo " active ";
        }
        echo "\">Home</a>
                    <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products");
        echo "\" class=\"nav-item nav-link ";
        if (((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 68, $this->source); })()) == "products")) {
            echo " active ";
        }
        echo "\">Shop</a>
                    ";
        // line 69
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69)) {
            // line 70
            echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">profile</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"";
            // line 73
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products");
            echo "\" class=\"dropdown-item\">My products</a>
                                <a href=\"";
            // line 74
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades");
            echo "\" class=\"dropdown-item\">My trades</a>
                                <a href=\"";
            // line 75
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_appointments");
            echo "\" class=\"dropdown-item\">My Appointments</a>
                                <a href=\"";
            // line 76
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
            echo "\" class=\"dropdown-item\">Update Profile</a>

                            </div>
                        </div>
                    ";
        } else {
            // line 81
            echo "                        <div class=\"nav-item dropdown\">
                            <a href=\"#\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">account</a>
                            <div class=\"dropdown-menu m-0 bg-secondary rounded-0\">
                                <a href=\"";
            // line 84
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            echo "\" class=\"dropdown-item\">login</a>
                                <a href=\"";
            // line 85
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            echo "\" class=\"dropdown-item\">register</a>
                            </div>
                        </div>
                    ";
        }
        // line 89
        echo "
                    <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        echo "\" class=\"nav-item nav-link ";
        if (((isset($context["nav_bar_active"]) || array_key_exists("nav_bar_active", $context) ? $context["nav_bar_active"] : (function () { throw new RuntimeError('Variable "nav_bar_active" does not exist.', 90, $this->source); })()) == "contact")) {
            echo " active ";
        }
        echo "\">Contact</a>


                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>

                    ";
        // line 97
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 97, $this->source); })()), "user", [], "any", false, false, false, 97)) {
            // line 98
            echo "                    <a  href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products");
            echo "\" class=\"my-auto\">
                        <i class=\"fa fa-user fa-2x\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        }
        // line 102
        echo "                </div>
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
";
        // line 123
        if ((array_key_exists("active", $context) && ((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 123, $this->source); })()) == "my_products"))) {
            // line 124
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
            // line 138
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 138, $this->source); })()), 'form_start');
            echo "


                <input type=\"text\" name=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141)), "html", null, true);
            echo "\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"product name ...\">
                <input type=\"text\" name=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "short_description", [], "any", false, false, false, 142)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 142, $this->source); })()), "short_description", [], "any", false, false, false, 142)), "html", null, true);
            echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"short description ...\">
                <input type=\"text\" name=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "long_description", [], "any", false, false, false, 143)), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "long_description", [], "any", false, false, false, 143)), "html", null, true);
            echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"long description ...\">
                ";
            // line 144
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "category", [], "any", false, false, false, 144), 'widget', ["attr" => ["class" => "w-100 form-control border-0 py-3 mb-4"]]);
            echo "
                ";
            // line 145
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), "image", [], "any", false, false, false, 145), 'widget');
            echo "

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                ";
            // line 149
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), 'form_end');
            echo "

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
            </div>
        </div>
    </div>
</div>
";
        }
        // line 160
        $this->displayBlock('content', $context, $blocks);
        // line 163
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
                    <p>Email: contact@project.com</p>
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



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/easing/easing.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/waypoints/waypoints.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/lightbox/js/lightbox.min.js")), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/lib/owlcarousel/owl.carousel.min.js")), "html", null, true);
        echo "\"></script>

<!-- Template Javascript -->
<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/js/main.js")), "html", null, true);
        echo "\"></script>
";
        // line 260
        $this->displayBlock('scripts', $context, $blocks);
        // line 262
        echo "</body>

</html>";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 32
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 33
        echo "
    ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 160
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 161
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 260
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
        return array (  457 => 260,  449 => 161,  442 => 160,  434 => 33,  427 => 32,  418 => 262,  416 => 260,  412 => 259,  406 => 256,  402 => 255,  398 => 254,  394 => 253,  302 => 163,  300 => 160,  286 => 149,  279 => 145,  275 => 144,  269 => 143,  263 => 142,  257 => 141,  251 => 138,  235 => 124,  233 => 123,  210 => 102,  202 => 98,  200 => 97,  186 => 90,  183 => 89,  176 => 85,  172 => 84,  167 => 81,  159 => 76,  155 => 75,  151 => 74,  147 => 73,  142 => 70,  140 => 69,  132 => 68,  124 => 67,  90 => 35,  88 => 32,  84 => 31,  78 => 28,  71 => 24,  67 => 23,  43 => 1,);
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
                <small class=\"me-3\"><i class=\"fas fa-envelope me-2 text-secondary\"></i><a href=\"#\" class=\"text-white\">contact@project.tn</a></small>
            </div>
            <div class=\"top-link pe-2\">
                <a href=\"#\" class=\"text-white\"><small class=\"text-white ms-2\">Sales and Refunds</small></a>
            </div>
        </div>
    </div>
    <div class=\"container px-0\">
        <nav class=\"navbar navbar-light bg-white navbar-expand-xl\">
            <a href=\"index.html\" class=\"navbar-brand\"><h1 class=\"text-primary display-6\">Project</h1></a>
            <button class=\"navbar-toggler py-2 px-3\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarCollapse\">
                <span class=\"fa fa-bars text-primary\"></span>
            </button>
            <div class=\"collapse navbar-collapse bg-white\" id=\"navbarCollapse\">
                <div class=\"navbar-nav mx-auto\">
                    <a href=\"{{ path('app_home') }}\" class=\" nav-item nav-link {% if nav_bar_active=='home' %} active {% endif %}\">Home</a>
                    <a href=\"{{ path('app_products') }}\" class=\"nav-item nav-link {% if nav_bar_active=='products' %} active {% endif %}\">Shop</a>
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

                    <a href=\"{{ path('app_contact') }}\" class=\"nav-item nav-link {% if nav_bar_active=='contact' %} active {% endif %}\">Contact</a>


                </div>
                <div class=\"d-flex m-3 me-0\">
                    <button class=\"btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4\" data-bs-toggle=\"modal\" data-bs-target=\"#searchModal\"><i class=\"fas fa-search text-primary\"></i></button>

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
                {{ form_widget(form.image) }}

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

                {{ form_end(form) }}

            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">Close</button>
                <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
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
                    <p>Email: contact@project.com</p>
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



<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/easing/easing.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/waypoints/waypoints.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/lightbox/js/lightbox.min.js'))}}\"></script>
<script src=\"{{ absolute_url(asset('assets/front/lib/owlcarousel/owl.carousel.min.js'))}}\"></script>

<!-- Template Javascript -->
<script src=\"{{ absolute_url(asset('assets/front/js/main.js'))}}\"></script>
{% block scripts %}
{% endblock %}
</body>

</html>", "front/base.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\base.html.twig");
    }
}
