<?php

/* AcmeDemoTwoBundle:Repuestos:modificarRepuesto.html.twig */
class __TwigTemplate_05057f010d4d776b9439351dd68d2115b05ad845f95e462b99cca1f886b99198 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:modificarRepuesto.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'inicio_active' => array($this, 'block_inicio_active'),
            'lista_repuestos_active' => array($this, 'block_lista_repuestos_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Repuestos:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d9a4d32475c86658b87783a042039f0a8be89e0ce41d7752eedf76d9a35c921 = $this->env->getExtension("native_profiler");
        $__internal_0d9a4d32475c86658b87783a042039f0a8be89e0ce41d7752eedf76d9a35c921->enter($__internal_0d9a4d32475c86658b87783a042039f0a8be89e0ce41d7752eedf76d9a35c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:modificarRepuesto.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0d9a4d32475c86658b87783a042039f0a8be89e0ce41d7752eedf76d9a35c921->leave($__internal_0d9a4d32475c86658b87783a042039f0a8be89e0ce41d7752eedf76d9a35c921_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_b8abbdb9a16ca852e37f269b55970990ca09f91472ae30863250158828013ee1 = $this->env->getExtension("native_profiler");
        $__internal_b8abbdb9a16ca852e37f269b55970990ca09f91472ae30863250158828013ee1->enter($__internal_b8abbdb9a16ca852e37f269b55970990ca09f91472ae30863250158828013ee1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Modificar repuesto
";
        
        $__internal_b8abbdb9a16ca852e37f269b55970990ca09f91472ae30863250158828013ee1->leave($__internal_b8abbdb9a16ca852e37f269b55970990ca09f91472ae30863250158828013ee1_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_df8e361d4452d2501a9ca09aa82d0d470d8df65b19c96af764374ab100bfddea = $this->env->getExtension("native_profiler");
        $__internal_df8e361d4452d2501a9ca09aa82d0d470d8df65b19c96af764374ab100bfddea->enter($__internal_df8e361d4452d2501a9ca09aa82d0d470d8df65b19c96af764374ab100bfddea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 7
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div>
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo "
        ";
        // line 11
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'label');
        echo "
        ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget');
        echo "
    </div>

\t";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_df8e361d4452d2501a9ca09aa82d0d470d8df65b19c96af764374ab100bfddea->leave($__internal_df8e361d4452d2501a9ca09aa82d0d470d8df65b19c96af764374ab100bfddea_prof);

    }

    // line 40
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_187b5f7d1893c9d7075cffa61a965c78cf64e05e4b71ecfaa7baf8d6832bf2a9 = $this->env->getExtension("native_profiler");
        $__internal_187b5f7d1893c9d7075cffa61a965c78cf64e05e4b71ecfaa7baf8d6832bf2a9->enter($__internal_187b5f7d1893c9d7075cffa61a965c78cf64e05e4b71ecfaa7baf8d6832bf2a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_187b5f7d1893c9d7075cffa61a965c78cf64e05e4b71ecfaa7baf8d6832bf2a9->leave($__internal_187b5f7d1893c9d7075cffa61a965c78cf64e05e4b71ecfaa7baf8d6832bf2a9_prof);

    }

    // line 41
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_b4c90b6f71ad88a1bdef45297d6c03e1a3ca123e112dc5952699d73ba5e0fbe4 = $this->env->getExtension("native_profiler");
        $__internal_b4c90b6f71ad88a1bdef45297d6c03e1a3ca123e112dc5952699d73ba5e0fbe4->enter($__internal_b4c90b6f71ad88a1bdef45297d6c03e1a3ca123e112dc5952699d73ba5e0fbe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_b4c90b6f71ad88a1bdef45297d6c03e1a3ca123e112dc5952699d73ba5e0fbe4->leave($__internal_b4c90b6f71ad88a1bdef45297d6c03e1a3ca123e112dc5952699d73ba5e0fbe4_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:modificarRepuesto.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 41,  139 => 40,  130 => 37,  124 => 34,  120 => 33,  114 => 30,  110 => 29,  104 => 26,  100 => 25,  93 => 21,  89 => 20,  82 => 16,  78 => 15,  71 => 11,  67 => 10,  62 => 8,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Modificar repuesto*/
/* {% endblock title_right_content %}*/
/* {% block content_right_content %}*/
/* 	{{ form_start(form) }}*/
/*     	{{ form_errors(form) }}*/
/*     <div>*/
/*         {{ form_label(form.codigo) }}*/
/*         {{ form_widget(form.codigo) }}*/
/*     </div>*/
/* */
/*     <div>*/
/*         {{ form_label(form.nombre) }}*/
/*         {{ form_widget(form.nombre) }}*/
/*     </div>*/
/* */
/*     <div>*/
/*         {{ form_label(form.precioCompra) }}*/
/*         {{ form_widget(form.precioCompra) }}*/
/*     </div>*/
/* */
/*     <div>*/
/*         {{ form_label(form.porcentajeGanancia) }}*/
/*         {{ form_widget(form.porcentajeGanancia) }}*/
/*     </div>*/
/*     <div>*/
/*         {{ form_label(form.cantidad) }}*/
/*         {{ form_widget(form.cantidad) }}*/
/*     </div>*/
/*     <div>*/
/*         {{ form_label(form.categoria) }}*/
/*         {{ form_widget(form.categoria) }}*/
/*     </div>*/
/* */
/* 	{{ form_end(form) }}*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
