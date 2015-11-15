<?php

/* AcmeDemoTwoBundle:Repuestos:resultadoBusquedaVentas.html.twig */
class __TwigTemplate_c53d1e596c0db799d03e7ec13a8055bf638d700a5dd57abaaac82c5956cfde19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:resultadoBusquedaVentas.html.twig", 1);
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
        $__internal_09acb45c5781afcb7acae334b28838c16e302d694fc577367db49da6cfe092d5 = $this->env->getExtension("native_profiler");
        $__internal_09acb45c5781afcb7acae334b28838c16e302d694fc577367db49da6cfe092d5->enter($__internal_09acb45c5781afcb7acae334b28838c16e302d694fc577367db49da6cfe092d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:resultadoBusquedaVentas.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09acb45c5781afcb7acae334b28838c16e302d694fc577367db49da6cfe092d5->leave($__internal_09acb45c5781afcb7acae334b28838c16e302d694fc577367db49da6cfe092d5_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_479fa92e4a0f79d30e8fd0dddacfc03e3ab5cf4423578324f6708155a2c34cd2 = $this->env->getExtension("native_profiler");
        $__internal_479fa92e4a0f79d30e8fd0dddacfc03e3ab5cf4423578324f6708155a2c34cd2->enter($__internal_479fa92e4a0f79d30e8fd0dddacfc03e3ab5cf4423578324f6708155a2c34cd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Lista de repuestos
";
        
        $__internal_479fa92e4a0f79d30e8fd0dddacfc03e3ab5cf4423578324f6708155a2c34cd2->leave($__internal_479fa92e4a0f79d30e8fd0dddacfc03e3ab5cf4423578324f6708155a2c34cd2_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_dccc7346d2e7d2a2fbe9b98e0d72d712e9ce00f82519febdcfb6aa674c1d1a61 = $this->env->getExtension("native_profiler");
        $__internal_dccc7346d2e7d2a2fbe9b98e0d72d712e9ce00f82519febdcfb6aa674c1d1a61->enter($__internal_dccc7346d2e7d2a2fbe9b98e0d72d712e9ce00f82519febdcfb6aa674c1d1a61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 7
        echo "  ";
        if (array_key_exists("removeSuccess", $context)) {
            // line 8
            echo "    <div class=\"alert alert-success\" role=\"alert\">
      Repuesto eliminado con exito.
    </div>
    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
  ";
        }
        // line 13
        echo "  <div>
    <strong>Filtrar por:</strong></br>
      <input id=\"lavarropaButton\" type=\"checkbox\" value=\"\" />Lavarropa
      <input id=\"lavavajillaButton\" type=\"checkbox\" value=\"\" />Lavavajilla
      <input id=\"aireAcondicionadoButton\" type=\"checkbox\" value=\"\">Aire acondicionado
      </br>
      <input id=\"cocinaButton\" type=\"checkbox\" value=\"\">
      Cocina
      <input id=\"microondasButton\" type=\"checkbox\" value=\"\">
      Microondas
  </div>
<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repuestos"]) ? $context["repuestos"] : $this->getContext($context, "repuestos")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["repuesto"]) {
            // line 36
            echo "
          ";
            // line 37
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                // line 38
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" class=\"lavarropa\">
              <th scope=\"row\">";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
                <td id=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
              </td>
            </tr>
          ";
            }
            // line 57
            echo " ";
            // line 58
            echo "
          ";
            // line 59
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                // line 60
                echo "            <tr class=\"lavavajilla\">
              <th scope=\"row\">";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 67
            echo " ";
            // line 68
            echo "
          ";
            // line 69
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                // line 70
                echo "            <tr class=\"aireAcondicionado\">
              <th scope=\"row\">";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 77
            echo " ";
            // line 78
            echo "
          ";
            // line 79
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                // line 80
                echo "            <tr class=\"cocina\">
              <th scope=\"row\">";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 87
            echo " ";
            // line 88
            echo "
          ";
            // line 89
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                // line 90
                echo "            <tr class=\"microondas\">
              <th scope=\"row\">";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 93
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 97
            echo " ";
            // line 98
            echo "
    <script>
    \$(\"#";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "SubmitButton\").click(function(){
        \$(\"#";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "Form\").submit();
    });
    \$(\"#";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "usd\").click(function(){
      \$(\"#";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch\").show();
      \$(\"#";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch input\").focus();
    });
    </script>

    \t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['repuesto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "      </tbody>
    </table>
    <script>
    \$(\"input\").click(function(){
      if(\$(\"#lavarropaButton\").is(':checked')){
          \$(\".lavarropa\").show();
      }
      else{
        \$(\".lavarropa\").hide();
      }
      if(\$(\"#lavavajillaButton\").is(':checked')){
          \$(\".lavavajilla\").show();
      }
      else{
        \$(\".lavavajilla\").hide();
      }
      if(\$(\"#aireAcondicionadoButton\").is(':checked')){
          \$(\".aireAcondicionado\").show();
      }
      else{
        \$(\".aireAcondicionado\").hide();
      }
      if(\$(\"#cocinaButton\").is(':checked')){
          \$(\".cocina\").show();
      }
      else{
        \$(\".cocina\").hide();
      }
      if(\$(\"#microondasButton\").is(':checked')){
          \$(\".microondas\").show();
      }
      else{
        \$(\".microondas\").hide();
      }
    });
    </script>
";
        
        $__internal_dccc7346d2e7d2a2fbe9b98e0d72d712e9ce00f82519febdcfb6aa674c1d1a61->leave($__internal_dccc7346d2e7d2a2fbe9b98e0d72d712e9ce00f82519febdcfb6aa674c1d1a61_prof);

    }

    // line 148
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_ef23fb2bea7517cd29c670ba1df9fa47a056a77226cc8f7b01a0c5f398a0babd = $this->env->getExtension("native_profiler");
        $__internal_ef23fb2bea7517cd29c670ba1df9fa47a056a77226cc8f7b01a0c5f398a0babd->enter($__internal_ef23fb2bea7517cd29c670ba1df9fa47a056a77226cc8f7b01a0c5f398a0babd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_ef23fb2bea7517cd29c670ba1df9fa47a056a77226cc8f7b01a0c5f398a0babd->leave($__internal_ef23fb2bea7517cd29c670ba1df9fa47a056a77226cc8f7b01a0c5f398a0babd_prof);

    }

    // line 149
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_fcbd94fadf78107afb891c54d9f421f9aaad42599b14e2437744cafebb3fbd22 = $this->env->getExtension("native_profiler");
        $__internal_fcbd94fadf78107afb891c54d9f421f9aaad42599b14e2437744cafebb3fbd22->enter($__internal_fcbd94fadf78107afb891c54d9f421f9aaad42599b14e2437744cafebb3fbd22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_fcbd94fadf78107afb891c54d9f421f9aaad42599b14e2437744cafebb3fbd22->leave($__internal_fcbd94fadf78107afb891c54d9f421f9aaad42599b14e2437744cafebb3fbd22_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:resultadoBusquedaVentas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  412 => 149,  400 => 148,  357 => 110,  338 => 105,  334 => 104,  330 => 103,  325 => 101,  321 => 100,  317 => 98,  315 => 97,  305 => 95,  301 => 94,  297 => 93,  293 => 92,  289 => 91,  286 => 90,  284 => 89,  281 => 88,  279 => 87,  269 => 85,  265 => 84,  261 => 83,  257 => 82,  253 => 81,  250 => 80,  248 => 79,  245 => 78,  243 => 77,  233 => 75,  229 => 74,  225 => 73,  221 => 72,  217 => 71,  214 => 70,  212 => 69,  209 => 68,  207 => 67,  197 => 65,  193 => 64,  189 => 63,  185 => 62,  181 => 61,  178 => 60,  176 => 59,  173 => 58,  171 => 57,  160 => 50,  154 => 47,  150 => 46,  145 => 44,  137 => 43,  133 => 42,  129 => 41,  125 => 40,  121 => 39,  116 => 38,  114 => 37,  111 => 36,  94 => 35,  70 => 13,  65 => 11,  60 => 8,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Repuestos:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Lista de repuestos*/
/* {% endblock title_right_content %}*/
/* {% block content_right_content %}*/
/*   {% if removeSuccess is defined %}*/
/*     <div class="alert alert-success" role="alert">*/
/*       Repuesto eliminado con exito.*/
/*     </div>*/
/*     {{ success }}*/
/*   {% endif %}*/
/*   <div>*/
/*     <strong>Filtrar por:</strong></br>*/
/*       <input id="lavarropaButton" type="checkbox" value="" />Lavarropa*/
/*       <input id="lavavajillaButton" type="checkbox" value="" />Lavavajilla*/
/*       <input id="aireAcondicionadoButton" type="checkbox" value="">Aire acondicionado*/
/*       </br>*/
/*       <input id="cocinaButton" type="checkbox" value="">*/
/*       Cocina*/
/*       <input id="microondasButton" type="checkbox" value="">*/
/*       Microondas*/
/*   </div>*/
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Codigo</th>*/
/*           <th>Nombre</th>*/
/*           <th>Precio</th>*/
/*           <th>Acciones</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       	{% for repuesto in repuestos %}*/
/* */
/*           {% if repuesto.categoria == 0 %}*/
/*             <tr id="{{ repuesto.id }}" class="lavarropa">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*                 <td id="{{ repuesto.id }}cantidadSearch" style="display:none;">*/
/*                   <div class="input-group" style="width:100px; height:20px;">*/
/*                     <form id="{{ repuesto.id }}Form" method="post" action="/repuestos/vender/">*/
/*                       <input type="hidden" name="idRepuesto" value="{{ repuesto.id }}" />*/
/*                       <input style="width:60px; height:22px; padding-top:2px; padding-bottom:2px;" name="cantidadRepuesto" type="text" class="form-control" placeholder="Cant..." required />*/
/*                       <span class="input-group-btn" style="width:30px; height:20px;">*/
/*                         <button id="{{ repuesto.id }}SubmitButton" class="btn btn-default" style="padding-top:0; padding-bottom:0;" type="button">$</button>*/
/*                     </form>*/
/*                   </span>*/
/*                 </div>*/
/*                 </td>*/
/*               </td>*/
/*             </tr>*/
/*           {% endif %} {# lavarropa #}*/
/* */
/*           {% if repuesto.categoria == 1 %}*/
/*             <tr class="lavavajilla">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# lavavajilla #}*/
/* */
/*           {% if repuesto.categoria == 2 %}*/
/*             <tr class="aireAcondicionado">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# aire acondicionado #}*/
/* */
/*           {% if repuesto.categoria == 3 %}*/
/*             <tr class="cocina">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# cocina #}*/
/* */
/*           {% if repuesto.categoria == 4 %}*/
/*             <tr class="microondas">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# microondas #}*/
/* */
/*     <script>*/
/*     $("#{{ repuesto.id }}SubmitButton").click(function(){*/
/*         $("#{{ repuesto.id }}Form").submit();*/
/*     });*/
/*     $("#{{ repuesto.id }}usd").click(function(){*/
/*       $("#{{ repuesto.id }}cantidadSearch").show();*/
/*       $("#{{ repuesto.id }}cantidadSearch input").focus();*/
/*     });*/
/*     </script>*/
/* */
/*     	{% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*     <script>*/
/*     $("input").click(function(){*/
/*       if($("#lavarropaButton").is(':checked')){*/
/*           $(".lavarropa").show();*/
/*       }*/
/*       else{*/
/*         $(".lavarropa").hide();*/
/*       }*/
/*       if($("#lavavajillaButton").is(':checked')){*/
/*           $(".lavavajilla").show();*/
/*       }*/
/*       else{*/
/*         $(".lavavajilla").hide();*/
/*       }*/
/*       if($("#aireAcondicionadoButton").is(':checked')){*/
/*           $(".aireAcondicionado").show();*/
/*       }*/
/*       else{*/
/*         $(".aireAcondicionado").hide();*/
/*       }*/
/*       if($("#cocinaButton").is(':checked')){*/
/*           $(".cocina").show();*/
/*       }*/
/*       else{*/
/*         $(".cocina").hide();*/
/*       }*/
/*       if($("#microondasButton").is(':checked')){*/
/*           $(".microondas").show();*/
/*       }*/
/*       else{*/
/*         $(".microondas").hide();*/
/*       }*/
/*     });*/
/*     </script>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
