<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_295a93a15439885c50329c57ab2bbf7244091cbc9db576eb9d9c257a1128f7c6 extends Twig_Template
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
        $__internal_b3785b1a63ad5b6a3f69c3690ff4889b77ad81c2d5d9d0c8ea5af3307f877eb8 = $this->env->getExtension("native_profiler");
        $__internal_b3785b1a63ad5b6a3f69c3690ff4889b77ad81c2d5d9d0c8ea5af3307f877eb8->enter($__internal_b3785b1a63ad5b6a3f69c3690ff4889b77ad81c2d5d9d0c8ea5af3307f877eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_b3785b1a63ad5b6a3f69c3690ff4889b77ad81c2d5d9d0c8ea5af3307f877eb8->leave($__internal_b3785b1a63ad5b6a3f69c3690ff4889b77ad81c2d5d9d0c8ea5af3307f877eb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
