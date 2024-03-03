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
class __TwigTemplate_162f2103e9695cd00e2ddf8ee6fe5390 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
            'scripts' => [$this, 'block_scripts'],
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
                                <input type=\"search\" id=\"searchSelector\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
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
                                            <li>
                                                <div class=\"d-flex justify-content-between fruite-name\" data-value=\"none\">
                                                    <a  href=\"#\"    class=categorySelector\" ><i class=\"fas fa-apple-alt me-2\"></i>All Categories</a>

                                                </div>
                                            </li>

                                            ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 55
            echo "                                                ";
            if ((twig_get_attribute($this->env, $this->source, $context["c"], "parent", [], "any", false, false, false, 55) == null)) {
                // line 56
                echo "                                                    <li>
                                                        <div class=\"d-flex justify-content-between fruite-name\" data-value=\"";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 57), "html", null, true);
                echo "\">
                                                            <a  href=\"#\"    class=categorySelector\" ><i class=\"fas fa-apple-alt me-2\"></i>";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 58), "html", null, true);
                echo "</a>
                                                            <span>(";
                // line 59
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "products", [], "any", false, false, false, 59)), "html", null, true);
                echo ")</span>
                                                        </div>
                                                    </li>
                                                    ";
                // line 62
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "categories", [], "any", false, false, false, 62)) > 0)) {
                    // line 63
                    echo "                                                        <ul class=\"list-unstyled fruite-categorie\" style=\"padding-left: 50px\">
                                                            ";
                    // line 64
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["c"], "categories", [], "any", false, false, false, 64));
                    foreach ($context['_seq'] as $context["_key"] => $context["subc"]) {
                        // line 65
                        echo "                                                                <li>
                                                                    <div class=\"d-flex justify-content-between fruite-name\" data-value=\"";
                        // line 66
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subc"], "id", [], "any", false, false, false, 66), "html", null, true);
                        echo "\">
                                                                        <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>";
                        // line 67
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subc"], "name", [], "any", false, false, false, 67), "html", null, true);
                        echo "</a>
                                                                        <span>(";
                        // line 68
                        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["subc"], "products", [], "any", false, false, false, 68)), "html", null, true);
                        echo ")</span>
                                                                    </div>
                                                                </li>
                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subc'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo "                                                        </ul>
                                                    ";
                }
                // line 74
                echo "                                                ";
            }
            // line 75
            echo "                                                <!---->
                                          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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
                            <div id=\"product-content\" class=\"row g-4 justify-content-center\">
                                ";
        // line 157
        $this->loadTemplate("front/home/products/productlist.html.twig", "front/home/products.html.twig", 157)->display(twig_array_merge($context, ["products" => (isset($context["products"]) || array_key_exists("products", $context) ? $context["products"] : (function () { throw new RuntimeError('Variable "products" does not exist.', 157, $this->source); })()), "numberOfPages" => (isset($context["numberOfPages"]) || array_key_exists("numberOfPages", $context) ? $context["numberOfPages"] : (function () { throw new RuntimeError('Variable "numberOfPages" does not exist.', 157, $this->source); })()), "currentPage" => (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 157, $this->source); })())]));
        // line 158
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"product-sprinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
        <div class=\"spinner-grow text-primary\" role=\"status\"></div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 170
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 171
        echo "    <script>
        let spinner = document.querySelector('#product-sprinner')
        hideSpinner()

        const content = document.querySelector('#product-content')
        let baseUrl = window.location.origin
        let paginationElements = []
        let categoriesElements = []
        let currentCategory ='";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["currentCategory"]) || array_key_exists("currentCategory", $context) ? $context["currentCategory"] : (function () { throw new RuntimeError('Variable "currentCategory" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "' ;
        let currentSearch = '";
        // line 180
        echo twig_escape_filter($this->env, (isset($context["currentSearch"]) || array_key_exists("currentSearch", $context) ? $context["currentSearch"] : (function () { throw new RuntimeError('Variable "currentSearch" does not exist.', 180, $this->source); })()), "html", null, true);
        echo "' ;
        let currentPage = ";
        // line 181
        echo twig_escape_filter($this->env, (isset($context["currentPage"]) || array_key_exists("currentPage", $context) ? $context["currentPage"] : (function () { throw new RuntimeError('Variable "currentPage" does not exist.', 181, $this->source); })()), "html", null, true);
        echo ";

        InitializePaginationSelector();
        initializeCategoriesElements();
        function hideSpinner(){
            spinner.style.visibility='hidden'

        }
        function showSpinner(){
            spinner.style.visibility='visible'
        }
        function onChangeCategory(cat_id){
            showSpinner()
            let addedString
            if(cat_id==='none'){
                addedString='/products'
            }
            else{
                addedString='/products?category='+cat_id
            }

            fetch(baseUrl+addedString,{
                headers:{
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(data=>{
                return data.json()
            }).then(d=>{
                content.innerHTML = d.data
                currentCategory=d.currentCatgeory
                InitializePaginationSelector()
                hideSpinner()

            })
        }
        function initializeCategoriesElements(){

            if(categoriesElements.length){
                categoriesElements.length=0
            }
            document.querySelectorAll('div.fruite-name').forEach(element=>{
                categoriesElements.push(element)
            })
            console.log(categoriesElements)
            categoriesElements.forEach(element=>{
                element.addEventListener('click',(e)=>{

                    e.preventDefault();
                   onChangeCategory(element.getAttribute('data-value'))
                })
            })
        }
        function InitializePaginationSelector(){
                if(paginationElements.length){
                    paginationElements.length=0
                }
            document.querySelectorAll('.paginationSelector').forEach(element=>{
                paginationElements.push(element)
            })
            paginationElements.forEach(element=>{
                element.addEventListener('click',(e)=>{

                    e.preventDefault();
                    onPaginate(e.target.innerHTML)
                })
            })

        }
        function onPaginate(pageNumber){
                showSpinner()
                let addedString='/products?page='+pageNumber
                if(currentCategory&& currentCategory!==''){
                    addedString+='&category'+currentCategory
                }
                if(currentSearch && currentSearch!=''){
                    addedString+='&category'+currentCategory
                }
                fetch(baseUrl+addedString,{
                    headers:{
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                }).then(data=>{
                    return data.json()
                }).then(d=>{
                    content.innerHTML = d.data

                    InitializePaginationSelector()
                    hideSpinner()
                })
        }
    </script>
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
        return array (  308 => 181,  304 => 180,  300 => 179,  290 => 171,  283 => 170,  265 => 158,  263 => 157,  181 => 77,  174 => 75,  171 => 74,  167 => 72,  157 => 68,  153 => 67,  149 => 66,  146 => 65,  142 => 64,  139 => 63,  137 => 62,  131 => 59,  127 => 58,  123 => 57,  120 => 56,  117 => 55,  113 => 54,  60 => 3,  53 => 2,  36 => 1,);
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
                                <input type=\"search\" id=\"searchSelector\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
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
                                            <li>
                                                <div class=\"d-flex justify-content-between fruite-name\" data-value=\"none\">
                                                    <a  href=\"#\"    class=categorySelector\" ><i class=\"fas fa-apple-alt me-2\"></i>All Categories</a>

                                                </div>
                                            </li>

                                            {% for c in categories %}
                                                {% if c.parent == null %}
                                                    <li>
                                                        <div class=\"d-flex justify-content-between fruite-name\" data-value=\"{{ c.id }}\">
                                                            <a  href=\"#\"    class=categorySelector\" ><i class=\"fas fa-apple-alt me-2\"></i>{{ c.name }}</a>
                                                            <span>({{ c.products | length }})</span>
                                                        </div>
                                                    </li>
                                                    {% if c.categories|length > 0 %}
                                                        <ul class=\"list-unstyled fruite-categorie\" style=\"padding-left: 50px\">
                                                            {% for subc in c.categories %}
                                                                <li>
                                                                    <div class=\"d-flex justify-content-between fruite-name\" data-value=\"{{ subc.id }}\">
                                                                        <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>{{ subc.name }}</a>
                                                                        <span>({{ subc.products | length }})</span>
                                                                    </div>
                                                                </li>
                                                            {% endfor %}
                                                        </ul>
                                                    {% endif %}
                                                {% endif %}
                                                <!---->
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
                            <div id=\"product-content\" class=\"row g-4 justify-content-center\">
                                {% include 'front/home/products/productlist.html.twig' with {'products' : products,'numberOfPages':numberOfPages,'currentPage':currentPage } %}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id=\"product-sprinner\" class=\"show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center\">
        <div class=\"spinner-grow text-primary\" role=\"status\"></div>
    </div>
{% endblock %}
{% block scripts %}
    <script>
        let spinner = document.querySelector('#product-sprinner')
        hideSpinner()

        const content = document.querySelector('#product-content')
        let baseUrl = window.location.origin
        let paginationElements = []
        let categoriesElements = []
        let currentCategory ='{{ currentCategory }}' ;
        let currentSearch = '{{ currentSearch }}' ;
        let currentPage = {{ currentPage }};

        InitializePaginationSelector();
        initializeCategoriesElements();
        function hideSpinner(){
            spinner.style.visibility='hidden'

        }
        function showSpinner(){
            spinner.style.visibility='visible'
        }
        function onChangeCategory(cat_id){
            showSpinner()
            let addedString
            if(cat_id==='none'){
                addedString='/products'
            }
            else{
                addedString='/products?category='+cat_id
            }

            fetch(baseUrl+addedString,{
                headers:{
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(data=>{
                return data.json()
            }).then(d=>{
                content.innerHTML = d.data
                currentCategory=d.currentCatgeory
                InitializePaginationSelector()
                hideSpinner()

            })
        }
        function initializeCategoriesElements(){

            if(categoriesElements.length){
                categoriesElements.length=0
            }
            document.querySelectorAll('div.fruite-name').forEach(element=>{
                categoriesElements.push(element)
            })
            console.log(categoriesElements)
            categoriesElements.forEach(element=>{
                element.addEventListener('click',(e)=>{

                    e.preventDefault();
                   onChangeCategory(element.getAttribute('data-value'))
                })
            })
        }
        function InitializePaginationSelector(){
                if(paginationElements.length){
                    paginationElements.length=0
                }
            document.querySelectorAll('.paginationSelector').forEach(element=>{
                paginationElements.push(element)
            })
            paginationElements.forEach(element=>{
                element.addEventListener('click',(e)=>{

                    e.preventDefault();
                    onPaginate(e.target.innerHTML)
                })
            })

        }
        function onPaginate(pageNumber){
                showSpinner()
                let addedString='/products?page='+pageNumber
                if(currentCategory&& currentCategory!==''){
                    addedString+='&category'+currentCategory
                }
                if(currentSearch && currentSearch!=''){
                    addedString+='&category'+currentCategory
                }
                fetch(baseUrl+addedString,{
                    headers:{
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                }).then(data=>{
                    return data.json()
                }).then(d=>{
                    content.innerHTML = d.data

                    InitializePaginationSelector()
                    hideSpinner()
                })
        }
    </script>
{% endblock %}", "front/home/products.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\products.html.twig");
    }
}
