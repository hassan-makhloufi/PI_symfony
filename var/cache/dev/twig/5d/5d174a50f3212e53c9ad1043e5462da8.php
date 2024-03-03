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

/* front/home/register.html.twig */
class __TwigTemplate_62edf617454267d153f716a4c3739716 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/register.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/register.html.twig", 1);
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
        echo "    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                <h1> register</h1>

            </div>
            ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 9, $this->source); })()), 'form_start');
        echo "
            <h6> errors:</h6>

            <input type=\"text\" name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "email", [], "any", false, false, false, 12)), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"email ...\">
            <input type=\"text\" name=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "firstname", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"firstname ...\">
            <input type=\"text\" name=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "lastname", [], "any", false, false, false, 14)), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"lastname ...\">
            <input type=\"password\" name=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "password", [], "any", false, false, false, 15)), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"password ...\">
            <input type=\"password\" name=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "confirmPassword", [], "any", false, false, false, 16)), "html", null, true);
        echo "\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"confirm password ...\">

            <!--<form action=\"\" class=\"\">

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            </form>-->
            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            ";
        // line 25
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_end');
        echo "

        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 30
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 31
        echo "    <script >
        let errors = '";
        // line 32
        echo twig_escape_filter($this->env, twig_join_filter((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new RuntimeError('Variable "errors" does not exist.', 32, $this->source); })()), ","), "html", null, true);
        echo "'

        if(errors){
            console.log(errors)
        }

    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/register.html.twig";
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
        return array (  124 => 32,  121 => 31,  114 => 30,  102 => 25,  90 => 16,  86 => 15,  82 => 14,  78 => 13,  74 => 12,  68 => 9,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
    <div class=\"container-fluid py-5 mb-5 hero-header\">
        <div class=\"container py-5\">
            <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
                <h1> register</h1>

            </div>
            {{ form_start(form) }}
            <h6> errors:</h6>

            <input type=\"text\" name=\"{{ field_name(form.email) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"email ...\">
            <input type=\"text\" name=\"{{ field_name(form.firstname) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"firstname ...\">
            <input type=\"text\" name=\"{{ field_name(form.lastname) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"lastname ...\">
            <input type=\"password\" name=\"{{ field_name(form.password) }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"password ...\">
            <input type=\"password\" name=\"{{ field_name(form.confirmPassword) }}\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"confirm password ...\">

            <!--<form action=\"\" class=\"\">

                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            </form>-->
            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

            {{ form_end(form) }}

        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script >
        let errors = '{{ errors |join(',') }}'

        if(errors){
            console.log(errors)
        }

    </script>
{% endblock %}", "front/home/register.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\register.html.twig");
    }
}
