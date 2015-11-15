<?php

/* AcmeDemoTwoBundle:Ventas:index.html.twig */
class __TwigTemplate_446dec49a326dc6a387963a9eb88c29aa45f7feb5089f9b1a5bfe5a56676449f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Ventas:index.html.twig", 1);
        $this->blocks = array(
            'title_right_content' => array($this, 'block_title_right_content'),
            'ultimosMovimientos_active' => array($this, 'block_ultimosMovimientos_active'),
            'left_content' => array($this, 'block_left_content'),
            'movimientoSemanal_active' => array($this, 'block_movimientoSemanal_active'),
            'content_right_content' => array($this, 'block_content_right_content'),
            'inicio_active' => array($this, 'block_inicio_active'),
            'lista_repuestos_active' => array($this, 'block_lista_repuestos_active'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5be2f5bd602f2afaafe1e67c6ae782585978a2bae595743a7b5bbdb9050a767b = $this->env->getExtension("native_profiler");
        $__internal_5be2f5bd602f2afaafe1e67c6ae782585978a2bae595743a7b5bbdb9050a767b->enter($__internal_5be2f5bd602f2afaafe1e67c6ae782585978a2bae595743a7b5bbdb9050a767b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5be2f5bd602f2afaafe1e67c6ae782585978a2bae595743a7b5bbdb9050a767b->leave($__internal_5be2f5bd602f2afaafe1e67c6ae782585978a2bae595743a7b5bbdb9050a767b_prof);

    }

    // line 3
    public function block_title_right_content($context, array $blocks = array())
    {
        $__internal_00cf00624a40adcd3f48c9843da99a8896734bcca381618b5694c688f42064e0 = $this->env->getExtension("native_profiler");
        $__internal_00cf00624a40adcd3f48c9843da99a8896734bcca381618b5694c688f42064e0->enter($__internal_00cf00624a40adcd3f48c9843da99a8896734bcca381618b5694c688f42064e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title_right_content"));

        // line 4
        echo "Realizar venta
";
        
        $__internal_00cf00624a40adcd3f48c9843da99a8896734bcca381618b5694c688f42064e0->leave($__internal_00cf00624a40adcd3f48c9843da99a8896734bcca381618b5694c688f42064e0_prof);

    }

    // line 6
    public function block_ultimosMovimientos_active($context, array $blocks = array())
    {
        $__internal_d5f91f3fc56b3a236756fae9d0f51d9ddd2989d907674f5ebef99b7cbb1f3113 = $this->env->getExtension("native_profiler");
        $__internal_d5f91f3fc56b3a236756fae9d0f51d9ddd2989d907674f5ebef99b7cbb1f3113->enter($__internal_d5f91f3fc56b3a236756fae9d0f51d9ddd2989d907674f5ebef99b7cbb1f3113_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ultimosMovimientos_active"));

        echo " ";
        
        $__internal_d5f91f3fc56b3a236756fae9d0f51d9ddd2989d907674f5ebef99b7cbb1f3113->leave($__internal_d5f91f3fc56b3a236756fae9d0f51d9ddd2989d907674f5ebef99b7cbb1f3113_prof);

    }

    // line 7
    public function block_left_content($context, array $blocks = array())
    {
        $__internal_da1ea7f8f5cf3b111dbe379f59c1ab0b92c4ed729aa739d1736b30c644d45e19 = $this->env->getExtension("native_profiler");
        $__internal_da1ea7f8f5cf3b111dbe379f59c1ab0b92c4ed729aa739d1736b30c644d45e19->enter($__internal_da1ea7f8f5cf3b111dbe379f59c1ab0b92c4ed729aa739d1736b30c644d45e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "left_content"));

        // line 8
        echo "  <li class=\"active\"><a href=\"";
        echo $this->env->getExtension('routing')->getPath("tecnos_ventas");
        echo "\">Realizar venta</a></li>
";
        
        $__internal_da1ea7f8f5cf3b111dbe379f59c1ab0b92c4ed729aa739d1736b30c644d45e19->leave($__internal_da1ea7f8f5cf3b111dbe379f59c1ab0b92c4ed729aa739d1736b30c644d45e19_prof);

    }

    // line 10
    public function block_movimientoSemanal_active($context, array $blocks = array())
    {
        $__internal_db242922a19c38254696a2811714fa50c016d3aa43ff0b0d9670d5e1207f0bb6 = $this->env->getExtension("native_profiler");
        $__internal_db242922a19c38254696a2811714fa50c016d3aa43ff0b0d9670d5e1207f0bb6->enter($__internal_db242922a19c38254696a2811714fa50c016d3aa43ff0b0d9670d5e1207f0bb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "movimientoSemanal_active"));

        // line 11
        echo "\tactive
";
        
        $__internal_db242922a19c38254696a2811714fa50c016d3aa43ff0b0d9670d5e1207f0bb6->leave($__internal_db242922a19c38254696a2811714fa50c016d3aa43ff0b0d9670d5e1207f0bb6_prof);

    }

    // line 13
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_ba86d26a91a23525f0f50a49077db7d74e879651dcdaf3bcf4c1ad73cd799743 = $this->env->getExtension("native_profiler");
        $__internal_ba86d26a91a23525f0f50a49077db7d74e879651dcdaf3bcf4c1ad73cd799743->enter($__internal_ba86d26a91a23525f0f50a49077db7d74e879651dcdaf3bcf4c1ad73cd799743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 14
        if (array_key_exists("alert", $context)) {
            // line 15
            echo "  <script>
    alert(\"";
            // line 16
            echo twig_escape_filter($this->env, (isset($context["alert"]) ? $context["alert"] : $this->getContext($context, "alert")), "html", null, true);
            echo "\");
  </script>
";
        }
        // line 19
        echo "<form id=\"myForm\" method=\"post\" action=\"";
        echo $this->env->getExtension('routing')->getPath("my_app_greeting");
        echo "\">
      <div class=\"input-group\">
      <input id=\"name_id\" name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Buscar repuesto...\" />
      <span class=\"input-group-btn\">
        <button id=\"search-button\" class=\"btn btn-default\" type=\"button\">Buscar</button>
      </span>
    </div><!-- /input-group --></br>
    </form>
 <div id=\"output\"></div>
\t<div id=\"pedido-container\">
     <div id=\"outputTwo\"></div>
    </div>
  <script>
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
  </script>
<script>
\$(\"#myForm\").submit(function(event){
    var value = \$(\"#name_id\").val();
    \$.ajax({
        type: \"POST\",
        data: { productValue: value },
        url: \"/ventas/test/ajax/\"
    })
    .done(function(response){
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
</script>
";
        
        $__internal_ba86d26a91a23525f0f50a49077db7d74e879651dcdaf3bcf4c1ad73cd799743->leave($__internal_ba86d26a91a23525f0f50a49077db7d74e879651dcdaf3bcf4c1ad73cd799743_prof);

    }

    // line 75
    public function block_inicio_active($context, array $blocks = array())
    {
        $__internal_4c089073b0c88083021e8ca7221f675a85edc1d720425a8a77a35ef62425ba72 = $this->env->getExtension("native_profiler");
        $__internal_4c089073b0c88083021e8ca7221f675a85edc1d720425a8a77a35ef62425ba72->enter($__internal_4c089073b0c88083021e8ca7221f675a85edc1d720425a8a77a35ef62425ba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "inicio_active"));

        echo " ";
        
        $__internal_4c089073b0c88083021e8ca7221f675a85edc1d720425a8a77a35ef62425ba72->leave($__internal_4c089073b0c88083021e8ca7221f675a85edc1d720425a8a77a35ef62425ba72_prof);

    }

    // line 76
    public function block_lista_repuestos_active($context, array $blocks = array())
    {
        $__internal_5b605983da1bc3cc48a3fbc41a90cace0c22d465541807045b3be1c42a6d5e6c = $this->env->getExtension("native_profiler");
        $__internal_5b605983da1bc3cc48a3fbc41a90cace0c22d465541807045b3be1c42a6d5e6c->enter($__internal_5b605983da1bc3cc48a3fbc41a90cace0c22d465541807045b3be1c42a6d5e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "lista_repuestos_active"));

        echo " active ";
        
        $__internal_5b605983da1bc3cc48a3fbc41a90cace0c22d465541807045b3be1c42a6d5e6c->leave($__internal_5b605983da1bc3cc48a3fbc41a90cace0c22d465541807045b3be1c42a6d5e6c_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  188 => 76,  176 => 75,  113 => 19,  107 => 16,  104 => 15,  102 => 14,  96 => 13,  88 => 11,  82 => 10,  72 => 8,  66 => 7,  54 => 6,  46 => 4,  40 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block title_right_content %}*/
/* Realizar venta*/
/* {% endblock title_right_content %}*/
/* {% block ultimosMovimientos_active %} {% endblock %}*/
/* {% block left_content %}*/
/*   <li class="active"><a href="{{path('tecnos_ventas')}}">Realizar venta</a></li>*/
/* {% endblock left_content %}*/
/* {% block movimientoSemanal_active %}*/
/* 	active*/
/* {% endblock movimientoSemanal_active %}*/
/* {% block content_right_content %}*/
/* {% if alert is defined %}*/
/*   <script>*/
/*     alert("{{ alert }}");*/
/*   </script>*/
/* {% endif %}*/
/* <form id="myForm" method="post" action="{{ path('my_app_greeting') }}">*/
/*       <div class="input-group">*/
/*       <input id="name_id" name="name" type="text" class="form-control" placeholder="Buscar repuesto..." />*/
/*       <span class="input-group-btn">*/
/*         <button id="search-button" class="btn btn-default" type="button">Buscar</button>*/
/*       </span>*/
/*     </div><!-- /input-group --></br>*/
/*     </form>*/
/*  <div id="output"></div>*/
/* 	<div id="pedido-container">*/
/*      <div id="outputTwo"></div>*/
/*     </div>*/
/*   <script>*/
/*   $("#outputTwo").ready(function(){*/
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
/*   </script>*/
/* <script>*/
/* $("#myForm").submit(function(event){*/
/*     var value = $("#name_id").val();*/
/*     $.ajax({*/
/*         type: "POST",*/
/*         data: { productValue: value },*/
/*         url: "/ventas/test/ajax/"*/
/*     })*/
/*     .done(function(response){*/
/*       // alert(JSON.stringify(response,null,4) );*/
/*         template = response;*/
/*         $('#output').html(template); */
/*     event.preventDefault();*/
/*     })*/
/*     .fail(function(jqXHR, textStatus, errorThrown){*/
/*         console.log(errorThrown);*/
/*         alert('Error : ' + errorThrown);*/
/*     });*/
/*     event.preventDefault();*/
/* });*/
/* </script>*/
/* {% endblock content_right_content %}*/
/* */
/* {% block inicio_active %} {% endblock inicio_active %}*/
/* {% block lista_repuestos_active %} active {% endblock lista_repuestos_active %}*/
