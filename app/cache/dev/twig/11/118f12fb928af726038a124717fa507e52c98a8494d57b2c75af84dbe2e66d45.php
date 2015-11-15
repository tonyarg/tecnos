<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_ca5863dc7567ee04280bd156c3454f9d31547ea7c61fc3973a71aac95cfbcd40 extends Twig_Template
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
        $__internal_c34f65a64289a1f11be892e204dc7e7e157e0bf95884d075436acb097d4a360d = $this->env->getExtension("native_profiler");
        $__internal_c34f65a64289a1f11be892e204dc7e7e157e0bf95884d075436acb097d4a360d->enter($__internal_c34f65a64289a1f11be892e204dc7e7e157e0bf95884d075436acb097d4a360d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_c34f65a64289a1f11be892e204dc7e7e157e0bf95884d075436acb097d4a360d->leave($__internal_c34f65a64289a1f11be892e204dc7e7e157e0bf95884d075436acb097d4a360d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include 'TwigBundle:Exception:error.xml.twig' %}*/
/* */
