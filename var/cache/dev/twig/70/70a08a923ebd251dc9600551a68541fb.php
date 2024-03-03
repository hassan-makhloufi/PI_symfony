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

/* front/home/products.html.twig */
class __TwigTemplate_209d90f09c5da7fd1e944f0c1ed96188 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "front/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/products.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/products.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Shop</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh fruits shop</h1>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"fruits\">Default Sorting:</label>
                                <select id=\"fruits\" name=\"fruitlist\" class=\"border-0 form-select-sm bg-light me-3\" form=\"fruitform\">
                                    <option value=\"volvo\">Nothing</option>
                                    <option value=\"saab\">Popularity</option>
                                    <option value=\"opel\">Organic</option>
                                    <option value=\"audi\">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        <h4>Categories</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            ";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 47, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 48
            echo "                                            <li>
                                                <div class=\"d-flex justify-content-between fruite-name\">
                                                    <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 50), "html", null, true);
            echo "</a>
                                                    <span>(";
            // line 51
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "products", [], "any", false, false, false, 51)), "html", null, true);
            echo ")</span>
                                                </div>
                                            </li>
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                                        </ul>
                                    </div>
                                </div>


                                <div class=\"col-lg-12\">
                                    <h4 class=\"mb-3\">Featured products</h4>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-1.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-2.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-3.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-center my-4\">
                                        <a href=\"#\" class=\"btn border border-secondary px-4 py-3 rounded-pill text-primary w-100\">Vew More</a>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"position-relative\">
                                        <img src=\"img/banner-fruits.jpg\" class=\"img-fluid w-100 rounded\" alt=\"\">
                                        <div class=\"position-absolute\" style=\"top: 50%; right: 10px; transform: translateY(-50%);\">
                                            <h3 class=\"text-secondary fw-bold\">Fresh <br> Fruits <br> Banner</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-9\">
                            <div class=\"row g-4 justify-content-center\">
                                ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 136
            echo "                                <div class=\"col-md-6 col-lg-6 col-xl-4\">
                                    <div class=\"rounded position-relative fruite-item\">
                                        <div class=\"fruite-img\">
                                            <img src=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, $context["p"], "image", [], "any", false, false, false, 139))), "html", null, true);
            echo "\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                                        </div>
                                        <div class=\"text-white bg-secondary px-3 py-1 rounded position-absolute\" style=\"top: 10px; left: 10px;\">
                                            ";
            // line 142
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["p"], "category", [], "any", false, false, false, 142), "name", [], "any", false, false, false, 142), "html", null, true);
            echo "</div>
                                        <div class=\"p-4 border border-secondary border-top-0 rounded-bottom\">
                                            <h4>";
            // line 144
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "name", [], "any", false, false, false, 144), "html", null, true);
            echo "</h4>
                                            <p>";
            // line 145
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["p"], "longDescription", [], "any", false, false, false, 145), "html", null, true);
            echo "</p>
                                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> trade</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                <div class=\"col-12\">
                                    <div class=\"pagination d-flex justify-content-center mt-5\">
                                        <a href=\"#\" class=\"rounded\">&laquo;</a>
                                        <a href=\"#\" class=\"active rounded\">1</a>
                                        <a href=\"#\" class=\"rounded\">2</a>
                                        <a href=\"#\" class=\"rounded\">3</a>
                                        <a href=\"#\" class=\"rounded\">4</a>
                                        <a href=\"#\" class=\"rounded\">5</a>
                                        <a href=\"#\" class=\"rounded\">6</a>
                                        <a href=\"#\" class=\"rounded\">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
        return "front/home/products.html.twig";
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
        return array (  247 => 153,  233 => 145,  229 => 144,  224 => 142,  218 => 139,  213 => 136,  209 => 135,  127 => 55,  117 => 51,  113 => 50,  109 => 48,  105 => 47,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Shop</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop</li>
        </ol>
    </div>
    <!-- Single Page Header End -->


    <!-- Fruits Shop Start-->
    <div class=\"container-fluid fruite py-5\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh fruits shop</h1>
            <div class=\"row g-4\">
                <div class=\"col-lg-12\">
                    <div class=\"row g-4\">
                        <div class=\"col-xl-3\">
                            <div class=\"input-group w-100 mx-auto d-flex\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                        </div>
                        <div class=\"col-6\"></div>
                        <div class=\"col-xl-3\">
                            <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                                <label for=\"fruits\">Default Sorting:</label>
                                <select id=\"fruits\" name=\"fruitlist\" class=\"border-0 form-select-sm bg-light me-3\" form=\"fruitform\">
                                    <option value=\"volvo\">Nothing</option>
                                    <option value=\"saab\">Popularity</option>
                                    <option value=\"opel\">Organic</option>
                                    <option value=\"audi\">Fantastic</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class=\"row g-4\">
                        <div class=\"col-lg-3\">
                            <div class=\"row g-4\">
                                <div class=\"col-lg-12\">
                                    <div class=\"mb-3\">
                                        <h4>Categories</h4>
                                        <ul class=\"list-unstyled fruite-categorie\">
                                            {% for c in categories %}
                                            <li>
                                                <div class=\"d-flex justify-content-between fruite-name\">
                                                    <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>{{ c.name }}</a>
                                                    <span>({{ c.products | length }})</span>
                                                </div>
                                            </li>
                                          {% endfor %}
                                        </ul>
                                    </div>
                                </div>


                                <div class=\"col-lg-12\">
                                    <h4 class=\"mb-3\">Featured products</h4>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-1.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-2.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex align-items-center justify-content-start\">
                                        <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                            <img src=\"img/featur-3.jpg\" class=\"img-fluid rounded\" alt=\"\">
                                        </div>
                                        <div>
                                            <h6 class=\"mb-2\">Big Banana</h6>
                                            <div class=\"d-flex mb-2\">
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star text-secondary\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                            <div class=\"d-flex mb-2\">
                                                <h5 class=\"fw-bold me-2\">2.99 \$</h5>
                                                <h5 class=\"text-danger text-decoration-line-through\">4.11 \$</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"d-flex justify-content-center my-4\">
                                        <a href=\"#\" class=\"btn border border-secondary px-4 py-3 rounded-pill text-primary w-100\">Vew More</a>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"position-relative\">
                                        <img src=\"img/banner-fruits.jpg\" class=\"img-fluid w-100 rounded\" alt=\"\">
                                        <div class=\"position-absolute\" style=\"top: 50%; right: 10px; transform: translateY(-50%);\">
                                            <h3 class=\"text-secondary fw-bold\">Fresh <br> Fruits <br> Banner</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"col-lg-9\">
                            <div class=\"row g-4 justify-content-center\">
                                {% for p in products %}
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
                                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> trade</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {% endfor %}
                                <div class=\"col-12\">
                                    <div class=\"pagination d-flex justify-content-center mt-5\">
                                        <a href=\"#\" class=\"rounded\">&laquo;</a>
                                        <a href=\"#\" class=\"active rounded\">1</a>
                                        <a href=\"#\" class=\"rounded\">2</a>
                                        <a href=\"#\" class=\"rounded\">3</a>
                                        <a href=\"#\" class=\"rounded\">4</a>
                                        <a href=\"#\" class=\"rounded\">5</a>
                                        <a href=\"#\" class=\"rounded\">6</a>
                                        <a href=\"#\" class=\"rounded\">&raquo;</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "front/home/products.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\products.html.twig");
    }
}
