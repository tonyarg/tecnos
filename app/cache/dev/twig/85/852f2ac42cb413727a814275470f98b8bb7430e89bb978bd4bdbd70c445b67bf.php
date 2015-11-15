<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_8959f93a919444edf3e50e264f49b747a22bd035303ab9c46d30488586777f1d extends Twig_Template
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
        $__internal_fe13234b9527bea36ae719cc04b08705534c34fa06b2318f44b3fd0923b6b75b = $this->env->getExtension("native_profiler");
        $__internal_fe13234b9527bea36ae719cc04b08705534c34fa06b2318f44b3fd0923b6b75b->enter($__internal_fe13234b9527bea36ae719cc04b08705534c34fa06b2318f44b3fd0923b6b75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe13234b9527bea36ae719cc04b08705534c34fa06b2318f44b3fd0923b6b75b->leave($__internal_fe13234b9527bea36ae719cc04b08705534c34fa06b2318f44b3fd0923b6b75b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}*/
/* */
