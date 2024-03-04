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

/* front/profile/livraison/livraisons.html.twig */
class __TwigTemplate_69b32026d555470aacfe8c7b418ec59b extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/livraison/livraisons.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/livraison/livraisons.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_tabcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabcontent"));

        // line 4
        echo "    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

    <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">User</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Country</th>
                <th scope=\"col\">State</th>

                <th scope=\"col\">Address</th>
                <th scope=\"col\">Shipping State</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 21, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 22
            echo "                <tr>
                    <th scope=\"row\">
                        <p class=\"mb-0 mt-4\">";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "adder", [], "any", false, false, false, 24), "firstname", [], "any", false, false, false, 24), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "adder", [], "any", false, false, false, 24), "lastname", [], "any", false, false, false, 24), "html", null, true);
            echo "</p>
                    </th>
                    <th scope=\"row\">
                        <p class=\"mb-0 mt-4\">";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "adder", [], "any", false, false, false, 27), "email", [], "any", false, false, false, 27), "html", null, true);
            echo "</p>
                    </th>
                    <td>
                        <p class=\"mb-0 mt-4\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "country", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">";
            // line 33
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "state", [], "any", false, false, false, 33), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "adress", [], "any", false, false, false, 36), "html", null, true);
            echo "</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "etat", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                    </td>



                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "

            </tbody>
        </table>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/livraison/livraisons.html.twig";
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
        return array (  131 => 46,  118 => 39,  112 => 36,  106 => 33,  100 => 30,  94 => 27,  86 => 24,  82 => 22,  78 => 21,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}

{% block tabcontent %}
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

    <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">User</th>
                <th scope=\"col\">Email</th>
                <th scope=\"col\">Country</th>
                <th scope=\"col\">State</th>

                <th scope=\"col\">Address</th>
                <th scope=\"col\">Shipping State</th>

            </tr>
            </thead>
            <tbody>
            {% for l in livraisons %}
                <tr>
                    <th scope=\"row\">
                        <p class=\"mb-0 mt-4\">{{ l.adder.firstname }} {{ l.adder.lastname }}</p>
                    </th>
                    <th scope=\"row\">
                        <p class=\"mb-0 mt-4\">{{ l.adder.email}}</p>
                    </th>
                    <td>
                        <p class=\"mb-0 mt-4\">{{ l.country }}</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">{{ l.state }}</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">{{ l.adress }}</p>
                    </td>
                    <td>
                        <p class=\"mb-0 mt-4\">{{ l.etat }}</p>
                    </td>



                </tr>
            {% endfor %}


            </tbody>
        </table>
    </div>
{% endblock %}", "front/profile/livraison/livraisons.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\profile\\livraison\\livraisons.html.twig");
    }
}
