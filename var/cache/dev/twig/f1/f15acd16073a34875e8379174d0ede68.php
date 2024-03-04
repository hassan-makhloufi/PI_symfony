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

/* back/products/list.html.twig */
class __TwigTemplate_4c147174dfb9b473ac96534e1fb48a45 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'contents' => [$this, 'block_contents'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/products/list.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/products/list.html.twig", 1);
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
        echo "    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>categories</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">admin</a></li>
                    <li class=\"breadcrumb-item\">products</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Products</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        name
                                    </th>
                                    <th>quantity</th>
                                    <th>category</th>
                                    <th>belongs To</th>
                                    <th> delete </th>
                                </thead>
                                <tbody>
                                ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 39
            echo "                                    <tr>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "quanity", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>

                                        <td>";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "category", [], "any", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
            echo "</td>
                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "adder", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>

                                        <td>
                                            ";
            // line 47
            if (twig_get_attribute($this->env, $this->source, $context["c"], "isDeletable", [], "any", false, false, false, 47)) {
                // line 48
                echo "                                                <a class=\"btn btn-danger\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_products_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>

                                            ";
            } else {
                // line 51
                echo "                                                undeletable
                                            ";
            }
            // line 53
            echo "                                            <a class=\"btn btn-success\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_product_update", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a>

                                        </td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 59
        echo "                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "back/products/list.html.twig";
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
        return array (  148 => 59,  135 => 53,  131 => 51,  124 => 48,  122 => 47,  116 => 44,  112 => 43,  107 => 41,  103 => 40,  100 => 39,  96 => 38,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
{% block contents%}
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>categories</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">admin</a></li>
                    <li class=\"breadcrumb-item\">products</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Products</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        name
                                    </th>
                                    <th>quantity</th>
                                    <th>category</th>
                                    <th>belongs To</th>
                                    <th> delete </th>
                                </thead>
                                <tbody>
                                {% for c in products %}
                                    <tr>
                                        <td>{{ c.name }}</td>
                                        <td>{{ c.quanity }}</td>

                                        <td>{{ c.category.name }}</td>
                                        <td>{{ c.adder.firstname }}</td>

                                        <td>
                                            {% if c.isDeletable %}
                                                <a class=\"btn btn-danger\" href=\"{{ path('app_admin_products_delete',{id:c.id}) }}\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>

                                            {% else  %}
                                                undeletable
                                            {% endif %}
                                            <a class=\"btn btn-success\" href=\"{{ path('app_admin_product_update',{id:c.id}) }}\"><i class=\"fa fa-edit\" aria-hidden=\"true\"></i> </a>

                                        </td>

                                    </tr>
                                {% endfor %}
                                </tbody>
                            </table>
                            <!-- End Table with stripped rows -->

                        </div>
                    </div>

                </div>
            </div>
        </section>

    </main><!-- End #main -->
{% endblock %}
", "back/products/list.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\back\\products\\list.html.twig");
    }
}
