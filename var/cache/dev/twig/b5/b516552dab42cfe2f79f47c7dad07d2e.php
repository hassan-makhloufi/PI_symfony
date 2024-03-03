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

/* front/home/single.html.twig */
class __TwigTemplate_63abf9ad81f56856b23405810f958c8a extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/single.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/single.html.twig", 1);
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
        <h1 class=\"text-center text-white display-6\">Shop Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop Detail</li>
        </ol>
    </div>
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4 mb-5\">
                <div class=\"col-lg-8 col-xl-9\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-6\">
                            <div class=\"border rounded\">
                                <a href=\"#\">
                                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 19, $this->source); })()), "image", [], "any", false, false, false, 19))), "html", null, true);
        echo "\" class=\"img-fluid rounded\" alt=\"Image\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 24, $this->source); })()), "name", [], "any", false, false, false, 24), "html", null, true);
        echo "</h4>
                            <p class=\"mb-3\">";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 25, $this->source); })()), "category", [], "any", false, false, false, 25), "name", [], "any", false, false, false, 25), "html", null, true);
        echo "</p>

                           <!-- <div class=\"d-flex mb-4\">
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>-->
                            <p class=\"mb-4\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                            <p class=\"mb-4\">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                            ";
        // line 36
        if (((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "adder", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36) != twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36))) && twig_get_attribute($this->env, $this->source, (isset($context["product"]) || array_key_exists("product", $context) ? $context["product"] : (function () { throw new RuntimeError('Variable "product" does not exist.', 36, $this->source); })()), "canTradeWith", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)], "method", false, false, false, 36))) {
            // line 37
            echo "                            <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#trade-modal\">
                                Trade
                            </button>
                            ";
        }
        // line 41
        echo "                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                            id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                            aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                            id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                            aria-controls=\"nav-mission\" aria-selected=\"false\">Reviews</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
                                        Susp endisse ultricies nisi vel quam suscipit </p>
                                    <p>Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic
                                        icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                    <div class=\"px-2\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-6\">
                                                <div class=\"row bg-light align-items-center text-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Weight</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">1 kg</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Country of Origin</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Agro Farm</p>
                                                    </div>
                                                </div>
                                                <div class=\"row bg-light text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Quality</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Organic</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Сheck</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Healthy</p>
                                                    </div>
                                                </div>
                                                <div class=\"row bg-light text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Min Weight</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">250 Kg</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    <div class=\"d-flex\">
                                        <img src=\"img/avatar.jpg\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                        <div class=\"\">
                                            <p class=\"mb-2\" style=\"font-size: 14px;\">April 12, 2024</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <h5>Jason Smith</h5>
                                                <div class=\"d-flex mb-3\">
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                            </div>
                                            <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                    <div class=\"d-flex\">
                                        <img src=\"img/avatar.jpg\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                        <div class=\"\">
                                            <p class=\"mb-2\" style=\"font-size: 14px;\">April 12, 2024</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <h5>Sam Peters</h5>
                                                <div class=\"d-flex mb-3\">
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                            </div>
                                            <p class=\"text-dark\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-vision\" role=\"tabpanel\">
                                    <p class=\"text-dark\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore. 3</p>
                                    <p class=\"mb-0\">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div>
                        <form action=\"#\">
                            <h4 class=\"mb-5 fw-bold\">Leave a Reply</h4>
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"border-bottom rounded\">
                                        <input type=\"text\" class=\"form-control border-0 me-4\" placeholder=\"Yur Name *\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"border-bottom rounded\">
                                        <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email *\">
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"border-bottom rounded my-4\">
                                        <textarea name=\"\" id=\"\" class=\"form-control border-0\" cols=\"30\" rows=\"8\" placeholder=\"Your Review *\" spellcheck=\"false\"></textarea>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"d-flex justify-content-between py-3 mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <p class=\"mb-0 me-3\">Please rate:</p>
                                            <div class=\"d-flex align-items-center\" style=\"font-size: 12px;\">
                                                <i class=\"fa fa-star text-muted\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                        </div>
                                        <a href=\"#\" class=\"btn border border-secondary text-primary rounded-pill px-4 py-3\"> Post Comment</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-xl-3\">
                    <div class=\"row g-4 fruite\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group w-100 mx-auto d-flex mb-4\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                            <div class=\"mb-4\">
                                <h4>Categories</h4>
                                <ul class=\"list-unstyled fruite-categorie\">
                                    ";
        // line 199
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 199, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 200
            echo "                                    <li>
                                        <div class=\"d-flex justify-content-between fruite-name\">
                                            <a href=\"";
            // line 202
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_products", ["category" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 202)]), "html", null, true);
            echo "\"><i class=\"fas fa-apple-alt me-2\"></i>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 202), "html", null, true);
            echo "</a>
                                            <span>(";
            // line 203
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "products", [], "any", false, false, false, 203)), "html", null, true);
            echo ")</span>
                                        </div>
                                    </li>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 207
        echo "
                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <h4 class=\"mb-4\">Featured products</h4>
                            <div class=\"d-flex align-items-center justify-content-start\">
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
                                    <img src=\"img/featur-1.jpg\" class=\"img-fluid rounded\" alt=\"Image\">
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
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
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
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
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
                            <div class=\"d-flex align-items-center justify-content-start\">
                                <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                    <img src=\"img/vegetable-item-4.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
                                    <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
                                    <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
            </div>
            <h1 class=\"fw-bold mb-0\">Related products</h1>
            <div class=\"vesitable\">
                <div class=\"owl-carousel vegetable-carousel justify-content-center\">
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-1.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-3.png\" class=\"img-fluid w-100 rounded-top bg-light\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Banana</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-4.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Bell Papper</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/single.html.twig";
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
        return array (  295 => 207,  285 => 203,  279 => 202,  275 => 200,  271 => 199,  111 => 41,  105 => 37,  103 => 36,  89 => 25,  85 => 24,  77 => 19,  59 => 3,  52 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Shop Detail</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Shop Detail</li>
        </ol>
    </div>
    <div class=\"container-fluid py-5 mt-5\">
        <div class=\"container py-5\">
            <div class=\"row g-4 mb-5\">
                <div class=\"col-lg-8 col-xl-9\">
                    <div class=\"row g-4\">
                        <div class=\"col-lg-6\">
                            <div class=\"border rounded\">
                                <a href=\"#\">
                                    <img src=\"{{ absolute_url(asset(product.image)) }}\" class=\"img-fluid rounded\" alt=\"Image\">
                                </a>
                            </div>
                        </div>
                        <div class=\"col-lg-6\">
                            <h4 class=\"fw-bold mb-3\">{{ product.name }}</h4>
                            <p class=\"mb-3\">{{ product.category.name }}</p>

                           <!-- <div class=\"d-flex mb-4\">
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star text-secondary\"></i>
                                <i class=\"fa fa-star\"></i>
                            </div>-->
                            <p class=\"mb-4\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.</p>
                            <p class=\"mb-4\">Susp endisse ultricies nisi vel quam suscipit. Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish</p>
                            {% if app.user and product.adder.id!=app.user.id and product.canTradeWith(app.user) %}
                            <button class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#trade-modal\">
                                Trade
                            </button>
                            {% endif %}
                        </div>
                        <div class=\"col-lg-12\">
                            <nav>
                                <div class=\"nav nav-tabs mb-3\">
                                    <button class=\"nav-link active border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                            id=\"nav-about-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-about\"
                                            aria-controls=\"nav-about\" aria-selected=\"true\">Description</button>
                                    <button class=\"nav-link border-white border-bottom-0\" type=\"button\" role=\"tab\"
                                            id=\"nav-mission-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#nav-mission\"
                                            aria-controls=\"nav-mission\" aria-selected=\"false\">Reviews</button>
                                </div>
                            </nav>
                            <div class=\"tab-content mb-5\">
                                <div class=\"tab-pane active\" id=\"nav-about\" role=\"tabpanel\" aria-labelledby=\"nav-about-tab\">
                                    <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic words etc.
                                        Susp endisse ultricies nisi vel quam suscipit </p>
                                    <p>Sabertooth peacock flounder; chain pickerel hatchetfish, pencilfish snailfish filefish Antarctic
                                        icefish goldeye aholehole trumpetfish pilot fish airbreathing catfish, electric ray sweeper.</p>
                                    <div class=\"px-2\">
                                        <div class=\"row g-4\">
                                            <div class=\"col-6\">
                                                <div class=\"row bg-light align-items-center text-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Weight</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">1 kg</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Country of Origin</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Agro Farm</p>
                                                    </div>
                                                </div>
                                                <div class=\"row bg-light text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Quality</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Organic</p>
                                                    </div>
                                                </div>
                                                <div class=\"row text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Сheck</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Healthy</p>
                                                    </div>
                                                </div>
                                                <div class=\"row bg-light text-center align-items-center justify-content-center py-2\">
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">Min Weight</p>
                                                    </div>
                                                    <div class=\"col-6\">
                                                        <p class=\"mb-0\">250 Kg</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-mission\" role=\"tabpanel\" aria-labelledby=\"nav-mission-tab\">
                                    <div class=\"d-flex\">
                                        <img src=\"img/avatar.jpg\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                        <div class=\"\">
                                            <p class=\"mb-2\" style=\"font-size: 14px;\">April 12, 2024</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <h5>Jason Smith</h5>
                                                <div class=\"d-flex mb-3\">
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                            </div>
                                            <p>The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                    <div class=\"d-flex\">
                                        <img src=\"img/avatar.jpg\" class=\"img-fluid rounded-circle p-3\" style=\"width: 100px; height: 100px;\" alt=\"\">
                                        <div class=\"\">
                                            <p class=\"mb-2\" style=\"font-size: 14px;\">April 12, 2024</p>
                                            <div class=\"d-flex justify-content-between\">
                                                <h5>Sam Peters</h5>
                                                <div class=\"d-flex mb-3\">
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star text-secondary\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                    <i class=\"fa fa-star\"></i>
                                                </div>
                                            </div>
                                            <p class=\"text-dark\">The generated Lorem Ipsum is therefore always free from repetition injected humour, or non-characteristic
                                                words etc. Susp endisse ultricies nisi vel quam suscipit </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"tab-pane\" id=\"nav-vision\" role=\"tabpanel\">
                                    <p class=\"text-dark\">Tempor erat elitr rebum at clita. Diam dolor diam ipsum et tempor sit. Aliqu diam
                                        amet diam et eos labore. 3</p>
                                    <p class=\"mb-0\">Diam dolor diam ipsum et tempor sit. Aliqu diam amet diam et eos labore.
                                        Clita erat ipsum et lorem et sit</p>
                                </div>
                            </div>
                        </div>
                        <form action=\"#\">
                            <h4 class=\"mb-5 fw-bold\">Leave a Reply</h4>
                            <div class=\"row g-4\">
                                <div class=\"col-lg-6\">
                                    <div class=\"border-bottom rounded\">
                                        <input type=\"text\" class=\"form-control border-0 me-4\" placeholder=\"Yur Name *\">
                                    </div>
                                </div>
                                <div class=\"col-lg-6\">
                                    <div class=\"border-bottom rounded\">
                                        <input type=\"email\" class=\"form-control border-0\" placeholder=\"Your Email *\">
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"border-bottom rounded my-4\">
                                        <textarea name=\"\" id=\"\" class=\"form-control border-0\" cols=\"30\" rows=\"8\" placeholder=\"Your Review *\" spellcheck=\"false\"></textarea>
                                    </div>
                                </div>
                                <div class=\"col-lg-12\">
                                    <div class=\"d-flex justify-content-between py-3 mb-5\">
                                        <div class=\"d-flex align-items-center\">
                                            <p class=\"mb-0 me-3\">Please rate:</p>
                                            <div class=\"d-flex align-items-center\" style=\"font-size: 12px;\">
                                                <i class=\"fa fa-star text-muted\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                                <i class=\"fa fa-star\"></i>
                                            </div>
                                        </div>
                                        <a href=\"#\" class=\"btn border border-secondary text-primary rounded-pill px-4 py-3\"> Post Comment</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class=\"col-lg-4 col-xl-3\">
                    <div class=\"row g-4 fruite\">
                        <div class=\"col-lg-12\">
                            <div class=\"input-group w-100 mx-auto d-flex mb-4\">
                                <input type=\"search\" class=\"form-control p-3\" placeholder=\"keywords\" aria-describedby=\"search-icon-1\">
                                <span id=\"search-icon-1\" class=\"input-group-text p-3\"><i class=\"fa fa-search\"></i></span>
                            </div>
                            <div class=\"mb-4\">
                                <h4>Categories</h4>
                                <ul class=\"list-unstyled fruite-categorie\">
                                    {% for c in categories %}
                                    <li>
                                        <div class=\"d-flex justify-content-between fruite-name\">
                                            <a href=\"{{ path('app_products',{category:c.id})}}\"><i class=\"fas fa-apple-alt me-2\"></i>{{ c.name }}</a>
                                            <span>({{ c.products|length }})</span>
                                        </div>
                                    </li>
                                    {% endfor %}

                                </ul>
                            </div>
                        </div>
                        <div class=\"col-lg-12\">
                            <h4 class=\"mb-4\">Featured products</h4>
                            <div class=\"d-flex align-items-center justify-content-start\">
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
                                    <img src=\"img/featur-1.jpg\" class=\"img-fluid rounded\" alt=\"Image\">
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
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
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
                                <div class=\"rounded\" style=\"width: 100px; height: 100px;\">
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
                            <div class=\"d-flex align-items-center justify-content-start\">
                                <div class=\"rounded me-4\" style=\"width: 100px; height: 100px;\">
                                    <img src=\"img/vegetable-item-4.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
                                    <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
                                    <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid rounded\" alt=\"\">
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
            </div>
            <h1 class=\"fw-bold mb-0\">Related products</h1>
            <div class=\"vesitable\">
                <div class=\"owl-carousel vegetable-carousel justify-content-center\">
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-1.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$4.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-3.png\" class=\"img-fluid w-100 rounded-top bg-light\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Banana</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-4.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Bell Papper</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-5.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Potatoes</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                    <div class=\"border border-primary rounded position-relative vesitable-item\">
                        <div class=\"vesitable-img\">
                            <img src=\"img/vegetable-item-6.jpg\" class=\"img-fluid w-100 rounded-top\" alt=\"\">
                        </div>
                        <div class=\"text-white bg-primary px-3 py-1 rounded position-absolute\" style=\"top: 10px; right: 10px;\">Vegetable</div>
                        <div class=\"p-4 pb-0 rounded-bottom\">
                            <h4>Parsely</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod te incididunt</p>
                            <div class=\"d-flex justify-content-between flex-lg-wrap\">
                                <p class=\"text-dark fs-5 fw-bold\">\$7.99 / kg</p>
                                <a href=\"#\" class=\"btn border border-secondary rounded-pill px-3 py-1 mb-4 text-primary\"><i class=\"fa fa-shopping-bag me-2 text-primary\"></i> Add to cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product End -->

{% endblock %}", "front/home/single.html.twig", "/Users/hassan/Downloads/app/templates/front/home/single.html.twig");
    }
}
