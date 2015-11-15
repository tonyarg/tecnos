<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_53f6a5dda79c9a6ec5c94ea54032dca297509d70c179fd121cd8ea45cf44cdf9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e53b1d0f1f1ac7044d363ea2df9272ca2545208224f58087e91967a29a2a5dbf = $this->env->getExtension("native_profiler");
        $__internal_e53b1d0f1f1ac7044d363ea2df9272ca2545208224f58087e91967a29a2a5dbf->enter($__internal_e53b1d0f1f1ac7044d363ea2df9272ca2545208224f58087e91967a29a2a5dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_e53b1d0f1f1ac7044d363ea2df9272ca2545208224f58087e91967a29a2a5dbf->leave($__internal_e53b1d0f1f1ac7044d363ea2df9272ca2545208224f58087e91967a29a2a5dbf_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
