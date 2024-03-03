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

/* front/home/contact.html.twig */
class __TwigTemplate_e1cbe92c2c4b61675bb9e852a44dd6f3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/contact.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/contact.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <!-- Modal Search Start -->

    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Contact</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Contact Start -->
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Get in touch</h1>
                            <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\"
                                    style=\"height: 400px;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd\"
                                    loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <form action=\"\" class=\"\">
                            <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Your Name\">
                            <input type=\"email\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Enter Your Email\">
                            <textarea class=\"w-100 form-control border-0 mb-4\" rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                        </form>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Address</h4>
                                <p class=\"mb-2\">123 Street New York.USA</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class=\"mb-2\">info@example.com</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">(+012) 3456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/contact.html.twig";
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
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
    <!-- Modal Search Start -->

    <!-- Modal Search End -->


    <!-- Single Page Header start -->
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Contact</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Contact</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Contact Start -->
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"p-5 bg-light rounded\">
                <div class=\"row g-4\">
                    <div class=\"col-12\">
                        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                            <h1 class=\"text-primary\">Get in touch</h1>
                            <p class=\"mb-4\">The contact form is currently inactive. Get a functional and working contact form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a href=\"https://htmlcodex.com/contact-form\">Download Now</a>.</p>
                        </div>
                    </div>
                    <div class=\"col-lg-12\">
                        <div class=\"h-100 rounded\">
                            <iframe class=\"rounded w-100\"
                                    style=\"height: 400px;\" src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd\"
                                    loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>
                        </div>
                    </div>
                    <div class=\"col-lg-7\">
                        <form action=\"\" class=\"\">
                            <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Your Name\">
                            <input type=\"email\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"Enter Your Email\">
                            <textarea class=\"w-100 form-control border-0 mb-4\" rows=\"5\" cols=\"10\" placeholder=\"Your Message\"></textarea>
                            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>
                        </form>
                    </div>
                    <div class=\"col-lg-5\">
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-map-marker-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Address</h4>
                                <p class=\"mb-2\">123 Street New York.USA</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded mb-4 bg-white\">
                            <i class=\"fas fa-envelope fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Mail Us</h4>
                                <p class=\"mb-2\">info@example.com</p>
                            </div>
                        </div>
                        <div class=\"d-flex p-4 rounded bg-white\">
                            <i class=\"fa fa-phone-alt fa-2x text-primary me-4\"></i>
                            <div>
                                <h4>Telephone</h4>
                                <p class=\"mb-2\">(+012) 3456 7890</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}", "front/home/contact.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\contact.html.twig");
    }
}
