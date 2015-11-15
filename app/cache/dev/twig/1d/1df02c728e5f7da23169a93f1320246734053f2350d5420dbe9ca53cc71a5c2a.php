<?php

/* AcmeDemoTwoBundle:Ventas:pedidoTemporal.html.twig */
class __TwigTemplate_7e72df23816f98c58a3f24c510703435faf7703b1e7a3518e4d9cff968c1fb05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content_right_content' => array($this, 'block_content_right_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_74df0d9b274cfc499c3e2f8aace70a44cadffb6e381c7ff2a17a35a60de97c89 = $this->env->getExtension("native_profiler");
        $__internal_74df0d9b274cfc499c3e2f8aace70a44cadffb6e381c7ff2a17a35a60de97c89->enter($__internal_74df0d9b274cfc499c3e2f8aace70a44cadffb6e381c7ff2a17a35a60de97c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:pedidoTemporal.html.twig"));

        // line 1
        $this->displayBlock('content_right_content', $context, $blocks);
        
        $__internal_74df0d9b274cfc499c3e2f8aace70a44cadffb6e381c7ff2a17a35a60de97c89->leave($__internal_74df0d9b274cfc499c3e2f8aace70a44cadffb6e381c7ff2a17a35a60de97c89_prof);

    }

    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_d16d4fc67f5397a58bf5464619a9ec53ec7902c7ffb59a9fecee2305e9bc7517 = $this->env->getExtension("native_profiler");
        $__internal_d16d4fc67f5397a58bf5464619a9ec53ec7902c7ffb59a9fecee2305e9bc7517->enter($__internal_d16d4fc67f5397a58bf5464619a9ec53ec7902c7ffb59a9fecee2305e9bc7517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 2
        if (array_key_exists("alert", $context)) {
            // line 3
            echo "  <div class=\"alert alert-info\" role=\"alert\">
    ";
            // line 4
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
  </div>
";
        }
        // line 7
        echo "  ";
        // line 20
        echo "  ";
        if (((isset($context["repuestos"]) ? $context["repuestos"] : $this->getContext($context, "repuestos")) != null)) {
            // line 21
            echo "    <h2 style=\"text-align:left;\">Pedido</h2>
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
            // line 33
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
                // line 34
                echo "
          ";
                // line 35
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                    // line 36
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" class=\"lavarropa\">
              <th scope=\"row\">";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</th>
              <td>";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 39
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                    echo "</td>
              <td><a href=\"/repuestos/modificar/";
                    // line 41
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/ventas/pedido/borrar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                    // line 43
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                    // line 45
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
                }
                // line 55
                echo " ";
                // line 56
                echo "
          ";
                // line 57
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                    // line 58
                    echo "            <tr id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" class=\"lavavajilla\">
              <th scope=\"row\">";
                    // line 59
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</th>
              <td>";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 61
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 62
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                    echo "</td>
              <td><a href=\"/repuestos/modificar/";
                    // line 63
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/ventas/pedido/borrar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                    // line 67
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                    // line 68
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                    // line 71
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
                }
                // line 77
                echo " ";
                // line 78
                echo "
          ";
                // line 79
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                    // line 80
                    echo "            <tr class=\"aireAcondicionado\">
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
                    echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/ventas/pedido/borrar/";
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
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                    // line 90
                    echo "            <tr class=\"cocina\">
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
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/ventas/pedido/borrar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                    // line 100
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
                }
                // line 109
                echo " ";
                // line 110
                echo "
          ";
                // line 111
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                    // line 112
                    echo "            <tr class=\"microondas\">
              <th scope=\"row\">";
                    // line 113
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "</th>
              <td>";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 115
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                    echo "</td>
              <td>";
                    // line 116
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                    echo "</td>
              <td><a href=\"/repuestos/modificar/";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/ventas/pedido/borrar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                    // line 119
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                    // line 121
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                    // line 122
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                    // line 125
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
                }
                // line 131
                echo " ";
                echo "    
    <script>
          \$(\"#";
                // line 133
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\").submit(function(event){
                var value = \$(\"#";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch input\").val();
                var cantidadValue = \$(\"#";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch .form-control\").val();
                \$.ajax({
                    type: \"POST\",
                    data: { idRepuesto: value, cantidad: cantidadValue },
                    url: \"/ventas/pedido/temporal/\"
                }) 
                .done(function(response){
                  alert(response);
                  // alert(JSON.stringify(response,null,4) );
                    template = response;
                    \$('#outputTwo').html(template); 
                event.preventDefault();
                })
                .fail(function(jqXHR, textStatus, errorThrown){
                    console.log(errorThrown);
                    alert('Error : ' + errorThrown);
                });
                event.preventDefault();
            });
      \$(document).ready(function(){
        \$(\"#";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\").click(function(){
          \$(\"#";
                // line 156
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\").show();
          \$(\"#";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch input\").focus();
        });

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
            // line 166
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
        }
        
        $__internal_d16d4fc67f5397a58bf5464619a9ec53ec7902c7ffb59a9fecee2305e9bc7517->leave($__internal_d16d4fc67f5397a58bf5464619a9ec53ec7902c7ffb59a9fecee2305e9bc7517_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:pedidoTemporal.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  427 => 166,  404 => 157,  400 => 156,  396 => 155,  373 => 135,  369 => 134,  365 => 133,  360 => 131,  350 => 125,  344 => 122,  340 => 121,  335 => 119,  326 => 117,  322 => 116,  318 => 115,  314 => 114,  310 => 113,  307 => 112,  305 => 111,  302 => 110,  300 => 109,  290 => 103,  284 => 100,  280 => 99,  275 => 97,  266 => 95,  262 => 94,  258 => 93,  254 => 92,  250 => 91,  247 => 90,  245 => 89,  242 => 88,  240 => 87,  230 => 85,  226 => 84,  222 => 83,  218 => 82,  214 => 81,  211 => 80,  209 => 79,  206 => 78,  204 => 77,  194 => 71,  188 => 68,  184 => 67,  179 => 65,  170 => 63,  166 => 62,  162 => 61,  158 => 60,  154 => 59,  149 => 58,  147 => 57,  144 => 56,  142 => 55,  132 => 49,  126 => 46,  122 => 45,  117 => 43,  108 => 41,  104 => 40,  100 => 39,  96 => 38,  92 => 37,  87 => 36,  85 => 35,  82 => 34,  65 => 33,  51 => 21,  48 => 20,  46 => 7,  40 => 4,  37 => 3,  35 => 2,  23 => 1,);
    }
}
/* {% block content_right_content %}*/
/* {% if alert is defined %}*/
/*   <div class="alert alert-info" role="alert">*/
/*     {{ alert }}*/
/*   </div>*/
/* {% endif %}*/
/*   {#*/
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
/*   #}*/
/*   {% if repuestos != null %}*/
/*     <h2 style="text-align:left;">Pedido</h2>*/
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
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
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
/*             </tr>*/
/*           {% endif %} {# lavarropa #}*/
/* */
/*           {% if repuesto.categoria == 1 %}*/
/*             <tr id="{{ repuesto.id }}" class="lavavajilla">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
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
/*             </tr>*/
/*           {% endif %} {# lavavajilla #}*/
/* */
/*           {% if repuesto.categoria == 2 %}*/
/*             <tr class="aireAcondicionado">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# aire acondicionado #}*/
/* */
/*           {% if repuesto.categoria == 3 %}*/
/*             <tr class="cocina">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
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
/*             </tr>*/
/*           {% endif %} {# cocina #}*/
/* */
/*           {% if repuesto.categoria == 4 %}*/
/*             <tr class="microondas">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
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
/*             </tr>*/
/*           {% endif %} {# microondas #}    */
/*     <script>*/
/*           $("#{{ repuesto.id }}Form").submit(function(event){*/
/*                 var value = $("#{{ repuesto.id }}cantidadSearch input").val();*/
/*                 var cantidadValue = $("#{{ repuesto.id }}cantidadSearch .form-control").val();*/
/*                 $.ajax({*/
/*                     type: "POST",*/
/*                     data: { idRepuesto: value, cantidad: cantidadValue },*/
/*                     url: "/ventas/pedido/temporal/"*/
/*                 }) */
/*                 .done(function(response){*/
/*                   alert(response);*/
/*                   // alert(JSON.stringify(response,null,4) );*/
/*                     template = response;*/
/*                     $('#outputTwo').html(template); */
/*                 event.preventDefault();*/
/*                 })*/
/*                 .fail(function(jqXHR, textStatus, errorThrown){*/
/*                     console.log(errorThrown);*/
/*                     alert('Error : ' + errorThrown);*/
/*                 });*/
/*                 event.preventDefault();*/
/*             });*/
/*       $(document).ready(function(){*/
/*         $("#{{ repuesto.id }}usd").click(function(){*/
/*           $("#{{ repuesto.id }}cantidadSearch").show();*/
/*           $("#{{ repuesto.id }}cantidadSearch input").focus();*/
/*         });*/
/* */
/*       });*/
/*     </script>*/
/* */
/* */
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
/* {% endif %}*/
/* {% endblock content_right_content %}*/
