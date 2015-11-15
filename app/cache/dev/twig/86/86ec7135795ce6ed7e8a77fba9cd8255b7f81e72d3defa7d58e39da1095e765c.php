<?php

/* AcmeDemoTwoBundle:Repuestos:busquedaAvanzada.html.twig */
class __TwigTemplate_14796bb46ff49b00085731694b2345d6b0b0c6aecd37b5ef9a90b5b720694493 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:busquedaAvanzada.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'agregar_active' => array($this, 'block_agregar_active'),
            'inicio_active' => array($this, 'block_inicio_active'),
            'busquedaAvanzada_active' => array($this, 'block_busquedaAvanzada_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Repuestos:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0d6a0e4b4416586b1680e2b0f259442001a6249b079ab57e7f875eff392fef2 = $this->env->getExtension("native_profiler");
        $__internal_c0d6a0e4b4416586b1680e2b0f259442001a6249b079ab57e7f875eff392fef2->enter($__internal_c0d6a0e4b4416586b1680e2b0f259442001a6249b079ab57e7f875eff392fef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:busquedaAvanzada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0d6a0e4b4416586b1680e2b0f259442001a6249b079ab57e7f875eff392fef2->leave($__internal_c0d6a0e4b4416586b1680e2b0f259442001a6249b079ab57e7f875eff392fef2_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_b2b34ff4c58ae0bdf93022ecee25a351a272b4041474ffebdf109742659da7b4 = $this->env->getExtension("native_profiler");
        $__internal_b2b34ff4c58ae0bdf93022ecee25a351a272b4041474ffebdf109742659da7b4->enter($__internal_b2b34ff4c58ae0bdf93022ecee25a351a272b4041474ffebdf109742659da7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Busqueda avanzada
";
        
        $__internal_b2b34ff4c58ae0bdf93022ecee25a351a272b4041474ffebdf109742659da7b4->leave($__internal_b2b34ff4c58ae0bdf93022ecee25a351a272b4041474ffebdf109742659da7b4_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_71d56abf4e265dcbffdd714cbd1f5316dc9f7ab3f02499c0023ad8b1b91617c6 = $this->env->getExtension("native_profiler");
        $__internal_71d56abf4e265dcbffdd714cbd1f5316dc9f7ab3f02499c0023ad8b1b91617c6->enter($__internal_71d56abf4e265dcbffdd714cbd1f5316dc9f7ab3f02499c0023ad8b1b91617c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

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
        echo "

\t";
        // line 61
        if (array_key_exists("success", $context)) {
            // line 62
            echo "\t\t";
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
\t";
        }
        // line 64
        echo "\t";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
    \t";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "
    <div>
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'label');
        echo "
        ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
        ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 77
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'label');
        echo "
        ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precioCompra", array()), 'widget');
        echo "
    </div>

    <div>
        ";
        // line 82
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'label');
        echo "
        ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "porcentajeGanancia", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'label');
        echo "
        ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidad", array()), 'widget');
        echo "
    </div>
    <div>
        ";
        // line 90
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'label');
        echo "
        ";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categoria", array()), 'widget');
        echo "
    </div>

\t";
        // line 94
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t
\t";
        
        $__internal_71d56abf4e265dcbffdd714cbd1f5316dc9f7ab3f02499c0023ad8b1b91617c6->leave($__internal_71d56abf4e265dcbffdd714cbd1f5316dc9f7ab3f02499c0023ad8b1b91617c6_prof);

    }

    // line 115
    public function block_agregar_active($context, array $blocks = array())
    {
        $__internal_c026858c25ff5a5e76748654737552c0e3f7c42a984be3df1618c06ca5fa7085 = $this->env->getExtension("native_profiler");
        $__internal_c026858c25ff5a5e76748654737552c0e3f7c42a984be3df1618c06ca5fa7085->enter($__internal_c026858c25ff5a5e76748654737552c0e3f7c42a984be3df1618c06ca5fa7085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "agregar_active"));

        echo " ";
        
        $__internal_c026858c25ff5a5e76748654737552c0e3f7c42a984be3df1618c06ca5fa7085->leave($__internal_c026858c25ff5a5e76748654737552c0e3f7c42a984be3df1618c06ca5fa7085_prof);

    }

    // line 116
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_7a71c0b90026e0b1b1ab36e434dcc222a97e0b7e75521fe20fe915850938f08e = $this->env->getExtension("native_profiler");
        $__internal_7a71c0b90026e0b1b1ab36e434dcc222a97e0b7e75521fe20fe915850938f08e->enter($__internal_7a71c0b90026e0b1b1ab36e434dcc222a97e0b7e75521fe20fe915850938f08e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_7a71c0b90026e0b1b1ab36e434dcc222a97e0b7e75521fe20fe915850938f08e->leave($__internal_7a71c0b90026e0b1b1ab36e434dcc222a97e0b7e75521fe20fe915850938f08e_prof);

    }

    // line 117
    public function block_busquedaAvanzada_active($context, array $blocks = array())
    {
        $__internal_2f37b51d13c77bc6aa0b7a657ef6755b8bebee4dac84c945c2d93ed217ba00dc = $this->env->getExtension("native_profiler");
        $__internal_2f37b51d13c77bc6aa0b7a657ef6755b8bebee4dac84c945c2d93ed217ba00dc->enter($__internal_2f37b51d13c77bc6aa0b7a657ef6755b8bebee4dac84c945c2d93ed217ba00dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "busquedaAvanzada_active"));

        echo " active ";
        
        $__internal_2f37b51d13c77bc6aa0b7a657ef6755b8bebee4dac84c945c2d93ed217ba00dc->leave($__internal_2f37b51d13c77bc6aa0b7a657ef6755b8bebee4dac84c945c2d93ed217ba00dc_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:busquedaAvanzada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  266 => 117,  254 => 116,  242 => 115,  232 => 94,  226 => 91,  222 => 90,  216 => 87,  212 => 86,  206 => 83,  202 => 82,  195 => 78,  191 => 77,  184 => 73,  180 => 72,  173 => 68,  169 => 67,  164 => 65,  159 => 64,  153 => 62,  151 => 61,  147 => 59,  139 => 53,  137 => 52,  134 => 51,  126 => 45,  124 => 44,  121 => 43,  113 => 37,  111 => 36,  108 => 35,  100 => 29,  98 => 28,  95 => 27,  87 => 21,  85 => 20,  82 => 19,  74 => 13,  72 => 12,  69 => 11,  63 => 9,  61 => 8,  58 => 7,  52 => 6,  44 => 4,  38 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Busqueda avanzada*/
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
/* */
/* */
/* 	{% if success is defined %}*/
/* 		{{ success }}*/
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
/* {% block agregar_active %} {% endblock agregar_active %}*/
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block busquedaAvanzada_active %} active {% endblock busquedaAvanzada_active %}*/
