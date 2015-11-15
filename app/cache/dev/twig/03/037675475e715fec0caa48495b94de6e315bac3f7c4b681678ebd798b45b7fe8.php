<?php

/* AcmeDemoBundle::layout.html.twig */
class __TwigTemplate_e701d895126a4c420ba4c04b918f228f6461ba689ed145908264ecb6f7cb4cc0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "AcmeDemoBundle::layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a2bd027a48c551dfdf8b8c3733c70d3ebc88607a7bdbcf71c696c8f9b1c8c7e = $this->env->getExtension("native_profiler");
        $__internal_8a2bd027a48c551dfdf8b8c3733c70d3ebc88607a7bdbcf71c696c8f9b1c8c7e->enter($__internal_8a2bd027a48c551dfdf8b8c3733c70d3ebc88607a7bdbcf71c696c8f9b1c8c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8a2bd027a48c551dfdf8b8c3733c70d3ebc88607a7bdbcf71c696c8f9b1c8c7e->leave($__internal_8a2bd027a48c551dfdf8b8c3733c70d3ebc88607a7bdbcf71c696c8f9b1c8c7e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_831b683da97ea0af0a1e67c2d2376cbf90734607025156de6832e0b0adaceb4a = $this->env->getExtension("native_profiler");
        $__internal_831b683da97ea0af0a1e67c2d2376cbf90734607025156de6832e0b0adaceb4a->enter($__internal_831b683da97ea0af0a1e67c2d2376cbf90734607025156de6832e0b0adaceb4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/acmedemo/css/demo.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_831b683da97ea0af0a1e67c2d2376cbf90734607025156de6832e0b0adaceb4a->leave($__internal_831b683da97ea0af0a1e67c2d2376cbf90734607025156de6832e0b0adaceb4a_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_9b130a56b164536a81e5fbf18a48c5bd705bcb08cd6a7294392a3e1f1cf43be1 = $this->env->getExtension("native_profiler");
        $__internal_9b130a56b164536a81e5fbf18a48c5bd705bcb08cd6a7294392a3e1f1cf43be1->enter($__internal_9b130a56b164536a81e5fbf18a48c5bd705bcb08cd6a7294392a3e1f1cf43be1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Demo Bundle";
        
        $__internal_9b130a56b164536a81e5fbf18a48c5bd705bcb08cd6a7294392a3e1f1cf43be1->leave($__internal_9b130a56b164536a81e5fbf18a48c5bd705bcb08cd6a7294392a3e1f1cf43be1_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_a710a1c029fdb475d9380f4705ad9d34a4147c8e2b322a4fce17db29636ba7da = $this->env->getExtension("native_profiler");
        $__internal_a710a1c029fdb475d9380f4705ad9d34a4147c8e2b322a4fce17db29636ba7da->enter($__internal_a710a1c029fdb475d9380f4705ad9d34a4147c8e2b322a4fce17db29636ba7da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 12
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 13
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('content_header', $context, $blocks);
        // line 26
        echo "
    <div class=\"block\">
        ";
        // line 28
        $this->displayBlock('content', $context, $blocks);
        // line 29
        echo "    </div>

    ";
        // line 31
        if (array_key_exists("code", $context)) {
            // line 32
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 34
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_a710a1c029fdb475d9380f4705ad9d34a4147c8e2b322a4fce17db29636ba7da->leave($__internal_a710a1c029fdb475d9380f4705ad9d34a4147c8e2b322a4fce17db29636ba7da_prof);

    }

    // line 17
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_0a58315b34dc668791769f35ebf3f2f55b3ab52ae483ddcdcbb110393390f3f2 = $this->env->getExtension("native_profiler");
        $__internal_0a58315b34dc668791769f35ebf3f2f55b3ab52ae483ddcdcbb110393390f3f2->enter($__internal_0a58315b34dc668791769f35ebf3f2f55b3ab52ae483ddcdcbb110393390f3f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 18
        echo "        <ul id=\"menu\">
            ";
        // line 19
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 22
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
        
        $__internal_0a58315b34dc668791769f35ebf3f2f55b3ab52ae483ddcdcbb110393390f3f2->leave($__internal_0a58315b34dc668791769f35ebf3f2f55b3ab52ae483ddcdcbb110393390f3f2_prof);

    }

    // line 19
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_84b43f6e46bf945e9836ea8c4b5d00166e003a4470923791cae9ccc839dade68 = $this->env->getExtension("native_profiler");
        $__internal_84b43f6e46bf945e9836ea8c4b5d00166e003a4470923791cae9ccc839dade68->enter($__internal_84b43f6e46bf945e9836ea8c4b5d00166e003a4470923791cae9ccc839dade68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 20
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo");
        echo "\">Demo Home</a></li>
            ";
        
        $__internal_84b43f6e46bf945e9836ea8c4b5d00166e003a4470923791cae9ccc839dade68->leave($__internal_84b43f6e46bf945e9836ea8c4b5d00166e003a4470923791cae9ccc839dade68_prof);

    }

    // line 28
    public function block_content($context, array $blocks = array())
    {
        $__internal_db54b6011f0d88cc90d56e0d75e31a6fe0a9529f777877ce1ea445411e792265 = $this->env->getExtension("native_profiler");
        $__internal_db54b6011f0d88cc90d56e0d75e31a6fe0a9529f777877ce1ea445411e792265->enter($__internal_db54b6011f0d88cc90d56e0d75e31a6fe0a9529f777877ce1ea445411e792265_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_db54b6011f0d88cc90d56e0d75e31a6fe0a9529f777877ce1ea445411e792265->leave($__internal_db54b6011f0d88cc90d56e0d75e31a6fe0a9529f777877ce1ea445411e792265_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 28,  153 => 20,  147 => 19,  137 => 22,  135 => 19,  132 => 18,  126 => 17,  115 => 34,  111 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 26,  97 => 17,  94 => 16,  85 => 13,  82 => 12,  77 => 11,  71 => 10,  59 => 8,  50 => 5,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "TwigBundle::layout.html.twig" %}*/
/* */
/* {% block head %}*/
/*     <link rel="icon" sizes="16x16" href="{{ asset('favicon.ico') }}" />*/
/*     <link rel="stylesheet" href="{{ asset('bundles/acmedemo/css/demo.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block title 'Demo Bundle' %}*/
/* */
/* {% block body %}*/
/*     {% for flashMessage in app.session.flashbag.get('notice') %}*/
/*         <div class="flash-message">*/
/*             <em>Notice</em>: {{ flashMessage }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% block content_header %}*/
/*         <ul id="menu">*/
/*             {% block content_header_more %}*/
/*                 <li><a href="{{ path('_demo') }}">Demo Home</a></li>*/
/*             {% endblock %}*/
/*         </ul>*/
/* */
/*         <div style="clear: both"></div>*/
/*     {% endblock %}*/
/* */
/*     <div class="block">*/
/*         {% block content %}{% endblock %}*/
/*     </div>*/
/* */
/*     {% if code is defined %}*/
/*         <h2>Code behind this page</h2>*/
/*         <div class="block">*/
/*             <div class="symfony-content">{{ code|raw }}</div>*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
