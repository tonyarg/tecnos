<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_6b239356d26fe0308444949330fa79b6e1a66e59402c91754763565d310194d6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4375783b013e9ee78d59f60fb845a697c50d6f828e3b5a4196a2579262a580b = $this->env->getExtension("native_profiler");
        $__internal_d4375783b013e9ee78d59f60fb845a697c50d6f828e3b5a4196a2579262a580b->enter($__internal_d4375783b013e9ee78d59f60fb845a697c50d6f828e3b5a4196a2579262a580b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4375783b013e9ee78d59f60fb845a697c50d6f828e3b5a4196a2579262a580b->leave($__internal_d4375783b013e9ee78d59f60fb845a697c50d6f828e3b5a4196a2579262a580b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d587feb173fb433caa95f954eb2c3be1a09078870ed45d76fb1a1c004db63697 = $this->env->getExtension("native_profiler");
        $__internal_d587feb173fb433caa95f954eb2c3be1a09078870ed45d76fb1a1c004db63697->enter($__internal_d587feb173fb433caa95f954eb2c3be1a09078870ed45d76fb1a1c004db63697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d587feb173fb433caa95f954eb2c3be1a09078870ed45d76fb1a1c004db63697->leave($__internal_d587feb173fb433caa95f954eb2c3be1a09078870ed45d76fb1a1c004db63697_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b96ade8730255d2a52d6fa3107fcfc63f60fb3a3ab361d43070601ee01c2edf = $this->env->getExtension("native_profiler");
        $__internal_5b96ade8730255d2a52d6fa3107fcfc63f60fb3a3ab361d43070601ee01c2edf->enter($__internal_5b96ade8730255d2a52d6fa3107fcfc63f60fb3a3ab361d43070601ee01c2edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_5b96ade8730255d2a52d6fa3107fcfc63f60fb3a3ab361d43070601ee01c2edf->leave($__internal_5b96ade8730255d2a52d6fa3107fcfc63f60fb3a3ab361d43070601ee01c2edf_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
