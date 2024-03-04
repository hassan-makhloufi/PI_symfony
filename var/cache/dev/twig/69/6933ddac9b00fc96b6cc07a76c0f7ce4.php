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

/* front/home/forum/single.html.twig */
class __TwigTemplate_64b9628c3c1f840b855d51e97ec741e1 extends Template
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/home/forum/single.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/home/forum/single.html.twig", 1);
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
        echo "    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/forum-detail.css")), "html", null, true);
        echo "\" rel=\"stylesheet\">

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 7
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <div class=\"container-fluid fruite py-5 forums\">
        <div class=\"container py-5\">

            <div class=\"forum-page-header\">
                <h2>
                    ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 13, $this->source); })()), "title", [], "any", false, false, false, 13), "html", null, true);
        echo "
                </h2>
                <div class=\"forum-page-topic\">
                    <a href=\"\" class=\"author\" style=\"color: #747d88;\">
                        <img class=\"profile-pict\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default-profile-pict.png")), "html", null, true);
        echo "\" alt=\"\" width=\"25\">
                     ";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18), "firstname", [], "any", false, false, false, 18), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 18, $this->source); })()), "author", [], "any", false, false, false, 18), "lastname", [], "any", false, false, false, 18), "html", null, true);
        echo "
                    </a>
                    <div>
                        ";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 21, $this->source); })()), "getTimeAgo", [], "method", false, false, false, 21), "html", null, true);
        echo "
                    </div>
                    <div class=\"forum-tags\">
                        <div class=\"tag\">
                            <a style=\"background-color: #3f88fd; border-top-left-radius: 3px;
                                    border-bottom-left-radius: 3px;\" href=\"\">
                                ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 27, $this->source); })()), "forumCategory", [], "any", false, false, false, 27), "name", [], "any", false, false, false, 27), "html", null, true);
        echo "
                            </a>
                        </div>

                    </div>
                    ";
        // line 32
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 32, $this->source); })()), "user", [], "any", false, false, false, 32)) {
            // line 33
            echo "                       ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 33, $this->source); })()), "isLikedByUser", [twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33)], "method", false, false, false, 33)) {
                // line 34
                echo "                           <div class=\"forum-react active\">
                               <a class=\"btn-like active\" href=\"\">
                                   <span class=\"material-icons md-18\">thumb_up</span>
                               </a>
                           </div>
                        ";
            } else {
                // line 40
                echo "                            <div class=\"forum-react\">
                                <a class=\"btn-like\" href=\"\">
                                    <span class=\"material-icons md-18\">thumb_up</span>
                                </a>
                            </div>
                       ";
            }
            // line 46
            echo "                        <a class=\"forum-reclamation\" id=\"reclamation-forum-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46), "html", null, true);
            echo "\" style=\"cursor: pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                            !
                        </a>
                    ";
        }
        // line 50
        echo "                </div>

            </div>


        </div>
        <div class=\"container content\">
            ";
        // line 57
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 57, $this->source); })()), "description", [], "any", false, false, false, 57), "html", null, true);
        echo "
            ";
        // line 58
        if (twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 58, $this->source); })()), "image", [], "any", false, false, false, 58)) {
            // line 59
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 59, $this->source); })()), "image", [], "any", false, false, false, 59))), "html", null, true);
            echo "\" alt=\"\"> 
            ";
        }
        // line 61
        echo "            <div class=\"responses-header\">
                ";
        // line 62
        echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 62, $this->source); })()), "comments", [], "any", false, false, false, 62)), "html", null, true);
        echo " comments
            </div>
            <div class=\"responses\">
                ";
        // line 65
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 65, $this->source); })()), "comments", [], "any", false, false, false, 65));
        foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
            // line 66
            echo "                    <div class=\"response\">
                        <div class=\"response-profile-pict\">
                            <img class=\"profile-pict\" src=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default-profile-pict.png")), "html", null, true);
            echo "\" alt=\"\" width=\"25\">
                        </div>
                        <div class=\"response-header\">
                            <div class=\"username\">
                                ";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 72), "firstname", [], "any", false, false, false, 72), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 72), "lastname", [], "any", false, false, false, 72), "html", null, true);
            echo " ,
                            </div>
                            <div class=\"date\">
                                ";
            // line 75
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "getTimeAgo", [], "method", false, false, false, 75), "html", null, true);
            echo "
                            </div>

                            ";
            // line 78
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["c"], "author", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)))) {
                // line 79
                echo "                                <a  href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 79), "postId" => twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79)]), "html", null, true);
                echo "\"> <i class=\"fa fa-trash\"></i>  </a>
                                <button class=\"edit-button\" id=\"edit-comment-";
                // line 80
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 80), "html", null, true);
                echo "\" data-bs-toggle=\"modal\" data-bs-target=\"#update-comment-modal\">
                                    <i class=\"fas fa-edit\"></i>
                                </button>



                            ";
            }
            // line 87
            echo "                            ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87)) {
                // line 88
                echo "                                <a class=\"forum-reclamation\" id=\"reclamation-comment-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 88), "html", null, true);
                echo "\" style=\"cursor: pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                                    !
                                </a>
                            ";
            }
            // line 92
            echo "                        </div>

                        <div class=\"response-body\" >
                          ";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 95), "html", null, true);
            echo "
                        </div>
                        <input id=\"content-";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "id", [], "any", false, false, false, 97), "html", null, true);
            echo "\" type=\"hidden\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["c"], "content", [], "any", false, false, false, 97), "html", null, true);
            echo "\">
                        

                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                ";
        if (array_key_exists("form", $context)) {
            // line 103
            echo "                    <div class=\"response\">
                        <div class=\"response-profile-pict\">
                            <img class=\"profile-pict\" src=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("default-profile-pict.png")), "html", null, true);
            echo "\" alt=\"\" width=\"25\">
                        </div>
                        <div class=\"response-header\">
                            <div class=\"username\">
                                comment this post ,
                            </div>


                        </div>
                        <div class=\"response-body\">
                            ";
            // line 115
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), 'form_start');
            echo "
                                <textarea class=\"w-100 form-control border-0 mb-4\" name=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\FormExtension']->getFieldName(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "content", [], "any", false, false, false, 116)), "html", null, true);
            echo "\" rows=\"5\" cols=\"10\" placeholder=\"Your Comment\"></textarea>

                                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">publish</button>

                            ";
            // line 120
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
            echo "
                        </div>

                    </div>
                ";
        }
        // line 125
        echo "
            </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 130
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 131
        echo "    <script>

        const updateInput = document.querySelector('#update_comment_input');
        const formUpdate = document.querySelector('#update_comment_form');
        let action = \"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_update", ["id" => "comment-id", "postId" => twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 135, $this->source); })()), "id", [], "any", false, false, false, 135)]), "html", null, true);
        echo "\";
        document.querySelectorAll('.edit-button').forEach(button=>{

            button.addEventListener('click',ev => {

                const commentId = button.getAttribute('id').replace('edit-comment-','')
             //   console.log(commentId);
                const content = document.querySelector('#content-'+commentId).value;

                formUpdate.setAttribute('action',action.replace('/comment-id/',`/\${commentId}/`))
                updateInput.value = content
            })
        })

    </script>
    <script>
        let likeDiv = document.querySelector('.forum-react')
        const path = \"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_forum_like", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["forum"]) || array_key_exists("forum", $context) ? $context["forum"] : (function () { throw new RuntimeError('Variable "forum" does not exist.', 152, $this->source); })()), "id", [], "any", false, false, false, 152)]), "html", null, true);
        echo "\"
        const likeButton = document.querySelector('.btn-like');
        const dislikeForum = ()=>{
                likeDiv.classList.remove('active')
                likeButton.classList.remove('active')
        }
        const likeForum = ()=>{

            likeDiv.classList.add('active')
            likeButton.classList.add('active')
        }
        likeButton.addEventListener('click',async evt => {
            evt.preventDefault();
             let content =  await fetch(path,{
                      method:'POST',
                      headers:{
                          'X-Requested-With': 'XMLHttpRequest'
                      }
                  }).then(response=>{
                      return response.json();
                  })
           if(content.status==200){
                if(content.action==='like'){
                    likeForum()
                }
                else{
                    dislikeForum()
                }
           }
           else{
               alert('something bad happened');
           }


        })
    </script>
    <script>
            const reclamationType = document.querySelector('#reclamation-type')
            document.querySelectorAll('.forum-reclamation').forEach(element=>{
                element.addEventListener('click',evt => {
                    const type = element.getAttribute('id')
                    if(type.includes('forum')){
                        const forum_id = type.replace('reclamation-forum-','')
                       reclamationType.setAttribute('name','forum_id')
                        reclamationType.value = forum_id;
                    }
                    else{
                        const comment_id = type.replace('reclamation-comment-','')
                        reclamationType.setAttribute('name','comment_id')
                        reclamationType.value = comment_id;
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
        return "front/home/forum/single.html.twig";
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
        return array (  346 => 152,  326 => 135,  320 => 131,  313 => 130,  302 => 125,  294 => 120,  287 => 116,  283 => 115,  270 => 105,  266 => 103,  263 => 102,  250 => 97,  245 => 95,  240 => 92,  232 => 88,  229 => 87,  219 => 80,  214 => 79,  212 => 78,  206 => 75,  198 => 72,  191 => 68,  187 => 66,  183 => 65,  177 => 62,  174 => 61,  168 => 59,  166 => 58,  162 => 57,  153 => 50,  145 => 46,  137 => 40,  129 => 34,  126 => 33,  124 => 32,  116 => 27,  107 => 21,  99 => 18,  95 => 17,  88 => 13,  81 => 8,  74 => 7,  64 => 4,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
    <link href=\"{{ absolute_url(asset('assets/front/css/forum-detail.css'))}}\" rel=\"stylesheet\">

{% endblock %}
{% block content %}
    <div class=\"container-fluid fruite py-5 forums\">
        <div class=\"container py-5\">

            <div class=\"forum-page-header\">
                <h2>
                    {{ forum.title }}
                </h2>
                <div class=\"forum-page-topic\">
                    <a href=\"\" class=\"author\" style=\"color: #747d88;\">
                        <img class=\"profile-pict\" src=\"{{ absolute_url(asset('default-profile-pict.png')) }}\" alt=\"\" width=\"25\">
                     {{ forum.author.firstname }} {{ forum.author.lastname  }}
                    </a>
                    <div>
                        {{ forum.getTimeAgo() }}
                    </div>
                    <div class=\"forum-tags\">
                        <div class=\"tag\">
                            <a style=\"background-color: #3f88fd; border-top-left-radius: 3px;
                                    border-bottom-left-radius: 3px;\" href=\"\">
                                {{ forum.forumCategory.name }}
                            </a>
                        </div>

                    </div>
                    {% if app.user %}
                       {% if forum.isLikedByUser(app.user) %}
                           <div class=\"forum-react active\">
                               <a class=\"btn-like active\" href=\"\">
                                   <span class=\"material-icons md-18\">thumb_up</span>
                               </a>
                           </div>
                        {% else %}
                            <div class=\"forum-react\">
                                <a class=\"btn-like\" href=\"\">
                                    <span class=\"material-icons md-18\">thumb_up</span>
                                </a>
                            </div>
                       {% endif %}
                        <a class=\"forum-reclamation\" id=\"reclamation-forum-{{ forum.id }}\" style=\"cursor: pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                            !
                        </a>
                    {% endif %}
                </div>

            </div>


        </div>
        <div class=\"container content\">
            {{forum.description}}
            {% if forum.image %}
                <img src=\"{{absolute_url(asset(forum.image))   }}\" alt=\"\"> 
            {% endif %}
            <div class=\"responses-header\">
                {{ forum.comments | length }} comments
            </div>
            <div class=\"responses\">
                {%  for c in forum.comments %}
                    <div class=\"response\">
                        <div class=\"response-profile-pict\">
                            <img class=\"profile-pict\" src=\"{{ absolute_url(asset('default-profile-pict.png')) }}\" alt=\"\" width=\"25\">
                        </div>
                        <div class=\"response-header\">
                            <div class=\"username\">
                                {{ c.author.firstname }} {{ c.author.lastname }} ,
                            </div>
                            <div class=\"date\">
                                {{ c.getTimeAgo() }}
                            </div>

                            {% if app.user and app.user.id ==c.author.id %}
                                <a  href=\"{{ path('app_comment_delete',{'id':c.id,'postId':forum.id}) }}\"> <i class=\"fa fa-trash\"></i>  </a>
                                <button class=\"edit-button\" id=\"edit-comment-{{ c.id }}\" data-bs-toggle=\"modal\" data-bs-target=\"#update-comment-modal\">
                                    <i class=\"fas fa-edit\"></i>
                                </button>



                            {% endif %}
                            {% if app.user %}
                                <a class=\"forum-reclamation\" id=\"reclamation-comment-{{ c.id }}\" style=\"cursor: pointer\" data-bs-toggle=\"modal\" data-bs-target=\"#reclamation-modal\">
                                    !
                                </a>
                            {% endif %}
                        </div>

                        <div class=\"response-body\" >
                          {{ c.content }}
                        </div>
                        <input id=\"content-{{ c.id }}\" type=\"hidden\" value=\"{{ c.content }}\">
                        

                    </div>
                {% endfor %}
                {% if form is defined %}
                    <div class=\"response\">
                        <div class=\"response-profile-pict\">
                            <img class=\"profile-pict\" src=\"{{ absolute_url(asset('default-profile-pict.png')) }}\" alt=\"\" width=\"25\">
                        </div>
                        <div class=\"response-header\">
                            <div class=\"username\">
                                comment this post ,
                            </div>


                        </div>
                        <div class=\"response-body\">
                            {{ form_start(form) }}
                                <textarea class=\"w-100 form-control border-0 mb-4\" name=\"{{ field_name(form.content) }}\" rows=\"5\" cols=\"10\" placeholder=\"Your Comment\"></textarea>

                                <button class=\"w-100 btn form-control border-secondary py-3 bg-white text-primary \" type=\"submit\">publish</button>

                            {{ form_end(form) }}
                        </div>

                    </div>
                {% endif %}

            </div>
        </div>
    </div>
{% endblock %}
{% block scripts %}
    <script>

        const updateInput = document.querySelector('#update_comment_input');
        const formUpdate = document.querySelector('#update_comment_form');
        let action = \"{{ path('app_comment_update',{id:'comment-id',postId:forum.id}) }}\";
        document.querySelectorAll('.edit-button').forEach(button=>{

            button.addEventListener('click',ev => {

                const commentId = button.getAttribute('id').replace('edit-comment-','')
             //   console.log(commentId);
                const content = document.querySelector('#content-'+commentId).value;

                formUpdate.setAttribute('action',action.replace('/comment-id/',`/\${commentId}/`))
                updateInput.value = content
            })
        })

    </script>
    <script>
        let likeDiv = document.querySelector('.forum-react')
        const path = \"{{ path('app_forum_like',{id:forum.id}) }}\"
        const likeButton = document.querySelector('.btn-like');
        const dislikeForum = ()=>{
                likeDiv.classList.remove('active')
                likeButton.classList.remove('active')
        }
        const likeForum = ()=>{

            likeDiv.classList.add('active')
            likeButton.classList.add('active')
        }
        likeButton.addEventListener('click',async evt => {
            evt.preventDefault();
             let content =  await fetch(path,{
                      method:'POST',
                      headers:{
                          'X-Requested-With': 'XMLHttpRequest'
                      }
                  }).then(response=>{
                      return response.json();
                  })
           if(content.status==200){
                if(content.action==='like'){
                    likeForum()
                }
                else{
                    dislikeForum()
                }
           }
           else{
               alert('something bad happened');
           }


        })
    </script>
    <script>
            const reclamationType = document.querySelector('#reclamation-type')
            document.querySelectorAll('.forum-reclamation').forEach(element=>{
                element.addEventListener('click',evt => {
                    const type = element.getAttribute('id')
                    if(type.includes('forum')){
                        const forum_id = type.replace('reclamation-forum-','')
                       reclamationType.setAttribute('name','forum_id')
                        reclamationType.value = forum_id;
                    }
                    else{
                        const comment_id = type.replace('reclamation-comment-','')
                        reclamationType.setAttribute('name','comment_id')
                        reclamationType.value = comment_id;
                    }

                })
            })


    </script>
{% endblock %}
", "front/home/forum/single.html.twig", "/Users/hassan/Downloads/app-2/templates/front/home/forum/single.html.twig");
    }
}
