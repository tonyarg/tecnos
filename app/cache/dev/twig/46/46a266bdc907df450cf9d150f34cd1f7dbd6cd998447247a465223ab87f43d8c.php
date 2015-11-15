<?php

/* AcmeDemoTwoBundle:Transacciones:ventaRealizada.html.twig */
class __TwigTemplate_5c155150d43f7df252ec57da4e06f4b59fad0d007757d0c1842708dccf591e52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Transacciones:ventaRealizada.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'left_content' => array($this, 'block_left_content'),
            'right_content_size' => array($this, 'block_right_content_size'),
            'content_right_content' => array($this, 'block_content_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db610582911368dfeb63f81073d6518914e5e7e2c0c76c792fce35871f08533d = $this->env->getExtension("native_profiler");
        $__internal_db610582911368dfeb63f81073d6518914e5e7e2c0c76c792fce35871f08533d->enter($__internal_db610582911368dfeb63f81073d6518914e5e7e2c0c76c792fce35871f08533d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Transacciones:ventaRealizada.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_db610582911368dfeb63f81073d6518914e5e7e2c0c76c792fce35871f08533d->leave($__internal_db610582911368dfeb63f81073d6518914e5e7e2c0c76c792fce35871f08533d_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_144a676f24e62a5b84c86f3fc9daae55d0826dd268906d2bfcb5582891409aa8 = $this->env->getExtension("native_profiler");
        $__internal_144a676f24e62a5b84c86f3fc9daae55d0826dd268906d2bfcb5582891409aa8->enter($__internal_144a676f24e62a5b84c86f3fc9daae55d0826dd268906d2bfcb5582891409aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        
        $__internal_144a676f24e62a5b84c86f3fc9daae55d0826dd268906d2bfcb5582891409aa8->leave($__internal_144a676f24e62a5b84c86f3fc9daae55d0826dd268906d2bfcb5582891409aa8_prof);

    }

    // line 5
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_db708c7e794437beec663a8e534db4e2de8c31ef5c107cea53fcfc622e876ee7 = $this->env->getExtension("native_profiler");
        $__internal_db708c7e794437beec663a8e534db4e2de8c31ef5c107cea53fcfc622e876ee7->enter($__internal_db708c7e794437beec663a8e534db4e2de8c31ef5c107cea53fcfc622e876ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 6
        echo "
";
        
        $__internal_db708c7e794437beec663a8e534db4e2de8c31ef5c107cea53fcfc622e876ee7->leave($__internal_db708c7e794437beec663a8e534db4e2de8c31ef5c107cea53fcfc622e876ee7_prof);

    }

    // line 8
    public function block_right_content_size($context, array $blocks = array())
    {
        $__internal_b1b0f75d361bfe14fab54ed187ae60f0dfe13a5470d1013d85dad3152fd6dba4 = $this->env->getExtension("native_profiler");
        $__internal_b1b0f75d361bfe14fab54ed187ae60f0dfe13a5470d1013d85dad3152fd6dba4->enter($__internal_b1b0f75d361bfe14fab54ed187ae60f0dfe13a5470d1013d85dad3152fd6dba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "right_content_size"));

        // line 9
        echo "\tcol-xs-6 col-md-12
";
        
        $__internal_b1b0f75d361bfe14fab54ed187ae60f0dfe13a5470d1013d85dad3152fd6dba4->leave($__internal_b1b0f75d361bfe14fab54ed187ae60f0dfe13a5470d1013d85dad3152fd6dba4_prof);

    }

    // line 11
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_bc83764f29cd07c0aadef7be1c6b89f90a694b8548fa6425230afa93ecf2ccc1 = $this->env->getExtension("native_profiler");
        $__internal_bc83764f29cd07c0aadef7be1c6b89f90a694b8548fa6425230afa93ecf2ccc1->enter($__internal_bc83764f29cd07c0aadef7be1c6b89f90a694b8548fa6425230afa93ecf2ccc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 12
        echo "
<table class=\"table table-striped\">
      <thead>
        <tr>
          <th>#</th>
          <th>Codigo</th>
          <th>Nombre</th>
          <th>Precio</th>
          <th>Cantidad</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
      \t";
        // line 25
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
            // line 26
            echo "
          ";
            // line 27
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 0)) {
                // line 28
                echo "            ";
                $context["categoria"] = "lavarropa";
                // line 29
                echo "          ";
            }
            // line 30
            echo "          ";
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 1)) {
                // line 31
                echo "            ";
                $context["categoria"] = "lavavajilla";
                // line 32
                echo "          ";
            }
            // line 33
            echo "          ";
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 2)) {
                // line 34
                echo "            ";
                $context["categoria"] = "aireAcondicionado";
                // line 35
                echo "          ";
            }
            // line 36
            echo "          ";
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 3)) {
                // line 37
                echo "            ";
                $context["categoria"] = "cocina";
                // line 38
                echo "          ";
            }
            // line 39
            echo "          ";
            if (($this->getAttribute($context["repuesto"], "categoria", array()) == 4)) {
                // line 40
                echo "            ";
                $context["categoria"] = "microondas";
                // line 41
                echo "          ";
            }
            // line 42
            echo "            <tr class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "categoria", array()), "html", null, true);
            echo "\">
              <th scope=\"row\">";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</th>
              <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "codigo", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "nombre", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "precioVenta", array()), "html", null, true);
            echo "</td>
              <td>";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "cantidad", array()), "html", null, true);
            echo "</td>
              <td>
              ";
            // line 49
            if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == true)) {
                // line 50
                echo "                <a href=\"/repuestos/modificar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span style=\"padding-right:10px;\" class=\"glyphicon glyphicon-pencil\"> </span><a id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "usd\" href=\"javascript:void(0)\"><span class=\"glyphicon glyphicon-usd\" style=\"padding-right:10px;\"> </span></a>
                <a href=\"/repuestos/borrar/";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              ";
            }
            // line 53
            echo "              ";
            if (((isset($context["busqueda"]) ? $context["busqueda"] : $this->getContext($context, "busqueda")) == false)) {
                // line 54
                echo "                <a href=\"/ventas/pedido/borrar/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["repuesto"], "id", array()), "html", null, true);
                echo "\"><span class=\"glyphicon glyphicon-remove\" style=\"padding-right:5px;\" ></span></a>
              ";
            }
            // line 56
            echo "              </td>
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
        // line 63
        echo "      </tbody>
    </table>
