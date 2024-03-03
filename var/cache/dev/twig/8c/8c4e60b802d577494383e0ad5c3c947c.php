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

/* front/profile/my_trades/my_trades.html.twig */
class __TwigTemplate_c6fd65a96cc8c02b8ed6b76caa650995 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/my_trades/my_trades.html.twig"));

        $this->parent = $this->loadTemplate("front/profile/profile_base.html.twig", "front/profile/my_trades/my_trades.html.twig", 1);
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
        echo "    <h1> My Request Trades</h1>
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Product</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">for</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Owner</th>
                <th scope=\"col\">validated</th>
                <th scope=\"col\">Delete</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["request_trades"]) || array_key_exists("request_trades", $context) ? $context["request_trades"] : (function () { throw new RuntimeError('Variable "request_trades" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rt"]) {
            // line 23
            echo "            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 26), "image", [], "any", false, false, false, 26))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 30), "name", [], "any", false, false, false, 30), "html", null, true);
            echo "</p>
                </td>
                <td>
                    <div class=\"d-flex align-items-center\">
                        <img src=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 34), "image", [], "any", false, false, false, 34))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 38
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 38), "name", [], "any", false, false, false, 38), "html", null, true);
            echo "</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 41
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 41), "firstname", [], "any", false, false, false, 41), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 41), "lastname", [], "any", false, false, false, 41), "html", null, true);
            echo "</p>
                </td>
                <td>
                    ";
            // line 44
            if (twig_get_attribute($this->env, $this->source, $context["rt"], "isComplete", [], "any", false, false, false, 44)) {
                // line 45
                echo "                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-check text-success\"></i>
                        </button>


                    ";
            } else {
                // line 51
                echo "                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-times text-danger\"></i>
                        </button>

                    ";
            }
            // line 56
            echo "                </td>
                <td>
                    ";
            // line 58
            if (twig_get_attribute($this->env, $this->source, $context["rt"], "isComplete", [], "any", false, false, false, 58)) {
                // line 59
                echo "                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-calendar text-success\"></i>
                        </button>


                    ";
            } else {
                // line 65
                echo "                        <a class=\"btn btn-danger rounded-circle border mt-4\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 65)]), "html", null, true);
                echo "\">
                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                        </a>

                    ";
            }
            // line 70
            echo "
                </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

            </tbody>
        </table>
    </div>
    <h1> Sent Request Trades</h1>
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">for</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Owner</th>
                    <th scope=\"col\">validated</th>
                    <th scope=\"col\">Delete</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sent_request_trades"]) || array_key_exists("sent_request_trades", $context) ? $context["sent_request_trades"] : (function () { throw new RuntimeError('Variable "sent_request_trades" does not exist.', 98, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rt"]) {
            // line 99
            echo "                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center\">
                                <img src=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 102), "image", [], "any", false, false, false, 102))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                            </div>
                        </th>
                        <td>
                            <p class=\"mb-0 mt-4\">";
            // line 106
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 106), "name", [], "any", false, false, false, 106), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                <img src=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 110), "image", [], "any", false, false, false, 110))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                            </div>
                        </td>
                        <td>
                            <p class=\"mb-0 mt-4\">";
            // line 114
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 114), "name", [], "any", false, false, false, 114), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <p class=\"mb-0 mt-4\">";
            // line 117
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 117), "firstname", [], "any", false, false, false, 117), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 117), "lastname", [], "any", false, false, false, 117), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            ";
            // line 120
            if (twig_get_attribute($this->env, $this->source, $context["rt"], "isComplete", [], "any", false, false, false, 120)) {
                // line 121
                echo "                                <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                    <i class=\"fa fa-check text-success\"></i>
                                </button>


                            ";
            } else {
                // line 127
                echo "                                <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                    <i class=\"fa fa-times text-danger\"></i>
                                </button>

                            ";
            }
            // line 132
            echo "                        </td>
                        <td>
                            <a class=\"btn btn-success rounded-circle border mt-4\" href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades_validate", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 134)]), "html", null, true);
            echo "\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </a>
                        </td>

                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        echo "

                </tbody>
            </table>
        </div>

    </div>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/profile/my_trades/my_trades.html.twig";
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
        return array (  276 => 141,  263 => 134,  259 => 132,  252 => 127,  244 => 121,  242 => 120,  234 => 117,  228 => 114,  221 => 110,  214 => 106,  207 => 102,  202 => 99,  198 => 98,  173 => 75,  163 => 70,  154 => 65,  146 => 59,  144 => 58,  140 => 56,  133 => 51,  125 => 45,  123 => 44,  115 => 41,  109 => 38,  102 => 34,  95 => 30,  88 => 26,  83 => 23,  79 => 22,  59 => 4,  52 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}

