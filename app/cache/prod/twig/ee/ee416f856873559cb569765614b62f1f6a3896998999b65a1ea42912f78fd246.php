<?php

/* AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig */
class __TwigTemplate_711617b8c0289ea0ae79227e822742d313d8cfbe0de1e8fde2b1e18ee252c44d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        // line 4
        echo "Lista de repuestos
";
    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        // line 7
        echo "  ";
        if (array_key_exists("removeSuccess", $context)) {
            // line 8
            echo "    <div class=\"alert alert-success\" role=\"alert\">
      Repuesto eliminado con exito.
    </div>
    ";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["success"]) ? $context["success"] : null), "html", null, true);
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
      <input id=\"heladerasButton\" type=\"checkbox\" value=\"\">
      Heladera
      <input id=\"electrodomesticoButton\" type=\"checkbox\" value=\"\">
      Electrodomestico
      <input id=\"hornoButton\" type=\"checkbox\" value=\"\">
      Horno
      <input id=\"anafeButton\" type=\"checkbox\" value=\"\">
      Anafe
      <input id=\"freezerButton\" type=\"checkbox\" value=\"\">
      Freezer
      <input id=\"purificadorButton\" type=\"checkbox\" value=\"\">
      Purificador de aire
      <input id=\"termoButton\" type=\"checkbox\" value=\"\">
      termotanque
      <input id=\"calefonButton\" type=\"checkbox\" value=\"\">
      calefon
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
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["repuestos"]) ? $context["repuestos"] : null));
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
            // line 52
            echo "
          ";
            // line 53
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                // line 54
                echo "            <tr id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" class=\"lavarropa\">
              <th scope=\"row\">";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
                <td id=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 66
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
            // line 73
            echo " ";
            // line 74
            echo "
          ";
            // line 75
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                // line 76
                echo "            <tr class=\"lavavajilla\">
              <th scope=\"row\">";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 83
            echo " ";
            // line 84
            echo "
          ";
            // line 85
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                // line 86
                echo "            <tr class=\"aireAcondicionado\">
              <th scope=\"row\">";
                // line 87
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 88
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 90
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 91
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 93
            echo " ";
            // line 94
            echo "
          ";
            // line 95
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                // line 96
                echo "            <tr class=\"cocina\">
              <th scope=\"row\">";
                // line 97
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 103
            echo " ";
            // line 104
            echo "
          ";
            // line 105
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                // line 106
                echo "            <tr class=\"microondas\">
              <th scope=\"row\">";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 113
            echo " ";
            // line 114
            echo "
          ";
            // line 115
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 5)) {
                // line 116
                echo "            <tr class=\"heladeras\">
              <th scope=\"row\">";
                // line 117
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 123
            echo " ";
            // line 124
            echo "
          ";
            // line 125
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 6)) {
                // line 126
                echo "            <tr class=\"secarropa\">
              <th scope=\"row\">";
                // line 127
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 133
            echo " ";
            // line 134
            echo "
          ";
            // line 135
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 7)) {
                // line 136
                echo "            <tr class=\"electrodomestico\">
              <th scope=\"row\">";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 143
            echo " ";
            // line 144
            echo "
          ";
            // line 145
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 8)) {
                // line 146
                echo "            <tr class=\"horno\">
              <th scope=\"row\">";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 153
            echo " ";
            // line 154
            echo "
          ";
            // line 155
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 9)) {
                // line 156
                echo "            <tr class=\"anafe\">
              <th scope=\"row\">";
                // line 157
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 163
            echo " ";
            // line 164
            echo "
          ";
            // line 165
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 9)) {
                // line 166
                echo "            <tr class=\"freezer\">
              <th scope=\"row\">";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 173
            echo " ";
            // line 174
            echo "
          ";
            // line 175
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 10)) {
                // line 176
                echo "            <tr class=\"purificador\">
              <th scope=\"row\">";
                // line 177
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 183
            echo " ";
            // line 184
            echo "
          ";
            // line 185
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 11)) {
                // line 186
                echo "            <tr class=\"termo\">
              <th scope=\"row\">";
                // line 187
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 193
            echo " ";
            // line 194
            echo "
          ";
            // line 195
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 12)) {
                // line 196
                echo "            <tr class=\"calefon\">
              <th scope=\"row\">";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/vender/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 203
            echo " ";
            // line 204
            echo "
    <script>
    \$(\"#";
            // line 206
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "SubmitButton\").click(function(){
        \$(\"#";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "Form\").submit();
    });
    \$(\"#";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "usd\").click(function(){
      \$(\"#";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch\").show();
      \$(\"#";
            // line 211
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
        // line 216
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
      if(\$(\"#heladerasButton\").is(':checked')){
          \$(\".heladeras\").show();
      }
      else{
        \$(\".heladeras\").hide();
      }
      if(\$(\"#secarropaButton\").is(':checked')){
          \$(\".secarropa\").show();
      }
      else{
        \$(\".secarropa\").hide();
      }
      if(\$(\"#electrodomesticoButton\").is(':checked')){
          \$(\".electrodomestico\").show();
      }
      else{
        \$(\".electrodomestico\").hide();
      }
      if(\$(\"#hornoButton\").is(':checked')){
          \$(\".horno\").show();
      }
      else{
        \$(\".horno\").hide();
      }
      if(\$(\"#anafeButton\").is(':checked')){
          \$(\".anafe\").show();
      }
      else{
        \$(\".anafe\").hide();
      }
      if(\$(\"#freezerButton\").is(':checked')){
          \$(\".freezer\").show();
      }
      else{
        \$(\".freezer\").hide();
      }
      if(\$(\"#purificadorButton\").is(':checked')){
          \$(\".purificador\").show();
      }
      else{
        \$(\".purificador\").hide();
      }
      if(\$(\"#termoButton\").is(':checked')){
          \$(\".termo\").show();
      }
      else{
        \$(\".termo\").hide();
      }
      if(\$(\"#calefonButton\").is(':checked')){
          \$(\".calefon\").show();
      }
      else{
        \$(\".calefon\").hide();
      }
    });
    </script>
";
    }

    // line 308
    public function block_inicio_active($context, array $blocks = array())
    {
        echo " ";
    }

    // line 309
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        echo " active ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  782 => 309,  776 => 308,  682 => 216,  663 => 211,  659 => 210,  655 => 209,  650 => 207,  646 => 206,  642 => 204,  640 => 203,  630 => 201,  626 => 200,  622 => 199,  618 => 198,  614 => 197,  611 => 196,  609 => 195,  606 => 194,  604 => 193,  594 => 191,  590 => 190,  586 => 189,  582 => 188,  578 => 187,  575 => 186,  573 => 185,  570 => 184,  568 => 183,  558 => 181,  554 => 180,  550 => 179,  546 => 178,  542 => 177,  539 => 176,  537 => 175,  534 => 174,  532 => 173,  522 => 171,  518 => 170,  514 => 169,  510 => 168,  506 => 167,  503 => 166,  501 => 165,  498 => 164,  496 => 163,  486 => 161,  482 => 160,  478 => 159,  474 => 158,  470 => 157,  467 => 156,  465 => 155,  462 => 154,  460 => 153,  450 => 151,  446 => 150,  442 => 149,  438 => 148,  434 => 147,  431 => 146,  429 => 145,  426 => 144,  424 => 143,  414 => 141,  410 => 140,  406 => 139,  402 => 138,  398 => 137,  395 => 136,  393 => 135,  390 => 134,  388 => 133,  378 => 131,  374 => 130,  370 => 129,  366 => 128,  362 => 127,  359 => 126,  357 => 125,  354 => 124,  352 => 123,  342 => 121,  338 => 120,  334 => 119,  330 => 118,  326 => 117,  323 => 116,  321 => 115,  318 => 114,  316 => 113,  306 => 111,  302 => 110,  298 => 109,  294 => 108,  290 => 107,  287 => 106,  285 => 105,  282 => 104,  280 => 103,  270 => 101,  266 => 100,  262 => 99,  258 => 98,  254 => 97,  251 => 96,  249 => 95,  246 => 94,  244 => 93,  234 => 91,  230 => 90,  226 => 89,  222 => 88,  218 => 87,  215 => 86,  213 => 85,  210 => 84,  208 => 83,  198 => 81,  194 => 80,  190 => 79,  186 => 78,  182 => 77,  179 => 76,  177 => 75,  174 => 74,  172 => 73,  161 => 66,  155 => 63,  151 => 62,  146 => 60,  138 => 59,  134 => 58,  130 => 57,  126 => 56,  122 => 55,  117 => 54,  115 => 53,  112 => 52,  95 => 51,  55 => 13,  50 => 11,  45 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
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
/*       <input id="heladerasButton" type="checkbox" value="">*/
/*       Heladera*/
/*       <input id="electrodomesticoButton" type="checkbox" value="">*/
/*       Electrodomestico*/
/*       <input id="hornoButton" type="checkbox" value="">*/
/*       Horno*/
/*       <input id="anafeButton" type="checkbox" value="">*/
/*       Anafe*/
/*       <input id="freezerButton" type="checkbox" value="">*/
/*       Freezer*/
/*       <input id="purificadorButton" type="checkbox" value="">*/
/*       Purificador de aire*/
/*       <input id="termoButton" type="checkbox" value="">*/
/*       termotanque*/
/*       <input id="calefonButton" type="checkbox" value="">*/
/*       calefon*/
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
/*           {% if repuesto.categoria == 5 %}*/
/*             <tr class="heladeras">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# heladeras #}*/
/* */
/*           {% if repuesto.categoria == 6 %}*/
/*             <tr class="secarropa">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# secarropa #}*/
/* */
/*           {% if repuesto.categoria == 7 %}*/
/*             <tr class="electrodomestico">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# electrodomestico #}*/
/* */
/*           {% if repuesto.categoria == 8 %}*/
/*             <tr class="horno">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# horno #}*/
/* */
/*           {% if repuesto.categoria == 9 %}*/
/*             <tr class="anafe">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# anafe #}*/
/* */
/*           {% if repuesto.categoria == 9 %}*/
/*             <tr class="freezer">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# freezer #}*/
/* */
/*           {% if repuesto.categoria == 10 %}*/
/*             <tr class="purificador">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# purificador #}*/
/* */
/*           {% if repuesto.categoria == 11 %}*/
/*             <tr class="termo">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# termotanque #}*/
/* */
/*           {% if repuesto.categoria == 12 %}*/
/*             <tr class="calefon">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/vender/{{ repuesto.id }}"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# calefon #}*/
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
/*       if($("#heladerasButton").is(':checked')){*/
/*           $(".heladeras").show();*/
/*       }*/
/*       else{*/
/*         $(".heladeras").hide();*/
/*       }*/
/*       if($("#secarropaButton").is(':checked')){*/
/*           $(".secarropa").show();*/
/*       }*/
/*       else{*/
/*         $(".secarropa").hide();*/
/*       }*/
/*       if($("#electrodomesticoButton").is(':checked')){*/
/*           $(".electrodomestico").show();*/
/*       }*/
/*       else{*/
/*         $(".electrodomestico").hide();*/
/*       }*/
/*       if($("#hornoButton").is(':checked')){*/
/*           $(".horno").show();*/
/*       }*/
/*       else{*/
/*         $(".horno").hide();*/
/*       }*/
/*       if($("#anafeButton").is(':checked')){*/
/*           $(".anafe").show();*/
/*       }*/
/*       else{*/
/*         $(".anafe").hide();*/
/*       }*/
/*       if($("#freezerButton").is(':checked')){*/
/*           $(".freezer").show();*/
/*       }*/
/*       else{*/
/*         $(".freezer").hide();*/
/*       }*/
/*       if($("#purificadorButton").is(':checked')){*/
/*           $(".purificador").show();*/
/*       }*/
/*       else{*/
/*         $(".purificador").hide();*/
/*       }*/
/*       if($("#termoButton").is(':checked')){*/
/*           $(".termo").show();*/
/*       }*/
/*       else{*/
/*         $(".termo").hide();*/
/*       }*/
/*       if($("#calefonButton").is(':checked')){*/
/*           $(".calefon").show();*/
/*       }*/
/*       else{*/
/*         $(".calefon").hide();*/
/*       }*/
/*     });*/
/*     </script>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
