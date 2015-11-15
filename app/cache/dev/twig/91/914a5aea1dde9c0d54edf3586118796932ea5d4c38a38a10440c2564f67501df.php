<?php

/* AcmeDemoBundle:Secured:hello.html.twig */
class __TwigTemplate_48a64ad0c41b7fc441b9ff6335a4f38de0ca4aee1456465a81d237084d27f69d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:hello.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c04412a9aa2229aec9afcd5815b625efb46fa78547790ad2f7bc6fcaeb918efa = $this->env->getExtension("native_profiler");
        $__internal_c04412a9aa2229aec9afcd5815b625efb46fa78547790ad2f7bc6fcaeb918efa->enter($__internal_c04412a9aa2229aec9afcd5815b625efb46fa78547790ad2f7bc6fcaeb918efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:hello.html.twig"));

        // line 11
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c04412a9aa2229aec9afcd5815b625efb46fa78547790ad2f7bc6fcaeb918efa->leave($__internal_c04412a9aa2229aec9afcd5815b625efb46fa78547790ad2f7bc6fcaeb918efa_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6cd601b32b8716abfd5e8a26ab02c0e6f32dd95aad3d9a6d20d719d53a0e3c38 = $this->env->getExtension("native_profiler");
        $__internal_6cd601b32b8716abfd5e8a26ab02c0e6f32dd95aad3d9a6d20d719d53a0e3c38->enter($__internal_6cd601b32b8716abfd5e8a26ab02c0e6f32dd95aad3d9a6d20d719d53a0e3c38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_6cd601b32b8716abfd5e8a26ab02c0e6f32dd95aad3d9a6d20d719d53a0e3c38->leave($__internal_6cd601b32b8716abfd5e8a26ab02c0e6f32dd95aad3d9a6d20d719d53a0e3c38_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_e616ca971407c2882948af6654bc52fe9b1ea500f41bd6af410e29f872be1789 = $this->env->getExtension("native_profiler");
        $__internal_e616ca971407c2882948af6654bc52fe9b1ea500f41bd6af410e29f872be1789->enter($__internal_e616ca971407c2882948af6654bc52fe9b1ea500f41bd6af410e29f872be1789_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>
";
        
        $__internal_e616ca971407c2882948af6654bc52fe9b1ea500f41bd6af410e29f872be1789->leave($__internal_e616ca971407c2882948af6654bc52fe9b1ea500f41bd6af410e29f872be1789_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:hello.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 8,  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 11,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle:Secured:layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Hello {{ name }}!</h1>*/
/* */
/*     <a href="{{ path('_demo_secured_hello_admin', { 'name': name }) }}">Hello resource secured for <strong>admin</strong> only.</a>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
