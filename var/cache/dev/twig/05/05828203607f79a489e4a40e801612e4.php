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

/* front/profile/update_profile.html.twig */
class __TwigTemplate_2f790c89d1061ab21de96ede1a02db8e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'tabcontent' => [$this, 'block_tabcontent'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/profile/profile_base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/update_profile.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/update_profile.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_tabcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabcontent"));

        // line 3
        echo "    <div id=\"tab-3\" class=\"tab-pane fade show p-0 active\">
        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
            <h1> Update Profile</h1>

        </div>
        ";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start');
        echo "


        <input type=\"text\" name=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "email", [], "any", false, false, false, 11)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "email", [], "any", false, false, false, 11), "html", null, true);
        echo "\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"email ...\">
        <input type=\"text\" name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "firstname", [], "any", false, false, false, 12)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "firstname", [], "any", false, false, false, 12), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"firstname ...\">
        <input type=\"text\" name=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), "lastname", [], "any", false, false, false, 13)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "lastname", [], "any", false, false, false, 13), "html", null, true);
        echo "\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"lastname ...\">

        <!--<form action=\"\" class=\"\">

            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

        </form>-->
        <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

        ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/update_profile.html.twig";
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
        return array (  98 => 22,  84 => 13,  78 => 12,  72 => 11,  66 => 8,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}
{% block tabcontent %}
    <div id=\"tab-3\" class=\"tab-pane fade show p-0 active\">
        <div class=\"text-center mx-auto\" style=\"max-width: 700px;\">
            <h1> Update Profile</h1>

        </div>
        {{ form_start(form) }}


        <input type=\"text\" name=\"{{ field_name(form.email) }}\" value=\"{{ app.user.email }}\"  class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"email ...\">
        <input type=\"text\" name=\"{{ field_name(form.firstname) }}\" value=\"{{ app.user.firstname }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"firstname ...\">
        <input type=\"text\" name=\"{{ field_name(form.lastname) }}\" value=\"{{ app.user.lastname }}\" class=\"w-100 form-control border-0 py-3 mb-4\" placeholder=\"lastname ...\">

        <!--<form action=\"\" class=\"\">

            <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

        </form>-->
        <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">Submit</button>

        {{ form_end(form) }}

    </div>
{% endblock %}", "front/profile/update_profile.html.twig", "/Users/hassan/Downloads/app/templates/front/profile/update_profile.html.twig");
    }
}
