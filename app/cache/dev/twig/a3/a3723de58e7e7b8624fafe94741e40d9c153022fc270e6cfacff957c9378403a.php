<?php

/* AcmeDemoBundle:Secured:helloadmin.html.twig */
class __TwigTemplate_5fabf82a32a73c5e8597ebfaf6f417344df1ff98380742a246b2f627ee0211f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AcmeDemoBundle:Secured:layout.html.twig", "AcmeDemoBundle:Secured:helloadmin.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle:Secured:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e66436223f6eebb5efbaf1bfca1d4fe3e07bb3098bfe525864caec837e91671f = $this->env->getExtension("native_profiler");
        $__internal_e66436223f6eebb5efbaf1bfca1d4fe3e07bb3098bfe525864caec837e91671f->enter($__internal_e66436223f6eebb5efbaf1bfca1d4fe3e07bb3098bfe525864caec837e91671f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoBundle:Secured:helloadmin.html.twig"));

        // line 9
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e66436223f6eebb5efbaf1bfca1d4fe3e07bb3098bfe525864caec837e91671f->leave($__internal_e66436223f6eebb5efbaf1bfca1d4fe3e07bb3098bfe525864caec837e91671f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2306d71b579c28e2cffc2939f13800f2642bc0f09cf0c8a16fe24b5c4908d42e = $this->env->getExtension("native_profiler");
        $__internal_2306d71b579c28e2cffc2939f13800f2642bc0f09cf0c8a16fe24b5c4908d42e->enter($__internal_2306d71b579c28e2cffc2939f13800f2642bc0f09cf0c8a16fe24b5c4908d42e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, ("Hello " . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))), "html", null, true);
        
        $__internal_2306d71b579c28e2cffc2939f13800f2642bc0f09cf0c8a16fe24b5c4908d42e->leave($__internal_2306d71b579c28e2cffc2939f13800f2642bc0f09cf0c8a16fe24b5c4908d42e_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_bba57818d95837403a08f707bc62a2cf47aa9676e6537ae17e80cd07646f0009 = $this->env->getExtension("native_profiler");
        $__internal_bba57818d95837403a08f707bc62a2cf47aa9676e6537ae17e80cd07646f0009->enter($__internal_bba57818d95837403a08f707bc62a2cf47aa9676e6537ae17e80cd07646f0009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "    <h1 class=\"title\">Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo " secured for Admins only!</h1>
";
        
        $__internal_bba57818d95837403a08f707bc62a2cf47aa9676e6537ae17e80cd07646f0009->leave($__internal_bba57818d95837403a08f707bc62a2cf47aa9676e6537ae17e80cd07646f0009_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:helloadmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  38 => 3,  31 => 1,  29 => 9,  11 => 1,);
    }
}
/* {% extends "AcmeDemoBundle:Secured:layout.html.twig" %}*/
/* */
/* {% block title "Hello " ~ name %}*/
/* */
/* {% block content %}*/
/*     <h1 class="title">Hello {{ name }} secured for Admins only!</h1>*/
/* {% endblock %}*/
/* */
/* {% set code = code(_self) %}*/
/* */
