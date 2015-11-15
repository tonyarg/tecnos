<?php

/* AcmeDemoTwoBundle::home.html.twig */
class __TwigTemplate_b0fa3da5e4931891e4c773caaeedfc7a4b4ca4dfce7bbf9717742070788eebf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle::index.html.twig", "AcmeDemoTwoBundle::home.html.twig", 1);
        $this->blocks = array(
            'userInformation' => array($this, 'block_userInformation'),
            'content' => array($this, 'block_content'),
            'jqueryScript' => array($this, 'block_jqueryScript'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_userInformation($context, array $blocks = array())
    {
        // line 4
        echo "  <div class=\"alert alert-info\" style=\"text-align:right;\" role=\"alert\">
    <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "username", array()), "html", null, true);
        echo "</strong> 
      ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_GERENTE")) {
            // line 7
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getPath("tecnos_transacciones");
            echo "\"> Historial </a>
      ";
        }
        // line 8
        echo " 
    <a href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("tecnos_home");
        echo "\">Inicio</a>  
    <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Salir</a>
  </div>  
";
    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        // line 15
        echo "  <div class=\"container\" style=\"text-align:center;\">
    <form id=\"searchByName-form\" method=\"post\" action=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("tecnos_repuestos_buscar");
        echo "\">
      <div class=\"input-group\">
      <input name=\"repuestoNombre\" type=\"text\" class=\"form-control\" placeholder=\"Buscar repuesto...\" required />
      <span class=\"input-group-btn\">
        <button id=\"search-button\" class=\"btn btn-default\" type=\"button\">Buscar</button>
      </span>
    </form>
    </div><!-- /input-group --></br>
    <div class=\"row\">
    \t<div class=\"col-xs-6 col-md-6\">
\t  \t\t<div class=\"alert alert-warning\">
\t  \t\t\t<h2><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("tecnos_repuestos_lista");
        echo "\">Repuestos</a></h2>
\t  \t\t</div>
    \t</div>
    \t<div class=\"col-xs-6 col-md-6\">
\t  \t\t<div class=\"alert alert-success\">
\t  \t\t\t<h2><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("tecnos_ventas");
        echo "\">Ventas</a></h2>
\t  \t\t</div>
    \t</div>
\t  </div>
  </div>
";
    }

    // line 38
    public function block_jqueryScript($context, array $blocks = array())
    {
        // line 39
        echo "  <script>
  \$(\" #search-button \").click(
    function(){
      \$(\" #searchByName-form \").submit();
    });
  </script>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle::home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 39,  100 => 38,  90 => 32,  82 => 27,  68 => 16,  65 => 15,  62 => 14,  55 => 10,  51 => 9,  48 => 8,  42 => 7,  40 => 6,  36 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle::index.html.twig" %}*/
/* */
/* {% block userInformation %}*/
/*   <div class="alert alert-info" style="text-align:right;" role="alert">*/
/*     <strong>{{ app.user.username }}</strong> */
/*       {% if is_granted('ROLE_GERENTE') %}*/
/*         <a href="{{ path('tecnos_transacciones') }}"> Historial </a>*/
/*       {% endif %} */
/*     <a href="{{ path('tecnos_home') }}">Inicio</a>  */
/*     <a href="{{ path('logout') }}">Salir</a>*/
/*   </div>  */
/* {% endblock %}*/
/* */
/* {% block content %}*/
/*   <div class="container" style="text-align:center;">*/
/*     <form id="searchByName-form" method="post" action="{{ path('tecnos_repuestos_buscar') }}">*/
/*       <div class="input-group">*/
/*       <input name="repuestoNombre" type="text" class="form-control" placeholder="Buscar repuesto..." required />*/
/*       <span class="input-group-btn">*/
/*         <button id="search-button" class="btn btn-default" type="button">Buscar</button>*/
/*       </span>*/
/*     </form>*/
/*     </div><!-- /input-group --></br>*/
/*     <div class="row">*/
/*     	<div class="col-xs-6 col-md-6">*/
/* 	  		<div class="alert alert-warning">*/
/* 	  			<h2><a href="{{ path('tecnos_repuestos_lista') }}">Repuestos</a></h2>*/
/* 	  		</div>*/
/*     	</div>*/
/*     	<div class="col-xs-6 col-md-6">*/
/* 	  		<div class="alert alert-success">*/
/* 	  			<h2><a href="{{ path('tecnos_ventas') }}">Ventas</a></h2>*/
/* 	  		</div>*/
/*     	</div>*/
/* 	  </div>*/
/*   </div>*/
/* {% endblock content %}*/
/* {% block jqueryScript %}*/
/*   <script>*/
/*   $(" #search-button ").click(*/
/*     function(){*/
/*       $(" #searchByName-form ").submit();*/
/*     });*/
/*   </script>*/
/* {% endblock %}*/