{% block tabcontent %}
    <h1> My Request Trades</h1>
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Product</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">for</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Owner</th>
                <th scope=\"col\">validated</th>
                <th scope=\"col\">Delete</th>

            </tr>
            </thead>
            <tbody>
            {% for rt in request_trades %}
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"{{ absolute_url(asset(rt.fromProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.fromProduct.name }}</p>
                </td>
                <td>
                    <div class=\"d-flex align-items-center\">
                        <img src=\"{{ absolute_url(asset(rt.toProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.toProduct.name }}</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.toUser.firstname  }} {{ rt.toUser.lastname  }}</p>
                </td>
                <td>
                    {% if rt.isComplete %}
                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-check text-success\"></i>
                        </button>


                    {% else %}
                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-times text-danger\"></i>
                        </button>

                    {% endif %}
                </td>
                <td>
                    {% if rt.isComplete %}
                        <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                            <i class=\"fa fa-calendar text-success\"></i>
                        </button>


                    {% else %}
                        <a class=\"btn btn-danger rounded-circle border mt-4\" href=\"{{ path('app_profile_trades_delete',{id:rt.id}) }}\">
                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                        </a>

                    {% endif %}

                </td>

            </tr>
            {% endfor %}


            </tbody>
        </table>
    </div>
    <h1> Sent Request Trades</h1>
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
            <table class=\"table\">
                <thead>
                <tr>
                    <th scope=\"col\">Product</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">for</th>
                    <th scope=\"col\">Name</th>
                    <th scope=\"col\">Owner</th>
                    <th scope=\"col\">validated</th>
                    <th scope=\"col\">Delete</th>

                </tr>
                </thead>
                <tbody>
                {% for rt in sent_request_trades %}
                    <tr>
                        <th scope=\"row\">
                            <div class=\"d-flex align-items-center\">
                                <img src=\"{{ absolute_url(asset(rt.fromProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                            </div>
                        </th>
                        <td>
                            <p class=\"mb-0 mt-4\">{{ rt.fromProduct.name }}</p>
                        </td>
                        <td>
                            <div class=\"d-flex align-items-center\">
                                <img src=\"{{ absolute_url(asset(rt.toProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                            </div>
                        </td>
                        <td>
                            <p class=\"mb-0 mt-4\">{{ rt.toProduct.name }}</p>
                        </td>
                        <td>
                            <p class=\"mb-0 mt-4\">{{ rt.toUser.firstname  }} {{ rt.toUser.lastname  }}</p>
                        </td>
                        <td>
                            {% if rt.isComplete %}
                                <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                    <i class=\"fa fa-check text-success\"></i>
                                </button>


                            {% else %}
                                <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                    <i class=\"fa fa-times text-danger\"></i>
                                </button>

                            {% endif %}
                        </td>
                        <td>
                            <a class=\"btn btn-success rounded-circle border mt-4\" href=\"{{ path('app_profile_trades_validate',{id:rt.id}) }}\">
                                <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                            </a>
                        </td>

                    </tr>
                {% endfor %}


                </tbody>
            </table>
        </div>

    </div>

{% endblock %}", "front/profile/my_trades/my_trades.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\profile\\my_trades\\my_trades.html.twig");
    }
}
