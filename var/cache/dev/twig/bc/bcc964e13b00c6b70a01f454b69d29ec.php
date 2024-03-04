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

/* back/forum/list.html.twig */
class __TwigTemplate_002efe85c5675fac16770dbd6091fe7e extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "back/forum/list.html.twig"));

        $this->parent = $this->loadTemplate("back/base.html.twig", "back/forum/list.html.twig", 1);
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
                    <li class=\"breadcrumb-item\">forums</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Forums</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        Title
                                    </th>
                                    <th>author</th>
                                    <th>numberofcomments</th>
                                    <th>delete</th>
                                </thead>
                                <tbody>
                                ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 37, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 38
            echo "                                    <tr>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "title", [], "any", false, false, false, 39), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 40), "firstname", [], "any", false, false, false, 40), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 40), "lastname", [], "any", false, false, false, 40), "html", null, true);
            echo "</td>
                                        <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "comments", [], "any", false, false, false, 41)), "html", null, true);
            echo "</td>
                                        <td>
                                            <a class=\"btn btn-danger\" href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_admin_forums_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 43)]), "html", null, true);
            echo "\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>
                                        </td>

                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
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
        return "back/forum/list.html.twig";
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
        return array (  128 => 48,  117 => 43,  112 => 41,  106 => 40,  102 => 39,  99 => 38,  95 => 37,  59 => 3,  52 => 2,  35 => 1,);
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
                    <li class=\"breadcrumb-item\">forums</li>
                    <li class=\"breadcrumb-item active\">list</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class=\"section\">
            <div class=\"row\">
                <div class=\"col-lg-12\">

                    <div class=\"card\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">Forums</h5>

                            <!-- Table with stripped rows -->
                            <table class=\"table datatable\">
                                <thead>
                                <tr>

                                    <th>
                                        Title
                                    </th>
                                    <th>author</th>
                                    <th>numberofcomments</th>
                                    <th>delete</th>
                                </thead>
                                <tbody>
                                {% for c in forums %}
                                    <tr>
                                        <td>{{ c.title }}</td>
                                        <td>{{ c.author.firstname }} {{ c.author.lastname }}</td>
                                        <td>{{ c.comments |length }}</td>
                                        <td>
                                            <a class=\"btn btn-danger\" href=\"{{ path('app_admin_forums_delete',{id:c.id}) }}\"><i class=\"fa fa-trash\" aria-hidden=\"true\"></i> </a>
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
", "back/forum/list.html.twig", "/Users/hassan/Downloads/app-2/templates/back/forum/list.html.twig");
    }
}
