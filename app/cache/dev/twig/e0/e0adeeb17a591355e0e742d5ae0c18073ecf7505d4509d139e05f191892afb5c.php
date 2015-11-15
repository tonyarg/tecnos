<?php

/* AcmeDemoTwoBundle:Repuestos:agregar.html.twig */
class __TwigTemplate_e094a694a2835563de27aa06eb09d04a6dfc0f309f31b510b4e90ff9e14521c2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:agregar.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'inicio_active' => array($this, 'block_inicio_active'),
            'agregar_active' => array($this, 'block_agregar_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Repuestos:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6234c6b5a0efb01ff1bcb48dab9a13b97d7d5cc8597882d5fe68677a8ddc29b3 = $this->env->getExtension("native_profiler");
        $__internal_6234c6b5a0efb01ff1bcb48dab9a13b97d7d5cc8597882d5fe68677a8ddc29b3->enter($__internal_6234c6b5a0efb01ff1bcb48dab9a13b97d7d5cc8597882d5fe68677a8ddc29b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:agregar.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6234c6b5a0efb01ff1bcb48dab9a13b97d7d5cc8597882d5fe68677a8ddc29b3->leave($__internal_6234c6b5a0efb01ff1bcb48dab9a13b97d7d5cc8597882d5fe68677a8ddc29b3_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_442331b125b0b0d9219b48c62800032ae67b5824a5bc5f6349ab72ac8e3519d0 = $this->env->getExtension("native_profiler");
        $__internal_442331b125b0b0d9219b48c62800032ae67b5824a5bc5f6349ab72ac8e3519d0->enter($__internal_442331b125b0b0d9219b48c62800032ae67b5824a5bc5f6349ab72ac8e3519d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Agregar repuestos
";
        
        $__internal_442331b125b0b0d9219b48c62800032ae67b5824a5bc5f6349ab72ac8e3519d0->leave($__internal_442331b125b0b0d9219b48c62800032ae67b5824a5bc5f6349ab72ac8e3519d0_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_18a4c34b77b6e2f950efc567fb6cea99995ccbca92b6e9d4f86b3adc20e5ff06 = $this->env->getExtension("native_profiler");
        $__internal_18a4c34b77b6e2f950efc567fb6cea99995ccbca92b6e9d4f86b3adc20e5ff06->enter($__internal_18a4c34b77b6e2f950efc567fb6cea99995ccbca92b6e9d4f86b3adc20e5ff06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 7
        echo "
\t";
        // line 8
        if (array_key_exists("success", $context)) {
            // line 9
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
\t";
        }
        // line 11
        echo "
\t";
        // line 12
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'errors')) {
            // line 13
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Codigo invalido
\t\t</div>
\t";
        }
        // line 19
        echo "
\t";
        // line 20
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'errors')) {
            // line 21
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Nombre invalido
\t\t</div>
\t";
        }
        // line 27
        echo "
\t";
        // line 28
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'errors')) {
            // line 29
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Precio compra invalido
\t\t</div>
\t";
        }
        // line 35
        echo "
\t";
        // line 36
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'errors')) {
            // line 37
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Porcentaje de ganancia invalido
\t\t</div>
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'errors')) {
            // line 45
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Stock inicial invalido
\t\t</div>
\t";
        }
        // line 51
        echo "
\t";
        // line 52
        if ($this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'errors')) {
            // line 53
            echo "\t\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t  <span class=\"glyphicon glyphicon-exclamation-sign\" aria-hidden=\"true\"></span>
\t\t  <span class=\"sr-only\">Error:</span>
\t\t  Categoria invalida
\t\t</div>
\t";
        }
        // line 59
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div>
        ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo "
        ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'label');
        echo "
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'label');
        echo "
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 85
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget');
        echo "
    </div>

