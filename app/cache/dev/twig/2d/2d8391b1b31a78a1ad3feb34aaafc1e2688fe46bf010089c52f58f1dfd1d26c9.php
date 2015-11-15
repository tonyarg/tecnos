<?php

/* AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig */
class __TwigTemplate_b201dcafc7d8430098edaa860f858d7fec3ad61b628d4f2e71165a69ff4f8e1e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'left_content' => array($this, 'block_left_content'),
            'right_content_size' => array($this, 'block_right_content_size'),
            'content_right_content' => array($this, 'block_content_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b74f7c008fc677b1f6e5ce59ccc5d6b25d83d424b0f3f3290e7a789ea1175f0 = $this->env->getExtension("native_profiler");
        $__internal_0b74f7c008fc677b1f6e5ce59ccc5d6b25d83d424b0f3f3290e7a789ea1175f0->enter($__internal_0b74f7c008fc677b1f6e5ce59ccc5d6b25d83d424b0f3f3290e7a789ea1175f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0b74f7c008fc677b1f6e5ce59ccc5d6b25d83d424b0f3f3290e7a789ea1175f0->leave($__internal_0b74f7c008fc677b1f6e5ce59ccc5d6b25d83d424b0f3f3290e7a789ea1175f0_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_0d99b5ef5d336658529af1408972cc643fb4c32ebf7c95754e7bc021b17e1845 = $this->env->getExtension("native_profiler");
        $__internal_0d99b5ef5d336658529af1408972cc643fb4c32ebf7c95754e7bc021b17e1845->enter($__internal_0d99b5ef5d336658529af1408972cc643fb4c32ebf7c95754e7bc021b17e1845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Transaccion #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "idTransaccion", array()), "html", null, true);
        echo " - Repuesto modificado
";
        
        $__internal_0d99b5ef5d336658529af1408972cc643fb4c32ebf7c95754e7bc021b17e1845->leave($__internal_0d99b5ef5d336658529af1408972cc643fb4c32ebf7c95754e7bc021b17e1845_prof);

    }

    // line 6
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_7df10048b09726772e5321507ceea70d393f580ff38c9bc884380e7a04eef723 = $this->env->getExtension("native_profiler");
        $__internal_7df10048b09726772e5321507ceea70d393f580ff38c9bc884380e7a04eef723->enter($__internal_7df10048b09726772e5321507ceea70d393f580ff38c9bc884380e7a04eef723_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 7
        echo "
";
        
        $__internal_7df10048b09726772e5321507ceea70d393f580ff38c9bc884380e7a04eef723->leave($__internal_7df10048b09726772e5321507ceea70d393f580ff38c9bc884380e7a04eef723_prof);

    }

    // line 9
    public function block_right_content_size($context, array $blocks = array())
    {
        $__internal_0e87734b530869a7f0f1f31e066e32dd9b59f193d60c40dbafa900ad586b0d0b = $this->env->getExtension("native_profiler");
        $__internal_0e87734b530869a7f0f1f31e066e32dd9b59f193d60c40dbafa900ad586b0d0b->enter($__internal_0e87734b530869a7f0f1f31e066e32dd9b59f193d60c40dbafa900ad586b0d0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content_size"));

        // line 10
        echo "\tcol-xs-6 col-md-12
";
        
        $__internal_0e87734b530869a7f0f1f31e066e32dd9b59f193d60c40dbafa900ad586b0d0b->leave($__internal_0e87734b530869a7f0f1f31e066e32dd9b59f193d60c40dbafa900ad586b0d0b_prof);

    }

    // line 12
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_1924331d244d24f52aa7260063a5516ce7ed3842aee708daaefa3045e44ce0da = $this->env->getExtension("native_profiler");
        $__internal_1924331d244d24f52aa7260063a5516ce7ed3842aee708daaefa3045e44ce0da->enter($__internal_1924331d244d24f52aa7260063a5516ce7ed3842aee708daaefa3045e44ce0da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 13
        echo "
\t\t<div>
\t\t\t<p><strong>Codigo (antiguo): </strong>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "codigoAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Codigo (nuevo): </strong>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "codigoNuevo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Nombre (antiguo): </strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "nombreAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Nombre (nuevo): </strong>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "nombreNuevo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de compra (antiguo): </strong>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioCompraAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de compra (nuevo): </strong>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioCompraNuevo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de venta (antiguo): </strong>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioVentaAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Precio de venta (nuevo): </strong>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "precioVentaNuevo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Ganancia % (antiguo): </strong>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "porcentajeGananciaAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Ganancia % (nuevo): </strong>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "porcentajeGananciaNuevo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Stock (antiguo): </strong>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "cantidadAntiguo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>Stock (nuevo): </strong>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "cantidadNuevo", array()), "html", null, true);
        echo "</p>
\t\t</div>
";
        
        $__internal_1924331d244d24f52aa7260063a5516ce7ed3842aee708daaefa3045e44ce0da->leave($__internal_1924331d244d24f52aa7260063a5516ce7ed3842aee708daaefa3045e44ce0da_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 26,  131 => 25,  127 => 24,  123 => 23,  119 => 22,  115 => 21,  111 => 20,  107 => 19,  103 => 18,  99 => 17,  95 => 16,  91 => 15,  87 => 13,  81 => 12,  73 => 10,  67 => 9,  59 => 7,  53 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Transaccion #{{ repuesto.idTransaccion }} - Repuesto modificado*/
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
/* 			<p><strong>Codigo (antiguo): </strong>{{ repuesto.codigoAntiguo }}</p>*/
/* 			<p><strong>Codigo (nuevo): </strong>{{ repuesto.codigoNuevo }}</p>*/
/* 			<p><strong>Nombre (antiguo): </strong>{{ repuesto.nombreAntiguo }}</p>*/
/* 			<p><strong>Nombre (nuevo): </strong>{{ repuesto.nombreNuevo }}</p>*/
/* 			<p><strong>Precio de compra (antiguo): </strong>{{ repuesto.precioCompraAntiguo }}</p>*/
/* 			<p><strong>Precio de compra (nuevo): </strong>{{ repuesto.precioCompraNuevo }}</p>*/
/* 			<p><strong>Precio de venta (antiguo): </strong>{{ repuesto.precioVentaAntiguo }}</p>*/
/* 			<p><strong>Precio de venta (nuevo): </strong>{{ repuesto.precioVentaNuevo }}</p>*/
/* 			<p><strong>Ganancia % (antiguo): </strong>{{ repuesto.porcentajeGananciaAntiguo }}</p>*/
/* 			<p><strong>Ganancia % (nuevo): </strong>{{ repuesto.porcentajeGananciaNuevo }}</p>*/
/* 			<p><strong>Stock (antiguo): </strong>{{ repuesto.cantidadAntiguo }}</p>*/
/* 			<p><strong>Stock (nuevo): </strong>{{ repuesto.cantidadNuevo }}</p>*/
/* 		</div>*/
/* {% endblock content_right_content %}*/
/* */
