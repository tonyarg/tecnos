<?php

/* AcmeDemoTwoBundle:Transacciones:index.html.twig */
class __TwigTemplate_1e563a4a4015e8c951001f930b0d9dfc1f37948d7e92948f9614d5f3cd2100fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Transacciones:index.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'left_content' => array($this, 'block_left_content'),
            'ultimosMovimientos_active' => array($this, 'block_ultimosMovimientos_active'),
            'movimientoSemanal_active' => array($this, 'block_movimientoSemanal_active'),
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
        $__internal_a2817c1fe6514ec84d4b10ae664b35aa692447f301d8f93028a75c5e13137ca3 = $this->env->getExtension("native_profiler");
        $__internal_a2817c1fe6514ec84d4b10ae664b35aa692447f301d8f93028a75c5e13137ca3->enter($__internal_a2817c1fe6514ec84d4b10ae664b35aa692447f301d8f93028a75c5e13137ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2817c1fe6514ec84d4b10ae664b35aa692447f301d8f93028a75c5e13137ca3->leave($__internal_a2817c1fe6514ec84d4b10ae664b35aa692447f301d8f93028a75c5e13137ca3_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_4d6a6513a05426d0b0a78fb234273846de062431c71738ec415a4bf4979b38d1 = $this->env->getExtension("native_profiler");
        $__internal_4d6a6513a05426d0b0a78fb234273846de062431c71738ec415a4bf4979b38d1->enter($__internal_4d6a6513a05426d0b0a78fb234273846de062431c71738ec415a4bf4979b38d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Ultimos movimientos realizados por el sistema
";
        
        $__internal_4d6a6513a05426d0b0a78fb234273846de062431c71738ec415a4bf4979b38d1->leave($__internal_4d6a6513a05426d0b0a78fb234273846de062431c71738ec415a4bf4979b38d1_prof);

    }

    // line 7
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_eb52ae37ea24404503516cb7f97266eefaf67b6cd023faaa95f2324f4b49363f = $this->env->getExtension("native_profiler");
        $__internal_eb52ae37ea24404503516cb7f97266eefaf67b6cd023faaa95f2324f4b49363f->enter($__internal_eb52ae37ea24404503516cb7f97266eefaf67b6cd023faaa95f2324f4b49363f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 8
        echo "  <li class=\"";
        $this->displayBlock('ultimosMovimientos_active', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_transacciones");
        echo "\">Ultimos movimientos</a></li>
  <li class=\"";
        // line 9
        $this->displayBlock('movimientoSemanal_active', $context, $blocks);
        echo "\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_transacciones_semanales");
        echo "\">Movimientos semanales</a></li>
";
        
        $__internal_eb52ae37ea24404503516cb7f97266eefaf67b6cd023faaa95f2324f4b49363f->leave($__internal_eb52ae37ea24404503516cb7f97266eefaf67b6cd023faaa95f2324f4b49363f_prof);

    }

    // line 8
    public function block_ultimosMovimientos_active($context, array $blocks = array())
    {
        $__internal_ce77f6453532f025977ac12b5b67a53d545d75fa7d6cbefc0b2c40ed86ca89a4 = $this->env->getExtension("native_profiler");
        $__internal_ce77f6453532f025977ac12b5b67a53d545d75fa7d6cbefc0b2c40ed86ca89a4->enter($__internal_ce77f6453532f025977ac12b5b67a53d545d75fa7d6cbefc0b2c40ed86ca89a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ultimosMovimientos_active"));

        echo "active";
        
        $__internal_ce77f6453532f025977ac12b5b67a53d545d75fa7d6cbefc0b2c40ed86ca89a4->leave($__internal_ce77f6453532f025977ac12b5b67a53d545d75fa7d6cbefc0b2c40ed86ca89a4_prof);

    }

    // line 9
    public function block_movimientoSemanal_active($context, array $blocks = array())
    {
        $__internal_5fca6febf2287bd0fde3e1370f8a278da55f307dd46cfe7b506bfcad821e9a2f = $this->env->getExtension("native_profiler");
        $__internal_5fca6febf2287bd0fde3e1370f8a278da55f307dd46cfe7b506bfcad821e9a2f->enter($__internal_5fca6febf2287bd0fde3e1370f8a278da55f307dd46cfe7b506bfcad821e9a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "movimientoSemanal_active"));

        
        $__internal_5fca6febf2287bd0fde3e1370f8a278da55f307dd46cfe7b506bfcad821e9a2f->leave($__internal_5fca6febf2287bd0fde3e1370f8a278da55f307dd46cfe7b506bfcad821e9a2f_prof);

    }

    // line 12
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_a81e9eaa8ece4e656fd1bce3a7f57265c4950b47accd800dbd017c96562d2b40 = $this->env->getExtension("native_profiler");
        $__internal_a81e9eaa8ece4e656fd1bce3a7f57265c4950b47accd800dbd017c96562d2b40->enter($__internal_a81e9eaa8ece4e656fd1bce3a7f57265c4950b47accd800dbd017c96562d2b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 13
        echo "  ";
        if (array_key_exists("removeSuccess", $context)) {
            // line 14
            echo "    <div class=\"alert alert-success\" role=\"alert\">
      Repuesto eliminado con exito.
    </div>
    ";
            // line 17
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
  ";
        }
        // line 19
        echo "  ";
        if ((0 == 1)) {
            // line 20
            echo "    hola
  ";
        }
        // line 22
        echo "  <div>
    <strong>Filtrar por:</strong></br>
      <input id=\"repuestoAgregadoButton\" type=\"checkbox\" value=\"Repuestos borrados\">Repuestos agregados
      <input id=\"repuestoModificadoButton\" type=\"checkbox\" value=\"Repuestos borrados\">Repuestos modificados
      <input id=\"repuestoBorradoButton\" type=\"checkbox\" value=\"Repuestos borrados\">Repuestos borrados
      </br>
      <input id=\"clienteAgregadoButton\" type=\"checkbox\" value=\"Repuestos borrados\">
      Clientes agregados
      <input id=\"ventaRealizadaButton\" type=\"checkbox\" value=\"Repuestos borrados\">
      Ventas realizadas
  </div>
<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>Fecha</th>
          <th>Accion</th>
          <th>Usuario</th>
          <th>Ver mas</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transacciones"]) ? $context["transacciones"] : $this->getContext($context, "transacciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaccion"]) {
            // line 44
            echo "
\t        ";
            // line 45
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 0)) {
                // line 46
                echo "\t        \t<tr class=\"repuestoAgregado\">
\t            <th scope=\"row\">";
                // line 47
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto agregado</td>      \t\t
\t            <td> ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>    \t\t
\t        \t</tr>
\t        ";
            }
            // line 52
            echo " ";
            // line 53
            echo "
\t        ";
            // line 54
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 1)) {
                // line 55
                echo "\t        \t<tr class=\"repuestoModificado\">
\t            <th scope=\"row\">";
                // line 56
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto modificado</td>      \t\t
\t            <td> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>   \t\t
\t        \t</tr>
\t        ";
            }
            // line 61
            echo " ";
            // line 62
            echo "
