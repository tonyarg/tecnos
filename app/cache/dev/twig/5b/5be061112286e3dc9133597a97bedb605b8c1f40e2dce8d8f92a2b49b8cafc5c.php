<?php

/* AcmeDemoTwoBundle:Default:blog.html.twig */
class __TwigTemplate_b56b4029a1fd3cc290026e32bab3800b406d2888672175465fe4b0140d1c44f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c03ecb7ec0bf7466894d6903b9f5f8e9e8b9ed9056cb42b4f9c25fb0a0db7c9 = $this->env->getExtension("native_profiler");
        $__internal_3c03ecb7ec0bf7466894d6903b9f5f8e9e8b9ed9056cb42b4f9c25fb0a0db7c9->enter($__internal_3c03ecb7ec0bf7466894d6903b9f5f8e9e8b9ed9056cb42b4f9c25fb0a0db7c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Default:blog.html.twig"));

        // line 1
        echo "<html lang=\"es\">
<head>
\t<title>Test</title>
\t<meta charset=\"utf-8\" />
\t<style>
\t\tbody
\t\t{
\t\t\tbackground:black;
\t\t}
\t\t#container
\t\t{
\t\t\twidth:990px;
\t\t\tmargin:0 auto;
\t\t\tborder:1px #CCC;
\t\t}
\t\t.title-entry
\t\t{
\t\t\tfont-family: sans-serif;
\t\t\tcolor:white;
\t\t\tbackground:#e18728;
\t\t\ttext-transform: uppercase;

\t\t}
\t\t.post-entry
\t\t{
\t\t\tcolor:white;
\t\t\tfont-family: verdana;
\t\t}
\t</style>
</head>
<body>
\t<div id=\"container\">
\t\t<div class=\"title-entry\">
\t\t\t<h1>";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["entry"]) ? $context["entry"] : $this->getContext($context, "entry")), "html", null, true);
        echo "</h1>
\t\t</div>
\t\t<div class=\"post-entry\">
\t\t\t<p>Aca va el post bla bla bla bla</p>
\t\t</div>
\t\t<h3 style=\"color:#CCC;\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("logout");
        echo "\">Log Out</a></h3>
\t</div>
</body>
</html>
";
        
        $__internal_3c03ecb7ec0bf7466894d6903b9f5f8e9e8b9ed9056cb42b4f9c25fb0a0db7c9->leave($__internal_3c03ecb7ec0bf7466894d6903b9f5f8e9e8b9ed9056cb42b4f9c25fb0a0db7c9_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Default:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 39,  57 => 34,  22 => 1,);
    }
}
/* <html lang="es">*/
/* <head>*/
/* 	<title>Test</title>*/
/* 	<meta charset="utf-8" />*/
/* 	<style>*/
/* 		body*/
/* 		{*/
/* 			background:black;*/
/* 		}*/
/* 		#container*/
/* 		{*/
/* 			width:990px;*/
/* 			margin:0 auto;*/
/* 			border:1px #CCC;*/
/* 		}*/
/* 		.title-entry*/
/* 		{*/
/* 			font-family: sans-serif;*/
/* 			color:white;*/
/* 			background:#e18728;*/
/* 			text-transform: uppercase;*/
/* */
/* 		}*/
/* 		.post-entry*/
/* 		{*/
/* 			color:white;*/
/* 			font-family: verdana;*/
/* 		}*/
/* 	</style>*/
/* </head>*/
/* <body>*/
/* 	<div id="container">*/
/* 		<div class="title-entry">*/
/* 			<h1>{{entry}}</h1>*/
/* 		</div>*/
/* 		<div class="post-entry">*/
/* 			<p>Aca va el post bla bla bla bla</p>*/
/* 		</div>*/
/* 		<h3 style="color:#CCC;"><a href="{{ path('logout')}}">Log Out</a></h3>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
/* */
