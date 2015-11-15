<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0d9c30091e31298c9dadc1c49d6c6e6caae294b23c4d3c3474c50928dbc5d80a extends Twig_Template
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
        $__internal_bc4a49ccfedf5fa7ba109ddf5a821d4cd3e73443ac9157f90db0ebb45fb5e120 = $this->env->getExtension("native_profiler");
        $__internal_bc4a49ccfedf5fa7ba109ddf5a821d4cd3e73443ac9157f90db0ebb45fb5e120->enter($__internal_bc4a49ccfedf5fa7ba109ddf5a821d4cd3e73443ac9157f90db0ebb45fb5e120_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bc4a49ccfedf5fa7ba109ddf5a821d4cd3e73443ac9157f90db0ebb45fb5e120->leave($__internal_bc4a49ccfedf5fa7ba109ddf5a821d4cd3e73443ac9157f90db0ebb45fb5e120_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
