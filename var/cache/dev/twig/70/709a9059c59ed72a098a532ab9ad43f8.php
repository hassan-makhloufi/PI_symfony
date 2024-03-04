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

/* back/forumCategory/add.html.twig */
class __TwigTemplate_4b205b1871ea107a8082bf94723ac31e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/forumCategory/add.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/forumCategory/add.html.twig", 1);
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
        echo "    ";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()) && ((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 3, $this->source); })()) == "update"))) {
            // line 4
            echo "        ";
            $context["pageName"] = "Update";
            // line 5
            echo "    ";
        } else {
            // line 6
            echo "        ";
            $context["pageName"] = "Add";
            // line 7
            echo "    ";
        }
        // line 8
        echo "    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">forumCategory</li>
                    <li class=\"breadcrumb-item active\">";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">







            <div class=\"card\">
                <div class=\"card-body\">

                    <!-- General Form Elements -->
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), 'form_start');
        echo "
                    <div class=\"row mb-3\">
                        <label for=\"inputText\" class=\"col-sm-2 col-form-label\">name</label>
                        <div class=\"col-sm-10\">
                            <input  value=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldValue(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37)), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "name", [], "any", false, false, false, 37)), "html", null, true);
        echo "\" type=\"text\" class=\"form-control\">
                        </div>
                    </div>


                    <div class=\"row mb-3\">
                        <button type=\"submit\" class=\"btn btn-primary\">";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["pageName"]) || array_key_exists("pageName", $context) ? $context["pageName"] : (function () { throw new RuntimeError('Variable "pageName" does not exist.', 43, $this->source); })()), "html", null, true);
        echo " Forum Category</button>
                    </div>
                    ";
        // line 45
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

        </section>
    </main>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 52
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 53
        echo "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/forumCategory/add.html.twig";
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
        return array (  152 => 53,  145 => 52,  131 => 45,  126 => 43,  115 => 37,  108 => 33,  88 => 16,  80 => 11,  75 => 8,  72 => 7,  69 => 6,  66 => 5,  63 => 4,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
{% block contents %}
    {% if action and action=='update' %}
        {% set pageName ='Update' %}
    {% else  %}
        {% set pageName ='Add' %}
    {% endif %}
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>{{ pageName }}</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">Home</a></li>
                    <li class=\"breadcrumb-item\">forumCategory</li>
                    <li class=\"breadcrumb-item active\">{{ pageName }}</li>
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
                        <button type=\"submit\" class=\"btn btn-primary\">{{ pageName }} Forum Category</button>
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>

        </section>
    </main>
{% endblock %}
{% block scripts  %}

{% endblock %}", "back/forumCategory/add.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\back\\forumCategory\\add.html.twig");
    }
}