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

/* front/home/trade/tradelines.html.twig */
class __TwigTemplate_5dee4859616dcfb506f9f245f7152677 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/trade/tradelines.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/trade/tradelines.html.twig", 1);
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
        <h1 class=\"text-center text-white display-6\">Line Trades</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Line Trades</li>
        </ol>
    </div>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">your product</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">target product</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                        ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lineTrades"]) || array_key_exists("lineTrades", $context) ? $context["lineTrades"] : (function () { throw new RuntimeError('Variable "lineTrades" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["l"]) {
            // line 27
            echo "                        <tr class=\"lineTrade\" id=\"line-trade-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 27), "html", null, true);
            echo "\" >
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "fromProduct", [], "any", false, false, false, 30), "image", [], "any", false, false, false, 30))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                    <div class=\"input-group-btn\">
                                        <a id=\"minus-";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "fromProduct", [], "any", false, false, false, 36), "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\" class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                            <i class=\"fa fa-minus\"></i>
                                        </a>
                                    </div>
                                    <input type=\"text\" id=\"value-quantity-";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "fromProduct", [], "any", false, false, false, 40), "id", [], "any", false, false, false, 40), "html", null, true);
            echo "\" data-value=\"";
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "fromProduct", [], "any", false, false, false, 40), "quanity", [], "any", false, false, false, 40) + 1), "html", null, true);
            echo "\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                                    <div class=\"input-group-btn\">
                                        <a  id=\"plus-";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "fromProduct", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42), "html", null, true);
            echo "\" class=\"btn btn-sm btn-plus rounded-circle bg-light border add\">
                                            <i class=\"fa fa-plus\"></i>
                                        </a>
                                    </div>
                                </div>

                            </td>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["l"], "toProduct", [], "any", false, false, false, 51), "image", [], "any", false, false, false, 51))), "html", null, true);
            echo "\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["l"], "toQuantity", [], "any", false, false, false, 55), "html", null, true);
            echo "</p>
                            </td>
                            <td>
                                <a class=\"btn btn-sm btn-plus rounded-circle bg-light border\" style=\"margin-top: 1.5em\" href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trade_lines_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["l"], "id", [], "any", false, false, false, 58)]), "html", null, true);
            echo "\">
                                    <i class=\"fa fa-times text-danger\"></i>
                                </a>

                            </td>

                        </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['l'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "
                    </tbody>
                </table>
            </div>

            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">

                        <a id=\"validate-trades\" class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\" type=\"button\">Validate Trades</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 83
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 84
        echo "    <script>
            const getInput = (id)=>{
                return document.querySelector('#value-quantity-'+id)
            }
            const setMinus = (productId)=>{
                const input = getInput(productId);
                const currentValue = parseInt(input.value)

                if(currentValue>1){
                   input.value = `\${currentValue-1}`
                }
            }
            const setPlus = (productId)=>{
                const input = getInput(productId);
                const currentValue = parseInt(input.value)
                const productQuantity = parseInt(input.getAttribute('data-value'))
                if(currentValue<productQuantity){
                    input.value = `\${currentValue+1}`
                }
            }

            document.querySelectorAll('.btn-minus').forEach(element=>{
                element.addEventListener('click',evt => {
                    evt.preventDefault()
                    const id = element.getAttribute('id').replace('minus-','')
                    setMinus(id)
                })
            })
            document.querySelectorAll('.btn-plus.add').forEach(element=>{
                element.addEventListener('click',evt => {
                    evt.preventDefault()
                    const id = element.getAttribute('id').replace('plus-','')
                    setPlus(id)
                })
            })
    </script>
    <script>

        document.querySelector('#validate-trades').addEventListener('click',async evt => {
            let lineTrades = document.querySelectorAll('.lineTrade')
            let formData = new FormData();
            lineTrades.forEach((element,index)=>{

                const lineId = element.getAttribute('id').replace('line-trade-','')
                const fromQuantity = element.querySelector('input').value
                formData.append(`\${lineId}`,`\${fromQuantity}`);
            })


            const path = \"";
        // line 133
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_trade_lines_validate");
        echo "\"
            try{
                const result = await fetch(path,{
                    method:'POST',
                    body:formData
                }).then(data=>{
                    return data.json()
                })
                if(result.status && result.status===200){
                    window.location.href =\" ";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades");
        echo "\"

                }
                else{
                    if(result.message){
                        alert(result.message);
                    }
                    else{
                        alert('something went wrong');

                    }
                }
            }catch (e){
                alert('something went wrong');

            }

        })
    </script>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/trade/tradelines.html.twig";
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
        return array (  251 => 142,  239 => 133,  188 => 84,  181 => 83,  158 => 66,  144 => 58,  138 => 55,  131 => 51,  119 => 42,  112 => 40,  105 => 36,  96 => 30,  89 => 27,  85 => 26,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block content %}
    <div class=\"container-fluid page-header py-5\">
        <h1 class=\"text-center text-white display-6\">Line Trades</h1>
        <ol class=\"breadcrumb justify-content-center mb-0\">
            <li class=\"breadcrumb-item\"><a href=\"#\">Home</a></li>
            <li class=\"breadcrumb-item\"><a href=\"#\">Pages</a></li>
            <li class=\"breadcrumb-item active text-white\">Line Trades</li>
        </ol>
    </div>
    <div class=\"container-fluid py-5\">
        <div class=\"container py-5\">
            <div class=\"table-responsive\">

                <table class=\"table\">
                    <thead>
                    <tr>
                        <th scope=\"col\">your product</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">target product</th>
                        <th scope=\"col\">Quantity</th>
                        <th scope=\"col\">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                        {% for l in lineTrades %}
                        <tr class=\"lineTrade\" id=\"line-trade-{{ l.id }}\" >
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ absolute_url(asset(l.fromProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <div class=\"input-group quantity mt-4\" style=\"width: 100px;\">
                                    <div class=\"input-group-btn\">
                                        <a id=\"minus-{{ l.fromProduct.id }}\" class=\"btn btn-sm btn-minus rounded-circle bg-light border\" >
                                            <i class=\"fa fa-minus\"></i>
                                        </a>
                                    </div>
                                    <input type=\"text\" id=\"value-quantity-{{ l.fromProduct.id }}\" data-value=\"{{ l.fromProduct.quanity+1 }}\" class=\"form-control form-control-sm text-center border-0\" value=\"1\">
                                    <div class=\"input-group-btn\">
                                        <a  id=\"plus-{{ l.fromProduct.id }}\" class=\"btn btn-sm btn-plus rounded-circle bg-light border add\">
                                            <i class=\"fa fa-plus\"></i>
                                        </a>
                                    </div>
                                </div>

                            </td>
                            <th scope=\"row\">
                                <div class=\"d-flex align-items-center\">
                                    <img src=\"{{ absolute_url(asset(l.toProduct.image)) }}\" class=\"img-fluid me-5 rounded-circle\" style=\"width: 80px; height: 80px;\" alt=\"\">
                                </div>
                            </th>
                            <td>
                                <p class=\"mb-0 mt-4\">{{ l.toQuantity }}</p>
                            </td>
                            <td>
                                <a class=\"btn btn-sm btn-plus rounded-circle bg-light border\" style=\"margin-top: 1.5em\" href=\"{{ path('app_trade_lines_delete',{id:l.id}) }}\">
                                    <i class=\"fa fa-times text-danger\"></i>
                                </a>

                            </td>

                        </tr>
                        {% endfor  %}

                    </tbody>
                </table>
            </div>

            <div class=\"row g-4 justify-content-end\">
                <div class=\"col-8\"></div>
                <div class=\"col-sm-8 col-md-7 col-lg-6 col-xl-4\">
                    <div class=\"bg-light rounded\">

                        <a id=\"validate-trades\" class=\"btn border-secondary rounded-pill px-4 py-3 text-primary text-uppercase mb-4 ms-4\" type=\"button\">Validate Trades</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script>
            const getInput = (id)=>{
                return document.querySelector('#value-quantity-'+id)
            }
            const setMinus = (productId)=>{
                const input = getInput(productId);
                const currentValue = parseInt(input.value)

                if(currentValue>1){
                   input.value = `\${currentValue-1}`
                }
            }
            const setPlus = (productId)=>{
                const input = getInput(productId);
                const currentValue = parseInt(input.value)
                const productQuantity = parseInt(input.getAttribute('data-value'))
                if(currentValue<productQuantity){
                    input.value = `\${currentValue+1}`
                }
            }

            document.querySelectorAll('.btn-minus').forEach(element=>{
                element.addEventListener('click',evt => {
                    evt.preventDefault()
                    const id = element.getAttribute('id').replace('minus-','')
                    setMinus(id)
                })
            })
            document.querySelectorAll('.btn-plus.add').forEach(element=>{
                element.addEventListener('click',evt => {
                    evt.preventDefault()
                    const id = element.getAttribute('id').replace('plus-','')
                    setPlus(id)
                })
            })
    </script>
    <script>

        document.querySelector('#validate-trades').addEventListener('click',async evt => {
            let lineTrades = document.querySelectorAll('.lineTrade')
            let formData = new FormData();
            lineTrades.forEach((element,index)=>{

                const lineId = element.getAttribute('id').replace('line-trade-','')
                const fromQuantity = element.querySelector('input').value
                formData.append(`\${lineId}`,`\${fromQuantity}`);
            })


            const path = \"{{ path('app_trade_lines_validate') }}\"
            try{
                const result = await fetch(path,{
                    method:'POST',
                    body:formData
                }).then(data=>{
                    return data.json()
                })
                if(result.status && result.status===200){
                    window.location.href =\" {{ path('app_profile_trades') }}\"

                }
                else{
                    if(result.message){
                        alert(result.message);
                    }
                    else{
                        alert('something went wrong');

                    }
                }
            }catch (e){
                alert('something went wrong');

            }

        })
    </script>
{% endblock %}", "front/home/trade/tradelines.html.twig", "/Users/hassan/Downloads/app-2/templates/front/home/trade/tradelines.html.twig");
    }
}
