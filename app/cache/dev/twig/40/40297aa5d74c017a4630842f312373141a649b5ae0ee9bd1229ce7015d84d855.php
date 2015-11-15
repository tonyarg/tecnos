<?php

/* AcmeDemoTwoBundle:Default:login.html.twig */
class __TwigTemplate_c26297b5d42b3e7ce391cb115912b728a08d99848ab99dd0e724944431a3f923 extends Twig_Template
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
        $__internal_e8fea18db824d5b83cf3a4e7bcfb5788ad4e8a05d8fe7d07eca882bff7771d1c = $this->env->getExtension("native_profiler");
        $__internal_e8fea18db824d5b83cf3a4e7bcfb5788ad4e8a05d8fe7d07eca882bff7771d1c->enter($__internal_e8fea18db824d5b83cf3a4e7bcfb5788ad4e8a05d8fe7d07eca882bff7771d1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Default:login.html.twig"));

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
        
        $__internal_e8fea18db824d5b83cf3a4e7bcfb5788ad4e8a05d8fe7d07eca882bff7771d1c->leave($__internal_e8fea18db824d5b83cf3a4e7bcfb5788ad4e8a05d8fe7d07eca882bff7771d1c_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Default:login.html.twig";
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
