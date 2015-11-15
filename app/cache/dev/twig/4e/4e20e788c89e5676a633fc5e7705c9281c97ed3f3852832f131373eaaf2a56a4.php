<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_ce74f8e447a66378d5e382233c03351ca50efb1ee6f26404417021b15e6b2ac6 extends Twig_Template
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
        $__internal_bba57179b0abee70145c82b99e26dd44632ba6763eb0f8e14a4532b2142b8a5c = $this->env->getExtension("native_profiler");
        $__internal_bba57179b0abee70145c82b99e26dd44632ba6763eb0f8e14a4532b2142b8a5c->enter($__internal_bba57179b0abee70145c82b99e26dd44632ba6763eb0f8e14a4532b2142b8a5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bba57179b0abee70145c82b99e26dd44632ba6763eb0f8e14a4532b2142b8a5c->leave($__internal_bba57179b0abee70145c82b99e26dd44632ba6763eb0f8e14a4532b2142b8a5c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
