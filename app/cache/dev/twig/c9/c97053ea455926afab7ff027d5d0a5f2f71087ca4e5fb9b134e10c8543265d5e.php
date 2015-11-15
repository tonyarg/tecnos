<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_892b52a336bae39464a8c179f89cc904dcd1d469467b88b3958413e19f888734 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b55f4516888011335b84f4637fd9f9525eaf7d102fa29e7f0a36880e7192334b = $this->env->getExtension("native_profiler");
        $__internal_b55f4516888011335b84f4637fd9f9525eaf7d102fa29e7f0a36880e7192334b->enter($__internal_b55f4516888011335b84f4637fd9f9525eaf7d102fa29e7f0a36880e7192334b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b55f4516888011335b84f4637fd9f9525eaf7d102fa29e7f0a36880e7192334b->leave($__internal_b55f4516888011335b84f4637fd9f9525eaf7d102fa29e7f0a36880e7192334b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_53df2dca0b74574bfdf6550c5773a24e5357d8805e7a4aa5671bd7c7a621dc26 = $this->env->getExtension("native_profiler");
        $__internal_53df2dca0b74574bfdf6550c5773a24e5357d8805e7a4aa5671bd7c7a621dc26->enter($__internal_53df2dca0b74574bfdf6550c5773a24e5357d8805e7a4aa5671bd7c7a621dc26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Demos";
        
        $__internal_53df2dca0b74574bfdf6550c5773a24e5357d8805e7a4aa5671bd7c7a621dc26->leave($__internal_53df2dca0b74574bfdf6550c5773a24e5357d8805e7a4aa5671bd7c7a621dc26_prof);

    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_7c5532b8932bfdcacd74b93994e3a1dfc9d5ff4b67e8ecea2adf2304a40e635d = $this->env->getExtension("native_profiler");
        $__internal_7c5532b8932bfdcacd74b93994e3a1dfc9d5ff4b67e8ecea2adf2304a40e635d->enter($__internal_7c5532b8932bfdcacd74b93994e3a1dfc9d5ff4b67e8ecea2adf2304a40e635d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        echo "";
        
        $__internal_7c5532b8932bfdcacd74b93994e3a1dfc9d5ff4b67e8ecea2adf2304a40e635d->leave($__internal_7c5532b8932bfdcacd74b93994e3a1dfc9d5ff4b67e8ecea2adf2304a40e635d_prof);

    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        $__internal_f494812eb2fa3af6809691735e31aaa4411a275a7d9c05fb2843023e279b205f = $this->env->getExtension("native_profiler");
        $__internal_f494812eb2fa3af6809691735e31aaa4411a275a7d9c05fb2843023e279b205f->enter($__internal_f494812eb2fa3af6809691735e31aaa4411a275a7d9c05fb2843023e279b205f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
        
        $__internal_f494812eb2fa3af6809691735e31aaa4411a275a7d9c05fb2843023e279b205f->leave($__internal_f494812eb2fa3af6809691735e31aaa4411a275a7d9c05fb2843023e279b205f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 13,  74 => 11,  70 => 10,  66 => 8,  60 => 7,  48 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Demos" %}*/
/* */
/* {% block content_header '' %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Available demos</h1>*/
/*     <ul id="demo-list">*/
/*         <li><a href="{{ path('_demo_hello', {'name': 'World'}) }}">Hello World</a></li>*/
/*         <li><a href="{{ path('_demo_secured_hello', {'name': 'World'}) }}">Access the secured area</a> <a href="{{ path('_demo_login') }}">Go to the login page</a></li>*/
/*         {# <li><a href="{{ path('_demo_contact') }}">Send a Message</a></li> #}*/
/*     </ul>*/
/* {% endblock %}*/
/* */
