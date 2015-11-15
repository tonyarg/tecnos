<?php

/* AcmeDemoTwoBundle:Repuestos:index.html.twig */
class __TwigTemplate_cb8ca1fc97610ab520bc6bae6ae5b5c2570dc0189d795a6572db2b155a137e9c extends Twig_Template
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
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Tecnos - Repuestos";
    }

    // line 13
    public function block_userInformation($context, array $blocks = array())
    {
        // line 14
        echo "\t  <div class=\"alert alert-info\" style=\"text-align:right;\" role=\"alert\">
\t    <strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
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
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 25
    public function block_search($context, array $blocks = array())
    {
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
    }

    // line 38
    public function block_left_content($context, array $blocks = array())
    {
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
    }

    // line 39
    public function block_agregar_active($context, array $blocks = array())
    {
    }

    // line 40
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
    }

    // line 45
    public function block_right_content_size($context, array $blocks = array())
    {
        // line 46
        echo "\t\t\t    \t\tcol-xs-6 col-md-9
\t\t\t    \t";
    }

    // line 48
    public function block_right_content($context, array $blocks = array())
    {
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
    }

    // line 51
    public function block_title_right_content($context, array $blocks = array())
    {
        echo "Inicio";
    }

    // line 54
    public function block_content_right_content($context, array $blocks = array())
    {
        echo "Index repuestos";
    }

    // line 62
    public function block_jqueryScript($context, array $blocks = array())
    {
        // line 63
        echo "\t  <script>
\t  \$(\" #search-button \").click(
\t    function(){
\t      \$(\" #searchByName-form \").submit();
\t    });
\t  </script>
\t";
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
        return array (  238 => 63,  235 => 62,  229 => 54,  223 => 51,  216 => 55,  214 => 54,  208 => 51,  204 => 49,  201 => 48,  196 => 46,  193 => 45,  188 => 40,  183 => 39,  175 => 40,  168 => 39,  165 => 38,  151 => 26,  148 => 25,  142 => 59,  140 => 48,  137 => 47,  135 => 45,  130 => 42,  128 => 38,  122 => 34,  120 => 25,  117 => 24,  114 => 23,  107 => 20,  103 => 19,  100 => 18,  94 => 17,  92 => 16,  88 => 15,  85 => 14,  82 => 13,  76 => 3,  71 => 70,  68 => 62,  65 => 23,  63 => 13,  56 => 9,  52 => 8,  48 => 7,  44 => 6,  40 => 5,  35 => 3,  31 => 1,);
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
