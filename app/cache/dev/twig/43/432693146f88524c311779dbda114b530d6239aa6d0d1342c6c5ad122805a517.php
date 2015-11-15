<?php

/* AcmeDemoTwoBundle:Repuestos:busqueda.html.twig */
class __TwigTemplate_af5af55b63d91cb8f02611cee4022bbff012def9deb84c9d04cb1a54f2d108a6 extends Twig_Template
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
        $__internal_2a6ca7f84423c962314edd20ee9dbaa45098ec05065432768ddc0cc4258ca13b = $this->env->getExtension("native_profiler");
        $__internal_2a6ca7f84423c962314edd20ee9dbaa45098ec05065432768ddc0cc4258ca13b->enter($__internal_2a6ca7f84423c962314edd20ee9dbaa45098ec05065432768ddc0cc4258ca13b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Repuestos:busqueda.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2a6ca7f84423c962314edd20ee9dbaa45098ec05065432768ddc0cc4258ca13b->leave($__internal_2a6ca7f84423c962314edd20ee9dbaa45098ec05065432768ddc0cc4258ca13b_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_ee3f07ecb600cb6da1a9aa1583bc2f3daaeca6ff7e54b4aea3c1c377ef3b9f37 = $this->env->getExtension("native_profiler");
        $__internal_ee3f07ecb600cb6da1a9aa1583bc2f3daaeca6ff7e54b4aea3c1c377ef3b9f37->enter($__internal_ee3f07ecb600cb6da1a9aa1583bc2f3daaeca6ff7e54b4aea3c1c377ef3b9f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Lista de repuestos
";
        
        $__internal_ee3f07ecb600cb6da1a9aa1583bc2f3daaeca6ff7e54b4aea3c1c377ef3b9f37->leave($__internal_ee3f07ecb600cb6da1a9aa1583bc2f3daaeca6ff7e54b4aea3c1c377ef3b9f37_prof);

    }

    // line 6
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_7cd81537b4cbb62071d89a9199dfca4993b3576ef609168f532404e4bc7b53b0 = $this->env->getExtension("native_profiler");
        $__internal_7cd81537b4cbb62071d89a9199dfca4993b3576ef609168f532404e4bc7b53b0->enter($__internal_7cd81537b4cbb62071d89a9199dfca4993b3576ef609168f532404e4bc7b53b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

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
        
        $__internal_7cd81537b4cbb62071d89a9199dfca4993b3576ef609168f532404e4bc7b53b0->leave($__internal_7cd81537b4cbb62071d89a9199dfca4993b3576ef609168f532404e4bc7b53b0_prof);

    }

    // line 37
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_ba700e3bd65cf3870fc9d39f6ed4f5aac6f22284aa1bf093554b16631f4b3c67 = $this->env->getExtension("native_profiler");
        $__internal_ba700e3bd65cf3870fc9d39f6ed4f5aac6f22284aa1bf093554b16631f4b3c67->enter($__internal_ba700e3bd65cf3870fc9d39f6ed4f5aac6f22284aa1bf093554b16631f4b3c67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_ba700e3bd65cf3870fc9d39f6ed4f5aac6f22284aa1bf093554b16631f4b3c67->leave($__internal_ba700e3bd65cf3870fc9d39f6ed4f5aac6f22284aa1bf093554b16631f4b3c67_prof);

    }

    // line 38
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_3346ed573d8da164cd7af7700b6e6c2b350560385dedd7fb6f60ad6ae458bb97 = $this->env->getExtension("native_profiler");
        $__internal_3346ed573d8da164cd7af7700b6e6c2b350560385dedd7fb6f60ad6ae458bb97->enter($__internal_3346ed573d8da164cd7af7700b6e6c2b350560385dedd7fb6f60ad6ae458bb97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_3346ed573d8da164cd7af7700b6e6c2b350560385dedd7fb6f60ad6ae458bb97->leave($__internal_3346ed573d8da164cd7af7700b6e6c2b350560385dedd7fb6f60ad6ae458bb97_prof);

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
        return array (  159 => 38,  147 => 37,  138 => 33,  119 => 30,  115 => 29,  111 => 28,  107 => 27,  103 => 26,  100 => 25,  83 => 24,  70 => 13,  65 => 11,  60 => 8,  57 => 7,  51 => 6,  43 => 4,  37 => 3,  11 => 1,);
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
