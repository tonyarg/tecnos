<?php

/* AcmeDemoTwoBundle:Ventas:test.html.twig */
class __TwigTemplate_7dab845fa0df0d535ab7d52b7d8f0c8adaab3b9cc0ceb356ebf654a12460fb97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoTwoBundle:Transacciones:index.html.twig", "AcmeDemoTwoBundle:Ventas:test.html.twig", 1);
        $this->blocks = array(
            'content_right_content' => array($this, 'block_content_right_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoTwoBundle:Transacciones:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_23f073db9fb584ff6c833ceb8fbed19213c309953e1f97998c96dc8fd163adc2 = $this->env->getExtension("native_profiler");
        $__internal_23f073db9fb584ff6c833ceb8fbed19213c309953e1f97998c96dc8fd163adc2->enter($__internal_23f073db9fb584ff6c833ceb8fbed19213c309953e1f97998c96dc8fd163adc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Ventas:test.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_23f073db9fb584ff6c833ceb8fbed19213c309953e1f97998c96dc8fd163adc2->leave($__internal_23f073db9fb584ff6c833ceb8fbed19213c309953e1f97998c96dc8fd163adc2_prof);

    }

    // line 3
    public function block_content_right_content($context, array $blocks = array())
    {
        $__internal_6fe04ccf5998f9cb3338af6fbf22bad91df96246edcfd359bf76e7153c9abe79 = $this->env->getExtension("native_profiler");
        $__internal_6fe04ccf5998f9cb3338af6fbf22bad91df96246edcfd359bf76e7153c9abe79->enter($__internal_6fe04ccf5998f9cb3338af6fbf22bad91df96246edcfd359bf76e7153c9abe79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_right_content"));

        // line 4
        echo "</div>
\t<form id=\"test\" method=\"post\" action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("tecnos_ventas_test_ajax");
        echo "\">
      <div class=\"input-group\">
      <input id=\"name_id\" name=\"name\" type=\"text\" class=\"form-control\" placeholder=\"Buscar repuesto...\" required />
      <span class=\"input-group-btn\">
        <button id=\"search-button\" class=\"btn btn-default\" type=\"button\">Buscar</button>
      </span>
    </div><!-- /input-group --></br>
    </form>
<script>
\$(\"#test\").submit(function(event){
\t\tvar value = \$(\"#name_id\").val();
\t\t\$.ajax({
\t\t    type: \"POST\",
\t\t    data: { productValue: value },
\t\t    url: \"/ventas/test/ajax/\"
\t\t})
\t\t.done(function(response){
\t\t\t// alert(JSON.stringify(response,null,4) );
\t\t    template = response;
\t\t    \$('#output').html(template); 
\t\tevent.preventDefault();
\t\t})
\t\t.fail(function(jqXHR, textStatus, errorThrown){
\t\t    alert('Error : ' + errorThrown);
\t\t});
\t\tevent.preventDefault();
});
</script>
";
        // line 35
        echo "
<div id=\"output\"></div>
";
        echo "
";
        
        $__internal_6fe04ccf5998f9cb3338af6fbf22bad91df96246edcfd359bf76e7153c9abe79->leave($__internal_6fe04ccf5998f9cb3338af6fbf22bad91df96246edcfd359bf76e7153c9abe79_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Ventas:test.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 35,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoTwoBundle:Transacciones:index.html.twig" %}*/
/* */
/* {% block content_right_content %}*/
/* </div>*/
/* 	<form id="test" method="post" action="{{ path("tecnos_ventas_test_ajax") }}">*/
/*       <div class="input-group">*/
/*       <input id="name_id" name="name" type="text" class="form-control" placeholder="Buscar repuesto..." required />*/
/*       <span class="input-group-btn">*/
/*         <button id="search-button" class="btn btn-default" type="button">Buscar</button>*/
/*       </span>*/
/*     </div><!-- /input-group --></br>*/
/*     </form>*/
/* <script>*/
/* $("#test").submit(function(event){*/
/* 		var value = $("#name_id").val();*/
/* 		$.ajax({*/
/* 		    type: "POST",*/
/* 		    data: { productValue: value },*/
/* 		    url: "/ventas/test/ajax/"*/
/* 		})*/
/* 		.done(function(response){*/
/* 			// alert(JSON.stringify(response,null,4) );*/
/* 		    template = response;*/
/* 		    $('#output').html(template); */
/* 		event.preventDefault();*/
/* 		})*/
/* 		.fail(function(jqXHR, textStatus, errorThrown){*/
/* 		    alert('Error : ' + errorThrown);*/
/* 		});*/
/* 		event.preventDefault();*/
/* });*/
/* </script>*/
/* {% verbatim %}*/
/* <div id="output"></div>*/
/* {% endverbatim %}*/
/* {% endblock %}*/
