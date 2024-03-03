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

/* front/profile/my_products/my_products.html.twig */
class __TwigTemplate_bb5e153428ad1071ea48f5427f377f1c extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/my_products/my_products.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/my_products/my_products.html.twig", 1);
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
        echo "
    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#add-product-modal\">
        add a new product
    </button>

    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
        <div class=\"row g-4\">
            <div class=\"col-lg-12\">
                <div class=\"row g-4\">
                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 12, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 13
            echo "                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                        <div class=\"rounded position-relative fruite-item\">
                            <div class=\"fruite-img\">
                                <img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["c"], "image", [], "any", false, false, false, 16))), "html", null, true);
            echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                            </div>
                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "category", [], "any", false, false, false, 18), "name", [], "any", false, false, false, 18), "html", null, true);
            echo "</div>
                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                <h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 20), "html", null, true);
            echo "</h4>
                                <p>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "longDescription", [], "any", false, false, false, 21), "html", null, true);
            echo "</p>
                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                    <a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 23)]), "html", null, true);
            echo "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-trash me-2 text-primary\"></i> delete product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "
                </div>
            </div>
        </div>
    </div>
   <!-- <div class=\"fab-container\" data-toggle=\"modal\" data-target=\"#exampleModal\">
        <div class=\"fab shadow\">
            <div class=\"fab-content\">
                <i  class=\"fa fa-plus-circle addButton\" aria-hidden=\"true\">

                </i>
            </div>

        </div>
    </div>-->


";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/my_products/my_products.html.twig";
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
        return array (  110 => 29,  98 => 23,  93 => 21,  89 => 20,  84 => 18,  79 => 16,  74 => 13,  70 => 12,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}
{% block tabcontent %}

    <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#add-product-modal\">
        add a new product
    </button>

    <div id=\"tab-1\" class=\"tab-pane fade show p-0 active\">
        <div class=\"row g-4\">
            <div class=\"col-lg-12\">
                <div class=\"row g-4\">
                    {% for c in products %}
                    <div class=\"col-md-6 col-lg-4 col-xl-3\">
                        <div class=\"rounded position-relative fruite-item\">
                            <div class=\"fruite-img\">
                                <img src=\"{{ absolute_url(asset(c.image)) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                            </div>
                            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">{{ c.category.name }}</div>
                            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                <h4>{{ c.name }}</h4>
                                <p>{{ c.longDescription }}</p>
                                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                    <a href=\"{{path('app_profile_products_delete',{id:c.id}) }}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-trash me-2 text-primary\"></i> delete product</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {% endfor %}

                </div>
            </div>
        </div>
    </div>
   <!-- <div class=\"fab-container\" data-toggle=\"modal\" data-target=\"#exampleModal\">
        <div class=\"fab shadow\">
            <div class=\"fab-content\">
                <i  class=\"fa fa-plus-circle addButton\" aria-hidden=\"true\">

                </i>
            </div>

        </div>
    </div>-->


{% endblock %}", "front/profile/my_products/my_products.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\profile\\my_products\\my_products.html.twig");
    }
}
