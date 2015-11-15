<?php

/* AcmeDemoTwoBundle:Transacciones:verTransaccion.html.twig */
class __TwigTemplate_6cff56c6cb3b961d41d92833b10295da7d11eb7fa58aef40573fc20658453846 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Transacciones:verTransaccion.html.twig", 1);
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
        $__internal_8407bac2dff707fe52171815d1050c9a59dff5230cf886a6d7b1135e0a5f12d1 = $this->env->getExtension("native_profiler");
        $__internal_8407bac2dff707fe52171815d1050c9a59dff5230cf886a6d7b1135e0a5f12d1->enter($__internal_8407bac2dff707fe52171815d1050c9a59dff5230cf886a6d7b1135e0a5f12d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:verTransaccion.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8407bac2dff707fe52171815d1050c9a59dff5230cf886a6d7b1135e0a5f12d1->leave($__internal_8407bac2dff707fe52171815d1050c9a59dff5230cf886a6d7b1135e0a5f12d1_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_4d5e961bd83b4cadc434ac375b1fccc57cd8af2974b9ba77fd0b63a3a6a546cd = $this->env->getExtension("native_profiler");
        $__internal_4d5e961bd83b4cadc434ac375b1fccc57cd8af2974b9ba77fd0b63a3a6a546cd->enter($__internal_4d5e961bd83b4cadc434ac375b1fccc57cd8af2974b9ba77fd0b63a3a6a546cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Borrar repuesto
";
        
        $__internal_4d5e961bd83b4cadc434ac375b1fccc57cd8af2974b9ba77fd0b63a3a6a546cd->leave($__internal_4d5e961bd83b4cadc434ac375b1fccc57cd8af2974b9ba77fd0b63a3a6a546cd_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_57543e9f75f428952c6a27c661feac3b4776ca908afdd33f045d3b7c9d19f8ca = $this->env->getExtension("native_profiler");
        $__internal_57543e9f75f428952c6a27c661feac3b4776ca908afdd33f045d3b7c9d19f8ca->enter($__internal_57543e9f75f428952c6a27c661feac3b4776ca908afdd33f045d3b7c9d19f8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 7
        echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span><strong>Alerta!</strong> Esta borrando contenido importante.
\t\t</div>
\t\t<div>
\t\t\t<p><strong>Codigo: </strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaccion"]) ? $context["transaccion"] : $this->getContext($context, "transaccion")), "codigo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>nombre: </strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["transaccion"]) ? $context["transaccion"] : $this->getContext($context, "transaccion")), "nombre", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de compra: </strong>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioCompra", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de venta: </strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioVenta", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Ganancia %: </strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "porcentajeGanancia", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Stock: </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "cantidad", array()), "html", null, true);
        echo "</p>

\t\t\t";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 20
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
";
        
        $__internal_57543e9f75f428952c6a27c661feac3b4776ca908afdd33f045d3b7c9d19f8ca->leave($__internal_57543e9f75f428952c6a27c661feac3b4776ca908afdd33f045d3b7c9d19f8ca_prof);

    }

    // line 24
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_7b940ea0a17b925cc937469d21811eec3bc80874a2a0ca87a5880ea8dee222e4 = $this->env->getExtension("native_profiler");
        $__internal_7b940ea0a17b925cc937469d21811eec3bc80874a2a0ca87a5880ea8dee222e4->enter($__internal_7b940ea0a17b925cc937469d21811eec3bc80874a2a0ca87a5880ea8dee222e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_7b940ea0a17b925cc937469d21811eec3bc80874a2a0ca87a5880ea8dee222e4->leave($__internal_7b940ea0a17b925cc937469d21811eec3bc80874a2a0ca87a5880ea8dee222e4_prof);

    }

    // line 25
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_2b802f04be8a65222cd3bbb77ce6b432660e9b18ca95349fefd1bd97bcf01287 = $this->env->getExtension("native_profiler");
        $__internal_2b802f04be8a65222cd3bbb77ce6b432660e9b18ca95349fefd1bd97bcf01287->enter($__internal_2b802f04be8a65222cd3bbb77ce6b432660e9b18ca95349fefd1bd97bcf01287_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_2b802f04be8a65222cd3bbb77ce6b432660e9b18ca95349fefd1bd97bcf01287->leave($__internal_2b802f04be8a65222cd3bbb77ce6b432660e9b18ca95349fefd1bd97bcf01287_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:verTransaccion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  115 => 25,  103 => 24,  93 => 20,  89 => 19,  84 => 17,  80 => 16,  76 => 15,  72 => 14,  68 => 13,  64 => 12,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Borrar repuesto*/
/* {% endblock title_right_content %}*/
/* {% block content_right_content %}*/
/* 		<div class="alert alert-warning" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span><strong>Alerta!</strong> Esta borrando contenido importante.*/
/* 		</div>*/
/* 		<div>*/
/* 			<p><strong>Codigo: </strong>{{ transaccion.codigo }}</p>*/
/* 			<p><strong>nombre: </strong>{{ transaccion.nombre }}</p>*/
/* 			<p><strong>Precio de compra: </strong>{{ repuesto.precioCompra }}</p>*/
/* 			<p><strong>Precio de venta: </strong>{{ repuesto.precioVenta }}</p>*/
/* 			<p><strong>Ganancia %: </strong>{{ repuesto.porcentajeGanancia }}</p>*/
/* 			<p><strong>Stock: </strong>{{ repuesto.cantidad }}</p>*/
/* */
/* 			{{ form_start(form) }}*/
/* 			{{ form_end(form) }}*/
/* 		</div>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
