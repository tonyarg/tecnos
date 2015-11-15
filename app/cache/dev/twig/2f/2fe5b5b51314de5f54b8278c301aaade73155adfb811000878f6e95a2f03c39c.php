<?php

/* AcmeDemoTwoBundle:Default:index.html.twig */
class __TwigTemplate_f07132b6e9b01a0b8420c540413bd56aaae4a46dea4ab40b373e01bd8ac7c5e4 extends Twig_Template
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
        $__internal_46b0ca624dce842e240a91e77ffaf54b4c798f1dc4ff1bfbac4e095cc463eda2 = $this->env->getExtension("native_profiler");
        $__internal_46b0ca624dce842e240a91e77ffaf54b4c798f1dc4ff1bfbac4e095cc463eda2->enter($__internal_46b0ca624dce842e240a91e77ffaf54b4c798f1dc4ff1bfbac4e095cc463eda2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Default:index.html.twig"));

        // line 1
        echo "<html lang=\"es\">
<head>
\t<title>Test</title>
\t<meta charset=\"utf-8\" />
</head>
<body>
\t<div style=\"background:black; color:white;\">
\t\t<h1>Hello ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
\t</div>
</body>
</html>
";
        
        $__internal_46b0ca624dce842e240a91e77ffaf54b4c798f1dc4ff1bfbac4e095cc463eda2->leave($__internal_46b0ca624dce842e240a91e77ffaf54b4c798f1dc4ff1bfbac4e095cc463eda2_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 8,  22 => 1,);
    }
}
/* <html lang="es">*/
/* <head>*/
/* 	<title>Test</title>*/
/* 	<meta charset="utf-8" />*/
/* </head>*/
/* <body>*/
/* 	<div style="background:black; color:white;">*/
/* 		<h1>Hello {{ name }}!</h1>*/
/* 	</div>*/
/* </body>*/
/* </html>*/
/* */
