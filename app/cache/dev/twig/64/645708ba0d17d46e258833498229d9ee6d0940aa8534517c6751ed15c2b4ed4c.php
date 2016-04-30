<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_002d48e7a4826bf41952d9f92010bffa41fb582bcfaa6b96fa53cafb2b739e0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d419ccb748761beec2ebd34fcd6ad08afd1e111dda8afb5331eeb213ef16437 = $this->env->getExtension("native_profiler");
        $__internal_3d419ccb748761beec2ebd34fcd6ad08afd1e111dda8afb5331eeb213ef16437->enter($__internal_3d419ccb748761beec2ebd34fcd6ad08afd1e111dda8afb5331eeb213ef16437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d419ccb748761beec2ebd34fcd6ad08afd1e111dda8afb5331eeb213ef16437->leave($__internal_3d419ccb748761beec2ebd34fcd6ad08afd1e111dda8afb5331eeb213ef16437_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f5ff8331bd27fb79ef4dd66b04990d08c112c542cf403e13fdb3bdcc91b9f261 = $this->env->getExtension("native_profiler");
        $__internal_f5ff8331bd27fb79ef4dd66b04990d08c112c542cf403e13fdb3bdcc91b9f261->enter($__internal_f5ff8331bd27fb79ef4dd66b04990d08c112c542cf403e13fdb3bdcc91b9f261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_f5ff8331bd27fb79ef4dd66b04990d08c112c542cf403e13fdb3bdcc91b9f261->leave($__internal_f5ff8331bd27fb79ef4dd66b04990d08c112c542cf403e13fdb3bdcc91b9f261_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
