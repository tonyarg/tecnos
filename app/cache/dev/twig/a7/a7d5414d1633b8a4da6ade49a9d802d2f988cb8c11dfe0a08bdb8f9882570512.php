<?php

/* AcmeDemoTwoBundle:Transacciones:agregarRepuestoView.html.twig */
class __TwigTemplate_f616f93d465b26e4452432484bba383b8de6bb9f9d37e59fbb0bd72af479bccc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Transacciones:agregarRepuestoView.html.twig", 1);
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
        $__internal_c7005eedb22c2f238320b9415d9f4aca5d447b44b5505bad9e93d2feff7742dd = $this->env->getExtension("native_profiler");
        $__internal_c7005eedb22c2f238320b9415d9f4aca5d447b44b5505bad9e93d2feff7742dd->enter($__internal_c7005eedb22c2f238320b9415d9f4aca5d447b44b5505bad9e93d2feff7742dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:agregarRepuestoView.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c7005eedb22c2f238320b9415d9f4aca5d447b44b5505bad9e93d2feff7742dd->leave($__internal_c7005eedb22c2f238320b9415d9f4aca5d447b44b5505bad9e93d2feff7742dd_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_8bd2865d2d1ffb0c138868ecdc096ab7053983dcc586f5b98f9962849bb87f2e = $this->env->getExtension("native_profiler");
        $__internal_8bd2865d2d1ffb0c138868ecdc096ab7053983dcc586f5b98f9962849bb87f2e->enter($__internal_8bd2865d2d1ffb0c138868ecdc096ab7053983dcc586f5b98f9962849bb87f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Transaccion #";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "idTransaccion", array()), "html", null, true);
        echo " - Repuesto agregado
";
        
        $__internal_8bd2865d2d1ffb0c138868ecdc096ab7053983dcc586f5b98f9962849bb87f2e->leave($__internal_8bd2865d2d1ffb0c138868ecdc096ab7053983dcc586f5b98f9962849bb87f2e_prof);

    }

    // line 6
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_bc580a3ad0cf402e5569e0dee685688435add98c3591df8a10fad2109b4c63ad = $this->env->getExtension("native_profiler");
        $__internal_bc580a3ad0cf402e5569e0dee685688435add98c3591df8a10fad2109b4c63ad->enter($__internal_bc580a3ad0cf402e5569e0dee685688435add98c3591df8a10fad2109b4c63ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 7
        echo "
";
        
        $__internal_bc580a3ad0cf402e5569e0dee685688435add98c3591df8a10fad2109b4c63ad->leave($__internal_bc580a3ad0cf402e5569e0dee685688435add98c3591df8a10fad2109b4c63ad_prof);

    }

    // line 9
    public function block_right_content_size($context, array $blocks = array())
    {
        $__internal_493338349d39138d646112f24609be3d574cbe34553b608f1c15988c9cd36527 = $this->env->getExtension("native_profiler");
        $__internal_493338349d39138d646112f24609be3d574cbe34553b608f1c15988c9cd36527->enter($__internal_493338349d39138d646112f24609be3d574cbe34553b608f1c15988c9cd36527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content_size"));

        // line 10
        echo "\tcol-xs-6 col-md-12
";
        
        $__internal_493338349d39138d646112f24609be3d574cbe34553b608f1c15988c9cd36527->leave($__internal_493338349d39138d646112f24609be3d574cbe34553b608f1c15988c9cd36527_prof);

    }

    // line 12
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_2fa0aa1521ee910003eca28fa27b2598abe8075f3f8bc447527892c3083b8a47 = $this->env->getExtension("native_profiler");
        $__internal_2fa0aa1521ee910003eca28fa27b2598abe8075f3f8bc447527892c3083b8a47->enter($__internal_2fa0aa1521ee910003eca28fa27b2598abe8075f3f8bc447527892c3083b8a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

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
        
        $__internal_2fa0aa1521ee910003eca28fa27b2598abe8075f3f8bc447527892c3083b8a47->leave($__internal_2fa0aa1521ee910003eca28fa27b2598abe8075f3f8bc447527892c3083b8a47_prof);

    }

    // line 24
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_f071ecfbf9507b0ffaebf0c9fd12c8f72789cfd97b044355a88c39b611bba3e5 = $this->env->getExtension("native_profiler");
        $__internal_f071ecfbf9507b0ffaebf0c9fd12c8f72789cfd97b044355a88c39b611bba3e5->enter($__internal_f071ecfbf9507b0ffaebf0c9fd12c8f72789cfd97b044355a88c39b611bba3e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_f071ecfbf9507b0ffaebf0c9fd12c8f72789cfd97b044355a88c39b611bba3e5->leave($__internal_f071ecfbf9507b0ffaebf0c9fd12c8f72789cfd97b044355a88c39b611bba3e5_prof);

    }

    // line 25
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_f5e633310fb635497c78dca05167b4fa19d9d7df3ead784a47a79186017d191d = $this->env->getExtension("native_profiler");
        $__internal_f5e633310fb635497c78dca05167b4fa19d9d7df3ead784a47a79186017d191d->enter($__internal_f5e633310fb635497c78dca05167b4fa19d9d7df3ead784a47a79186017d191d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_f5e633310fb635497c78dca05167b4fa19d9d7df3ead784a47a79186017d191d->leave($__internal_f5e633310fb635497c78dca05167b4fa19d9d7df3ead784a47a79186017d191d_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:agregarRepuestoView.html.twig";
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
/* Transaccion #{{ repuesto.idTransaccion }} - Repuesto agregado*/
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
