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

/* front/home/login.html.twig */
class __TwigTemplate_e3e0c528eaba0b02cfb8267056e5940c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/login.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
            <h1> login</h1>

            </div>
            <form action=\"";
        // line 11
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\" method=\"post\">
                <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" name=\"_username\" placeholder=\"email ...\">
                <input type=\"password\" class=\"w-100 form-control border-0 py-3 mb-4\" name=\"_password\"  placeholder=\"password ...\">
                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            </form>


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
        return "front/home/login.html.twig";
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
        return array (  68 => 11,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}

{% block content %}

    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
            <h1> login</h1>

            </div>
            <form action=\"{{ path('app_login') }}\" method=\"post\">
                <input type=\"text\" class=\"w-100 form-control border-0 py-3 mb-4\" name=\"_username\" placeholder=\"email ...\">
                <input type=\"password\" class=\"w-100 form-control border-0 py-3 mb-4\" name=\"_password\"  placeholder=\"password ...\">
                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            </form>


        </div>
    </div>
{% endblock %}", "front/home/login.html.twig", "/Users/hassan/Downloads/app/templates/front/home/login.html.twig");
    }
}
