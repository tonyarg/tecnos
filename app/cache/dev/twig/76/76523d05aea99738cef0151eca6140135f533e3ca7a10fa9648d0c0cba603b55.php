<?php

/* ::base.html.twig */
class __TwigTemplate_ba0347598fd24b99e9aa20bb3f179b420ad989f7d771b49abbac781e8d5f6f42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_25932a9b428594655028b729bd2adca615b17032fdbaefdcdc99da322dd3597a = $this->env->getExtension("native_profiler");
        $__internal_25932a9b428594655028b729bd2adca615b17032fdbaefdcdc99da322dd3597a->enter($__internal_25932a9b428594655028b729bd2adca615b17032fdbaefdcdc99da322dd3597a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_25932a9b428594655028b729bd2adca615b17032fdbaefdcdc99da322dd3597a->leave($__internal_25932a9b428594655028b729bd2adca615b17032fdbaefdcdc99da322dd3597a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a1ecaae8546922e08b949c3d06433976b07668c03402cde5ea36bc9999ec8f6d = $this->env->getExtension("native_profiler");
        $__internal_a1ecaae8546922e08b949c3d06433976b07668c03402cde5ea36bc9999ec8f6d->enter($__internal_a1ecaae8546922e08b949c3d06433976b07668c03402cde5ea36bc9999ec8f6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a1ecaae8546922e08b949c3d06433976b07668c03402cde5ea36bc9999ec8f6d->leave($__internal_a1ecaae8546922e08b949c3d06433976b07668c03402cde5ea36bc9999ec8f6d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f4bdc160dfd0a62a1d8d918dbc56f0c76dda694de90f24d76b46a25ef63bcd2f = $this->env->getExtension("native_profiler");
        $__internal_f4bdc160dfd0a62a1d8d918dbc56f0c76dda694de90f24d76b46a25ef63bcd2f->enter($__internal_f4bdc160dfd0a62a1d8d918dbc56f0c76dda694de90f24d76b46a25ef63bcd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f4bdc160dfd0a62a1d8d918dbc56f0c76dda694de90f24d76b46a25ef63bcd2f->leave($__internal_f4bdc160dfd0a62a1d8d918dbc56f0c76dda694de90f24d76b46a25ef63bcd2f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_ae9d3965b9da2932d901e07222030e45fb720b28706458d7f96777887f780234 = $this->env->getExtension("native_profiler");
        $__internal_ae9d3965b9da2932d901e07222030e45fb720b28706458d7f96777887f780234->enter($__internal_ae9d3965b9da2932d901e07222030e45fb720b28706458d7f96777887f780234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_ae9d3965b9da2932d901e07222030e45fb720b28706458d7f96777887f780234->leave($__internal_ae9d3965b9da2932d901e07222030e45fb720b28706458d7f96777887f780234_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e58b8a5ea793bfbf9883204b0b422db78c03f096fbc1dc8dfc65e731588c8085 = $this->env->getExtension("native_profiler");
        $__internal_e58b8a5ea793bfbf9883204b0b422db78c03f096fbc1dc8dfc65e731588c8085->enter($__internal_e58b8a5ea793bfbf9883204b0b422db78c03f096fbc1dc8dfc65e731588c8085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e58b8a5ea793bfbf9883204b0b422db78c03f096fbc1dc8dfc65e731588c8085->leave($__internal_e58b8a5ea793bfbf9883204b0b422db78c03f096fbc1dc8dfc65e731588c8085_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
