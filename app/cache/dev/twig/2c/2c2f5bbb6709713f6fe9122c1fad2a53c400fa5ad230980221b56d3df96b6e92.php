<?php

/* AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig */
class __TwigTemplate_ba42893bbd24456a3a90e6459673ad79759427af49d67fc9b3f1c72813dff233 extends Twig_Template
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
        $__internal_23aeb81f8ab0cbc7dcaf66f00ee9b286aebe133850ebd27568fe1bf13cd683eb = $this->env->getExtension("native_profiler");
        $__internal_23aeb81f8ab0cbc7dcaf66f00ee9b286aebe133850ebd27568fe1bf13cd683eb->enter($__internal_23aeb81f8ab0cbc7dcaf66f00ee9b286aebe133850ebd27568fe1bf13cd683eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23aeb81f8ab0cbc7dcaf66f00ee9b286aebe133850ebd27568fe1bf13cd683eb->leave($__internal_23aeb81f8ab0cbc7dcaf66f00ee9b286aebe133850ebd27568fe1bf13cd683eb_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_0ab27357eeb5cf21c09a1623c18a1b7835e6980a47b05cbd6ea981be83d6ee95 = $this->env->getExtension("native_profiler");
        $__internal_0ab27357eeb5cf21c09a1623c18a1b7835e6980a47b05cbd6ea981be83d6ee95->enter($__internal_0ab27357eeb5cf21c09a1623c18a1b7835e6980a47b05cbd6ea981be83d6ee95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Lista de repuestos
";
        
        $__internal_0ab27357eeb5cf21c09a1623c18a1b7835e6980a47b05cbd6ea981be83d6ee95->leave($__internal_0ab27357eeb5cf21c09a1623c18a1b7835e6980a47b05cbd6ea981be83d6ee95_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_2068ebc3c6b373a5042a39c31a90baef1a68581834b1d14c37caea8a9d77ba7a = $this->env->getExtension("native_profiler");
        $__internal_2068ebc3c6b373a5042a39c31a90baef1a68581834b1d14c37caea8a9d77ba7a->enter($__internal_2068ebc3c6b373a5042a39c31a90baef1a68581834b1d14c37caea8a9d77ba7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

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
      <input id=\"heladerasButton\" type=\"checkbox\" value=\"\">
      Heladera
      <input id=\"hornoButton\" type=\"checkbox\" value=\"\">
      Horno
      <input id=\"anafeButton\" type=\"checkbox\" value=\"\">
      Anafe
      <input id=\"freezerButton\" type=\"checkbox\" value=\"\">
      Freezer
      <br>
      <input id=\"purificadorButton\" type=\"checkbox\" value=\"\">
      Purificador de aire
      <input id=\"termoButton\" type=\"checkbox\" value=\"\">
      termotanque
      <input id=\"calefonButton\" type=\"checkbox\" value=\"\">
      calefon
      <input id=\"electrodomesticoButton\" type=\"checkbox\" value=\"\">
      Electrodomestico
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
        // line 52
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
            // line 53
            echo "
          ";
            // line 54
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
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
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
                <td id=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "cantidadSearch\" style=\"display:none;\">
                  <div class=\"input-group\" style=\"width:100px; height:20px;\">
                    <form id=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "Form\" method=\"post\" action=\"/repuestos/vender/\">
                      <input type=\"hidden\" name=\"idRepuesto\" value=\"";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\" />
                      <input style=\"width:60px; height:22px; padding-top:2px; padding-bottom:2px;\" name=\"cantidadRepuesto\" type=\"text\" class=\"form-control\" placeholder=\"Cant...\" required />
                      <span class=\"input-group-btn\" style=\"width:30px; height:20px;\">
                        <button id=\"";
                // line 67
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
            // line 74
            echo " ";
            // line 75
            echo "
          ";
            // line 76
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                // line 77
                echo "            <tr class=\"lavavajilla\">
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
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
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
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                // line 87
                echo "            <tr class=\"aireAcondicionado\">
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
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 94
            echo " ";
            // line 95
            echo "
          ";
            // line 96
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                // line 97
                echo "            <tr class=\"cocina\">
              <th scope=\"row\">";
                // line 98
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 99
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 100
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 101
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 104
            echo " ";
            // line 105
            echo "
          ";
            // line 106
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                // line 107
                echo "            <tr class=\"microondas\">
              <th scope=\"row\">";
                // line 108
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 109
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 111
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 112
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 114
            echo " ";
            // line 115
            echo "
          ";
            // line 116
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 5)) {
                // line 117
                echo "            <tr class=\"heladeras\">
              <th scope=\"row\">";
                // line 118
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 120
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 121
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 124
            echo " ";
            // line 125
            echo "
          ";
            // line 126
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 6)) {
                // line 127
                echo "            <tr class=\"secarropa\">
              <th scope=\"row\">";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 134
            echo " ";
            // line 135
            echo "
          ";
            // line 136
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 7)) {
                // line 137
                echo "            <tr class=\"electrodomestico\">
              <th scope=\"row\">";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 139
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 144
            echo " ";
            // line 145
            echo "
          ";
            // line 146
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 8)) {
                // line 147
                echo "            <tr class=\"horno\">
              <th scope=\"row\">";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 151
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 154
            echo " ";
            // line 155
            echo "
          ";
            // line 156
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 9)) {
                // line 157
                echo "            <tr class=\"anafe\">
              <th scope=\"row\">";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 159
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 160
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 162
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 164
            echo " ";
            // line 165
            echo "
          ";
            // line 166
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 10)) {
                // line 167
                echo "            <tr class=\"freezer\">
              <th scope=\"row\">";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 169
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 170
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 171
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 172
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 174
            echo " ";
            // line 175
            echo "
          ";
            // line 176
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 11)) {
                // line 177
                echo "            <tr class=\"purificador\">
              <th scope=\"row\">";
                // line 178
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 179
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 180
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 181
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 184
            echo " ";
            // line 185
            echo "
          ";
            // line 186
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 12)) {
                // line 187
                echo "            <tr class=\"termo\">
              <th scope=\"row\">";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 189
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 190
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 192
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 194
            echo " ";
            // line 195
            echo "
          ";
            // line 196
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 13)) {
                // line 197
                echo "            <tr class=\"calefon\">
              <th scope=\"row\">";
                // line 198
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "</th>
              <td>";
                // line 199
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 201
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
                echo "</td>
              <td><a href=\"/repuestos/modificar/";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span> <a href=\"/repuestos/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
            </tr>
          ";
            }
            // line 204
            echo " ";
            // line 205
            echo "
    <script>
    \$(\"#";
            // line 207
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "SubmitButton\").click(function(){
        \$(\"#";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "Form\").submit();
    });
    \$(\"#";
            // line 210
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "usd\").click(function(){
      \$(\"#";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "cantidadSearch\").show();
      \$(\"#";
            // line 212
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
        // line 217
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
        
        $__internal_2068ebc3c6b373a5042a39c31a90baef1a68581834b1d14c37caea8a9d77ba7a->leave($__internal_2068ebc3c6b373a5042a39c31a90baef1a68581834b1d14c37caea8a9d77ba7a_prof);

    }

    // line 309
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_64221a5a269e0dd4ecc0963fb8240316db14dd0d1739bd38034ea0df0e2c2c88 = $this->env->getExtension("native_profiler");
        $__internal_64221a5a269e0dd4ecc0963fb8240316db14dd0d1739bd38034ea0df0e2c2c88->enter($__internal_64221a5a269e0dd4ecc0963fb8240316db14dd0d1739bd38034ea0df0e2c2c88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_64221a5a269e0dd4ecc0963fb8240316db14dd0d1739bd38034ea0df0e2c2c88->leave($__internal_64221a5a269e0dd4ecc0963fb8240316db14dd0d1739bd38034ea0df0e2c2c88_prof);

    }

    // line 310
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_1b59e5cc5dd759e3c810a6132fa4e44cd7e0d2024891291c6e79a1dbd24688b8 = $this->env->getExtension("native_profiler");
        $__internal_1b59e5cc5dd759e3c810a6132fa4e44cd7e0d2024891291c6e79a1dbd24688b8->enter($__internal_1b59e5cc5dd759e3c810a6132fa4e44cd7e0d2024891291c6e79a1dbd24688b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_1b59e5cc5dd759e3c810a6132fa4e44cd7e0d2024891291c6e79a1dbd24688b8->leave($__internal_1b59e5cc5dd759e3c810a6132fa4e44cd7e0d2024891291c6e79a1dbd24688b8_prof);

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
        return array (  779 => 310,  767 => 309,  670 => 217,  651 => 212,  647 => 211,  643 => 210,  638 => 208,  634 => 207,  630 => 205,  628 => 204,  620 => 202,  616 => 201,  612 => 200,  608 => 199,  604 => 198,  601 => 197,  599 => 196,  596 => 195,  594 => 194,  586 => 192,  582 => 191,  578 => 190,  574 => 189,  570 => 188,  567 => 187,  565 => 186,  562 => 185,  560 => 184,  552 => 182,  548 => 181,  544 => 180,  540 => 179,  536 => 178,  533 => 177,  531 => 176,  528 => 175,  526 => 174,  518 => 172,  514 => 171,  510 => 170,  506 => 169,  502 => 168,  499 => 167,  497 => 166,  494 => 165,  492 => 164,  484 => 162,  480 => 161,  476 => 160,  472 => 159,  468 => 158,  465 => 157,  463 => 156,  460 => 155,  458 => 154,  450 => 152,  446 => 151,  442 => 150,  438 => 149,  434 => 148,  431 => 147,  429 => 146,  426 => 145,  424 => 144,  416 => 142,  412 => 141,  408 => 140,  404 => 139,  400 => 138,  397 => 137,  395 => 136,  392 => 135,  390 => 134,  382 => 132,  378 => 131,  374 => 130,  370 => 129,  366 => 128,  363 => 127,  361 => 126,  358 => 125,  356 => 124,  348 => 122,  344 => 121,  340 => 120,  336 => 119,  332 => 118,  329 => 117,  327 => 116,  324 => 115,  322 => 114,  314 => 112,  310 => 111,  306 => 110,  302 => 109,  298 => 108,  295 => 107,  293 => 106,  290 => 105,  288 => 104,  280 => 102,  276 => 101,  272 => 100,  268 => 99,  264 => 98,  261 => 97,  259 => 96,  256 => 95,  254 => 94,  246 => 92,  242 => 91,  238 => 90,  234 => 89,  230 => 88,  227 => 87,  225 => 86,  222 => 85,  220 => 84,  212 => 82,  208 => 81,  204 => 80,  200 => 79,  196 => 78,  193 => 77,  191 => 76,  188 => 75,  186 => 74,  175 => 67,  169 => 64,  165 => 63,  160 => 61,  154 => 60,  150 => 59,  146 => 58,  142 => 57,  138 => 56,  133 => 55,  131 => 54,  128 => 53,  111 => 52,  70 => 13,  65 => 11,  60 => 8,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
/*       <input id="hornoButton" type="checkbox" value="">*/
/*       Horno*/
/*       <input id="anafeButton" type="checkbox" value="">*/
/*       Anafe*/
/*       <input id="freezerButton" type="checkbox" value="">*/
/*       Freezer*/
/*       <br>*/
/*       <input id="purificadorButton" type="checkbox" value="">*/
/*       Purificador de aire*/
/*       <input id="termoButton" type="checkbox" value="">*/
/*       termotanque*/
/*       <input id="calefonButton" type="checkbox" value="">*/
/*       calefon*/
/*       <input id="electrodomesticoButton" type="checkbox" value="">*/
/*       Electrodomestico*/
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
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
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
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# lavavajilla #}*/
/* */
/*           {% if repuesto.categoria == 2 %}*/
/*             <tr class="aireAcondicionado">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# aire acondicionado #}*/
/* */
/*           {% if repuesto.categoria == 3 %}*/
/*             <tr class="cocina">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# cocina #}*/
/* */
/*           {% if repuesto.categoria == 4 %}*/
/*             <tr class="microondas">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# microondas #}*/
/* */
/*           {% if repuesto.categoria == 5 %}*/
/*             <tr class="heladeras">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# heladeras #}*/
/* */
/*           {% if repuesto.categoria == 6 %}*/
/*             <tr class="secarropa">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# secarropa #}*/
/* */
/*           {% if repuesto.categoria == 7 %}*/
/*             <tr class="electrodomestico">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# electrodomestico #}*/
/* */
/*           {% if repuesto.categoria == 8 %}*/
/*             <tr class="horno">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# horno #}*/
/* */
/*           {% if repuesto.categoria == 9 %}*/
/*             <tr class="anafe">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# anafe #}*/
/* */
/*           {% if repuesto.categoria == 10 %}*/
/*             <tr class="freezer">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# freezer #}*/
/* */
/*           {% if repuesto.categoria == 11 %}*/
/*             <tr class="purificador">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# purificador #}*/
/* */
/*           {% if repuesto.categoria == 12 %}*/
/*             <tr class="termo">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*             </tr>*/
/*           {% endif %} {# termotanque #}*/
/* */
/*           {% if repuesto.categoria == 13 %}*/
/*             <tr class="calefon">*/
/*               <th scope="row">{{ loop.index }}</th>*/
/*               <td>{{ repuesto.codigo }}</td>*/
/*               <td>{{ repuesto.nombre }}</td>*/
/*               <td>{{ repuesto.precioVenta }}</td>*/
/*               <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span> <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
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
