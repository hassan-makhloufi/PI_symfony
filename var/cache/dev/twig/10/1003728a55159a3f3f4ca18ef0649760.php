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

/* back/categories/list.html.twig */
class __TwigTemplate_db6b8bc23303b5d3b323cd1cc39563f5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/categories/list.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/categories/list.html.twig", 1);
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
        echo "<main id=\"main\" class=\"main\">

    <div class=\"pagetitle\">
        <h1>categories</h1>
        <nav>
            <ol class=\"breadcrumb\">
                <li class=\"breadcrumb-item\"><a href=\"index.html\">admin</a></li>
                <li class=\"breadcrumb-item\">categories</li>
                <li class=\"breadcrumb-item active\">list</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Categories</h5>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    <b>N</b>ame
                                </th>
                                <th>short_desc</th>
                                <th>parent</th>
                                      </tr>
                            <th>update</th>
                            </tr>
                            <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 44
            echo "                            <tr>
                                <td>";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 45), "html", null, true);
            echo "</td>
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 46), "html", null, true);
            echo "</td>
                                <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "shortDescription", [], "any", false, false, false, 47), "html", null, true);
            echo "</td>
                                <td>";
            // line 48
            if (twig_get_attribute($this->env, $this->source, $context["c"], "parent", [], "any", false, false, false, 48)) {
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "parent", [], "any", false, false, false, 48), "name", [], "any", false, false, false, 48), "html", null, true);
                echo " ";
            } else {
                echo " without parent ";
            }
            echo "</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"";
            // line 50
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories_update", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 50)]), "html", null, true);
            echo "\"><i class=\"fas fa-edit\"></i></a>
                                </td>
                                <td>
                                    <a class=\"btn btn-danger\" href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_categories_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 53)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>
                                </td>

                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                            </tbody>
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
        return "back/categories/list.html.twig";
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
        return array (  148 => 58,  137 => 53,  131 => 50,  120 => 48,  116 => 47,  112 => 46,  108 => 45,  105 => 44,  101 => 43,  59 => 3,  52 => 2,  35 => 1,);
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
                <li class=\"breadcrumb-item\">categories</li>
                <li class=\"breadcrumb-item active\">list</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class=\"section\">
        <div class=\"row\">
            <div class=\"col-lg-12\">

                <div class=\"card\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Categories</h5>

                        <!-- Table with stripped rows -->
                        <table class=\"table datatable\">
                            <thead>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    <b>N</b>ame
                                </th>
                                <th>short_desc</th>
                                <th>parent</th>
                                      </tr>
                            <th>update</th>
                            </tr>
                            <th>delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for c in categories %}
                            <tr>
                                <td>{{ c.id }}</td>
                                <td>{{ c.name }}</td>
                                <td>{{ c.shortDescription }}</td>
                                <td>{% if c.parent %} {{ c.parent.name}} {% else  %} without parent {% endif %}</td>
                                <td>
                                    <a class=\"btn btn-success\" href=\"{{ path('app_admin_categories_update',{id:c.id}) }}\"><i class=\"fas fa-edit\"></i></a>
                                </td>
                                <td>
                                    <a class=\"btn btn-danger\" href=\"{{ path('app_admin_categories_delete',{id:c.id}) }}\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>
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
", "back/categories/list.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\back\\categories\\list.html.twig");
    }
}
