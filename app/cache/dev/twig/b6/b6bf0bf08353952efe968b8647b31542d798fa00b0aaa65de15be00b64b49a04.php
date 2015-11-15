<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_d8d4d6154866fc198e4ad5671ef722da8a53bd5425568eb625d81242b9c93f0f extends Twig_Template
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
        $__internal_eb7b1cf35f2f2229bd55c9a7906921accb6fec114e4e17e705d0009fbb32d002 = $this->env->getExtension("native_profiler");
        $__internal_eb7b1cf35f2f2229bd55c9a7906921accb6fec114e4e17e705d0009fbb32d002->enter($__internal_eb7b1cf35f2f2229bd55c9a7906921accb6fec114e4e17e705d0009fbb32d002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_eb7b1cf35f2f2229bd55c9a7906921accb6fec114e4e17e705d0009fbb32d002->leave($__internal_eb7b1cf35f2f2229bd55c9a7906921accb6fec114e4e17e705d0009fbb32d002_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
