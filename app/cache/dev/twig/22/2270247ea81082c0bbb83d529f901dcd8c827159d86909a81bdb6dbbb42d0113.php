<?php

/* AcmeDemoTwoBundle:Ventas:Another.html.twig */
class __TwigTemplate_ac6053a614075a4c27abab20b32d63035a01aeb73d633370886893ad89727e7c extends Twig_Template
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
        $__internal_1ad299a831f8b88a15f4d1a48d7379da0ae5a78d08248721b79ed0b02b18d5e1 = $this->env->getExtension("native_profiler");
        $__internal_1ad299a831f8b88a15f4d1a48d7379da0ae5a78d08248721b79ed0b02b18d5e1->enter($__internal_1ad299a831f8b88a15f4d1a48d7379da0ae5a78d08248721b79ed0b02b18d5e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:Another.html.twig"));

        // line 1
        echo "<strong>TEST ";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</strong>";
        
        $__internal_1ad299a831f8b88a15f4d1a48d7379da0ae5a78d08248721b79ed0b02b18d5e1->leave($__internal_1ad299a831f8b88a15f4d1a48d7379da0ae5a78d08248721b79ed0b02b18d5e1_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:Another.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <strong>TEST {{ value }}</strong>*/
