<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_e4f70ba16c0ee1a7d61f5b0d499bb6a86bdad0e8ddb1dfd97435ec838729a688 extends Twig_Template
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
        $__internal_710d6961b35665da44bf63444799c2cb7748dc6aeb71b8c96a4582a5516e4ed1 = $this->env->getExtension("native_profiler");
        $__internal_710d6961b35665da44bf63444799c2cb7748dc6aeb71b8c96a4582a5516e4ed1->enter($__internal_710d6961b35665da44bf63444799c2cb7748dc6aeb71b8c96a4582a5516e4ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_710d6961b35665da44bf63444799c2cb7748dc6aeb71b8c96a4582a5516e4ed1->leave($__internal_710d6961b35665da44bf63444799c2cb7748dc6aeb71b8c96a4582a5516e4ed1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
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
