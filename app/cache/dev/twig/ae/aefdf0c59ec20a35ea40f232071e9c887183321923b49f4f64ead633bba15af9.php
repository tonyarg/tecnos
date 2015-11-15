<?php

/* AcmeDemoTwoBundle:Transacciones:borrarRepuestoView.html.twig */
class __TwigTemplate_e7c736d91f88aecefaf3e5ae0397b57b4259411b4fe1cde68dd76a8a5336bcb4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Transacciones:borrarRepuestoView.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'left_content' => array($this, 'block_left_content'),
            'right_content_size' => array($this, 'block_right_content_size'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'inicio_active' => array($this, 'block_inicio_active'),
            'lista_repuestos_active' => array($this, 'block_lista_repuestos_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a0361b6201cf2654b221efb15ffc1b39c42b4f96713b475f1f65aaee24844b7 = $this->env->getExtension("native_profiler");
        $__internal_5a0361b6201cf2654b221efb15ffc1b39c42b4f96713b475f1f65aaee24844b7->enter($__internal_5a0361b6201cf2654b221efb15ffc1b39c42b4f96713b475f1f65aaee24844b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:borrarRepuestoView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a0361b6201cf2654b221efb15ffc1b39c42b4f96713b475f1f65aaee24844b7->leave($__internal_5a0361b6201cf2654b221efb15ffc1b39c42b4f96713b475f1f65aaee24844b7_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_307abe2001b2c524b49293ef3f5422d818a90478f11d86318e0a3f01a90e9de9 = $this->env->getExtension("native_profiler");
        $__internal_307abe2001b2c524b49293ef3f5422d818a90478f11d86318e0a3f01a90e9de9->enter($__internal_307abe2001b2c524b49293ef3f5422d818a90478f11d86318e0a3f01a90e9de9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Transaccion #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "idTransaccion", array()), "html", null, true);
        echo " - Repuesto borrado
";
        
        $__internal_307abe2001b2c524b49293ef3f5422d818a90478f11d86318e0a3f01a90e9de9->leave($__internal_307abe2001b2c524b49293ef3f5422d818a90478f11d86318e0a3f01a90e9de9_prof);

    }

    // line 6
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_76ef235d187338eda4bca81ae5f867265636129ac48ee13a42aa92175385767d = $this->env->getExtension("native_profiler");
        $__internal_76ef235d187338eda4bca81ae5f867265636129ac48ee13a42aa92175385767d->enter($__internal_76ef235d187338eda4bca81ae5f867265636129ac48ee13a42aa92175385767d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 7
        echo "
";
        
        $__internal_76ef235d187338eda4bca81ae5f867265636129ac48ee13a42aa92175385767d->leave($__internal_76ef235d187338eda4bca81ae5f867265636129ac48ee13a42aa92175385767d_prof);

    }

    // line 9
    public function block_right_content_size($context, array $blocks = array())
    {
        $__internal_5982036889842398dfc815ca508aa9239d2c368905ed9bb43e164797dca8c014 = $this->env->getExtension("native_profiler");
        $__internal_5982036889842398dfc815ca508aa9239d2c368905ed9bb43e164797dca8c014->enter($__internal_5982036889842398dfc815ca508aa9239d2c368905ed9bb43e164797dca8c014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content_size"));

        // line 10
        echo "\tcol-xs-6 col-md-12
";
        
        $__internal_5982036889842398dfc815ca508aa9239d2c368905ed9bb43e164797dca8c014->leave($__internal_5982036889842398dfc815ca508aa9239d2c368905ed9bb43e164797dca8c014_prof);

    }

    // line 12
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_85e609996cb20bca2f79dd0601cf993dcb01e04fa37a1b3826c92805d818cb96 = $this->env->getExtension("native_profiler");
        $__internal_85e609996cb20bca2f79dd0601cf993dcb01e04fa37a1b3826c92805d818cb96->enter($__internal_85e609996cb20bca2f79dd0601cf993dcb01e04fa37a1b3826c92805d818cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 13
        echo "
\t\t<div>
\t\t\t<p><strong>Codigo: </strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "codigo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>nombre: </strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "nombre", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de compra: </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioCompra", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de venta: </strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioVenta", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Ganancia %: </strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "porcentajeGanancia", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Stock: </strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "cantidad", array()), "html", null, true);
        echo "</p>
\t\t</div>
";
        
        $__internal_85e609996cb20bca2f79dd0601cf993dcb01e04fa37a1b3826c92805d818cb96->leave($__internal_85e609996cb20bca2f79dd0601cf993dcb01e04fa37a1b3826c92805d818cb96_prof);

    }

    // line 24
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_9bb09798e0e136dddbbe857fe0b17fa5d0a497c3756d8a821e471a344c654bbc = $this->env->getExtension("native_profiler");
        $__internal_9bb09798e0e136dddbbe857fe0b17fa5d0a497c3756d8a821e471a344c654bbc->enter($__internal_9bb09798e0e136dddbbe857fe0b17fa5d0a497c3756d8a821e471a344c654bbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_9bb09798e0e136dddbbe857fe0b17fa5d0a497c3756d8a821e471a344c654bbc->leave($__internal_9bb09798e0e136dddbbe857fe0b17fa5d0a497c3756d8a821e471a344c654bbc_prof);

    }

    // line 25
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_849d1e810a0572793d5b2f17079f0b1c9330ba391c3fbdddf6b4314b2a8afb92 = $this->env->getExtension("native_profiler");
        $__internal_849d1e810a0572793d5b2f17079f0b1c9330ba391c3fbdddf6b4314b2a8afb92->enter($__internal_849d1e810a0572793d5b2f17079f0b1c9330ba391c3fbdddf6b4314b2a8afb92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_849d1e810a0572793d5b2f17079f0b1c9330ba391c3fbdddf6b4314b2a8afb92->leave($__internal_849d1e810a0572793d5b2f17079f0b1c9330ba391c3fbdddf6b4314b2a8afb92_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:borrarRepuestoView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 25,  123 => 24,  113 => 20,  109 => 19,  105 => 18,  101 => 17,  97 => 16,  93 => 15,  89 => 13,  83 => 12,  75 => 10,  69 => 9,  61 => 7,  55 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Transaccion #{{ repuesto.idTransaccion }} - Repuesto borrado*/
/* {% endblock title_right_content %}*/
/* {% block left_content %}*/
/* */
/* {% endblock left_content %}*/
/* {% block right_content_size %}*/
/* 	col-xs-6 col-md-12*/
/* {% endblock right_content_size %}*/
/* {% block content_right_content %}*/
/* */
/* 		<div>*/
/* 			<p><strong>Codigo: </strong>{{ repuesto.codigo }}</p>*/
/* 			<p><strong>nombre: </strong>{{ repuesto.nombre }}</p>*/
/* 			<p><strong>Precio de compra: </strong>{{ repuesto.precioCompra }}</p>*/
/* 			<p><strong>Precio de venta: </strong>{{ repuesto.precioVenta }}</p>*/
/* 			<p><strong>Ganancia %: </strong>{{ repuesto.porcentajeGanancia }}</p>*/
/* 			<p><strong>Stock: </strong>{{ repuesto.cantidad }}</p>*/
/* 		</div>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
