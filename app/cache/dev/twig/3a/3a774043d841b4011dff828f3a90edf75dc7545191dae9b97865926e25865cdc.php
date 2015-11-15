<?php

/* AcmeDemoTwoBundle:Repuestos:index.html.twig */
class __TwigTemplate_fcad5965f307317804b54008f9ab3d2145af3d4a7a499048e5394f66f50eb75c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'userInformation' => array($this, 'block_userInformation'),
            'content' => array($this, 'block_content'),
            'search' => array($this, 'block_search'),
            'left_content' => array($this, 'block_left_content'),
            'agregar_active' => array($this, 'block_agregar_active'),
            'lista_repuestos_active' => array($this, 'block_lista_repuestos_active'),
            'right_content_size' => array($this, 'block_right_content_size'),
            'right_content' => array($this, 'block_right_content'),
            'title_right_content' => array($this, 'block_title_right_content'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'jqueryScript' => array($this, 'block_jqueryScript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4b5667dc7955d3870a5f29b49d8a1f04cfe0f4ab7d623de029638c817a0904d3 = $this->env->getExtension("native_profiler");
        $__internal_4b5667dc7955d3870a5f29b49d8a1f04cfe0f4ab7d623de029638c817a0904d3->enter($__internal_4b5667dc7955d3870a5f29b49d8a1f04cfe0f4ab7d623de029638c817a0904d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:index.html.twig"));

        // line 1
        echo "<html>
<head>
<title>";
        // line 3
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
<meta charset=\"utf-8\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/bootstrap-theme.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/styles.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/bootstrap.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
 <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js\"></script>
</head>
<body>
\t";
        // line 13
        $this->displayBlock('userInformation', $context, $blocks);
        // line 23
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 62
        echo "\t";
        $this->displayBlock('jqueryScript', $context, $blocks);
        // line 70
        echo "</body>
</html>";
        
        $__internal_4b5667dc7955d3870a5f29b49d8a1f04cfe0f4ab7d623de029638c817a0904d3->leave($__internal_4b5667dc7955d3870a5f29b49d8a1f04cfe0f4ab7d623de029638c817a0904d3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_96eceac4cd18f00faeb547890ffb5d20bf6e84c86ae6e3529fa4df2f801e0607 = $this->env->getExtension("native_profiler");
        $__internal_96eceac4cd18f00faeb547890ffb5d20bf6e84c86ae6e3529fa4df2f801e0607->enter($__internal_96eceac4cd18f00faeb547890ffb5d20bf6e84c86ae6e3529fa4df2f801e0607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tecnos - Repuestos";
        
        $__internal_96eceac4cd18f00faeb547890ffb5d20bf6e84c86ae6e3529fa4df2f801e0607->leave($__internal_96eceac4cd18f00faeb547890ffb5d20bf6e84c86ae6e3529fa4df2f801e0607_prof);

    }

    // line 13
    public function block_userInformation($context, array $blocks = array())
    {
        $__internal_eb137e00b6e2639f6a86a582081ab36ba97a3a1473fc3bb14aca2d4bd84d38af = $this->env->getExtension("native_profiler");
        $__internal_eb137e00b6e2639f6a86a582081ab36ba97a3a1473fc3bb14aca2d4bd84d38af->enter($__internal_eb137e00b6e2639f6a86a582081ab36ba97a3a1473fc3bb14aca2d4bd84d38af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userInformation"));

        // line 14
        echo "\t  <div class=\"alert alert-info\" style=\"text-align:right;\" role=\"alert\">
\t    <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "</strong>
\t    ";
        // line 16
        if ($this->env->getExtension('security')->isGranted("ROLE_GERENTE")) {
            // line 17
            echo "\t    \t<a href=\"";
            echo $this->env->getExtension('routing')->getPath("tecnos_transacciones");
            echo "\"> Historial </a>
\t    ";
        }
        // line 18
        echo " 
\t    <a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("tecnos_home");
        echo "\">Inicio</a> 
\t    <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
\t  </div>  
\t";
        
        $__internal_eb137e00b6e2639f6a86a582081ab36ba97a3a1473fc3bb14aca2d4bd84d38af->leave($__internal_eb137e00b6e2639f6a86a582081ab36ba97a3a1473fc3bb14aca2d4bd84d38af_prof);

    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        $__internal_5b95dc11e986a8258d18bc4cd11666461256486d9ae82792abc89b71ea7df0bf = $this->env->getExtension("native_profiler");
        $__internal_5b95dc11e986a8258d18bc4cd11666461256486d9ae82792abc89b71ea7df0bf->enter($__internal_5b95dc11e986a8258d18bc4cd11666461256486d9ae82792abc89b71ea7df0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 24
        echo "\t\t<div class=\"container\" style=\"text-align:center;\">   
\t\t";
        // line 25
        $this->displayBlock('search', $context, $blocks);
        // line 34
        echo " 
\t\t    <div class=\"row\">
\t\t\t    \t<div class=\"col-xs-6 col-md-3\">
\t\t\t\t\t\t<ul class=\"nav nav-pills nav-stacked\">
\t\t    \t\t\t\t";
        // line 38
        $this->displayBlock('left_content', $context, $blocks);
        // line 42
        echo "\t\t\t\t\t\t</ul>
\t\t\t    \t</div>
\t\t\t    \t<div class=\"
\t\t\t    \t";
        // line 45
        $this->displayBlock('right_content_size', $context, $blocks);
        // line 47
        echo "\">
\t\t    \t";
        // line 48
        $this->displayBlock('right_content', $context, $blocks);
        // line 59
        echo "\t\t\t</div>
\t\t</div>
\t";
        
        $__internal_5b95dc11e986a8258d18bc4cd11666461256486d9ae82792abc89b71ea7df0bf->leave($__internal_5b95dc11e986a8258d18bc4cd11666461256486d9ae82792abc89b71ea7df0bf_prof);

    }

    // line 25
    public function block_search($context, array $blocks = array())
    {
        $__internal_6a5507bfa6d4c6f53ca97c31514abfb25e27102ffb3482f2771cd311b4928ac4 = $this->env->getExtension("native_profiler");
        $__internal_6a5507bfa6d4c6f53ca97c31514abfb25e27102ffb3482f2771cd311b4928ac4->enter($__internal_6a5507bfa6d4c6f53ca97c31514abfb25e27102ffb3482f2771cd311b4928ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search"));

        // line 26
        echo "    <form id=\"searchByName-form\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_repuestos_buscar");
        echo "\">
      <div class=\"input-group\">
      <input name=\"repuestoNombre\" type=\"text\" class=\"form-control\" placeholder=\"Buscar repuesto...\" required />
      <span class=\"input-group-btn\">
        <button id=\"search-button\" class=\"btn btn-default\" type=\"button\">Buscar</button>
      </span>
    </form>
\t\t    </div><!-- /input-group --></br>
\t\t";
        
        $__internal_6a5507bfa6d4c6f53ca97c31514abfb25e27102ffb3482f2771cd311b4928ac4->leave($__internal_6a5507bfa6d4c6f53ca97c31514abfb25e27102ffb3482f2771cd311b4928ac4_prof);

    }

    // line 38
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_afc4620dea813aa35baf9b74deab602824ae1155c3b9989c23de9733339ec118 = $this->env->getExtension("native_profiler");
        $__internal_afc4620dea813aa35baf9b74deab602824ae1155c3b9989c23de9733339ec118->enter($__internal_afc4620dea813aa35baf9b74deab602824ae1155c3b9989c23de9733339ec118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 39
        echo "\t\t\t\t\t\t      <li role=\"presentation\" class=\"";
        $this->displayBlock('agregar_active', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_repuestos_agregar");
        echo "\">Agregar repuestos</a></li>
\t\t\t\t\t\t      <li role=\"presentation\" class=\"";
        // line 40
        $this->displayBlock('lista_repuestos_active', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_repuestos_lista");
        echo "\">Lista repuestos</a></li>
\t\t    \t\t\t\t";
        
        $__internal_afc4620dea813aa35baf9b74deab602824ae1155c3b9989c23de9733339ec118->leave($__internal_afc4620dea813aa35baf9b74deab602824ae1155c3b9989c23de9733339ec118_prof);

    }

    // line 39
    public function block_agregar_active($context, array $blocks = array())
    {
        $__internal_c61773a0a9643b7e955fb48a99e43b8b24496ce99f1d2ad05d0a5006f2be937d = $this->env->getExtension("native_profiler");
        $__internal_c61773a0a9643b7e955fb48a99e43b8b24496ce99f1d2ad05d0a5006f2be937d->enter($__internal_c61773a0a9643b7e955fb48a99e43b8b24496ce99f1d2ad05d0a5006f2be937d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "agregar_active"));

        
        $__internal_c61773a0a9643b7e955fb48a99e43b8b24496ce99f1d2ad05d0a5006f2be937d->leave($__internal_c61773a0a9643b7e955fb48a99e43b8b24496ce99f1d2ad05d0a5006f2be937d_prof);

    }

    // line 40
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_0d6405d1a2986f6f227e41167dbe1843eeeceaaa62918b236bbae33b318e7f1f = $this->env->getExtension("native_profiler");
        $__internal_0d6405d1a2986f6f227e41167dbe1843eeeceaaa62918b236bbae33b318e7f1f->enter($__internal_0d6405d1a2986f6f227e41167dbe1843eeeceaaa62918b236bbae33b318e7f1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        
        $__internal_0d6405d1a2986f6f227e41167dbe1843eeeceaaa62918b236bbae33b318e7f1f->leave($__internal_0d6405d1a2986f6f227e41167dbe1843eeeceaaa62918b236bbae33b318e7f1f_prof);

    }

    // line 45
    public function block_right_content_size($context, array $blocks = array())
    {
        $__internal_a85006de7c603ee7095c566fc178ea2fd572e626bea65f20dd56e940152a8abe = $this->env->getExtension("native_profiler");
        $__internal_a85006de7c603ee7095c566fc178ea2fd572e626bea65f20dd56e940152a8abe->enter($__internal_a85006de7c603ee7095c566fc178ea2fd572e626bea65f20dd56e940152a8abe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content_size"));

        // line 46
        echo "\t\t\t    \t\tcol-xs-6 col-md-9
\t\t\t    \t";
        
        $__internal_a85006de7c603ee7095c566fc178ea2fd572e626bea65f20dd56e940152a8abe->leave($__internal_a85006de7c603ee7095c566fc178ea2fd572e626bea65f20dd56e940152a8abe_prof);

    }

    // line 48
    public function block_right_content($context, array $blocks = array())
    {
        $__internal_841cca09a104fbdc08bc789999d3b8d29479f3840ab1f69bfbc2f441b80390c5 = $this->env->getExtension("native_profiler");
        $__internal_841cca09a104fbdc08bc789999d3b8d29479f3840ab1f69bfbc2f441b80390c5->enter($__internal_841cca09a104fbdc08bc789999d3b8d29479f3840ab1f69bfbc2f441b80390c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content"));

        // line 49
        echo "\t\t\t\t\t\t<div class=\"panel panel-info\">
\t\t\t\t\t\t      <div class=\"panel-heading\">
\t\t\t\t\t\t        <h3 class=\"panel-title\">";
        // line 51
        $this->displayBlock('title_right_content', $context, $blocks);
        echo "</h3>
\t\t\t\t\t\t      </div>
\t\t\t\t\t\t      <div class=\"panel-body\">
\t\t\t\t\t\t        ";
        // line 54
        $this->displayBlock('content_right_content', $context, $blocks);
        // line 55
        echo "\t\t\t\t\t\t      </div>
\t\t\t\t\t\t</div>\t    \t
\t\t\t\t\t</div>
\t\t    \t";
        
        $__internal_841cca09a104fbdc08bc789999d3b8d29479f3840ab1f69bfbc2f441b80390c5->leave($__internal_841cca09a104fbdc08bc789999d3b8d29479f3840ab1f69bfbc2f441b80390c5_prof);

    }

    // line 51
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_53d2730728dcbb8db5523b14a740f807f29cdbd19c1a04db2f289a0b3d3bdca1 = $this->env->getExtension("native_profiler");
        $__internal_53d2730728dcbb8db5523b14a740f807f29cdbd19c1a04db2f289a0b3d3bdca1->enter($__internal_53d2730728dcbb8db5523b14a740f807f29cdbd19c1a04db2f289a0b3d3bdca1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        echo "Inicio";
        
        $__internal_53d2730728dcbb8db5523b14a740f807f29cdbd19c1a04db2f289a0b3d3bdca1->leave($__internal_53d2730728dcbb8db5523b14a740f807f29cdbd19c1a04db2f289a0b3d3bdca1_prof);

    }

    // line 54
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_2fe80890be2ed960ae31f2ded57e62b93ea151e55e9c588715ddf8f10b894a56 = $this->env->getExtension("native_profiler");
        $__internal_2fe80890be2ed960ae31f2ded57e62b93ea151e55e9c588715ddf8f10b894a56->enter($__internal_2fe80890be2ed960ae31f2ded57e62b93ea151e55e9c588715ddf8f10b894a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        echo "Index repuestos";
        
        $__internal_2fe80890be2ed960ae31f2ded57e62b93ea151e55e9c588715ddf8f10b894a56->leave($__internal_2fe80890be2ed960ae31f2ded57e62b93ea151e55e9c588715ddf8f10b894a56_prof);

    }

    // line 62
    public function block_jqueryScript($context, array $blocks = array())
    {
        $__internal_cc8fd502deba008077c37d13bb1f5e183c19436a4cfa6cd12ea1a05841270406 = $this->env->getExtension("native_profiler");
        $__internal_cc8fd502deba008077c37d13bb1f5e183c19436a4cfa6cd12ea1a05841270406->enter($__internal_cc8fd502deba008077c37d13bb1f5e183c19436a4cfa6cd12ea1a05841270406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jqueryScript"));

        // line 63
        echo "\t  <script>
\t  \$(\" #search-button \").click(
\t    function(){
\t      \$(\" #searchByName-form \").submit();
\t    });
\t  </script>
\t";
        
        $__internal_cc8fd502deba008077c37d13bb1f5e183c19436a4cfa6cd12ea1a05841270406->leave($__internal_cc8fd502deba008077c37d13bb1f5e183c19436a4cfa6cd12ea1a05841270406_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  313 => 63,  307 => 62,  295 => 54,  283 => 51,  273 => 55,  271 => 54,  265 => 51,  261 => 49,  255 => 48,  247 => 46,  241 => 45,  230 => 40,  219 => 39,  208 => 40,  201 => 39,  195 => 38,  178 => 26,  172 => 25,  163 => 59,  161 => 48,  158 => 47,  156 => 45,  151 => 42,  149 => 38,  143 => 34,  141 => 25,  138 => 24,  132 => 23,  122 => 20,  118 => 19,  115 => 18,  109 => 17,  107 => 16,  103 => 15,  100 => 14,  94 => 13,  82 => 3,  74 => 70,  71 => 62,  68 => 23,  66 => 13,  59 => 9,  55 => 8,  51 => 7,  47 => 6,  43 => 5,  38 => 3,  34 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <title>{% block title %}Tecnos - Repuestos{% endblock %}</title>*/
/* <meta charset="utf-8"/>*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/acmedemo/css/bootstrap-theme.css') }}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/acmedemo/css/styles.css') }}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/acmedemo/css/bootstrap-theme.min.css') }}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/acmedemo/css/bootstrap.css') }}" />*/
/* <link rel="stylesheet" type="text/css" href="{{ asset('bundles/acmedemo/css/bootstrap.min.css') }}" />*/
/*  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>*/
/* </head>*/
/* <body>*/
/* 	{% block userInformation %}*/
/* 	  <div class="alert alert-info" style="text-align:right;" role="alert">*/
/* 	    <strong>{{ app.user.username }}</strong>*/
/* 	    {% if is_granted('ROLE_GERENTE') %}*/
/* 	    	<a href="{{ path('tecnos_transacciones') }}"> Historial </a>*/
/* 	    {% endif %} */
/* 	    <a href="{{ path('tecnos_home') }}">Inicio</a> */
/* 	    <a href="{{ path('logout') }}">Salir</a>*/
/* 	  </div>  */
/* 	{% endblock %}*/
/* 	{% block content %}*/
/* 		<div class="container" style="text-align:center;">   */
/* 		{% block search %}*/
/*     <form id="searchByName-form" method="post" action="{{ path('tecnos_repuestos_buscar') }}">*/
/*       <div class="input-group">*/
/*       <input name="repuestoNombre" type="text" class="form-control" placeholder="Buscar repuesto..." required />*/
/*       <span class="input-group-btn">*/
/*         <button id="search-button" class="btn btn-default" type="button">Buscar</button>*/
/*       </span>*/
/*     </form>*/
/* 		    </div><!-- /input-group --></br>*/
/* 		{% endblock search %} */
/* 		    <div class="row">*/
/* 			    	<div class="col-xs-6 col-md-3">*/
/* 						<ul class="nav nav-pills nav-stacked">*/
/* 		    				{% block left_content %}*/
/* 						      <li role="presentation" class="{% block agregar_active %}{% endblock agregar_active %}"><a href="{{path('tecnos_repuestos_agregar')}}">Agregar repuestos</a></li>*/
/* 						      <li role="presentation" class="{% block lista_repuestos_active %}{% endblock lista_repuestos_active %}"><a href="{{path('tecnos_repuestos_lista')}}">Lista repuestos</a></li>*/
/* 		    				{% endblock left_content %}*/
/* 						</ul>*/
/* 			    	</div>*/
/* 			    	<div class="*/
/* 			    	{% block right_content_size %}*/
/* 			    		col-xs-6 col-md-9*/
/* 			    	{% endblock %}">*/
/* 		    	{% block right_content %}*/
/* 						<div class="panel panel-info">*/
/* 						      <div class="panel-heading">*/
/* 						        <h3 class="panel-title">{% block title_right_content %}Inicio{% endblock title_right_content %}</h3>*/
/* 						      </div>*/
/* 						      <div class="panel-body">*/
/* 						        {% block content_right_content %}Index repuestos{% endblock content_right_content %}*/
/* 						      </div>*/
/* 						</div>	    	*/
/* 					</div>*/
/* 		    	{% endblock right_content %}*/
/* 			</div>*/
/* 		</div>*/
/* 	{% endblock content %}*/
/* 	{% block jqueryScript %}*/
/* 	  <script>*/
/* 	  $(" #search-button ").click(*/
/* 	    function(){*/
/* 	      $(" #searchByName-form ").submit();*/
/* 	    });*/
/* 	  </script>*/
/* 	{% endblock %}*/
/* </body>*/
/* </html>*/
