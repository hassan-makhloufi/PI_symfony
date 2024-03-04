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

/* front/profile/reclamations/reclamations.html.twig */
class __TwigTemplate_975edc0ece27fa0fe3f881ade80a0c5d extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/reclamations/reclamations.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/reclamations/reclamations.html.twig", 1);
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
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 4, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 5
            echo "
        <div style=\"  padding: 16px;
    box-shadow: 0 2px 4px #d8e1e8;
    border-radius: 3px;
    color: #121c42;
    background-color: #fff;\" >
            <div style=\"display: flex;gap: 10px;align-items: center\">
                <div style=\" color: black;\">           Reclamation on a  <a href=\"";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "link", [], "any", false, false, false, 12), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "getType", [], "method", false, false, false, 12), "html", null, true);
            echo " </a></div>
                <a style=\"color: #dc3545\"  href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\"> <i class=\"fa fa-trash\"></i>  </a>
                <a style=\"border: none;color: green\" class=\"edit-button\" id=\"reclamation-edit-btn-";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 14), "html", null, true);
            echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <input id=\"reclamation-edit-input-";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "message", [], "any", false, false, false, 17), "html", null, true);
            echo "\">
            </div>
            ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "message", [], "any", false, false, false, 19), "html", null, true);
            echo "
            ";
            // line 20
            if (twig_get_attribute($this->env, $this->source, $context["r"], "getResponse", [], "method", false, false, false, 20)) {
                // line 21
                echo "                <input type=\"hidden\" id=\"response-input-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 21), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getResponse", [], "method", false, false, false, 21), "message", [], "any", false, false, false, 21), "html", null, true);
                echo "\">
                <a class=\"response-button\" id='response-btn-";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 22), "html", null, true);
                echo "' data-bs-toggle=\"modal\" data-bs-target=\"#response-modal\"> check response</a>
            ";
            }
            // line 24
            echo "        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/reclamations/reclamations.html.twig";
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
        return array (  114 => 24,  109 => 22,  102 => 21,  100 => 20,  96 => 19,  89 => 17,  83 => 14,  79 => 13,  73 => 12,  64 => 5,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}

{% block tabcontent %}
    {% for r in reclamations %}

        <div style=\"  padding: 16px;
    box-shadow: 0 2px 4px #d8e1e8;
    border-radius: 3px;
    color: #121c42;
    background-color: #fff;\" >
            <div style=\"display: flex;gap: 10px;align-items: center\">
                <div style=\" color: black;\">           Reclamation on a  <a href=\"{{ r.link }}\"> {{ r.getType() }} </a></div>
                <a style=\"color: #dc3545\"  href=\"{{ path('app_reclamation_delete',{'id':r.id}) }}\"> <i class=\"fa fa-trash\"></i>  </a>
                <a style=\"border: none;color: green\" class=\"edit-button\" id=\"reclamation-edit-btn-{{ r.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                    <i class=\"fas fa-edit\"></i>
                </a>
                <input id=\"reclamation-edit-input-{{ r.id }}\" type=\"hidden\" value=\"{{ r.message }}\">
            </div>
            {{ r.message }}
            {% if r.getResponse() %}
                <input type=\"hidden\" id=\"response-input-{{ r.id }}\" value=\"{{ r.getResponse().message }}\">
                <a class=\"response-button\" id='response-btn-{{ r.id }}' data-bs-toggle=\"modal\" data-bs-target=\"#response-modal\"> check response</a>
            {% endif %}
        </div>
    {% endfor %}
{% endblock %}", "front/profile/reclamations/reclamations.html.twig", "/Users/hassan/Downloads/app-2/templates/front/profile/reclamations/reclamations.html.twig");
    }
}
