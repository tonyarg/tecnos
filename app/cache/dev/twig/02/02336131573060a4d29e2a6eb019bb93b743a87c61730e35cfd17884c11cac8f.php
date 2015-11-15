<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9f8d1417808e0f2b2d3f550db95e7e71ebf9d96194ad226c2725af7626a46c13 extends Twig_Template
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
        $__internal_87bce54103293a545462fea8fca70ae9b514a92798078897ec22f23733eaf02d = $this->env->getExtension("native_profiler");
        $__internal_87bce54103293a545462fea8fca70ae9b514a92798078897ec22f23733eaf02d->enter($__internal_87bce54103293a545462fea8fca70ae9b514a92798078897ec22f23733eaf02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_87bce54103293a545462fea8fca70ae9b514a92798078897ec22f23733eaf02d->leave($__internal_87bce54103293a545462fea8fca70ae9b514a92798078897ec22f23733eaf02d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
