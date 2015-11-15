<?php

/* AcmeDemoTwoBundle:Transacciones:movimientoSemanal.html.twig */
class __TwigTemplate_7e7ceb51d3ccb034466d3830bfacc42ccd6bcf8f8254c71c4af9e9a6739af9d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Transacciones:movimientoSemanal.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'ultimosMovimientos_active' => array($this, 'block_ultimosMovimientos_active'),
            'movimientoSemanal_active' => array($this, 'block_movimientoSemanal_active'),
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
        $__internal_bde7f401042d1f31a95487acecddf0c7718778fbdccbc14974fcd8a4a53a7687 = $this->env->getExtension("native_profiler");
        $__internal_bde7f401042d1f31a95487acecddf0c7718778fbdccbc14974fcd8a4a53a7687->enter($__internal_bde7f401042d1f31a95487acecddf0c7718778fbdccbc14974fcd8a4a53a7687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:movimientoSemanal.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bde7f401042d1f31a95487acecddf0c7718778fbdccbc14974fcd8a4a53a7687->leave($__internal_bde7f401042d1f31a95487acecddf0c7718778fbdccbc14974fcd8a4a53a7687_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_c17b1ab67bbfe16734b214bb5a0420508b14e126f8a5450ee69a3376185e82dd = $this->env->getExtension("native_profiler");
        $__internal_c17b1ab67bbfe16734b214bb5a0420508b14e126f8a5450ee69a3376185e82dd->enter($__internal_c17b1ab67bbfe16734b214bb5a0420508b14e126f8a5450ee69a3376185e82dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Movimientos semanales realizados por el sistema
";
        
        $__internal_c17b1ab67bbfe16734b214bb5a0420508b14e126f8a5450ee69a3376185e82dd->leave($__internal_c17b1ab67bbfe16734b214bb5a0420508b14e126f8a5450ee69a3376185e82dd_prof);

    }

    // line 6
    public function block_ultimosMovimientos_active($context, array $blocks = array())
    {
        $__internal_569fa3e991b6e460e97f009d78ce03e3b76946388506cb13bf54d5200fc61f39 = $this->env->getExtension("native_profiler");
        $__internal_569fa3e991b6e460e97f009d78ce03e3b76946388506cb13bf54d5200fc61f39->enter($__internal_569fa3e991b6e460e97f009d78ce03e3b76946388506cb13bf54d5200fc61f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ultimosMovimientos_active"));

        echo " ";
        
        $__internal_569fa3e991b6e460e97f009d78ce03e3b76946388506cb13bf54d5200fc61f39->leave($__internal_569fa3e991b6e460e97f009d78ce03e3b76946388506cb13bf54d5200fc61f39_prof);

    }

    // line 7
    public function block_movimientoSemanal_active($context, array $blocks = array())
    {
        $__internal_8bdc8a248e11a3e59c7c078497e341db4372894ad316a769f9e7475dac4ad110 = $this->env->getExtension("native_profiler");
        $__internal_8bdc8a248e11a3e59c7c078497e341db4372894ad316a769f9e7475dac4ad110->enter($__internal_8bdc8a248e11a3e59c7c078497e341db4372894ad316a769f9e7475dac4ad110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "movimientoSemanal_active"));

        // line 8
        echo "\tactive
";
        
        $__internal_8bdc8a248e11a3e59c7c078497e341db4372894ad316a769f9e7475dac4ad110->leave($__internal_8bdc8a248e11a3e59c7c078497e341db4372894ad316a769f9e7475dac4ad110_prof);

    }

    // line 10
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_eccf7605473056b594906525a8f41f2f418eb504a2c5928ef903fc79906e1920 = $this->env->getExtension("native_profiler");
        $__internal_eccf7605473056b594906525a8f41f2f418eb504a2c5928ef903fc79906e1920->enter($__internal_eccf7605473056b594906525a8f41f2f418eb504a2c5928ef903fc79906e1920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 11
        echo "  ";
        if (array_key_exists("removeSuccess", $context)) {
            // line 12
            echo "    <div class=\"alert alert-success\" role=\"alert\">
      Repuesto eliminado con exito.
    </div>
    ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
  ";
        }
        // line 17
        echo "  ";
        if ((0 == 1)) {
            // line 18
            echo "    hola
  ";
        }
        // line 20
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
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["transacciones"]) ? $context["transacciones"] : $this->getContext($context, "transacciones")));
        foreach ($context['_seq'] as $context["_key"] => $context["transaccion"]) {
            // line 42
            echo "
\t        ";
            // line 43
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 0)) {
                // line 44
                echo "\t        \t<tr class=\"repuestoAgregado\">
\t            <th scope=\"row\">";
                // line 45
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto agregado</td>      \t\t
\t            <td> ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>    \t\t
\t        \t</tr>
\t        ";
            }
            // line 50
            echo " ";
            // line 51
            echo "
\t        ";
            // line 52
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 1)) {
                // line 53
                echo "\t        \t<tr class=\"repuestoModificado\">
\t            <th scope=\"row\">";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto modificado</td>      \t\t
\t            <td> ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>       \t\t
\t        \t</tr>
\t        ";
            }
            // line 59
            echo " ";
            // line 60
            echo "
