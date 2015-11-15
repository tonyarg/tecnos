<?php

/* AcmeDemoTwoBundle:Login:login.html.twig */
class __TwigTemplate_a5fca6f0ec0a0206aef36dadd78dfe5b77b83e4da1846f5791d0df046a99863d extends Twig_Template
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
        $__internal_d5e113000b4010d80ca483e70726c9417eca1b0888d2d14ce91ac92272dd6f93 = $this->env->getExtension("native_profiler");
        $__internal_d5e113000b4010d80ca483e70726c9417eca1b0888d2d14ce91ac92272dd6f93->enter($__internal_d5e113000b4010d80ca483e70726c9417eca1b0888d2d14ce91ac92272dd6f93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Login:login.html.twig"));

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
\t\t\t";
        // line 34
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
\t\t\t";
        // line 36
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
\t</div>
</body>
</html>
";
        
        $__internal_d5e113000b4010d80ca483e70726c9417eca1b0888d2d14ce91ac92272dd6f93->leave($__internal_d5e113000b4010d80ca483e70726c9417eca1b0888d2d14ce91ac92272dd6f93_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Login:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 36,  61 => 35,  57 => 34,  22 => 1,);
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
/* 			{{ form_start(form) }}*/
/* 			{{ form_widget(form) }}*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
/* */
