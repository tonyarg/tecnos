<?php

/* AcmeDemoTwoBundle::index.html.twig */
class __TwigTemplate_b27a6046650ed4c29ef3b48fc1d6cee28381ad7c4e69cb9631078eeb2e1e7b1d extends Twig_Template
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
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Tecnos";
    }

    // line 13
    public function block_userInformation($context, array $blocks = array())
    {
        // line 14
        echo "\t\t<div class=\"alert alert-info\" style=\"text-align:center;\" role=\"alert\">
      \t\t<strong>Bienvenido!</strong> Porfavor ingrese los datos para acceder al sistema.
    \t</div>
\t";
    }

    // line 18
    public function block_content($context, array $blocks = array())
    {
        // line 19
        echo "\t\t<div class=\"panel panel-info\">
\t      <div class=\"panel-heading\">
\t        <h3 class=\"panel-title\" style=\"text-align:center;\">Datos de usuario</h3>
\t      </div>
\t      <div class=\"panel-body\">
\t      \t";
        // line 24
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 25
            echo "\t    \t\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
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
        return array (  101 => 28,  98 => 27,  92 => 25,  90 => 24,  83 => 19,  80 => 18,  73 => 14,  70 => 13,  64 => 3,  59 => 42,  56 => 18,  54 => 13,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  26 => 3,  22 => 1,);
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
