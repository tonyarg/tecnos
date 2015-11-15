<?php

/* AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig */
class __TwigTemplate_7ec8b1aaf7f4033e764fb8f5853d91df2dc864f94d996be5032ad47b575c204b extends Twig_Template
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
        $__internal_f70d4d345721186c6a52c95996381c3967d3958edcdcde7cd3600a04412de710 = $this->env->getExtension("native_profiler");
        $__internal_f70d4d345721186c6a52c95996381c3967d3958edcdcde7cd3600a04412de710->enter($__internal_f70d4d345721186c6a52c95996381c3967d3958edcdcde7cd3600a04412de710_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig"));

        // line 1
        echo "
";
        // line 2
        $this->displayBlock('content_right_content', $context, $blocks);
        
        $__internal_f70d4d345721186c6a52c95996381c3967d3958edcdcde7cd3600a04412de710->leave($__internal_f70d4d345721186c6a52c95996381c3967d3958edcdcde7cd3600a04412de710_prof);

    }

    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_8ebdb162de82d41a016e11110fcd23ea9325f194a20c9e08931678145be3876f = $this->env->getExtension("native_profiler");
        $__internal_8ebdb162de82d41a016e11110fcd23ea9325f194a20c9e08931678145be3876f->enter($__internal_8ebdb162de82d41a016e11110fcd23ea9325f194a20c9e08931678145be3876f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 3
        if (array_key_exists("alert", $context)) {
            // line 4
            echo "  <script>  
    \$(\"#outputTwo\").ready(function(){
    \$.ajax({
        type: \"POST\",
        url: \"/ventas/cargar/\"
    })
    .done(function(response){
      // alert(JSON.stringify(response,null,4) );
        template = response;
        \$('#outputTwo').html(template);
    })
    .fail(function(jqXHR, textStatus, errorThrown){
        console.log(errorThrown);
        alert('Error : ' + errorThrown);
    });
  });

  \$(\"#name_id\").click(function(){
    (\"#outputTwo\").html();
  });
  alert(\"";
            // line 24
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "\");
  </script>
";
        }
        // line 27
        if (array_key_exists("repuestos", $context)) {
            // line 28
            echo "    ";
            if (array_key_exists("busqueda", $context)) {
                // line 29
                echo "    ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                    // line 30
                    echo "      <h2 style=\"text-align:left;\">Pedido</h2>
    ";
                }
                // line 32
                echo "    ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == true)) {
                    // line 33
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
                // line 45
                echo "  ";
            }
            // line 46
            echo "<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Precio unitario</th>
          <th>Cantidad</th>
          ";
            // line 54
            if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                // line 55
                echo "            <th>Precio total</th>
          ";
            }
            // line 57
            echo "          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        ";
            // line 61
            $context["precioFinal"] = 0;
            // line 62
            echo "      \t";
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
                // line 63
                echo "
          ";
                // line 64
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                    // line 65
                    echo "            ";
                    $context["categoria"] = "lavarropa";
                    // line 66
                    echo "          ";
                }
                // line 67
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                    // line 68
                    echo "            ";
                    $context["categoria"] = "lavavajilla";
                    // line 69
                    echo "          ";
                }
                // line 70
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                    // line 71
                    echo "            ";
                    $context["categoria"] = "aireAcondicionado";
                    // line 72
                    echo "          ";
                }
                // line 73
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                    // line 74
                    echo "            ";
                    $context["categoria"] = "cocina";
                    // line 75
                    echo "          ";
                }
                // line 76
                echo "          ";
                if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                    // line 77
                    echo "            ";
                    $context["categoria"] = "microondas";
                    // line 78
                    echo "          ";
                }
                // line 79
                echo "            <tr class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "categoria", array()), "html", null, true);
                echo "\">
              <th scope=\"row\">";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "cantidad", array()), "html", null, true);
                echo "</td>
              ";
                // line 85
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == true)) {
                    // line 86
                    echo "              <td>
                <a href=\"/repuestos/modificar/";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a>
                <a href=\"/repuestos/borrar/";
                    // line 88
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
              ";
                }
                // line 91
                echo "              ";
                if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                    // line 92
                    echo "              <td id=\"p";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute($context["repuesto"], "precioVenta", array()) * $this->getAttribute($context["repuesto"], "cantidad", array())), "html", null, true);
                    echo "</td>
              <td>
                <a href=\"/ventas/pedido/borrar/";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                    echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
              ";
                }
                // line 97
                echo "                <td id=\"";
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
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"number\" class=\"form-control\" placeholder=\"Cant...\" required />
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
                // line 109
                $context["precioFinal"] = ((isset($context["precioFinal"]) ? $context["precioFinal"] : $this->getContext($context, "precioFinal")) + ($this->getAttribute($context["repuesto"], "precioVenta", array()) * $this->getAttribute($context["repuesto"], "cantidad", array())));
                // line 110
                echo "    <script>
    /*
      Una vez realizada la busqueda se envian
      los datos del formulario mediante ajax
      al controlador correspondiente.
      El controlador devuelve una respuesta
      que se imprime en #outputTwo
    */       
          \$(\"#";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\").submit(function(event){
                var value = \$(\"#";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch input\").val();
                var cantidadValue = \$(\"#";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch .form-control\").val();
                \$.ajax({
                    type: \"POST\",
                    data: { idRepuesto: value, cantidad: cantidadValue },
                    url: \"/ventas/pedido/temporal/\"
                })
                .done(function(response){
                //  alert(response);
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
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\").click(function(){
          \$(\"#";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\").show();
          \$(\"#";
                // line 142
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
            // line 149
            echo "      </tbody>
    </table>
      ";
            // line 151
            if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                // line 152
                echo "        <h4 id=\"testh4\">Precio final: ";
                echo twig_escape_filter($this->env, (isset($context["precioFinal"]) ? $context["precioFinal"] : $this->getContext($context, "precioFinal")), "html", null, true);
                echo "</h4>
      ";
            }
            // line 154
            if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                echo "    
            <a href=\"/ventas/finalizar/\">Realizar pedido</a> 
";
            }
            // line 157
            echo "    <script>
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
        
        $__internal_8ebdb162de82d41a016e11110fcd23ea9325f194a20c9e08931678145be3876f->leave($__internal_8ebdb162de82d41a016e11110fcd23ea9325f194a20c9e08931678145be3876f_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  363 => 157,  357 => 154,  351 => 152,  349 => 151,  345 => 149,  324 => 142,  320 => 141,  316 => 140,  293 => 120,  289 => 119,  285 => 118,  275 => 110,  273 => 109,  264 => 103,  258 => 100,  254 => 99,  248 => 97,  242 => 94,  234 => 92,  231 => 91,  225 => 88,  219 => 87,  216 => 86,  214 => 85,  210 => 84,  206 => 83,  202 => 82,  198 => 81,  194 => 80,  189 => 79,  186 => 78,  183 => 77,  180 => 76,  177 => 75,  174 => 74,  171 => 73,  168 => 72,  165 => 71,  162 => 70,  159 => 69,  156 => 68,  153 => 67,  150 => 66,  147 => 65,  145 => 64,  142 => 63,  124 => 62,  122 => 61,  116 => 57,  112 => 55,  110 => 54,  100 => 46,  97 => 45,  83 => 33,  80 => 32,  76 => 30,  73 => 29,  70 => 28,  68 => 27,  62 => 24,  40 => 4,  38 => 3,  26 => 2,  23 => 1,);
    }
}
/* */
/* {% block content_right_content %}*/
/* {% if alert is defined %}*/
/*   <script>  */
/*     $("#outputTwo").ready(function(){*/
/*     $.ajax({*/
/*         type: "POST",*/
/*         url: "/ventas/cargar/"*/
/*     })*/
/*     .done(function(response){*/
/*       // alert(JSON.stringify(response,null,4) );*/
/*         template = response;*/
/*         $('#outputTwo').html(template);*/
/*     })*/
/*     .fail(function(jqXHR, textStatus, errorThrown){*/
/*         console.log(errorThrown);*/
/*         alert('Error : ' + errorThrown);*/
/*     });*/
/*   });*/
/* */
/*   $("#name_id").click(function(){*/
/*     ("#outputTwo").html();*/
/*   });*/
/*   alert("{{ alert }}");*/
/*   </script>*/
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
/*           <th>Precio unitario</th>*/
/*           <th>Cantidad</th>*/
/*           {% if busqueda == false %}*/
/*             <th>Precio total</th>*/
/*           {% endif %}*/
/*           <th>Acciones</th>*/
/*         </tr>*/
/*       </thead>*/
/*       <tbody>*/
/*         {% set precioFinal = 0 %}*/
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
/*               <td>{{ repuesto.cantidad }}</td>*/
/*               {% if busqueda == true %}*/
/*               <td>*/
/*                 <a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a>*/
/*                 <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
/*               {% endif %}*/
/*               {% if busqueda == false %}*/
/*               <td id="p{{ repuesto.id }}">{{ repuesto.precioVenta *  repuesto.cantidad }}</td>*/
/*               <td>*/
/*                 <a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               </td>*/
/*               {% endif %}*/
/*                 <td id="{{ repuesto.id }}cantidadSearch" style="display:none;">*/
/*                   <div class="input-group" style="width:100px; height:20px;">*/
/*                     <form id="{{ repuesto.id }}Form" method="post" action="/repuestos/vender/">*/
/*                       <input type="hidden" name="idRepuesto" value="{{ repuesto.id }}" />*/
/*                       <input style="width:60px; height:22px; padding-top:2px; padding-bottom:2px;" name="cantidadRepuesto" type="number" class="form-control" placeholder="Cant..." required />*/
/*                       <span class="input-group-btn" style="width:30px; height:20px;">*/
/*                         <button id="{{ repuesto.id }}SubmitButton" class="btn btn-default" style="padding-top:0; padding-bottom:0;" type="button">$</button>*/
/*                     </form>*/
/*                   </span>*/
/*                 </div>*/
/*                 </td>*/
/*             </tr>*/
/*             {% set precioFinal = precioFinal + (repuesto.precioVenta *  repuesto.cantidad) %}*/
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
/*                 //  alert(response);*/
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
/*     	{% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/*       {% if busqueda == false %}*/
/*         <h4 id="testh4">Precio final: {{ precioFinal }}</h4>*/
/*       {% endif %}*/
/* {% if busqueda ==  false %}    */
/*             <a href="/ventas/finalizar/">Realizar pedido</a> */
/* {% endif %}*/
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
