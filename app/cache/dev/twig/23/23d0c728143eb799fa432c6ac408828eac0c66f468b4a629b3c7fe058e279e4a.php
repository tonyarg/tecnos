<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_8b3ee2d190a785a260bf76feb7c788cb3c34ed900abce3b98f636c1a12c031d7 extends Twig_Template
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
        $__internal_b17df612a51e4d1992f9aa56bb09f5eaa3e13eeaa7215f5d4bde1c317ee4499f = $this->env->getExtension("native_profiler");
        $__internal_b17df612a51e4d1992f9aa56bb09f5eaa3e13eeaa7215f5d4bde1c317ee4499f->enter($__internal_b17df612a51e4d1992f9aa56bb09f5eaa3e13eeaa7215f5d4bde1c317ee4499f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_b17df612a51e4d1992f9aa56bb09f5eaa3e13eeaa7215f5d4bde1c317ee4499f->leave($__internal_b17df612a51e4d1992f9aa56bb09f5eaa3e13eeaa7215f5d4bde1c317ee4499f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
