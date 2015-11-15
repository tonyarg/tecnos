<?php

/* AcmeDemoTwoBundle::home.html.twig */
class __TwigTemplate_8608c68f170eab20e5aa1838fba87592cd29431cd6b96134b96a93577e4d1a84 extends Twig_Template
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
        $__internal_b7d07011e338c363af81a05ada50ff1f67fe1ad2d8e07265c2feac418d65e06f = $this->env->getExtension("native_profiler");
        $__internal_b7d07011e338c363af81a05ada50ff1f67fe1ad2d8e07265c2feac418d65e06f->enter($__internal_b7d07011e338c363af81a05ada50ff1f67fe1ad2d8e07265c2feac418d65e06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle::home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7d07011e338c363af81a05ada50ff1f67fe1ad2d8e07265c2feac418d65e06f->leave($__internal_b7d07011e338c363af81a05ada50ff1f67fe1ad2d8e07265c2feac418d65e06f_prof);

    }

    // line 3
    public function block_userInformation($context, array $blocks = array())
    {
        $__internal_18f2a56aac4f9cd67e6559eb64d9eece0ef525db8952db6f03afb1ee8c536b45 = $this->env->getExtension("native_profiler");
        $__internal_18f2a56aac4f9cd67e6559eb64d9eece0ef525db8952db6f03afb1ee8c536b45->enter($__internal_18f2a56aac4f9cd67e6559eb64d9eece0ef525db8952db6f03afb1ee8c536b45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userInformation"));

        // line 4
        echo "  <div class=\"alert alert-info\" style=\"text-align:right;\" role=\"alert\">
    <strong>";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
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
        
        $__internal_18f2a56aac4f9cd67e6559eb64d9eece0ef525db8952db6f03afb1ee8c536b45->leave($__internal_18f2a56aac4f9cd67e6559eb64d9eece0ef525db8952db6f03afb1ee8c536b45_prof);

    }

    // line 14
    public function block_content($context, array $blocks = array())
    {
        $__internal_9975f7ce06ed07d7026161b431991e756757f3e699ead9c62f6c731b2c6efaab = $this->env->getExtension("native_profiler");
        $__internal_9975f7ce06ed07d7026161b431991e756757f3e699ead9c62f6c731b2c6efaab->enter($__internal_9975f7ce06ed07d7026161b431991e756757f3e699ead9c62f6c731b2c6efaab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_9975f7ce06ed07d7026161b431991e756757f3e699ead9c62f6c731b2c6efaab->leave($__internal_9975f7ce06ed07d7026161b431991e756757f3e699ead9c62f6c731b2c6efaab_prof);

    }

    // line 38
    public function block_jqueryScript($context, array $blocks = array())
    {
        $__internal_389f7fae6e26c8cf75f8192728f361f49bc0f12fa4a747a0bfa87393c18ca8ef = $this->env->getExtension("native_profiler");
        $__internal_389f7fae6e26c8cf75f8192728f361f49bc0f12fa4a747a0bfa87393c18ca8ef->enter($__internal_389f7fae6e26c8cf75f8192728f361f49bc0f12fa4a747a0bfa87393c18ca8ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "jqueryScript"));

        // line 39
        echo "  <script>
  \$(\" #search-button \").click(
    function(){
      \$(\" #searchByName-form \").submit();
    });
  </script>
";
        
        $__internal_389f7fae6e26c8cf75f8192728f361f49bc0f12fa4a747a0bfa87393c18ca8ef->leave($__internal_389f7fae6e26c8cf75f8192728f361f49bc0f12fa4a747a0bfa87393c18ca8ef_prof);

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
        return array (  124 => 39,  118 => 38,  105 => 32,  97 => 27,  83 => 16,  80 => 15,  74 => 14,  64 => 10,  60 => 9,  57 => 8,  51 => 7,  49 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
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