\t        ";
            // line 61
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 2)) {
                // line 62
                echo "\t        \t<tr class=\"repuestoBorrado\">
\t            <th scope=\"row\">";
                // line 63
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Repuesto borrado</td>      \t\t
\t            <td> ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>     \t\t
\t        \t</tr>
\t        ";
            }
            // line 68
            echo " ";
            // line 69
            echo "
\t        ";
            // line 70
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 3)) {
                // line 71
                echo "\t        \t<tr class=\"clienteAgregado\">
\t            <th scope=\"row\">";
                // line 72
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Cliente agregado</td>      \t\t
\t            <td> ";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>      \t\t
\t        \t</tr>
\t        ";
            }
            // line 77
            echo " ";
            // line 78
            echo "
\t        ";
            // line 79
            if (($this->getAttribute($context["transaccion"], "tipoTransaccion", array()) == 4)) {
                // line 80
                echo "\t        \t<tr class=\"ventaRealizada\">
\t            <th scope=\"row\">";
                // line 81
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["transaccion"], "fechaTransaccion", array()), "d/m/Y H:i"), "html", null, true);
                echo "</th>
\t            <td> Venta realizada</td>      \t\t
\t            <td> ";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "encargado", array()), "html", null, true);
                echo "</td>   
              <td><a href=\"/transacciones/ver/";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "tipoTransaccion", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["transaccion"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-plus\"> </span></a></td>     \t\t
\t        \t</tr>
\t        ";
            }
            // line 86
            echo " ";
            // line 87
            echo "
    \t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['transaccion'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
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
        
        $__internal_eccf7605473056b594906525a8f41f2f418eb504a2c5928ef903fc79906e1920->leave($__internal_eccf7605473056b594906525a8f41f2f418eb504a2c5928ef903fc79906e1920_prof);

    }

    // line 127
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_f43b5d59f9ccca82d294f3d78953857534f6a06e6674a54089f65356defb5823 = $this->env->getExtension("native_profiler");
        $__internal_f43b5d59f9ccca82d294f3d78953857534f6a06e6674a54089f65356defb5823->enter($__internal_f43b5d59f9ccca82d294f3d78953857534f6a06e6674a54089f65356defb5823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_f43b5d59f9ccca82d294f3d78953857534f6a06e6674a54089f65356defb5823->leave($__internal_f43b5d59f9ccca82d294f3d78953857534f6a06e6674a54089f65356defb5823_prof);

    }

    // line 128
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_b593b3988058a111afa5f3e3fb4403fef2a917c5a7641090a03bed1321e3f780 = $this->env->getExtension("native_profiler");
        $__internal_b593b3988058a111afa5f3e3fb4403fef2a917c5a7641090a03bed1321e3f780->enter($__internal_b593b3988058a111afa5f3e3fb4403fef2a917c5a7641090a03bed1321e3f780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_b593b3988058a111afa5f3e3fb4403fef2a917c5a7641090a03bed1321e3f780->leave($__internal_b593b3988058a111afa5f3e3fb4403fef2a917c5a7641090a03bed1321e3f780_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:movimientoSemanal.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 128,  317 => 127,  274 => 89,  267 => 87,  265 => 86,  257 => 84,  253 => 83,  248 => 81,  245 => 80,  243 => 79,  240 => 78,  238 => 77,  230 => 75,  226 => 74,  221 => 72,  218 => 71,  216 => 70,  213 => 69,  211 => 68,  203 => 66,  199 => 65,  194 => 63,  191 => 62,  189 => 61,  186 => 60,  184 => 59,  176 => 57,  172 => 56,  167 => 54,  164 => 53,  162 => 52,  159 => 51,  157 => 50,  149 => 48,  145 => 47,  140 => 45,  137 => 44,  135 => 43,  132 => 42,  128 => 41,  105 => 20,  101 => 18,  98 => 17,  93 => 15,  88 => 12,  85 => 11,  79 => 10,  71 => 8,  65 => 7,  53 => 6,  45 => 4,  39 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Movimientos semanales realizados por el sistema*/
/* {% endblock title_right_content %}*/
/* {% block ultimosMovimientos_active %} {% endblock %}*/
/* {% block movimientoSemanal_active %}*/
/* 	active*/
/* {% endblock movimientoSemanal_active %}*/
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
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>       		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Modificar repuesto #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 2 %}*/
/* 	        	<tr class="repuestoBorrado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Repuesto borrado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>     		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Borrar repuesto #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 3 %}*/
/* 	        	<tr class="clienteAgregado">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Cliente agregado</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>      		*/
/* 	        	</tr>*/
/* 	        {% endif %} {# Cliente agregado #}*/
/* */
/* 	        {% if transaccion.tipoTransaccion == 4 %}*/
/* 	        	<tr class="ventaRealizada">*/
/* 	            <th scope="row">{{ transaccion.fechaTransaccion|date("d/m/Y H:i") }}</th>*/
/* 	            <td> Venta realizada</td>      		*/
/* 	            <td> {{transaccion.encargado}}</td>   */
/*               <td><a href="/transacciones/ver/{{ transaccion.tipoTransaccion }}/{{ transaccion.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-plus"> </span></a></td>     		*/
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
