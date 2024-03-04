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

/* back/reclamations/list.html.twig */
class __TwigTemplate_deb51f64ff46b8b56470c94ecf912731 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/reclamations/list.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/reclamations/list.html.twig", 1);
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
                    <li class=\"breadcrumb-item\">reclamation</li>
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
                                        author
                                    </th>
                                    <th>
                                        type
                                    </th>
                                    <th>body</th>
                                    <th>responded</th>
                                </thead>
                                <tbody>
                                ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reclamations"]) || array_key_exists("reclamations", $context) ? $context["reclamations"] : (function () { throw new RuntimeError('Variable "reclamations" does not exist.', 39, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 40
            echo "                                    <tr>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "author", [], "any", false, false, false, 41), "lastname", [], "any", false, false, false, 41), "html", null, true);
            echo "</td>
                                        <td>";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "getType", [], "method", false, false, false, 42), "html", null, true);
            echo "</td>

                                        <td>";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "message", [], "any", false, false, false, 44), "html", null, true);
            echo "</td>
                                        ";
            // line 45
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "reclamationResponses", [], "any", false, false, false, 45)) == 0)) {
                // line 46
                echo "                                            <td><a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_response_create", ["reclamation_id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 46)]), "html", null, true);
                echo "\">    <i class=\"fa fa-plus\"></i> </a></td>
                                        ";
            } else {
                // line 48
                echo "                                            <td><a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_response_update", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "getResponse", [], "method", false, false, false, 48), "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\"> <i class=\"fas fa-edit\"></i></a> </td>
                                            ";
            }
            // line 50
            echo "

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
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
        return "back/reclamations/list.html.twig";
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
        return array (  142 => 54,  133 => 50,  127 => 48,  121 => 46,  119 => 45,  115 => 44,  110 => 42,  104 => 41,  101 => 40,  97 => 39,  59 => 3,  52 => 2,  35 => 1,);
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
                    <li class=\"breadcrumb-item\">reclamation</li>
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
                                        author
                                    </th>
                                    <th>
                                        type
                                    </th>
                                    <th>body</th>
                                    <th>responded</th>
                                </thead>
                                <tbody>
                                {% for r in reclamations %}
                                    <tr>
                                        <td>{{ r.author.firstname }} {{ r.author.lastname }}</td>
                                        <td>{{ r.getType() }}</td>

                                        <td>{{ r.message }}</td>
                                        {% if (r.reclamationResponses | length)==0 %}
                                            <td><a class=\"btn btn-success\" href=\"{{ path('app_admin_response_create',{reclamation_id:r.id}) }}\">    <i class=\"fa fa-plus\"></i> </a></td>
                                        {% else %}
                                            <td><a href=\"{{ path('app_admin_response_update',{id:r.getResponse().id}) }}\"> <i class=\"fas fa-edit\"></i></a> </td>
                                            {% endif %}


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
", "back/reclamations/list.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\back\\reclamations\\list.html.twig");
    }
}
