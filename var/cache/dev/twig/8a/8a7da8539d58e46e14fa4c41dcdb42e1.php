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

/* front/home/forum/forums.html.twig */
class __TwigTemplate_8fdf93da197ec5a144d201ce75a342e5 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/forum/forums.html.twig"));

        // line 1
        echo "<a  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_create");
        echo "\" class=\"btn btn-primary\" >
    add a new forum
</a>
";
        // line 4
        if (array_key_exists("forums", $context)) {
            // line 5
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["forums"]) || array_key_exists("forums", $context) ? $context["forums"] : (function () { throw new RuntimeError('Variable "forums" does not exist.', 5, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                // line 6
                echo "        <div class=\"forum-topic\">
            <div class=\"profile-pict\">

                <img src=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default-profile-pict.png")), "html", null, true);
                echo "\" alt=\"\">
            </div>
            <div class=\"forum-topic-body\">
                <a class=\"forum-title\" href=\"";
                // line 12
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_single", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 12)]), "html", null, true);
                echo "\">
                    ";
                // line 13
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "title", [], "any", false, false, false, 13), "html", null, true);
                echo "
                </a>
                (";
                // line 15
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "likes", [], "any", false, false, false, 15)), "html", null, true);
                echo " likes)
                <div class=\"forum-topic-meta\">
                    <div class=\"forum-topic-tags\">
                        <div class=\"tags\">
                            <a href=\"\" style=\"color: white;background-color: #4c6aa8;\">
                                ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "forumCategory", [], "any", false, false, false, 20), "name", [], "any", false, false, false, 20), "html", null, true);
                echo "
                            </a>
                        </div>

                    </div>
                    <a href=\"\">  ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "author", [], "any", false, false, false, 25), "firstname", [], "any", false, false, false, 25), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "author", [], "any", false, false, false, 25), "lastname", [], "any", false, false, false, 25), "html", null, true);
                echo "
                        ,</a>
                    <a href=\"\">";
                // line 27
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "getTimeAgo", [], "method", false, false, false, 27), "html", null, true);
                echo "</a>
                    ";
                // line 28
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "author", [], "any", false, false, false, 28), "id", [], "any", false, false, false, 28)))) {
                    // line 29
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 29)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-trash\"></i>  </a>
                        <a href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_update", ["id" => twig_get_attribute($this->env, $this->source, $context["f"], "id", [], "any", false, false, false, 30)]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\"></i>  </a>

                    ";
                }
                // line 33
                echo "
                </div>
            </div>
            <div class=\"form-replies\">
                <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> ";
                // line 37
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["f"], "comments", [], "any", false, false, false, 37)), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 42
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["customForums"]) || array_key_exists("customForums", $context) ? $context["customForums"] : (function () { throw new RuntimeError('Variable "customForums" does not exist.', 42, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["forum"]) {
                // line 43
                echo "         ";
                $context["f"] = twig_first($this->env, $context["forum"]);
                // line 44
                echo "        <div class=\"forum-topic\">
            <div class=\"profile-pict\">

                <img src=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default-profile-pict.png")), "html", null, true);
                echo "\" alt=\"\">
            </div>
            <div class=\"forum-topic-body\">
                <a class=\"forum-title\" href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_single", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
                echo "\">
                    ";
                // line 51
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), "html", null, true);
                echo "
                </a>
                (";
                // line 53
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 53, $this->source); })()), "likes", [], "any", false, false, false, 53)), "html", null, true);
                echo " likes)
                <div class=\"forum-topic-meta\">
                    <div class=\"forum-topic-tags\">
                        <div class=\"tags\">
                            <a href=\"\" style=\"color: white;background-color: #4c6aa8;\">
                                ";
                // line 58
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 58, $this->source); })()), "forumCategory", [], "any", false, false, false, 58), "name", [], "any", false, false, false, 58), "html", null, true);
                echo "
                            </a>
                        </div>

                    </div>
                    <a href=\"\">  ";
                // line 63
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 63, $this->source); })()), "author", [], "any", false, false, false, 63), "firstname", [], "any", false, false, false, 63), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 63, $this->source); })()), "author", [], "any", false, false, false, 63), "lastname", [], "any", false, false, false, 63), "html", null, true);
                echo "
                        ,</a>
                    <a href=\"\">";
                // line 65
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 65, $this->source); })()), "getTimeAgo", [], "method", false, false, false, 65), "html", null, true);
                echo "</a>
                    ";
                // line 66
                if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 66, $this->source); })()), "author", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66)))) {
                    // line 67
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_delete", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)]), "html", null, true);
                    echo "\"> <i class=\"fa fa-trash\"></i>  </a>
                        <a href=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_update", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)]), "html", null, true);
                    echo "\"><i class=\"fas fa-edit\"></i>  </a>

                    ";
                }
                // line 71
                echo "
                </div>
            </div>
            <div class=\"form-replies\">
                <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> ";
                // line 75
                echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["f"]) || array_key_exists("f", $context) ? $context["f"] : (function () { throw new RuntimeError('Variable "f" does not exist.', 75, $this->source); })()), "comments", [], "any", false, false, false, 75)), "html", null, true);
                echo "
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['forum'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "front/home/forum/forums.html.twig";
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
        return array (  205 => 75,  199 => 71,  193 => 68,  188 => 67,  186 => 66,  182 => 65,  175 => 63,  167 => 58,  159 => 53,  154 => 51,  150 => 50,  144 => 47,  139 => 44,  136 => 43,  131 => 42,  120 => 37,  114 => 33,  108 => 30,  103 => 29,  101 => 28,  97 => 27,  90 => 25,  82 => 20,  74 => 15,  69 => 13,  65 => 12,  59 => 9,  54 => 6,  49 => 5,  47 => 4,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<a  href=\"{{ path('app_forum_create') }}\" class=\"btn btn-primary\" >
    add a new forum
</a>
{%  if forums is defined %}
    {%  for f in forums %}
        <div class=\"forum-topic\">
            <div class=\"profile-pict\">

                <img src=\"{{ absolute_url(asset('default-profile-pict.png'))}}\" alt=\"\">
            </div>
            <div class=\"forum-topic-body\">
                <a class=\"forum-title\" href=\"{{ path('app_forum_single',{id:f.id}) }}\">
                    {{ f.title }}
                </a>
                ({{ f.likes |length }} likes)
                <div class=\"forum-topic-meta\">
                    <div class=\"forum-topic-tags\">
                        <div class=\"tags\">
                            <a href=\"\" style=\"color: white;background-color: #4c6aa8;\">
                                {{ f.forumCategory.name }}
                            </a>
                        </div>

                    </div>
                    <a href=\"\">  {{ f.author.firstname }}  {{ f.author.lastname }}
                        ,</a>
                    <a href=\"\">{{ f.getTimeAgo() }}</a>
                    {% if app.user and app.user.id ==f.author.id %}
                        <a href=\"{{ path('app_forum_delete',{'id':f.id}) }}\"> <i class=\"fa fa-trash\"></i>  </a>
                        <a href=\"{{ path('app_forum_update',{'id':f.id}) }}\"><i class=\"fas fa-edit\"></i>  </a>

                    {% endif %}

                </div>
            </div>
            <div class=\"form-replies\">
                <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> {{ f.comments | length }}
            </div>
        </div>
    {% endfor %}
{% else %}
    {%  for forum in customForums %}
         {% set f = (forum | first) %}
        <div class=\"forum-topic\">
            <div class=\"profile-pict\">

                <img src=\"{{ absolute_url(asset('default-profile-pict.png'))}}\" alt=\"\">
            </div>
            <div class=\"forum-topic-body\">
                <a class=\"forum-title\" href=\"{{ path('app_forum_single',{id:f.id}) }}\">
                    {{ f.title }}
                </a>
                ({{ f.likes |length }} likes)
                <div class=\"forum-topic-meta\">
                    <div class=\"forum-topic-tags\">
                        <div class=\"tags\">
                            <a href=\"\" style=\"color: white;background-color: #4c6aa8;\">
                                {{ f.forumCategory.name }}
                            </a>
                        </div>

                    </div>
                    <a href=\"\">  {{ f.author.firstname }}  {{ f.author.lastname }}
                        ,</a>
                    <a href=\"\">{{ f.getTimeAgo() }}</a>
                    {% if app.user and app.user.id ==f.author.id %}
                        <a href=\"{{ path('app_forum_delete',{'id':f.id}) }}\"> <i class=\"fa fa-trash\"></i>  </a>
                        <a href=\"{{ path('app_forum_update',{'id':f.id}) }}\"><i class=\"fas fa-edit\"></i>  </a>

                    {% endif %}

                </div>
            </div>
            <div class=\"form-replies\">
                <i class=\"fa fa-comment\" aria-hidden=\"true\"></i> {{ f.comments | length }}
            </div>
        </div>
    {% endfor %}
{% endif %}
", "front/home/forum/forums.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\home\\forum\\forums.html.twig");
    }
}