";
        
        $__internal_bc83764f29cd07c0aadef7be1c6b89f90a694b8548fa6425230afa93ecf2ccc1->leave($__internal_bc83764f29cd07c0aadef7be1c6b89f90a694b8548fa6425230afa93ecf2ccc1_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Transacciones:ventaRealizada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 63,  210 => 56,  204 => 54,  201 => 53,  196 => 51,  189 => 50,  187 => 49,  182 => 47,  178 => 46,  174 => 45,  170 => 44,  166 => 43,  161 => 42,  158 => 41,  155 => 40,  152 => 39,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  134 => 33,  131 => 32,  128 => 31,  125 => 30,  122 => 29,  119 => 28,  117 => 27,  114 => 26,  97 => 25,  82 => 12,  76 => 11,  68 => 9,  62 => 8,  54 => 6,  48 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* {% endblock title_right_content %}*/
/* {% block left_content %}*/
/* */
/* {% endblock left_content %}*/
/* {% block right_content_size %}*/
/* 	col-xs-6 col-md-12*/
/* {% endblock right_content_size %}*/
/* {% block content_right_content %}*/
/* */
/* <table class="table table-striped">*/
/*       <thead>*/
/*         <tr>*/
/*           <th>#</th>*/
/*           <th>Codigo</th>*/
/*           <th>Nombre</th>*/
/*           <th>Precio</th>*/
/*           <th>Cantidad</th>*/
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
/*               <td>{{ repuesto.cantidad }}</td>*/
/*               <td>*/
/*               {% if busqueda == true %}*/
/*                 <a href="/repuestos/modificar/{{ repuesto.id }}"><span style="padding-right:10px;" class="glyphicon glyphicon-pencil"> </span><a id="{{ repuesto.id }}usd" href="javascript:void(0)"><span class="glyphicon glyphicon-usd" style="padding-right:10px;"> </span></a>*/
/*                 <a href="/repuestos/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               {% endif %}*/
/*               {% if busqueda == false %}*/
/*                 <a href="/ventas/pedido/borrar/{{ repuesto.id }}"><span class="glyphicon glyphicon-remove" style="padding-right:5px;" ></span></a>*/
/*               {% endif %}*/
/*               </td>*/
/*             </tr>*/
/*  */
/* */
/* */
/* */
/*     	{% endfor %}*/
/*       </tbody>*/
/*     </table>*/
/* {% endblock content_right_content %}*/
/* */
