<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_9d872b3c731fff26ccf84922207738ef365dae4786c0571933ba51c78a3a5314 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_628ce00855f0e1ef7b3b9b860c8690e472a85545b2f6e80623ea268d0a7337de = $this->env->getExtension("native_profiler");
        $__internal_628ce00855f0e1ef7b3b9b860c8690e472a85545b2f6e80623ea268d0a7337de->enter($__internal_628ce00855f0e1ef7b3b9b860c8690e472a85545b2f6e80623ea268d0a7337de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_628ce00855f0e1ef7b3b9b860c8690e472a85545b2f6e80623ea268d0a7337de->leave($__internal_628ce00855f0e1ef7b3b9b860c8690e472a85545b2f6e80623ea268d0a7337de_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2bd645d05f78ce0d6c1209be33ed7cf9278bfb07d27cb7517f41be70159aff6c = $this->env->getExtension("native_profiler");
        $__internal_2bd645d05f78ce0d6c1209be33ed7cf9278bfb07d27cb7517f41be70159aff6c->enter($__internal_2bd645d05f78ce0d6c1209be33ed7cf9278bfb07d27cb7517f41be70159aff6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_2bd645d05f78ce0d6c1209be33ed7cf9278bfb07d27cb7517f41be70159aff6c->leave($__internal_2bd645d05f78ce0d6c1209be33ed7cf9278bfb07d27cb7517f41be70159aff6c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e696edeecab6f1dd619886d6625e334ec3f42e76970ac0a3f0ceba6cca200c4a = $this->env->getExtension("native_profiler");
        $__internal_e696edeecab6f1dd619886d6625e334ec3f42e76970ac0a3f0ceba6cca200c4a->enter($__internal_e696edeecab6f1dd619886d6625e334ec3f42e76970ac0a3f0ceba6cca200c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e696edeecab6f1dd619886d6625e334ec3f42e76970ac0a3f0ceba6cca200c4a->leave($__internal_e696edeecab6f1dd619886d6625e334ec3f42e76970ac0a3f0ceba6cca200c4a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0bce7b4305492b84c4b5ded87177d77b9c05c757d0d9878d7d570c351fe8a259 = $this->env->getExtension("native_profiler");
        $__internal_0bce7b4305492b84c4b5ded87177d77b9c05c757d0d9878d7d570c351fe8a259->enter($__internal_0bce7b4305492b84c4b5ded87177d77b9c05c757d0d9878d7d570c351fe8a259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0bce7b4305492b84c4b5ded87177d77b9c05c757d0d9878d7d570c351fe8a259->leave($__internal_0bce7b4305492b84c4b5ded87177d77b9c05c757d0d9878d7d570c351fe8a259_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'TwigBundle::layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include 'TwigBundle:Exception:exception.html.twig' %}*/
/* {% endblock %}*/
/* */
