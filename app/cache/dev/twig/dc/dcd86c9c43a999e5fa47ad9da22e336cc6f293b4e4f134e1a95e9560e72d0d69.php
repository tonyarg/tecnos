<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_c5aa017831d6d42f70bdcf17fe49306536cf365647629927ff6025d0c5206701 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Demo:contact.html.twig", 1);
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
        $__internal_dbf162397ede6f6d59304afe79e5407af947a1a3b8e1489673a7833c52cf3678 = $this->env->getExtension("native_profiler");
        $__internal_dbf162397ede6f6d59304afe79e5407af947a1a3b8e1489673a7833c52cf3678->enter($__internal_dbf162397ede6f6d59304afe79e5407af947a1a3b8e1489673a7833c52cf3678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Demo:contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbf162397ede6f6d59304afe79e5407af947a1a3b8e1489673a7833c52cf3678->leave($__internal_dbf162397ede6f6d59304afe79e5407af947a1a3b8e1489673a7833c52cf3678_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8548428564815d7215f2cf012e4cd8527f243afae363ae9ba16c5a093d9b1ba = $this->env->getExtension("native_profiler");
        $__internal_c8548428564815d7215f2cf012e4cd8527f243afae363ae9ba16c5a093d9b1ba->enter($__internal_c8548428564815d7215f2cf012e4cd8527f243afae363ae9ba16c5a093d9b1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony - Contact form";
        
        $__internal_c8548428564815d7215f2cf012e4cd8527f243afae363ae9ba16c5a093d9b1ba->leave($__internal_c8548428564815d7215f2cf012e4cd8527f243afae363ae9ba16c5a093d9b1ba_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_c538fcebc6dd1ae680669e1738bc6bbcb5228a2777263aa0cd14816bbfd32c99 = $this->env->getExtension("native_profiler");
        $__internal_c538fcebc6dd1ae680669e1738bc6bbcb5228a2777263aa0cd14816bbfd32c99->enter($__internal_c538fcebc6dd1ae680669e1738bc6bbcb5228a2777263aa0cd14816bbfd32c99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "message", array()), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
        
        $__internal_c538fcebc6dd1ae680669e1738bc6bbcb5228a2777263aa0cd14816bbfd32c99->leave($__internal_c538fcebc6dd1ae680669e1738bc6bbcb5228a2777263aa0cd14816bbfd32c99_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 12,  67 => 10,  63 => 9,  58 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block title "Symfony - Contact form" %}*/
/* */
/* {% block content %}*/
/*     <form action="{{ path('_demo_contact') }}" method="POST" id="contact_form">*/
/*         {{ form_errors(form) }}*/
/* */
/*         {{ form_row(form.email) }}*/
/*         {{ form_row(form.message) }}*/
/* */
/*         {{ form_rest(form) }}*/
/*         <input type="submit" value="Send" class="symfony-button-grey" />*/
/*     </form>*/
/* {% endblock %}*/
/* */
