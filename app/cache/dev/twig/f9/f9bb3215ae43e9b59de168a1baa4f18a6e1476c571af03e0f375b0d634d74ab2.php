<?php

/* AcmeDemoTwoBundle:Security:login.html.twig */
class __TwigTemplate_99ece89b8396c67f391e60afbca53ace43d0da88af1dfa2c216d32a01f16eda7 extends Twig_Template
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
        $__internal_a2d899b25d5f71a7ce005767a6e17a48860b7b18469a81caed29c7ac2913f802 = $this->env->getExtension("native_profiler");
        $__internal_a2d899b25d5f71a7ce005767a6e17a48860b7b18469a81caed29c7ac2913f802->enter($__internal_a2d899b25d5f71a7ce005767a6e17a48860b7b18469a81caed29c7ac2913f802_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AcmeDemoTwoBundle:Security:login.html.twig"));

        // line 1
        echo "<html lang=\"es\">
<head>
    <title>Testeando login form</title>
    <meta charset=\"utf-8\" />
</head>
<body>
";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />

    <label for=\"password\">Password:</label>
    <input type=\"password\" id=\"password\" name=\"_password\" />

        <input type=\"hidden\" name=\"_target_path\" value=\"/blog/21\" />
    <button type=\"submit\">login</button>
</form>

</body>
</html>";
        
        $__internal_a2d899b25d5f71a7ce005767a6e17a48860b7b18469a81caed29c7ac2913f802->leave($__internal_a2d899b25d5f71a7ce005767a6e17a48860b7b18469a81caed29c7ac2913f802_prof);

    }

    public function getTemplateName()
    {
        return "AcmeDemoTwoBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 13,  41 => 11,  38 => 10,  32 => 8,  30 => 7,  22 => 1,);
    }
}
/* <html lang="es">*/
/* <head>*/
/*     <title>Testeando login form</title>*/
/*     <meta charset="utf-8" />*/
/* </head>*/
/* <body>*/
/* {% if error %}*/
/*     <div>{{ error.message }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/*     <label for="username">Username:</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* */
/*     <label for="password">Password:</label>*/
/*     <input type="password" id="password" name="_password" />*/
/* */
/*         <input type="hidden" name="_target_path" value="/blog/21" />*/
/*     <button type="submit">login</button>*/
/* </form>*/
/* */
/* </body>*/
/* </html>*/
