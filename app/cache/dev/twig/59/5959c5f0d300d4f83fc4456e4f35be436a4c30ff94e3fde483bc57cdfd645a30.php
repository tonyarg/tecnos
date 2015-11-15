<?php

/* AcmeDemoBundle:Demo:hello.html.twig */
class __TwigTemplate_80de8d6585e931c7d22afe43c435e66dfe0f55bfab010af66ec7a56a4ab817a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_335edf4d7654c17add329b16aecd10e5b69df696cdc88f85415239fb5d34735f = $this->env->getExtension("native_profiler");
        $__internal_335edf4d7654c17add329b16aecd10e5b69df696cdc88f85415239fb5d34735f->enter($__internal_335edf4d7654c17add329b16aecd10e5b69df696cdc88f85415239fb5d34735f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:hello.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_335edf4d7654c17add329b16aecd10e5b69df696cdc88f85415239fb5d34735f->leave($__internal_335edf4d7654c17add329b16aecd10e5b69df696cdc88f85415239fb5d34735f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_fad306edd2d499524b4da8219760117fdb25c6a9ff81438732eb61ca6ec296bc = $this->env->getExtension("native_profiler");
        $__internal_fad306edd2d499524b4da8219760117fdb25c6a9ff81438732eb61ca6ec296bc->enter($__internal_fad306edd2d499524b4da8219760117fdb25c6a9ff81438732eb61ca6ec296bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_fad306edd2d499524b4da8219760117fdb25c6a9ff81438732eb61ca6ec296bc->leave($__internal_fad306edd2d499524b4da8219760117fdb25c6a9ff81438732eb61ca6ec296bc_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_73ec271c503a4befc052a899b5fb4e8c2e2958ae7f753fe6b974fdc0a3dac3b7 = $this->env->getExtension("native_profiler");
        $__internal_73ec271c503a4befc052a899b5fb4e8c2e2958ae7f753fe6b974fdc0a3dac3b7->enter($__internal_73ec271c503a4befc052a899b5fb4e8c2e2958ae7f753fe6b974fdc0a3dac3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1>Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>
";
        
        $__internal_73ec271c503a4befc052a899b5fb4e8c2e2958ae7f753fe6b974fdc0a3dac3b7->leave($__internal_73ec271c503a4befc052a899b5fb4e8c2e2958ae7f753fe6b974fdc0a3dac3b7_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1>Hello {{ name }}!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
