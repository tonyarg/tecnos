<?php

/* AcmeDemoTwoBundle:Login:success.html.twig */
class __TwigTemplate_4a873c94b8216c74a1d4edfdf4807b3964adb1dcd330f0e845b135dbfe138e8b extends Twig_Template
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
        $__internal_c12df9c160c866fedc1eecaaee6a779f0718b0bd7e81f4d742a5875375cc8f37 = $this->env->getExtension("native_profiler");
        $__internal_c12df9c160c866fedc1eecaaee6a779f0718b0bd7e81f4d742a5875375cc8f37->enter($__internal_c12df9c160c866fedc1eecaaee6a779f0718b0bd7e81f4d742a5875375cc8f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Login:success.html.twig"));

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
\t\t\tAll is working correctly!
\t\t\t<p>";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t\t<p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "password", array()), "html", null, true);
        echo "</p>
\t\t</div>
\t</div>
</body>
</html>
";
        
        $__internal_c12df9c160c866fedc1eecaaee6a779f0718b0bd7e81f4d742a5875375cc8f37->leave($__internal_c12df9c160c866fedc1eecaaee6a779f0718b0bd7e81f4d742a5875375cc8f37_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Login:success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 36,  58 => 35,  22 => 1,);
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
/* 			All is working correctly!*/
/* 			<p>{{ user.username }}</p>*/
/* 			<p>{{ user.password }}</p>*/
/* 		</div>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
/* */
