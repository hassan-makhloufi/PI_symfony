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

/* front/profile/profile_base.html.twig */
class __TwigTemplate_3613fa0d6874d1ebe73b05e33973779d extends Template
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
            'tabcontent' => [$this, 'block_tabcontent'],
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
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "front/profile/profile_base.html.twig"));

        $this->parent = $this->loadTemplate("front/base.html.twig", "front/profile/profile_base.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\HttpFoundationExtension']->generateAbsoluteUrl($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/front/css/profile.css")), "html", null, true);
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
        echo "
    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"container\">
                <div class=\"card overflow-hidden fruite\">
                    <div class=\"card-body p-0 tab-class\">
                        <img src=\"https://www.bootdey.com/image/1352x300/6495ED/000000\" alt class=\"img-fluid\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-4 order-lg-1 order-2\">
                                <div class=\"d-flex align-items-center justify-content-around m-4\">
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-file fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">938</h4>
                                        <p class=\"mb-0 fs-4\">products</p>
                                    </div>
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-user fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">3,586</h4>
                                        <p class=\"mb-0 fs-4\">trades</p>
                                    </div>
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-check fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">2,659</h4>
                                        <p class=\"mb-0 fs-4\">appoitments</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 mt-n3 order-lg-2 order-1\">
                                <div class=\"mt-n5\">
                                    <div class=\"d-flex align-items-center justify-content-center mb-2\">
                                        <div class=\"linear-gradient d-flex align-items-center justify-content-center rounded-circle\" style=\"width: 110px; height: 110px;\" ;>
                                            <div class=\"border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden\" style=\"width: 100px; height: 100px;\" ;>
                                                <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt class=\"w-100 h-100\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <h5 class=\"fs-5 mb-0 fw-semibold\">";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "firstname", [], "any", false, false, false, 44), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "lastname", [], "any", false, false, false, 44), "html", null, true);
        echo "</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 order-last\">
                                <ul class=\"list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3\">

                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-dribbble\"></i>
                                        </a>
                                    </li>
                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-youtube\"></i>
                                        </a>
                                    </li>
                                    <li><button class=\"btn btn-primary\">connected</button></li>
                                </ul>
                            </div>
                        </div>
                        <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 72
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 72, $this->source); })()) == "my_products")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_products");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">My Products</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex py-2 m-2 bg-light rounded-pill ";
        // line 77
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 77, $this->source); })()) == "my_trades")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_trades");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Trades</span>
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 83
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 83, $this->source); })()) == "update_profile")) {
            echo " active { % else %} ";
        }
        echo " \"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_update");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Profile</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 88
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 88, $this->source); })()) == "appointments")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_appointments");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Appoitments</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 93
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 93, $this->source); })()) == "livraison-lines")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_lines");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">shippings-lines</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 98
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 98, $this->source); })()) == "livraisons")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">shippings</span>
                                </a>
                            </li>
                              <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill ";
        // line 103
        if (((isset($context["active"]) || array_key_exists("active", $context) ? $context["active"] : (function () { throw new RuntimeError('Variable "active" does not exist.', 103, $this->source); })()) == "reclamations")) {
            echo "active";
        } else {
            echo " ";
        }
        echo "\"  href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation");
        echo "\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">reclamations</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">

                        ";
        // line 112
        $this->displayBlock('tabcontent', $context, $blocks);
        // line 118
        echo "                </div>
        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 112
    public function block_tabcontent($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "tabcontent"));

        // line 113
        echo "
                            <!-- <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

                             </div>-->
                        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 122
    public function block_scripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "scripts"));

        // line 123
        echo "
     <script>
     currentLocation = {
         country:\"\",
         state:\"\",
         adress:\"\"
     }

    let lat = 33.892166;
    let lang = 9.561555;
    const locationText = document.querySelector('#location-text')
    const exactLocationElement = document.querySelector('#exact-location')
    const shipButton = document.querySelector('#ship')
    shipButton.addEventListener('click',async ev=> {
            const formData = new FormData();
            formData.append('country',currentLocation.country);
            formData.append('state',currentLocation.state);
            formData.append('adress',currentLocation.adress);
            let result = await fetch(\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison_create");
        echo "\",{
                method:'POST',
                body:formData
            }).then(res=>{
                return res.json();
            })
            if(result.status===200){
                window.location.href = \"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_livraison");
        echo "\";
            }




    })
  const saveChangesButton = document.querySelector('#save-location');
    saveChangesButton.addEventListener('click',async evt => {
        const exactLocation = await fetch(`https://geocode.maps.co/reverse?lat=\${lat}&lon=\${lang}&api_key=65e287387edeb078195716ybk0ecf88`).then(d=>{
            return d.json()
        })
        if(locationText.style.display==='none'){
            locationText.style.display = 'block'
        }
        if(shipButton.style.display==='none'){
            shipButton.style.display = 'block'
        }

        exactLocationElement.innerHTML = `\${exactLocation.address.country},\${exactLocation.address.state},\${exactLocation.address.state_district}`
        currentLocation.country = exactLocation.address.country
        currentLocation.state = exactLocation.address.state
        currentLocation.adress = exactLocation.address.state_district
    })
     setTimeout(function () {
  var map = L.map('map').setView([33.892166, 9.561555], 13);

  function onMapClick(e) {
     marker.setLatLng(e.latlng);
     lat = e.latlng.lat;
     lang = e.latlng.lng;
  }

map.on('click', onMapClick);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
}).addTo(map);

