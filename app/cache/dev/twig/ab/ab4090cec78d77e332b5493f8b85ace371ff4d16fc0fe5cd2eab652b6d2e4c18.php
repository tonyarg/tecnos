<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_6bdb1da8840847df2d6819b775d7ab77726da5ad4235f1da004b237584691a23 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_95ea18bdf0b499f4edeb17ce86927d1ddbd559471d0134b6678b115adde6208f = $this->env->getExtension("native_profiler");
        $__internal_95ea18bdf0b499f4edeb17ce86927d1ddbd559471d0134b6678b115adde6208f->enter($__internal_95ea18bdf0b499f4edeb17ce86927d1ddbd559471d0134b6678b115adde6208f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_95ea18bdf0b499f4edeb17ce86927d1ddbd559471d0134b6678b115adde6208f->leave($__internal_95ea18bdf0b499f4edeb17ce86927d1ddbd559471d0134b6678b115adde6208f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_b94ca24fac27f4e8c46dcc3d0aa836701ff5dd6d7e24a4c006c444e68a082dde = $this->env->getExtension("native_profiler");
        $__internal_b94ca24fac27f4e8c46dcc3d0aa836701ff5dd6d7e24a4c006c444e68a082dde->enter($__internal_b94ca24fac27f4e8c46dcc3d0aa836701ff5dd6d7e24a4c006c444e68a082dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b94ca24fac27f4e8c46dcc3d0aa836701ff5dd6d7e24a4c006c444e68a082dde->leave($__internal_b94ca24fac27f4e8c46dcc3d0aa836701ff5dd6d7e24a4c006c444e68a082dde_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec7d1faa3076a0244db7a2c43b31153530b06695f3a06a8288fd4b591737bf23 = $this->env->getExtension("native_profiler");
        $__internal_ec7d1faa3076a0244db7a2c43b31153530b06695f3a06a8288fd4b591737bf23->enter($__internal_ec7d1faa3076a0244db7a2c43b31153530b06695f3a06a8288fd4b591737bf23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_ec7d1faa3076a0244db7a2c43b31153530b06695f3a06a8288fd4b591737bf23->leave($__internal_ec7d1faa3076a0244db7a2c43b31153530b06695f3a06a8288fd4b591737bf23_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_2ea58286e3afe3eb9717f5aadef8993ada8c35f258d276c5e8553fc045433cf4 = $this->env->getExtension("native_profiler");
        $__internal_2ea58286e3afe3eb9717f5aadef8993ada8c35f258d276c5e8553fc045433cf4->enter($__internal_2ea58286e3afe3eb9717f5aadef8993ada8c35f258d276c5e8553fc045433cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_2ea58286e3afe3eb9717f5aadef8993ada8c35f258d276c5e8553fc045433cf4->leave($__internal_2ea58286e3afe3eb9717f5aadef8993ada8c35f258d276c5e8553fc045433cf4_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_cfcd1e68c78721b9c84021f14cbd0ff57b02babff0bed3e1cb2e2dc1463e0f38 = $this->env->getExtension("native_profiler");
        $__internal_cfcd1e68c78721b9c84021f14cbd0ff57b02babff0bed3e1cb2e2dc1463e0f38->enter($__internal_cfcd1e68c78721b9c84021f14cbd0ff57b02babff0bed3e1cb2e2dc1463e0f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_cfcd1e68c78721b9c84021f14cbd0ff57b02babff0bed3e1cb2e2dc1463e0f38->leave($__internal_cfcd1e68c78721b9c84021f14cbd0ff57b02babff0bed3e1cb2e2dc1463e0f38_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Web Configurator Bundle' %}*/
/* */
/* {% block body %}*/
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/*     <div class="version">Symfony Standard Edition v.{{ version }}</div>*/
/* {% endblock %}*/
/* */
