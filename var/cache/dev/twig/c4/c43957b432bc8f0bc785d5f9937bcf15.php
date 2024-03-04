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

/* front/profile/livraison/livraison-lines.html.twig */
class __TwigTemplate_b7519e5e6a14382c81ed6badd77ecaa1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/livraison/livraison-lines.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/livraison/livraison-lines.html.twig", 1);
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
        if ((twig_length_filter($this->env, (isset($context["livraison_lines"]) || array_key_exists("livraison_lines", $context) ? $context["livraison_lines"] : (function () { throw new RuntimeError('Variable "livraison_lines" does not exist.', 4, $this->source); })())) > 0)) {
            // line 5
            echo "    <div class=\"page-content\">
        <div id=\"location-text\" style=\"display: none\" > your products will be shipped to <p id=\"exact-location\" style=\"color: black;font-weight: 700\"> Tunisia</p> </div>
        <a id=\"ship\" style=\"display: none\" class=\"btn btn-primary\">
            ship
        </a>
        <div class=\"livraisons\">
            ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["livraison_lines"]) || array_key_exists("livraison_lines", $context) ? $context["livraison_lines"] : (function () { throw new RuntimeError('Variable "livraison_lines" does not exist.', 11, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
                // line 12
                echo "                <div class=\"livraison-card\">
                    <img src=\"";
                // line 13
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "getProduct", [], "method", false, false, false, 13), "image", [], "any", false, false, false, 13))), "html", null, true);
                echo "\" alt=\"\" >
                    <div class=\"quantity\"> <p>X";
                // line 14
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "getQuantity", [], "method", false, false, false, 14), "html", null, true);
                echo "</p></div>
                    <div class=\"ship\">
                        <i class=\"fas fa-shipping-fast\"></i>

                    </div>
                    <div class=\"action\">
                        <a href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_lines_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 20)]), "html", null, true);
                echo "\">
                            <i class=\"fa fa-times text-danger\"></i>
                        </a>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "

        </div>

    </div>
    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#location-modal\">
        specify location
    </button>
";
        } else {
        }
        // line 36
        echo "   <div class=\"page-content\">
       <p> you have no shipping lines</p>
   </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/livraison/livraison-lines.html.twig";
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
        return array (  113 => 36,  101 => 26,  89 => 20,  80 => 14,  76 => 13,  73 => 12,  69 => 11,  61 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}

{% block tabcontent %}
{% if livraison_lines|length > 0 %}
    <div class=\"page-content\">
        <div id=\"location-text\" style=\"display: none\" > your products will be shipped to <p id=\"exact-location\" style=\"color: black;font-weight: 700\"> Tunisia</p> </div>
        <a id=\"ship\" style=\"display: none\" class=\"btn btn-primary\">
            ship
        </a>
        <div class=\"livraisons\">
            {% for l in livraison_lines %}
                <div class=\"livraison-card\">
                    <img src=\"{{ absolute_url(asset(l.getProduct().image)) }}\" alt=\"\" >
                    <div class=\"quantity\"> <p>X{{ l.getQuantity() }}</p></div>
                    <div class=\"ship\">
                        <i class=\"fas fa-shipping-fast\"></i>

                    </div>
                    <div class=\"action\">
                        <a href=\"{{ path('app_livraison_lines_delete',{id:l.id}) }}\">
                            <i class=\"fa fa-times text-danger\"></i>
                        </a>
                    </div>
                </div>
            {% endfor %}


        </div>

    </div>
    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#location-modal\">
        specify location
    </button>
{%else  %}
{% endif %}
   <div class=\"page-content\">
       <p> you have no shipping lines</p>
   </div>

{% endblock %}", "front/profile/livraison/livraison-lines.html.twig", "/Users/hassan/Downloads/app-2/templates/front/profile/livraison/livraison-lines.html.twig");
    }
}
