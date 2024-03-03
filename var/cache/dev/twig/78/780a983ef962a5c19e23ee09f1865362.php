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
class __TwigTemplate_f06e0774086efe833bcf8eb53df91cd6 extends Template
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

    // line 2
    public function block_tabcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabcontent"));

        // line 3
        echo "
    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Products</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-3.png\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Big Banana</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>

            </tr>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Potatoes</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-2.jpg\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Awesome Brocoli</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>
            </tr>
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
        return array (  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/profile/profile_base.html.twig' %}
{% block tabcontent %}

    <div id=\"tab-2\" class=\"tab-pane fade show p-0 active\">

        <div class=\"table-responsive \">
        <table class=\"table\">
            <thead>
            <tr>
                <th scope=\"col\">Products</th>
                <th scope=\"col\">Name</th>
                <th scope=\"col\">Price</th>
                <th scope=\"col\">Quantity</th>
                <th scope=\"col\">Total</th>
                <th scope=\"col\">Handle</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-3.png\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Big Banana</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>

            </tr>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Potatoes</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>
            </tr>
            <tr>
                <th scope=\"row\">
                    <div class=\"d-flex align-items-center\">
                        <img src=\"img/vegetable-item-2.jpg\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\" alt=\"\">
                    </div>
                </th>
                <td>
                    <p class=\"mb-0 mt-4\">Awesome Brocoli</p>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                <i class=\"fa fa-minus\"></i>
                            </button>
                        </div>
                        <input type=\"text\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                        <div class=\"input-group-btn\">
                            <button class=\"btn btn-sm btn-plus rounded-circle bg-light border\">
                                <i class=\"fa fa-plus\"></i>
                            </button>
                        </div>
                    </div>
                </td>
                <td>
                    <p class=\"mb-0 mt-4\">2.99 \$</p>
                </td>
                <td>
                    <button class=\"btn btn-md rounded-circle bg-light border mt-4\" >
                        <i class=\"fa fa-times text-danger\"></i>
                    </button>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
{% endblock %}", "front/profile/my_trades/my_trades.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\profile\\my_trades\\my_trades.html.twig");
    }
}
