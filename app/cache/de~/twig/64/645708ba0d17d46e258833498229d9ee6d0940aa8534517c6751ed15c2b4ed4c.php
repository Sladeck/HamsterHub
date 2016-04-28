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
        $__internal_d991ae45bcaa35a1a7c24db268655108893553dfe4020ed11d1181edd3320e66 = $this->env->getExtension("native_profiler");
        $__internal_d991ae45bcaa35a1a7c24db268655108893553dfe4020ed11d1181edd3320e66->enter($__internal_d991ae45bcaa35a1a7c24db268655108893553dfe4020ed11d1181edd3320e66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d991ae45bcaa35a1a7c24db268655108893553dfe4020ed11d1181edd3320e66->leave($__internal_d991ae45bcaa35a1a7c24db268655108893553dfe4020ed11d1181edd3320e66_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0c4351cdc06d7ced8ab6f10d87471e05691249fa155149ca29cd879d87543df = $this->env->getExtension("native_profiler");
        $__internal_f0c4351cdc06d7ced8ab6f10d87471e05691249fa155149ca29cd879d87543df->enter($__internal_f0c4351cdc06d7ced8ab6f10d87471e05691249fa155149ca29cd879d87543df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_f0c4351cdc06d7ced8ab6f10d87471e05691249fa155149ca29cd879d87543df->leave($__internal_f0c4351cdc06d7ced8ab6f10d87471e05691249fa155149ca29cd879d87543df_prof);

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
