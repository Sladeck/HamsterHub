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
        $__internal_7f7a218eca094a8347570b0b8cad7cb456e886c33ea0d7893c2fcecf94176c9e = $this->env->getExtension("native_profiler");
        $__internal_7f7a218eca094a8347570b0b8cad7cb456e886c33ea0d7893c2fcecf94176c9e->enter($__internal_7f7a218eca094a8347570b0b8cad7cb456e886c33ea0d7893c2fcecf94176c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_7f7a218eca094a8347570b0b8cad7cb456e886c33ea0d7893c2fcecf94176c9e->leave($__internal_7f7a218eca094a8347570b0b8cad7cb456e886c33ea0d7893c2fcecf94176c9e_prof);

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