const marker = L.marker([33.892166, 9.561555]).addTo(map)
    .openPopup();
}, 2000);


</script>
<script>
    const editPath = \"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reclamation_update", ["id" => "reclamation-to-edit"]);
        echo "\"
    const input = document.querySelector('#reclamation-message')
    const form = document.querySelector('#reclamation-modal').querySelector('form')
    document.querySelectorAll('.edit-button').forEach(element=>{
        element.addEventListener('click',ev => {
                const id = element.getAttribute('id').replace('reclamation-edit-btn-','')
                const message = document.querySelector(`#reclamation-edit-input-\${id}`).value
                input.value = message
                const path = editPath.replace('reclamation-to-edit',`\${id}`);
                form.setAttribute('action',path)
        })

    })
</script>
<script>

    const responseContent = document.querySelector('#response-content')
   document.querySelectorAll('.response-button').forEach(element=>{
        element.addEventListener('click',ev => {
                const id = element.getAttribute('id').replace('response-btn-','')
                const message = document.querySelector(`#response-input-\${id}`).value
                responseContent.innerHTML = message

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
        return "front/profile/profile_base.html.twig";
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
        return array (  368 => 193,  320 => 148,  310 => 141,  290 => 123,  283 => 122,  272 => 113,  265 => 112,  255 => 118,  253 => 112,  235 => 103,  221 => 98,  207 => 93,  193 => 88,  181 => 83,  166 => 77,  152 => 72,  119 => 44,  80 => 7,  73 => 6,  62 => 3,  55 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'front/base.html.twig' %}
{% block stylesheets %}
    <link href=\"{{ absolute_url(asset('assets/front/css/profile.css')) }}\" rel=\"stylesheet\">

{% endblock %}
{% block content %}

    <div class=\"container-fluid contact py-5\">
        <div class=\"container py-5\">
            <div class=\"container\">
                <div class=\"card overflow-hidden fruite\">
                    <div class=\"card-body p-0 tab-class\">
                        <img src=\"https://www.bootdey.com/image/1352x300/6495ED/000000\" alt class=\"img-fluid\">
                        <div class=\"row align-items-center\">
                            <div class=\"col-lg-4 order-lg-1 order-2\">
                                <div class=\"d-flex align-items-center justify-content-around m-4\">
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-file fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">938</h4>
                                        <p class=\"mb-0 fs-4\">products</p>
                                    </div>
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-user fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">3,586</h4>
                                        <p class=\"mb-0 fs-4\">trades</p>
                                    </div>
                                    <div class=\"text-center\">
                                        <i class=\"fa fa-check fs-6 d-block mb-2\"></i>
                                        <h4 class=\"mb-0 fw-semibold lh-1\">2,659</h4>
                                        <p class=\"mb-0 fs-4\">appoitments</p>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 mt-n3 order-lg-2 order-1\">
                                <div class=\"mt-n5\">
                                    <div class=\"d-flex align-items-center justify-content-center mb-2\">
                                        <div class=\"linear-gradient d-flex align-items-center justify-content-center rounded-circle\" style=\"width: 110px; height: 110px;\" ;>
                                            <div class=\"border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden\" style=\"width: 100px; height: 100px;\" ;>
                                                <img src=\"https://bootdey.com/img/Content/avatar/avatar1.png\" alt class=\"w-100 h-100\">
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"text-center\">
                                        <h5 class=\"fs-5 mb-0 fw-semibold\">{{ app.user.firstname  }} {{ app.user.lastname }}</h5>
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-lg-4 order-last\">
                                <ul class=\"list-unstyled d-flex align-items-center justify-content-center justify-content-lg-start my-3 gap-3\">

                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-twitter\"></i>
                                        </a>
                                    </li>
                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-secondary d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-dribbble\"></i>
                                        </a>
                                    </li>
                                    <li class=\"position-relative\">
                                        <a class=\"text-white bg-danger d-flex align-items-center justify-content-center p-2 fs-4 rounded-circle \" href=\"javascript:void(0)\">
                                            <i class=\"fa fa-youtube\"></i>
                                        </a>
                                    </li>
                                    <li><button class=\"btn btn-primary\">connected</button></li>
                                </ul>
                            </div>
                        </div>
                        <ul class=\"nav nav-pills d-inline-flex text-center mb-5\">
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='my_products' %}active{% else %} {% endif %}\"  href=\"{{path('app_profile_products') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">My Products</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex py-2 m-2 bg-light rounded-pill {% if active=='my_trades' %}active{% else %} {% endif %}\"  href=\"{{path('app_profile_trades') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Trades</span>
                                </a>
                            </li>

                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='update_profile' %} active { % else %} {% endif %} \"  href=\"{{path('app_profile_update') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Profile</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='appointments' %}active{% else %} {% endif %}\"  href=\"{{path('app_profile_appointments') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">Appoitments</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='livraison-lines' %}active{% else %} {% endif %}\"  href=\"{{path('app_livraison_lines') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">shippings-lines</span>
                                </a>
                            </li>
                            <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='livraisons' %}active{% else %} {% endif %}\"  href=\"{{path('app_livraison') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">shippings</span>
                                </a>
                            </li>
                              <li class=\"nav-item\">
                                <a class=\"d-flex m-2 py-2 bg-light rounded-pill {% if active=='reclamations' %}active{% else %} {% endif %}\"  href=\"{{path('app_reclamation') }}\">
                                    <span class=\"text-dark\" style=\"width: 130px;\">reclamations</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=\"tab-content\">

                        {% block tabcontent %}

                            <!-- <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">

                             </div>-->
                        {% endblock %}
                </div>
        </div>
    </div>
{% endblock %}
        {% block scripts %}

     <script>
     currentLocation = {
         country:\"\",
         state:\"\",
         adress:\"\"
     }

    let lat = 33.892166;
    let lang = 9.561555;
    const locationText = document.querySelector('#location-text')
    const exactLocationElement = document.querySelector('#exact-location')
    const shipButton = document.querySelector('#ship')
    shipButton.addEventListener('click',async ev=> {
            const formData = new FormData();
            formData.append('country',currentLocation.country);
            formData.append('state',currentLocation.state);
            formData.append('adress',currentLocation.adress);
            let result = await fetch(\"{{ path('app_livraison_create') }}\",{
                method:'POST',
                body:formData
            }).then(res=>{
                return res.json();
            })
            if(result.status===200){
                window.location.href = \"{{ path('app_livraison') }}\";
            }




    })
  const saveChangesButton = document.querySelector('#save-location');
    saveChangesButton.addEventListener('click',async evt => {
        const exactLocation = await fetch(`https://geocode.maps.co/reverse?lat=\${lat}&lon=\${lang}&api_key=65e287387edeb078195716ybk0ecf88`).then(d=>{
            return d.json()
        })
        if(locationText.style.display==='none'){
            locationText.style.display = 'block'
        }
        if(shipButton.style.display==='none'){
            shipButton.style.display = 'block'
        }

        exactLocationElement.innerHTML = `\${exactLocation.address.country},\${exactLocation.address.state},\${exactLocation.address.state_district}`
        currentLocation.country = exactLocation.address.country
        currentLocation.state = exactLocation.address.state
        currentLocation.adress = exactLocation.address.state_district
    })
     setTimeout(function () {
  var map = L.map('map').setView([33.892166, 9.561555], 13);

  function onMapClick(e) {
     marker.setLatLng(e.latlng);
     lat = e.latlng.lat;
     lang = e.latlng.lng;
  }

map.on('click', onMapClick);
L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; <a href=\"https://www.openstreetmap.org/copyright\">OpenStreetMap</a> contributors'
}).addTo(map);

