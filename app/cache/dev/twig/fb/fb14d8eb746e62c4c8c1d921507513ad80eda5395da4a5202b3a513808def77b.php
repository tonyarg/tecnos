<?php

/* AcmeDemoBundle:Secured:layout.html.twig */
class __TwigTemplate_fcbe7990f94abadc6aa641e20dc5448ed3d46a9fa165a8a0fc42200c50e59d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle::layout.html.twig", "AcmeDemoBundle:Secured:layout.html.twig", 1);
        $this->blocks = array(
            'content_header_more' => array($this, 'block_content_header_more'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c4ac5d109165ecd93bd53c6d31bdf4d8d8b87a635bc803a30a47fb2cd5b50ff = $this->env->getExtension("native_profiler");
        $__internal_8c4ac5d109165ecd93bd53c6d31bdf4d8d8b87a635bc803a30a47fb2cd5b50ff->enter($__internal_8c4ac5d109165ecd93bd53c6d31bdf4d8d8b87a635bc803a30a47fb2cd5b50ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c4ac5d109165ecd93bd53c6d31bdf4d8d8b87a635bc803a30a47fb2cd5b50ff->leave($__internal_8c4ac5d109165ecd93bd53c6d31bdf4d8d8b87a635bc803a30a47fb2cd5b50ff_prof);

    }

    // line 3
    public function block_content_header_more($context, array $blocks = array())
    {
        $__internal_487847fd2971113f67f021edecdbdf0469ab902d7b7b6618b9ec81cdb0f65002 = $this->env->getExtension("native_profiler");
        $__internal_487847fd2971113f67f021edecdbdf0469ab902d7b7b6618b9ec81cdb0f65002->enter($__internal_487847fd2971113f67f021edecdbdf0469ab902d7b7b6618b9ec81cdb0f65002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header_more"));

        // line 4
        echo "    ";
        $this->displayParentBlock("content_header_more", $context, $blocks);
        echo "
    <li>logged in as <strong>";
        // line 5
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) ? ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())) : ("Anonymous")), "html", null, true);
        echo "</strong> - <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_logout");
        echo "\">Logout</a></li>
";
        
        $__internal_487847fd2971113f67f021edecdbdf0469ab902d7b7b6618b9ec81cdb0f65002->leave($__internal_487847fd2971113f67f021edecdbdf0469ab902d7b7b6618b9ec81cdb0f65002_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle::layout.html.twig" %}*/
/* */
/* {% block content_header_more %}*/
/*     {{ parent() }}*/
/*     <li>logged in as <strong>{{ app.user ? app.user.username : 'Anonymous' }}</strong> - <a href="{{ path('_demo_logout') }}">Logout</a></li>*/
/* {% endblock %}*/
/* */