\t";
        // line 89
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
\t";
        
        $__internal_18a4c34b77b6e2f950efc567fb6cea99995ccbca92b6e9d4f86b3adc20e5ff06->leave($__internal_18a4c34b77b6e2f950efc567fb6cea99995ccbca92b6e9d4f86b3adc20e5ff06_prof);

    }

    // line 110
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_7fff7576c0463b96bb267cae87032ce063c0db93ab1308799aafaaad4b091758 = $this->env->getExtension("native_profiler");
        $__internal_7fff7576c0463b96bb267cae87032ce063c0db93ab1308799aafaaad4b091758->enter($__internal_7fff7576c0463b96bb267cae87032ce063c0db93ab1308799aafaaad4b091758_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_7fff7576c0463b96bb267cae87032ce063c0db93ab1308799aafaaad4b091758->leave($__internal_7fff7576c0463b96bb267cae87032ce063c0db93ab1308799aafaaad4b091758_prof);

    }

    // line 111
    public function block_agregar_active($context, array $blocks = array())
    {
        $__internal_41c18549da64c4b50b1d9093711558cb62c535291db467729d3a4ea0dbbe7d53 = $this->env->getExtension("native_profiler");
        $__internal_41c18549da64c4b50b1d9093711558cb62c535291db467729d3a4ea0dbbe7d53->enter($__internal_41c18549da64c4b50b1d9093711558cb62c535291db467729d3a4ea0dbbe7d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "agregar_active"));

        echo " active ";
        
        $__internal_41c18549da64c4b50b1d9093711558cb62c535291db467729d3a4ea0dbbe7d53->leave($__internal_41c18549da64c4b50b1d9093711558cb62c535291db467729d3a4ea0dbbe7d53_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 111,  229 => 110,  219 => 89,  213 => 86,  209 => 85,  203 => 82,  199 => 81,  193 => 78,  189 => 77,  182 => 73,  178 => 72,  171 => 68,  167 => 67,  160 => 63,  156 => 62,  151 => 60,  146 => 59,  138 => 53,  136 => 52,  133 => 51,  125 => 45,  123 => 44,  120 => 43,  112 => 37,  110 => 36,  107 => 35,  99 => 29,  97 => 28,  94 => 27,  86 => 21,  84 => 20,  81 => 19,  73 => 13,  71 => 12,  68 => 11,  62 => 9,  60 => 8,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Agregar repuestos*/
/* {% endblock title_right_content %}*/
/* {% block content_right_content %}*/
/* */
/* 	{% if success is defined %}*/
/* 		{{ success }}*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.codigo) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Codigo invalido*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.nombre) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Nombre invalido*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.precioCompra) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Precio compra invalido*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.porcentajeGanancia) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Porcentaje de ganancia invalido*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.cantidad) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Stock inicial invalido*/
/* 		</div>*/
/* 	{% endif %}*/
/* */
/* 	{% if form_errors(form.categoria) %}*/
/* 		<div class="alert alert-danger" role="alert">*/
/* 		  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>*/
/* 		  <span class="sr-only">Error:</span>*/
/* 		  Categoria invalida*/
/* 		</div>*/
/* 	{% endif %}*/
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
/* 	*/
/* 	{#<form action="{{ path('tecnos_repuestos_agregar_check') }}" method="post">*/
/* 		    <label for="codigo">Codigo:</label>*/
/* 		    <input type="text" id="codigo" name="codigo" value="" /></br>*/
/* 		    <label for="nombre">Nombre:</label>*/
/* 		    <input type="text" id="nombre" name="nombre" value="" /></br>*/
/* 		    <label for="precio-compra">Precio compra:</label>*/
/* 		    <input type="text" id="precio-compra" name="precioCompra" value="" /></br>*/
/* 		    <label for="precio-venta">% ganancia:</label>*/
/* 		    <input type="text" id="precio-venta" name="porcentajeGanancia" value="" /></br>*/
/* 		    <label for="porcentaje-ganancia">Stock inicial:</label>*/
/* 		    <input type="text" id="porcentaje-ganancia" name="cantidad" value="" /></br>*/
/* 		    <label for="porcentaje-ganancia">Categoria</label>*/
/* 		    <input type="text" id="porcentaje-ganancia" name="categoria" value="" /></br>*/
/* 	*/
/* 		        <input type="hidden" name="_target_path" value="/blog/21" />*/
/* 		    <button type="submit">Agregar</button>*/
/* 		</form>#}*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block agregar_active %} active {% endblock agregar_active %}*/
