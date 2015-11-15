<?php

/* AcmeDemoTwoBundle::index.html.twig */
class __TwigTemplate_f8cb7f25e8dd766a3dff0f49fde13af34ab42e112eab0437b6deb7b7dfd89b4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'userInformation' => array($this, 'block_userInformation'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f326bcd51c0bc0c1ecc7c17b1375d264d0641478fa1788b7d2e59f44a07bc093 = $this->env->getExtension("native_profiler");
        $__internal_f326bcd51c0bc0c1ecc7c17b1375d264d0641478fa1788b7d2e59f44a07bc093->enter($__internal_f326bcd51c0bc0c1ecc7c17b1375d264d0641478fa1788b7d2e59f44a07bc093_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle::index.html.twig"));

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
        // line 18
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        // line 42
        echo "</body>
</html>";
        
        $__internal_f326bcd51c0bc0c1ecc7c17b1375d264d0641478fa1788b7d2e59f44a07bc093->leave($__internal_f326bcd51c0bc0c1ecc7c17b1375d264d0641478fa1788b7d2e59f44a07bc093_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7c5e700770323b0c16866fcb36a1579cfc868df85b0225094b4e256d8cd49907 = $this->env->getExtension("native_profiler");
        $__internal_7c5e700770323b0c16866fcb36a1579cfc868df85b0225094b4e256d8cd49907->enter($__internal_7c5e700770323b0c16866fcb36a1579cfc868df85b0225094b4e256d8cd49907_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Tecnos";
        
        $__internal_7c5e700770323b0c16866fcb36a1579cfc868df85b0225094b4e256d8cd49907->leave($__internal_7c5e700770323b0c16866fcb36a1579cfc868df85b0225094b4e256d8cd49907_prof);

    }

    // line 13
    public function block_userInformation($context, array $blocks = array())
    {
        $__internal_4bff11ae228daeca213e82beaef23ab7a738b0b8221c2acd70ac091f1583af70 = $this->env->getExtension("native_profiler");
        $__internal_4bff11ae228daeca213e82beaef23ab7a738b0b8221c2acd70ac091f1583af70->enter($__internal_4bff11ae228daeca213e82beaef23ab7a738b0b8221c2acd70ac091f1583af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "userInformation"));

        // line 14
        echo "\t\t<div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">
      \t\t<strong>Bienvenido!</strong> Porfavor ingrese los datos para acceder al sistema.
    \t</div>
\t";
        
        $__internal_4bff11ae228daeca213e82beaef23ab7a738b0b8221c2acd70ac091f1583af70->leave($__internal_4bff11ae228daeca213e82beaef23ab7a738b0b8221c2acd70ac091f1583af70_prof);

    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        $__internal_6517f1d3e8785ea7cfac4d8b1676d207d0fa93d23f88cd4e0bd2d89fc6ac6501 = $this->env->getExtension("native_profiler");
        $__internal_6517f1d3e8785ea7cfac4d8b1676d207d0fa93d23f88cd4e0bd2d89fc6ac6501->enter($__internal_6517f1d3e8785ea7cfac4d8b1676d207d0fa93d23f88cd4e0bd2d89fc6ac6501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 19
        echo "\t\t<div class=\"panel panel-info\">
\t      <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\" style=\"text-align:center;\">Datos de usuario</h3>
\t      </div>
\t      <div class=\"panel-body\">
\t      \t";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 25
            echo "\t    \t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
\t\t\t";
        }
        // line 27
        echo "\t\t\t<div class=\"login-form\">
\t\t\t\t<form action=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t\t\t\t    <label for=\"username\">Username:</label>
\t\t\t\t    <input type=\"text\" id=\"username\" name=\"_username\" value=\"\" /></br>

\t\t\t\t    <label for=\"password\">Password:</label>
\t\t\t\t    <input type=\"password\" id=\"password\" name=\"_password\" /></br>

\t\t\t\t        <input type=\"hidden\" name=\"_target_path\" value=\"/home/\" />
\t\t\t\t    <button type=\"submit\">login</button>
\t\t\t\t</form>
\t\t\t</div>
\t      </div>
\t    </div>
\t";
        
        $__internal_6517f1d3e8785ea7cfac4d8b1676d207d0fa93d23f88cd4e0bd2d89fc6ac6501->leave($__internal_6517f1d3e8785ea7cfac4d8b1676d207d0fa93d23f88cd4e0bd2d89fc6ac6501_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 28,  119 => 27,  113 => 25,  111 => 24,  104 => 19,  98 => 18,  88 => 14,  82 => 13,  70 => 3,  62 => 42,  59 => 18,  57 => 13,  50 => 9,  46 => 8,  42 => 7,  38 => 6,  34 => 5,  29 => 3,  25 => 1,);
    }
}
/* <html>*/
/* <head>*/
/* <title>{% block title %}Tecnos{% endblock %}</title>*/
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
/* 		<div class="alert alert-info" style="text-align:center;" role="alert">*/
/*       		<strong>Bienvenido!</strong> Porfavor ingrese los datos para acceder al sistema.*/
/*     	</div>*/
/* 	{% endblock userInformation %}*/
/* 	{% block content %}*/
/* 		<div class="panel panel-info">*/
/* 	      <div class="panel-heading">*/
/* 	        <h3 class="panel-title" style="text-align:center;">Datos de usuario</h3>*/
/* 	      </div>*/
/* 	      <div class="panel-body">*/
/* 	      	{% if error %}*/
/* 	    		<div>{{ error.message }}</div>*/
/* 			{% endif %}*/
/* 			<div class="login-form">*/
/* 				<form action="{{ path('login_check') }}" method="post">*/
/* 				    <label for="username">Username:</label>*/
/* 				    <input type="text" id="username" name="_username" value="" /></br>*/
/* */
/* 				    <label for="password">Password:</label>*/
/* 				    <input type="password" id="password" name="_password" /></br>*/
/* */
/* 				        <input type="hidden" name="_target_path" value="/home/" />*/
/* 				    <button type="submit">login</button>*/
/* 				</form>*/
/* 			</div>*/
/* 	      </div>*/
/* 	    </div>*/
/* 	{% endblock content %}*/
/* </body>*/
/* </html>*/
