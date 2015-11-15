<?php

/* AcmeDemoTwoBundle:Test:test.html.twig */
class __TwigTemplate_72b2f4e7995e740ea133fda1725b815078eb022444f0dd3c0a9be7e22643cbfb extends Twig_Template
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
        $__internal_097fb05724e5698878054a212d50286df5bd8fd421dd9ffd782cf679cc1cfb85 = $this->env->getExtension("native_profiler");
        $__internal_097fb05724e5698878054a212d50286df5bd8fd421dd9ffd782cf679cc1cfb85->enter($__internal_097fb05724e5698878054a212d50286df5bd8fd421dd9ffd782cf679cc1cfb85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Test:test.html.twig"));

        // line 1
        $this->displayBlock('content_right_content', $context, $blocks);
        
        $__internal_097fb05724e5698878054a212d50286df5bd8fd421dd9ffd782cf679cc1cfb85->leave($__internal_097fb05724e5698878054a212d50286df5bd8fd421dd9ffd782cf679cc1cfb85_prof);

    }

    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_cdad573c24910a2c908b99ce1e6e06cc2b489a5c2d60d63be4cf084915004ed3 = $this->env->getExtension("native_profiler");
        $__internal_cdad573c24910a2c908b99ce1e6e06cc2b489a5c2d60d63be4cf084915004ed3->enter($__internal_cdad573c24910a2c908b99ce1e6e06cc2b489a5c2d60d63be4cf084915004ed3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 2
        echo "  ";
        if (array_key_exists("removeSuccess", $context)) {
            // line 3
            echo "    <div class=\"alert alert-success\" role=\"alert\">
      Repuesto eliminado con exito.
    </div>
    ";
            // line 6
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : $this->getContext($context, "success")), "html", null, true);
            echo "
  ";
        }
        // line 8
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
        // line 30
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
            // line 31
            echo "
          ";
            // line 32
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                // line 33
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" class=\"lavarropa\">
              <th scope=\"row\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
            }
            // line 52
            echo " ";
            // line 53
            echo "
          ";
            // line 54
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                // line 55
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" class=\"lavarropa\">
              <th scope=\"row\">";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
            }
            // line 74
            echo " ";
            // line 75
            echo "
          ";
            // line 76
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                // line 77
                echo "            <tr class=\"aireAcondicionado\">
              <th scope=\"row\">";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 82
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 84
            echo " ";
            // line 85
            echo "
          ";
            // line 86
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                // line 87
                echo "            <tr class=\"cocina\">
              <th scope=\"row\">";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                // line 94
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
            }
            // line 106
            echo " ";
            // line 107
            echo "
          ";
            // line 108
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                // line 109
                echo "            <tr class=\"microondas\">
              <th scope=\"row\">";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 114
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              </td>
                <td id=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "SubmitButton\" class=\"btn btn-default\" style=\"padding-top:0; padding-bottom:0;\" type=\"button\">\$</button>
                    </form>
                  </span>
                </div>
                </td>
            </tr>
          ";
            }
            // line 128
            echo " ";
            echo "    
    <script>
          \$(\"#";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "Form\").submit(function(event){
                var value = \$(\"#";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch input\").val();
                var cantidadValue = \$(\"#";
            // line 132
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
                    \$('#output').html(template); 
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
            // line 152
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "usd\").click(function(){
          \$(\"#";
            // line 153
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch\").show();
          \$(\"#";
            // line 154
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
        // line 163
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
        
        $__internal_cdad573c24910a2c908b99ce1e6e06cc2b489a5c2d60d63be4cf084915004ed3->leave($__internal_cdad573c24910a2c908b99ce1e6e06cc2b489a5c2d60d63be4cf084915004ed3_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Test:test.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  434 => 163,  411 => 154,  407 => 153,  403 => 152,  380 => 132,  376 => 131,  372 => 130,  367 => 128,  357 => 122,  351 => 119,  347 => 118,  342 => 116,  333 => 114,  329 => 113,  325 => 112,  321 => 111,  317 => 110,  314 => 109,  312 => 108,  309 => 107,  307 => 106,  297 => 100,  291 => 97,  287 => 96,  282 => 94,  273 => 92,  269 => 91,  265 => 90,  261 => 89,  257 => 88,  254 => 87,  252 => 86,  249 => 85,  247 => 84,  237 => 82,  233 => 81,  229 => 80,  225 => 79,  221 => 78,  218 => 77,  216 => 76,  213 => 75,  211 => 74,  201 => 68,  195 => 65,  191 => 64,  186 => 62,  177 => 60,  173 => 59,  169 => 58,  165 => 57,  161 => 56,  156 => 55,  154 => 54,  151 => 53,  149 => 52,  139 => 46,  133 => 43,  129 => 42,  124 => 40,  115 => 38,  111 => 37,  107 => 36,  103 => 35,  99 => 34,  94 => 33,  92 => 32,  89 => 31,  72 => 30,  48 => 8,  43 => 6,  38 => 3,  35 => 2,  23 => 1,);
    }
}
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
/*             <tr id="{{ repuesto.id }}" class="lavarropa">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
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
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
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
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
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
/*                 })*/
/*                 .done(function(response){*/
/*                   alert(response);*/
/*                   // alert(JSON.stringify(response,null,4) );*/
/*                     template = response;*/
/*                     $('#output').html(template); */
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
/* {% endblock content_right_content %}*/
