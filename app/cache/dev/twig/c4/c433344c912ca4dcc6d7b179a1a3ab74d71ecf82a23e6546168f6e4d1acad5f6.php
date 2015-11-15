<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6223eca511eef87b1d094b5f0349e941a1372bae26c42cbd56a321b0e4adf31b extends Twig_Template
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
        $__internal_893c44b41dd05d2a7c4463df403f87d188de52311e7add472b86f875d3f9e24b = $this->env->getExtension("native_profiler");
        $__internal_893c44b41dd05d2a7c4463df403f87d188de52311e7add472b86f875d3f9e24b->enter($__internal_893c44b41dd05d2a7c4463df403f87d188de52311e7add472b86f875d3f9e24b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_893c44b41dd05d2a7c4463df403f87d188de52311e7add472b86f875d3f9e24b->leave($__internal_893c44b41dd05d2a7c4463df403f87d188de52311e7add472b86f875d3f9e24b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
