<?php

/* AcmeDemoTwoBundle:Repuestos:borrar.html.twig */
class __TwigTemplate_59b210c4f9b97f38883cd5259d949b2ed1416b41b78fea6648d7fa63beec6d7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:borrar.html.twig", 1);
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
        $__internal_2bd118174c4fee4f9da6e3f16b858098a31248cf93be43b08d43270d0ef40f8c = $this->env->getExtension("native_profiler");
        $__internal_2bd118174c4fee4f9da6e3f16b858098a31248cf93be43b08d43270d0ef40f8c->enter($__internal_2bd118174c4fee4f9da6e3f16b858098a31248cf93be43b08d43270d0ef40f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:borrar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2bd118174c4fee4f9da6e3f16b858098a31248cf93be43b08d43270d0ef40f8c->leave($__internal_2bd118174c4fee4f9da6e3f16b858098a31248cf93be43b08d43270d0ef40f8c_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_db5040ab82e35d23301d41ed01ec201296d6d428cbc466757b2fa422440792b3 = $this->env->getExtension("native_profiler");
        $__internal_db5040ab82e35d23301d41ed01ec201296d6d428cbc466757b2fa422440792b3->enter($__internal_db5040ab82e35d23301d41ed01ec201296d6d428cbc466757b2fa422440792b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Borrar repuesto
";
        
        $__internal_db5040ab82e35d23301d41ed01ec201296d6d428cbc466757b2fa422440792b3->leave($__internal_db5040ab82e35d23301d41ed01ec201296d6d428cbc466757b2fa422440792b3_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_3ba0194d4683234c08e52079c5fbf887520d59dd864f8411fd3b6d995125ef7b = $this->env->getExtension("native_profiler");
        $__internal_3ba0194d4683234c08e52079c5fbf887520d59dd864f8411fd3b6d995125ef7b->enter($__internal_3ba0194d4683234c08e52079c5fbf887520d59dd864f8411fd3b6d995125ef7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 7
        echo "\t\t<div class=\"alert alert-warning\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span><strong>Alerta!</strong> Esta borrando contenido importante.
\t\t</div>
\t\t<div>
\t\t\t<p><strong>Codigo: </strong>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "codigo", array()), "html", null, true);
        echo "</p>
\t\t\t<p><strong>nombre: </strong>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["repuesto"]) ? $context["repuesto"] : $this->getContext($context, "repuesto")), "nombre", array()), "html", null, true);
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
        
        $__internal_3ba0194d4683234c08e52079c5fbf887520d59dd864f8411fd3b6d995125ef7b->leave($__internal_3ba0194d4683234c08e52079c5fbf887520d59dd864f8411fd3b6d995125ef7b_prof);

    }

    // line 24
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_5b2cb6c594fc1dfe2dd5ade63b93e1d1015b6db29d89de385373a15dc2103e59 = $this->env->getExtension("native_profiler");
        $__internal_5b2cb6c594fc1dfe2dd5ade63b93e1d1015b6db29d89de385373a15dc2103e59->enter($__internal_5b2cb6c594fc1dfe2dd5ade63b93e1d1015b6db29d89de385373a15dc2103e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_5b2cb6c594fc1dfe2dd5ade63b93e1d1015b6db29d89de385373a15dc2103e59->leave($__internal_5b2cb6c594fc1dfe2dd5ade63b93e1d1015b6db29d89de385373a15dc2103e59_prof);

    }

    // line 25
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_cea3cd1e8c4d2e46224cbc7894f7778fe8ae643fe1b666e8388b312d3bd65ffd = $this->env->getExtension("native_profiler");
        $__internal_cea3cd1e8c4d2e46224cbc7894f7778fe8ae643fe1b666e8388b312d3bd65ffd->enter($__internal_cea3cd1e8c4d2e46224cbc7894f7778fe8ae643fe1b666e8388b312d3bd65ffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_cea3cd1e8c4d2e46224cbc7894f7778fe8ae643fe1b666e8388b312d3bd65ffd->leave($__internal_cea3cd1e8c4d2e46224cbc7894f7778fe8ae643fe1b666e8388b312d3bd65ffd_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:borrar.html.twig";
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
/* 			<p><strong>Codigo: </strong>{{ repuesto.codigo }}</p>*/
/* 			<p><strong>nombre: </strong>{{ repuesto.nombre }}</p>*/
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
