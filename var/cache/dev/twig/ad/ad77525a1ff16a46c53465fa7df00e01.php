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

/* back/products/add.html.twig */
class __TwigTemplate_7b9e9b5ef08a98f5e2cf0803a9842735 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "back/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/products/add.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/products/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_contents($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 3
        echo "
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Update</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Products</li>
                    <li class=\"breadcrumb-item active\">Edit </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">







            <div class=\"card\">
                <div class=\"card-body\">

                    <!-- General Form Elements -->
                    ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">name</label>
                        <div class=\"col-sm-10\">
                            <input  value=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "name", [], "any", false, false, false, 33)), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\"> short description</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "short_description", [], "any", false, false, false, 39)), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "short_description", [], "any", false, false, false, 39)), "html", null, true);
        echo "\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">long description</label>
                        <div class=\"col-sm-10\">
                            <input value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "long_description", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "long_description", [], "any", false, false, false, 45)), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">long description</label>
                        <div class=\"col-sm-10\">
                            <input value=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quanity", [], "any", false, false, false, 51)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "quanity", [], "any", false, false, false, 51)), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">product category</label>
                        <div class=\"col-sm-10\">
                            ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "category", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-select"]]);
        echo "
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">Edit Product</button>
                    </div>
                    ";
        // line 65
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 72
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 73
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/products/add.html.twig";
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
        return array (  171 => 73,  164 => 72,  150 => 65,  139 => 57,  128 => 51,  117 => 45,  106 => 39,  95 => 33,  88 => 29,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
{% block contents %}

    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Update</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">Products</li>
                    <li class=\"breadcrumb-item active\">Edit </li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">







            <div class=\"card\">
                <div class=\"card-body\">

                    <!-- General Form Elements -->
                    {{ form_start(form) }}
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">name</label>
                        <div class=\"col-sm-10\">
                            <input  value=\"{{ field_value(form.name) }}\" name=\"{{ field_name(form.name) }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\"> short description</label>
                        <div class=\"col-sm-10\">
                            <input type=\"text\" name=\"{{ field_name(form.short_description) }}\" value=\"{{ field_value(form.short_description) }}\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">long description</label>
                        <div class=\"col-sm-10\">
                            <input value=\"{{ field_value(form.long_description) }}\" name=\"{{ field_name(form.long_description) }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">long description</label>
                        <div class=\"col-sm-10\">
                            <input value=\"{{ field_value(form.quanity) }}\" name=\"{{ field_name(form.quanity) }}\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">product category</label>
                        <div class=\"col-sm-10\">
                            {{ form_widget(form.category, {'attr': {'class': 'form-select'}}) }}
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">Edit Product</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>

        </section>
    </main>
{% endblock %}
{% block scripts  %}

{% endblock %}", "back/products/add.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\back\\products\\add.html.twig");
    }
}
