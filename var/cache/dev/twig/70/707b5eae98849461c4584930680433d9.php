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

/* back/livraison/list.html.twig */
class __TwigTemplate_797285ff1df597186a53f778b0cac4a0 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/livraison/list.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/livraison/list.html.twig", 1);
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
            <h1>Livraison</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">admin</a></li>
                    <li class=\"breadcrumb-item\">shipping</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Shipping</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        State
                                    </th>
                                    <td>
                                        User
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <th>Shipping State</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["livraisons"]) || array_key_exists("livraisons", $context) ? $context["livraisons"] : (function () { throw new RuntimeError('Variable "livraisons" does not exist.', 45, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 46
            echo "                                    <tr>
                                        <td>";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "country", [], "any", false, false, false, 47), "html", null, true);
            echo " </td>
                                        <td>";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "state", [], "any", false, false, false, 48), "html", null, true);
            echo " </td>
                                        <td>";
            // line 49
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "adder", [], "any", false, false, false, 49), "firstname", [], "any", false, false, false, 49), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "adder", [], "any", false, false, false, 49), "lastname", [], "any", false, false, false, 49), "html", null, true);
            echo "  </td>

                                        <td>";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["r"], "adder", [], "any", false, false, false, 51), "email", [], "any", false, false, false, 51), "html", null, true);
            echo "</td>

                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 53), "html", null, true);
            echo "</td>
                                        ";
            // line 54
            if ((twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 54) == "en attente")) {
                // line 55
                echo "                                            <td>
                                                <div style=\"display: flex;gap: 5px\">
                                                    <a class=\"btn btn-success\" href=\"";
                // line 57
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_livraison_update", ["state" => "shipped", "id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 57)]), "html", null, true);
                echo "\">    <i class=\"fa fa-check\"></i> </a>
                                                    <a class=\"btn\" href=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_livraison_update", ["state" => "declined", "id" => twig_get_attribute($this->env, $this->source, $context["r"], "id", [], "any", false, false, false, 58)]), "html", null, true);
                echo "\">    <i class=\"fa fa-times text-danger\"></i> </a>

                                                </div>
                                            </td>
                                        ";
            } else {
                // line 63
                echo "                                            <td>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["r"], "etat", [], "any", false, false, false, 63), "html", null, true);
                echo "</td>
                                        ";
            }
            // line 65
            echo "

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
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
        return "back/livraison/list.html.twig";
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
        return array (  167 => 69,  158 => 65,  152 => 63,  144 => 58,  140 => 57,  136 => 55,  134 => 54,  130 => 53,  125 => 51,  118 => 49,  114 => 48,  110 => 47,  107 => 46,  103 => 45,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'back/base.html.twig' %}
{% block contents%}
    <main id=\"main\" class=\"main\">

        <div class=\"pagetitle\">
            <h1>Livraison</h1>
            <nav>
                <ol class=\"breadcrumb\">
                    <li class=\"breadcrumb-item\"><a href=\"index.html\">admin</a></li>
                    <li class=\"breadcrumb-item\">shipping</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Shipping</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        Country
                                    </th>
                                    <th>
                                        State
                                    </th>
                                    <td>
                                        User
                                    </td>
                                    <td>
                                        Email
                                    </td>
                                    <th>Shipping State</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                {% for r in livraisons %}
                                    <tr>
                                        <td>{{ r.country }} </td>
                                        <td>{{ r.state }} </td>
                                        <td>{{ r.adder.firstname }} {{ r.adder.lastname }}  </td>

                                        <td>{{ r.adder.email }}</td>

                                        <td>{{ r.etat }}</td>
                                        {% if r.etat =='en attente'%}
                                            <td>
                                                <div style=\"display: flex;gap: 5px\">
                                                    <a class=\"btn btn-success\" href=\"{{ path('app_admin_livraison_update',{state:'shipped',id:r.id}) }}\">    <i class=\"fa fa-check\"></i> </a>
                                                    <a class=\"btn\" href=\"{{ path('app_admin_livraison_update',{state:'declined',id:r.id}) }}\">    <i class=\"fa fa-times text-danger\"></i> </a>

                                                </div>
                                            </td>
                                        {% else %}
                                            <td>{{ r.etat }}</td>
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
", "back/livraison/list.html.twig", "/Users/hassan/Downloads/app-2/templates/back/livraison/list.html.twig");
    }
}
