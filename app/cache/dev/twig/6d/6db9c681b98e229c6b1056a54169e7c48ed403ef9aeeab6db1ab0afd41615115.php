<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_fa9ca0c554cd8e69885ea63a00b60e1c8d6beed576dcc89e3cc92fcc47cd96f7 extends Twig_Template
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
        $__internal_d95a0bb1e870ecd2b1769b31397f0dc76eef7989165f124cdaa6baaf76020c2a = $this->env->getExtension("native_profiler");
        $__internal_d95a0bb1e870ecd2b1769b31397f0dc76eef7989165f124cdaa6baaf76020c2a->enter($__internal_d95a0bb1e870ecd2b1769b31397f0dc76eef7989165f124cdaa6baaf76020c2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_d95a0bb1e870ecd2b1769b31397f0dc76eef7989165f124cdaa6baaf76020c2a->leave($__internal_d95a0bb1e870ecd2b1769b31397f0dc76eef7989165f124cdaa6baaf76020c2a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */