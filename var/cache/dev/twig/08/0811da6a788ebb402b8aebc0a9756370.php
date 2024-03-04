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
class __TwigTemplate_752c95aeaef417bc39a6965b8a155020 extends Template
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
                <th scope=\"col\">Your Product</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Target Product</th>
                <th scope=\"col\">Owner</th>

                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">State</th>
                <th scope=\"col\">Action</th>

            </tr>
            </thead>
            <tbody>
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["request_trades"]) || array_key_exists("request_trades", $context) ? $context["request_trades"] : (function () { throw new RuntimeError('Variable "request_trades" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rt"]) {
            // line 24
            echo "            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 27), "image", [], "any", false, false, false, 27))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rt"], "fromQuantity", [], "any", false, false, false, 31), "html", null, true);
            echo "</p>
                </td>
                <td>
                    <div class=\"d-flex align-items-center\">
                        <img src=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 35), "image", [], "any", false, false, false, 35))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 39), "firstname", [], "any", false, false, false, 39), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toUser", [], "any", false, false, false, 39), "lastname", [], "any", false, false, false, 39), "html", null, true);
            echo "</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rt"], "toQuantity", [], "any", false, false, false, 42), "html", null, true);
            echo "</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 45), "html", null, true);
            echo " </p>
                </td>
                <td>
                    ";
            // line 48
            if ((twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 48) == "complete")) {
                // line 49
                echo "                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_lines_create", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 49)]), "html", null, true);
                echo "\" class=\"btn btn-success rounded-circle border mt-4\" >
                            <i class=\"fas fa-shipping-fast\"></i>
                        </a>


                    ";
            } else {
                // line 55
                echo "                        <a class=\"btn btn-danger rounded-circle border mt-4\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 55)]), "html", null, true);
                echo "\">
                            <i class=\"fa fa-trash\" aria-hidden=\"true\"></i>
                        </a>

                    ";
            }
            // line 60
            echo "
                </td>

            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 65
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
                    <th scope=\"col\">Target Product</th>
                    <th scope=\"col\">Owner</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">Your Product</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">validated</th>
                    <th scope=\"col\">Action</th>

                </tr>
                </thead>
                <tbody>
                ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sent_request_trades"]) || array_key_exists("sent_request_trades", $context) ? $context["sent_request_trades"] : (function () { throw new RuntimeError('Variable "sent_request_trades" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["rt"]) {
            // line 89
            echo "                    ";
            if ((twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 89) != "declined")) {
                // line 90
                echo "                        <tr>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromProduct", [], "any", false, false, false, 93), "image", [], "any", false, false, false, 93))), "html", null, true);
                echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">";
                // line 97
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromUser", [], "any", false, false, false, 97), "firstname", [], "any", false, false, false, 97), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "fromUser", [], "any", false, false, false, 97), "lastname", [], "any", false, false, false, 97), "html", null, true);
                echo "</p>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">";
                // line 100
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rt"], "fromQuantity", [], "any", false, false, false, 100), "html", null, true);
                echo "</p>
                            </td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
                // line 104
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["rt"], "toProduct", [], "any", false, false, false, 104), "image", [], "any", false, false, false, 104))), "html", null, true);
                echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">";
                // line 108
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rt"], "toQuantity", [], "any", false, false, false, 108), "html", null, true);
                echo "</p>
                            </td>
                            <td>
                                ";
                // line 111
                if ((twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 111) != "en attente")) {
                    // line 112
                    echo "                                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                        <i class=\"fa fa-check text-success\"></i>
                                    </button>
                                ";
                } else {
                    // line 116
                    echo "                                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                                        <i class=\"fa fa-times text-danger\"></i>
                                    </button>

                                ";
                }
                // line 121
                echo "                            </td>
                            <td>
                                <div style=\"display: flex;gap: 10px;align-items: center\">
                                ";
                // line 124
                if ((twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 124) != "complete")) {
                    // line 125
                    echo "                                    <a class=\"btn btn-success rounded-circle border mt-4\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades_validate", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 125), "action" => "validate"]), "html", null, true);
                    echo "\">
                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    </a>
                                    ";
                } else {
                    // line 129
                    echo "                                        <a class=\"btn btn-success rounded-circle border mt-4\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_lines_create", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                    echo "\">
                                            <i class=\"fas fa-shipping-fast\"></i>

                                        </a>
                                ";
                }
                // line 134
                echo "                            ";
                if ((twig_get_attribute($this->env, $this->source, $context["rt"], "state", [], "any", false, false, false, 134) != "complete")) {
                    // line 135
                    echo "                                <a class=\"btn btn-md rounded-circle bg-light border mt-4\" href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades_validate", ["id" => twig_get_attribute($this->env, $this->source, $context["rt"], "id", [], "any", false, false, false, 135), "action" => "decline"]), "html", null, true);
                    echo "\">
                                        <i class=\"fa fa-times text-danger\"></i>
                                    </a>
                                </div>
                            ";
                }
                // line 140
                echo "                            </td>

                        </tr>
                    ";
            }
            // line 144
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rt'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 145
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
        return array (  296 => 145,  290 => 144,  284 => 140,  275 => 135,  272 => 134,  263 => 129,  255 => 125,  253 => 124,  248 => 121,  241 => 116,  235 => 112,  233 => 111,  227 => 108,  220 => 104,  213 => 100,  205 => 97,  198 => 93,  193 => 90,  190 => 89,  186 => 88,  161 => 65,  151 => 60,  142 => 55,  132 => 49,  130 => 48,  124 => 45,  118 => 42,  110 => 39,  103 => 35,  96 => 31,  89 => 27,  84 => 24,  80 => 23,  59 => 4,  52 => 3,  35 => 1,);
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
                <th scope=\"col\">Your Product</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Target Product</th>
                <th scope=\"col\">Owner</th>

                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">State</th>
                <th scope=\"col\">Action</th>

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
                    <p class=\"mb-0 mt-4\">{{ rt.fromQuantity }}</p>
                </td>
                <td>
                    <div class=\"d-flex align-items-center\">
                        <img src=\"{{ absolute_url(asset(rt.toProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.toUser.firstname }} {{ rt.toUser.lastname }}</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.toQuantity }}</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">{{ rt.state  }} </p>
                </td>
                <td>
                    {% if rt.state==\"complete\" %}
                        <a href=\"{{ path('app_livraison_lines_create',{id:rt.id}) }}\" class=\"btn btn-success rounded-circle border mt-4\" >
                            <i class=\"fas fa-shipping-fast\"></i>
                        </a>


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
                    <th scope=\"col\">Target Product</th>
                    <th scope=\"col\">Owner</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">Your Product</th>
                    <th scope=\"col\">Quantity</th>
                    <th scope=\"col\">validated</th>
                    <th scope=\"col\">Action</th>

                </tr>
                </thead>
                <tbody>
                {% for rt in sent_request_trades %}
                    {% if rt.state!=\"declined\" %}
                        <tr>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ absolute_url(asset(rt.fromProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ rt.fromUser.firstname }} {{ rt.fromUser.lastname }}</p>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ rt.fromQuantity }}</p>
                            </td>
                            <td>
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ absolute_url(asset(rt.toProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </td>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ rt.toQuantity }}</p>
                            </td>
                            <td>
                                {% if rt.state!='en attente' %}
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
                                <div style=\"display: flex;gap: 10px;align-items: center\">
                                {% if rt.state!='complete' %}
                                    <a class=\"btn btn-success rounded-circle border mt-4\" href=\"{{ path('app_profile_trades_validate',{id:rt.id,action:'validate'}) }}\">
                                        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
                                    </a>
                                    {% else %}
                                        <a class=\"btn btn-success rounded-circle border mt-4\" href=\"{{ path('app_livraison_lines_create',{id:rt.id}) }}\">
                                            <i class=\"fas fa-shipping-fast\"></i>

                                        </a>
                                {% endif %}
                            {% if rt.state!='complete' %}
                                <a class=\"btn btn-md rounded-circle bg-light border mt-4\" href=\"{{ path('app_profile_trades_validate',{id:rt.id,action:'decline'}) }}\">
                                        <i class=\"fa fa-times text-danger\"></i>
                                    </a>
                                </div>
                            {% endif %}
                            </td>

                        </tr>
                    {% endif %}
                {% endfor %}


                </tbody>
            </table>
        </div>

    </div>

{% endblock %}", "front/profile/my_trades/my_trades.html.twig", "/Users/hassan/Downloads/app-2/templates/front/profile/my_trades/my_trades.html.twig");
    }
}
