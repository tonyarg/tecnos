<?php

/* AcmeDemoTwoBundle:Repuestos:busqueda.html.twig */
class __TwigTemplate_e27895bb641cac62cf4503d0e4ed6923d34f117e9acc7b23d662333fd03887f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Repuestos:index.html.twig", "AcmeDemoTwoBundle:Repuestos:busqueda.html.twig", 1);
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
        echo "<table class=\"table table-striped\">
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
        // line 24
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
            // line 25
            echo "        <tr>
          <th scope=\"row\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
          <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
            echo "</td>
          <td><a href=\"/repuestos/modificar/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span><a href=\"/repuestos/borrar/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a></td>
        </tr>
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
        // line 33
        echo "      </tbody>
    </table>
";
    }

    // line 37
    public function block_inicio_active($context, array $blocks = array())
    {
        echo " ";
    }

    // line 38
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        echo " active ";
    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Repuestos:busqueda.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 38,  129 => 37,  123 => 33,  104 => 30,  100 => 29,  96 => 28,  92 => 27,  88 => 26,  85 => 25,  68 => 24,  55 => 13,  50 => 11,  45 => 8,  42 => 7,  39 => 6,  34 => 4,  31 => 3,  11 => 1,);
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
/*         <tr>*/
/*           <th scope="row">{{ loop.index }}</th>*/
/*           <td>{{ repuesto.codigo }}</td>*/
/*           <td>{{ repuesto.nombre }}</td>*/
/*           <td>{{ repuesto.precioVenta }}</td>*/
/*           <td><a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span><a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a></td>*/
/*         </tr>*/
/*     	{% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