\t        ";
            // line 63
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 2)) {
                // line 64
                echo "\t        \t<tr class=\"repuestoBorrado\">
\t            <th scope=\"row\">";
                // line 65
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto borrado</td>      \t\t
\t            <td> ";
                // line 67
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>    \t\t
\t        \t</tr>
\t        ";
            }
            // line 70
            echo " ";
            // line 71
            echo "
\t        ";
            // line 72
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 3)) {
                // line 73
                echo "\t        \t<tr class=\"clienteAgregado\">
\t            <th scope=\"row\">";
                // line 74
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Cliente agregado</td>      \t\t
\t            <td> ";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td> \t\t
\t        \t</tr>
\t        ";
            }
            // line 79
            echo " ";
            // line 80
            echo "
\t        ";
            // line 81
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 4)) {
                // line 82
                echo "\t        \t<tr class=\"ventaRealizada\">
\t            <th scope=\"row\">";
                // line 83
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Venta realizada</td>      \t\t
\t            <td> ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
\t          \t<td><a href=\"/transacciones/ver/";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>    \t\t
\t        \t</tr>
\t        ";
            }
            // line 88
            echo " ";
            // line 89
            echo "
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "      </tbody>
    </table>
    <script>
    \$(\"input\").click(function(){
    \tif(\$(\"#repuestoAgregadoButton\").is(':checked')){
      \t\t\$(\".repuestoAgregado\").show();
    \t}
    \telse{
    \t\t\$(\".repuestoAgregado\").hide();
    \t}
    \tif(\$(\"#repuestoModificadoButton\").is(':checked')){
      \t\t\$(\".repuestoModificado\").show();
    \t}
    \telse{
    \t\t\$(\".repuestoModificado\").hide();
    \t}
    \tif(\$(\"#repuestoBorradoButton\").is(':checked')){
      \t\t\$(\".repuestoBorrado\").show();
    \t}
    \telse{
    \t\t\$(\".repuestoBorrado\").hide();
    \t}
    \tif(\$(\"#clienteAgregadoButton\").is(':checked')){
      \t\t\$(\".clienteAgregado\").show();
    \t}
    \telse{
    \t\t\$(\".clienteAgregado\").hide();
    \t}
    \tif(\$(\"#ventaRealizadaButton\").is(':checked')){
      \t\t\$(\".ventaRealizada\").show();
    \t}
    \telse{
    \t\t\$(\".ventaRealizada\").hide();
    \t}
    });
    </script>
";
        
        $__internal_a81e9eaa8ece4e656fd1bce3a7f57265c4950b47accd800dbd017c96562d2b40->leave($__internal_a81e9eaa8ece4e656fd1bce3a7f57265c4950b47accd800dbd017c96562d2b40_prof);

    }

    // line 129
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_030947ffc3ffa44122cdcf5106a4cc94e4f8f23ca6532cde0726b62dc35fe20d = $this->env->getExtension("native_profiler");
        $__internal_030947ffc3ffa44122cdcf5106a4cc94e4f8f23ca6532cde0726b62dc35fe20d->enter($__internal_030947ffc3ffa44122cdcf5106a4cc94e4f8f23ca6532cde0726b62dc35fe20d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_030947ffc3ffa44122cdcf5106a4cc94e4f8f23ca6532cde0726b62dc35fe20d->leave($__internal_030947ffc3ffa44122cdcf5106a4cc94e4f8f23ca6532cde0726b62dc35fe20d_prof);

    }

    // line 130
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_8b8f7442f94bfd753465465548c201392d58b51887c63e44f2905cc68e687208 = $this->env->getExtension("native_profiler");
        $__internal_8b8f7442f94bfd753465465548c201392d58b51887c63e44f2905cc68e687208->enter($__internal_8b8f7442f94bfd753465465548c201392d58b51887c63e44f2905cc68e687208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_8b8f7442f94bfd753465465548c201392d58b51887c63e44f2905cc68e687208->leave($__internal_8b8f7442f94bfd753465465548c201392d58b51887c63e44f2905cc68e687208_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  351 => 130,  339 => 129,  296 => 91,  289 => 89,  287 => 88,  279 => 86,  275 => 85,  270 => 83,  267 => 82,  265 => 81,  262 => 80,  260 => 79,  252 => 77,  248 => 76,  243 => 74,  240 => 73,  238 => 72,  235 => 71,  233 => 70,  225 => 68,  221 => 67,  216 => 65,  213 => 64,  211 => 63,  208 => 62,  206 => 61,  198 => 59,  194 => 58,  189 => 56,  186 => 55,  184 => 54,  181 => 53,  179 => 52,  171 => 50,  167 => 49,  162 => 47,  159 => 46,  157 => 45,  154 => 44,  150 => 43,  127 => 22,  123 => 20,  120 => 19,  115 => 17,  110 => 14,  107 => 13,  101 => 12,  90 => 9,  78 => 8,  67 => 9,  60 => 8,  54 => 7,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Ultimos movimientos realizados por el sistema*/
/* {% endblock title_right_content %}*/
/* */
/* {% block left_content %}*/
/*   <li class="{% block ultimosMovimientos_active %}active{% endblock ultimosMovimientos_active %}"><a href="{{path('tecnos_transacciones')}}">Ultimos movimientos</a></li>*/
/*   <li class="{% block movimientoSemanal_active %}{% endblock movimientoSemanal_active %}"><a href="{{path('tecnos_transacciones_semanales')}}">Movimientos semanales</a></li>*/
/* {% endblock left_content %}*/
/* */
/* {% block content_right_content %}*/
/*   {% if removeSuccess is defined %}*/
/*     <div class="alert alert-success" role="alert">*/
/*       Repuesto eliminado con exito.*/
/*     </div>*/
/*     {{ success }}*/
/*   {% endif %}*/
/*   {% if 0 == 1 %}*/
/*     hola*/
/*   {% endif %}*/
/*   <div>*/
/*     <strong>Filtrar por:</strong></br>*/
/*       <input id="repuestoAgregadoButton" type="checkbox" value="Repuestos borrados">Repuestos agregados*/
/*       <input id="repuestoModificadoButton" type="checkbox" value="Repuestos borrados">Repuestos modificados*/
/*       <input id="repuestoBorradoButton" type="checkbox" value="Repuestos borrados">Repuestos borrados*/
/*       </br>*/
/*       <input id="clienteAgregadoButton" type="checkbox" value="Repuestos borrados">*/
/*       Clientes agregados*/
/*       <input id="ventaRealizadaButton" type="checkbox" value="Repuestos borrados">*/
/*       Ventas realizadas*/
/*   </div>*/
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>Fecha</th>*/
/*           <th>Accion</th>*/
/*           <th>Usuario</th>*/
/*           <th>Ver mas</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       	{% for transaccion in transacciones %}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 0 %}*/
/* 	        	<tr class="repuestoAgregado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Repuesto agregado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>    		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Agregar repuesto #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 1 %}*/
/* 	        	<tr class="repuestoModificado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Repuesto modificado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>   		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Modificar repuesto #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 2 %}*/
/* 	        	<tr class="repuestoBorrado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Repuesto borrado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>    		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Borrar repuesto #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 3 %}*/
/* 	        	<tr class="clienteAgregado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Cliente agregado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td> 		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Cliente agregado #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 4 %}*/
/* 	        	<tr class="ventaRealizada">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Venta realizada</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/* 	          	<td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>    		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Venta realizada #}*/
/* */
/*     	{% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     <script>*/
/*     $("input").click(function(){*/
/*     	if($("#repuestoAgregadoButton").is(':checked')){*/
/*       		$(".repuestoAgregado").show();*/
/*     	}*/
/*     	else{*/
/*     		$(".repuestoAgregado").hide();*/
/*     	}*/
/*     	if($("#repuestoModificadoButton").is(':checked')){*/
/*       		$(".repuestoModificado").show();*/
/*     	}*/
/*     	else{*/
/*     		$(".repuestoModificado").hide();*/
/*     	}*/
/*     	if($("#repuestoBorradoButton").is(':checked')){*/
/*       		$(".repuestoBorrado").show();*/
/*     	}*/
/*     	else{*/
/*     		$(".repuestoBorrado").hide();*/
/*     	}*/
/*     	if($("#clienteAgregadoButton").is(':checked')){*/
/*       		$(".clienteAgregado").show();*/
/*     	}*/
/*     	else{*/
/*     		$(".clienteAgregado").hide();*/
/*     	}*/
/*     	if($("#ventaRealizadaButton").is(':checked')){*/
/*       		$(".ventaRealizada").show();*/
/*     	}*/
/*     	else{*/
/*     		$(".ventaRealizada").hide();*/
/*     	}*/
/*     });*/
/*     </script>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
