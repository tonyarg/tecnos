<?php

/* AcmeDemoTwoBundle:Ventas:pedidoTmp.html.twig */
class __TwigTemplate_99a70fda5ec308654207f3ec8962c61f21c550e5e3543a7a6eaa4c4689d33cb3 extends Twig_Template
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
        $__internal_26a7314cf9b023fb0673a82c9ea60cd856caf62f9c559910fef74dd223d121f2 = $this->env->getExtension("native_profiler");
        $__internal_26a7314cf9b023fb0673a82c9ea60cd856caf62f9c559910fef74dd223d121f2->enter($__internal_26a7314cf9b023fb0673a82c9ea60cd856caf62f9c559910fef74dd223d121f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:pedidoTmp.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content_right_content', $context, $blocks);
        
        $__internal_26a7314cf9b023fb0673a82c9ea60cd856caf62f9c559910fef74dd223d121f2->leave($__internal_26a7314cf9b023fb0673a82c9ea60cd856caf62f9c559910fef74dd223d121f2_prof);

    }

    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_89cfa3509dcaa64910bbb95ce5db42a4687bfc2443e060ca1ab6bbb4a3b28a92 = $this->env->getExtension("native_profiler");
        $__internal_89cfa3509dcaa64910bbb95ce5db42a4687bfc2443e060ca1ab6bbb4a3b28a92->enter($__internal_89cfa3509dcaa64910bbb95ce5db42a4687bfc2443e060ca1ab6bbb4a3b28a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 3
        if (array_key_exists("alert", $context)) {
            // line 4
            echo "  <div class=\"alert alert-info\" role=\"alert\">
    ";
            // line 5
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "
  </div>
";
        }
        // line 8
        if (array_key_exists("repuestos", $context)) {
            // line 9
            echo "    ";
            if (array_key_exists("busqueda", $context)) {
                // line 10
                echo "    ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                    // line 11
                    echo "      <h2 style=\"text-align:left;\">Pedido</h2>
    ";
                }
                // line 13
                echo "    ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == true)) {
                    // line 14
                    echo "      <div>
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
    ";
                }
                // line 26
                echo "  ";
            }
            // line 27
            echo "<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Stock</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      \t";
            // line 39
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
                // line 40
                echo "
          ";
                // line 41
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                    // line 42
                    echo "            ";
                    $context["categoria"] = "lavarropa";
                    // line 43
                    echo "          ";
                }
                // line 44
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                    // line 45
                    echo "            ";
                    $context["categoria"] = "lavavajilla";
                    // line 46
                    echo "          ";
                }
                // line 47
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                    // line 48
                    echo "            ";
                    $context["categoria"] = "aireAcondicionado";
                    // line 49
                    echo "          ";
                }
                // line 50
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                    // line 51
                    echo "            ";
                    $context["categoria"] = "cocina";
                    // line 52
                    echo "          ";
                }
                // line 53
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                    // line 54
                    echo "            ";
                    $context["categoria"] = "microondas";
                    // line 55
                    echo "          ";
                }
                // line 56
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "categoria", array()), "html", null, true);
                echo "\">
              <th scope=\"row\">";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "idPedido", array()), "html", null, true);
                echo "</td>
              <td>
              ";
                // line 63
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == true)) {
                    // line 64
                    echo "                <a href=\"/repuestos/modificar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a>
                <a href=\"/repuestos/borrar/";
                    // line 65
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              ";
                }
                // line 67
                echo "              ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                    // line 68
                    echo "                <a href=\"/ventas/pedido/borrar/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              ";
                }
                // line 70
                echo "              </td>
                <td id=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr> 
    <script>
    /*
      Una vez realizada la busqueda se envian
      los datos del formulario mediante ajax
      al controlador correspondiente.
      El controlador devuelve una respuesta
      que se imprime en #outputTwo
    */       
          \$(\"#";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\").submit(function(event){
                var value = \$(\"#";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch input\").val();
                var cantidadValue = \$(\"#";
                // line 93
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
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\").click(function(){
          \$(\"#";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\").show();
          \$(\"#";
                // line 115
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
            // line 124
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
        
        $__internal_89cfa3509dcaa64910bbb95ce5db42a4687bfc2443e060ca1ab6bbb4a3b28a92->leave($__internal_89cfa3509dcaa64910bbb95ce5db42a4687bfc2443e060ca1ab6bbb4a3b28a92_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:pedidoTmp.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  305 => 124,  282 => 115,  278 => 114,  274 => 113,  251 => 93,  247 => 92,  243 => 91,  226 => 77,  220 => 74,  216 => 73,  211 => 71,  208 => 70,  202 => 68,  199 => 67,  194 => 65,  187 => 64,  185 => 63,  180 => 61,  176 => 60,  172 => 59,  168 => 58,  164 => 57,  159 => 56,  156 => 55,  153 => 54,  150 => 53,  147 => 52,  144 => 51,  141 => 50,  138 => 49,  135 => 48,  132 => 47,  129 => 46,  126 => 45,  123 => 44,  120 => 43,  117 => 42,  115 => 41,  112 => 40,  95 => 39,  81 => 27,  78 => 26,  64 => 14,  61 => 13,  57 => 11,  54 => 10,  51 => 9,  49 => 8,  43 => 5,  40 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block content_right_content %}*/
/* {% if alert is defined %}*/
/*   <div class="alert alert-info" role="alert">*/
/*     {{ alert }}*/
/*   </div>*/
/* {% endif %}*/
/* {% if repuestos is defined %}*/
/*     {% if busqueda is defined %}*/
/*     {% if busqueda == false %}*/
/*       <h2 style="text-align:left;">Pedido</h2>*/
/*     {% endif %}*/
/*     {% if busqueda == true %}*/
/*       <div>*/
/*         <strong>Filtrar por:</strong></br>*/
/*           <input id="lavarropaButton" type="checkbox" value="" />Lavarropa*/
/*           <input id="lavavajillaButton" type="checkbox" value="" />Lavavajilla*/
/*           <input id="aireAcondicionadoButton" type="checkbox" value="">Aire acondicionado*/
/*           </br>*/
/*           <input id="cocinaButton" type="checkbox" value="">*/
/*           Cocina*/
/*           <input id="microondasButton" type="checkbox" value="">*/
/*           Microondas*/
/*       </div>*/
/*     {% endif %}*/
/*   {% endif %}*/
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Codigo</th>*/
/*           <th>Nombre</th>*/
/*           <th>Precio</th>*/
/*           <th>Stock</th>*/
/*           <th>Acciones</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*       	{% for repuesto in repuestos %}*/
/* */
/*           {% if repuesto.categoria == 0 %}*/
/*             {% set categoria = "lavarropa" %}*/
/*           {% endif %}*/
/*           {% if repuesto.categoria == 1 %}*/
/*             {% set categoria = "lavavajilla" %}*/
/*           {% endif %}*/
/*           {% if repuesto.categoria == 2 %}*/
/*             {% set categoria = "aireAcondicionado" %}*/
/*           {% endif %}*/
/*           {% if repuesto.categoria == 3 %}*/
/*             {% set categoria = "cocina" %}*/
/*           {% endif %}*/
/*           {% if repuesto.categoria == 4 %}*/
/*             {% set categoria = "microondas" %}*/
/*           {% endif %}*/
/*             <tr class="{{ repuesto.categoria }}">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td>{{ repuesto.idPedido }}</td>*/
/*               <td>*/
/*               {% if busqueda == true %}*/
/*                 <a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a>*/
/*                 <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               {% endif %}*/
/*               {% if busqueda == false %}*/
/*                 <a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               {% endif %}*/
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
/*             </tr> */
/*     <script>*/
/*     /**/
/*       Una vez realizada la busqueda se envian*/
/*       los datos del formulario mediante ajax*/
/*       al controlador correspondiente.*/
/*       El controlador devuelve una respuesta*/
/*       que se imprime en #outputTwo*/
/*     *//*        */
/*           $("#{{ repuesto.id }}Form").submit(function(event){*/
/*                 var value = $("#{{ repuesto.id }}cantidadSearch input").val();*/
/*                 var cantidadValue = $("#{{ repuesto.id }}cantidadSearch .form-control").val();*/
/*                 $.ajax({*/
/*                     type: "POST",*/
/*                     data: { idRepuesto: value, cantidad: cantidadValue },*/
/*                     url: "/ventas/pedido/temporal/"*/
/*                 })*/
/*                 .done(function(response){*/
/*                   alert(response);*/
/*                   // alert(JSON.stringify(response,null,4) );*/
/*                     template = response;*/
/*                     $('#outputTwo').html(template);*/
/*                 event.preventDefault();*/
/*                 })*/
/*                 .fail(function(jqXHR, textStatus, errorThrown){*/
/*                   console.log(errorThrown);*/
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
