<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_122856f5abf7835bcf24cc84da8b3f06aa25dcf1dcebffcdce01487f1f42240d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47457e7a185696a81199cf4f9b25fcc3c0905586da76b98d8bbaa586e1c4c107 = $this->env->getExtension("native_profiler");
        $__internal_47457e7a185696a81199cf4f9b25fcc3c0905586da76b98d8bbaa586e1c4c107->enter($__internal_47457e7a185696a81199cf4f9b25fcc3c0905586da76b98d8bbaa586e1c4c107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_47457e7a185696a81199cf4f9b25fcc3c0905586da76b98d8bbaa586e1c4c107->leave($__internal_47457e7a185696a81199cf4f9b25fcc3c0905586da76b98d8bbaa586e1c4c107_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4681aeec8851dd11d9aba7e77aca9a8ed9d51076c297c52e2b2dd24343a36e72 = $this->env->getExtension("native_profiler");
        $__internal_4681aeec8851dd11d9aba7e77aca9a8ed9d51076c297c52e2b2dd24343a36e72->enter($__internal_4681aeec8851dd11d9aba7e77aca9a8ed9d51076c297c52e2b2dd24343a36e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4681aeec8851dd11d9aba7e77aca9a8ed9d51076c297c52e2b2dd24343a36e72->leave($__internal_4681aeec8851dd11d9aba7e77aca9a8ed9d51076c297c52e2b2dd24343a36e72_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
