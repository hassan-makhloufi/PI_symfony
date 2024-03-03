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

/* front/home/products/productlist.html.twig */
class __TwigTemplate_dbaab38eaa4780af52df1fe88984384c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/products/productlist.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 1, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 2
            echo "    <div class=\"col-md-6 col-lg-6 col-xl-4\">
        <div class=\"rounded position-relative fruite-item\">
            <div class=\"fruite-img\">
                <img src=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 5))), "html", null, true);
            echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
            </div>
            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                ";
            // line 8
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "category", [], "any", false, false, false, 8), "name", [], "any", false, false, false, 8), "html", null, true);
            echo "</div>
            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                <h4>";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 10), "html", null, true);
            echo "</h4>
                <p>";
            // line 11
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "longDescription", [], "any", false, false, false, 11), "html", null, true);
            echo "</p>
                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                    <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_product_single", ["id" => twig_get_attribute($this->env, $this->source, $context["p"], "id", [], "any", false, false, false, 13)]), "html", null, true);
            echo "\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-eye me-2 text-primary\"></i> view more</a>
                </div>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                                ";
        if (((isset($context["numberOfPages"]) || array_key_exists("numberOfPages", $context) ? $context["numberOfPages"] : (function () { throw new RuntimeError('Variable "numberOfPages" does not exist.', 19, $this->source); })()) > 0)) {
            // line 20
            echo "                                    <div class=\"col-12\">
                                        <div class=\"pagination d-flex justify-content-center mt-5\">
                                            <a href=\"#\" class=\"rounded\">&laquo;</a>
                                            ";
            // line 23
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["numberOfPages"]) || array_key_exists("numberOfPages", $context) ? $context["numberOfPages"] : (function () { throw new RuntimeError('Variable "numberOfPages" does not exist.', 23, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
                // line 24
                echo "                                                <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products", ["page" => $context["p"]]), "html", null, true);
                echo "\"
                                                   class=\"paginationSelector ";
                // line 25
                if (($context["p"] == (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 25, $this->source); })()))) {
                    echo "active";
                }
                echo " rounded\">";
                echo twig_escape_filter($this->env, $context["p"], "html", null, true);
                echo "</a>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "                                            <a href=\"#\" class=\"rounded\">&raquo;</a>

                                        </div>
                                    </div>
                                ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/products/productlist.html.twig";
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
        return array (  110 => 27,  98 => 25,  93 => 24,  89 => 23,  84 => 20,  81 => 19,  69 => 13,  64 => 11,  60 => 10,  55 => 8,  49 => 5,  44 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% for p in products %}
    <div class=\"col-md-6 col-lg-6 col-xl-4\">
        <div class=\"rounded position-relative fruite-item\">
            <div class=\"fruite-img\">
                <img src=\"{{ absolute_url(asset(p.image)) }}\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
            </div>
            <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                {{ p.category.name }}</div>
            <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                <h4>{{ p.name }}</h4>
                <p>{{ p.longDescription }}</p>
                <div class=\"d-flex justify-content-between flex-lg-wrap\">
                    <a href=\"{{path('app_product_single',{id:p.id})}}\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-eye me-2 text-primary\"></i> view more</a>
                </div>
            </div>
        </div>
    </div>
{% endfor %}
                                {% if numberOfPages > 0 %}
                                    <div class=\"col-12\">
                                        <div class=\"pagination d-flex justify-content-center mt-5\">
                                            <a href=\"#\" class=\"rounded\">&laquo;</a>
                                            {% for p in 1..numberOfPages %}
                                                <a href=\"{{ path('app_products',{'page':p}) }}\"
                                                   class=\"paginationSelector {% if p ==currentPage %}active{% endif%} rounded\">{{ p }}</a>
                                            {% endfor %}
                                            <a href=\"#\" class=\"rounded\">&raquo;</a>

                                        </div>
                                    </div>
                                {% endif %}", "front/home/products/productlist.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\products\\productlist.html.twig");
    }
}