const marker = L.marker([33.892166, 9.561555]).addTo(map)
    .openPopup();
}, 2000);


</script>
<script>
    const editPath = \"{{ path('app_reclamation_update',{id:'reclamation-to-edit'}) }}\"
    const input = document.querySelector('#reclamation-message')
    const form = document.querySelector('#reclamation-modal').querySelector('form')
    document.querySelectorAll('.edit-button').forEach(element=>{
        element.addEventListener('click',ev => {
                const id = element.getAttribute('id').replace('reclamation-edit-btn-','')
                const message = document.querySelector(`#reclamation-edit-input-\${id}`).value
                input.value = message
                const path = editPath.replace('reclamation-to-edit',`\${id}`);
                form.setAttribute('action',path)
        })

    })
</script>
<script>

    const responseContent = document.querySelector('#response-content')
   document.querySelectorAll('.response-button').forEach(element=>{
        element.addEventListener('click',ev => {
                const id = element.getAttribute('id').replace('response-btn-','')
                const message = document.querySelector(`#response-input-\${id}`).value
                responseContent.innerHTML = message

        })

    })

</script>
{% endblock %}", "front/profile/profile_base.html.twig", "C:\\Users\\alaro\\Desktop\\training\\app\\templates\\front\\profile\\profile_base.html.twig");
    }
}
