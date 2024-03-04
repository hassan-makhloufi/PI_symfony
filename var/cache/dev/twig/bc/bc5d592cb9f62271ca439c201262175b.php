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

/* front/home/forum/list.html.twig */
class __TwigTemplate_8c4e64f78e3fcd18d5fa8ddc67b075dd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/forum/list.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/forum/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 2
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 3
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/forum.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 6
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 7
        echo "    <div class=\"container-fluid fruite py-5 forums\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh fruits shop</h1>

            <div class=\"row g-4\">
                <div class=\"row g-4\">

                    <div class=\"col-6\"></div>
                    <div class=\"col-xl-3\">
                        <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                            <label for=\"fruits\">Default Sorting:</label>
                            <select id=\"forum-sort\" name=\"fruitlist\" class=\"border-0 form-select-sm bg-light me-3\" form=\"fruitform\">
                                <option value=\"0\">Nothing</option>
                                <option value=\"1\">Number Of Likes</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"row g-4\">

                        <div class=\"col-lg-12\">
                            <div class=\"mb-3\">
                                <h4>Categories</h4>
                                <ul class=\"list-unstyled fruite-categorie\">
                                    <li>
                                        ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["forumCategories"]) || array_key_exists("forumCategories", $context) ? $context["forumCategories"] : (function () { throw new RuntimeError('Variable "forumCategories" does not exist.', 34, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 35
            echo "                                        <div class=\"d-flex justify-content-between fruite-name\">
                                            <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "name", [], "any", false, false, false, 36), "html", null, true);
            echo "</a>
                                            <span> (";
            // line 37
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "forums", [], "any", false, false, false, 37)), "html", null, true);
            echo ")</span>
                                        </div>

                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-9\" style=\"padding-top: 40px; position: relative\" id=\"content\">
                    ";
        // line 51
        $this->loadTemplate("front/home/forum/forums.html.twig", "front/home/forum/list.html.twig", 51)->display(twig_array_merge($context, ["forums" => (isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 51, $this->source); })())]));
        // line 52
        echo "


                </div>

            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 61
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 62
        echo "    <script>
        const select = document.querySelector('#forum-sort')
        const content = document.querySelector('#content')
        const baseUrl =\"";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum");
        echo "\"
        select.addEventListener('change',evt => {
            fetch(baseUrl+`?sort=\${select.value}`,{
                headers:{
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(data=>{
                return data.json()
            }).then(d=>{
               if(d.status==200){
                   content.innerHTML = d.data
               }
               else{
                alert('something bad happened')
               }

            })

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
        return "front/home/forum/list.html.twig";
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
        return array (  170 => 65,  165 => 62,  158 => 61,  143 => 52,  141 => 51,  129 => 41,  119 => 37,  115 => 36,  112 => 35,  108 => 34,  79 => 7,  72 => 6,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ absolute_url(asset('assets/front/css/forum.css'))}}\" rel=\"stylesheet\">

{% endblock %}
{% block content %}
    <div class=\"container-fluid fruite py-5 forums\">
        <div class=\"container py-5\">
            <h1 class=\"mb-4\">Fresh fruits shop</h1>

            <div class=\"row g-4\">
                <div class=\"row g-4\">

                    <div class=\"col-6\"></div>
                    <div class=\"col-xl-3\">
                        <div class=\"bg-light ps-3 py-3 rounded d-flex justify-content-between mb-4\">
                            <label for=\"fruits\">Default Sorting:</label>
                            <select id=\"forum-sort\" name=\"fruitlist\" class=\"border-0 form-select-sm bg-light me-3\" form=\"fruitform\">
                                <option value=\"0\">Nothing</option>
                                <option value=\"1\">Number Of Likes</option>

                            </select>
                        </div>
                    </div>
                </div>
                <div class=\"col-lg-3\">
                    <div class=\"row g-4\">

                        <div class=\"col-lg-12\">
                            <div class=\"mb-3\">
                                <h4>Categories</h4>
                                <ul class=\"list-unstyled fruite-categorie\">
                                    <li>
                                        {% for c in forumCategories %}
                                        <div class=\"d-flex justify-content-between fruite-name\">
                                            <a href=\"#\"><i class=\"fas fa-apple-alt me-2\"></i>{{ c.name }}</a>
                                            <span> ({{ c.forums | length }})</span>
                                        </div>

                                        {% endfor %}
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class=\"col-lg-9\" style=\"padding-top: 40px; position: relative\" id=\"content\">
                    {% include 'front/home/forum/forums.html.twig' with {'forums' : forums} %}



                </div>

            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script>
        const select = document.querySelector('#forum-sort')
        const content = document.querySelector('#content')
        const baseUrl =\"{{ path('app_forum') }}\"
        select.addEventListener('change',evt => {
            fetch(baseUrl+`?sort=\${select.value}`,{
                headers:{
                    'X-Requested-With': 'XMLHttpRequest'
                }
            }).then(data=>{
                return data.json()
            }).then(d=>{
               if(d.status==200){
                   content.innerHTML = d.data
               }
               else{
                alert('something bad happened')
               }

            })

        })

    </script>
{% endblock %}", "front/home/forum/list.html.twig", "/Users/hassan/Downloads/app-2/templates/front/home/forum/list.html.twig");
    }
}
