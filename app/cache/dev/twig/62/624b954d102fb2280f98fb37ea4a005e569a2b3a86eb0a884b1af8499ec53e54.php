<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_3c67d418b8165c01e9319a9bcb3d006ee812659771e319104fe8824c5b919441 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_fa29558883b308619f3d7e52e36fe41f82445baf2132b5e5f2d06a4b7e9911db = $this->env->getExtension("native_profiler");
        $__internal_fa29558883b308619f3d7e52e36fe41f82445baf2132b5e5f2d06a4b7e9911db->enter($__internal_fa29558883b308619f3d7e52e36fe41f82445baf2132b5e5f2d06a4b7e9911db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa29558883b308619f3d7e52e36fe41f82445baf2132b5e5f2d06a4b7e9911db->leave($__internal_fa29558883b308619f3d7e52e36fe41f82445baf2132b5e5f2d06a4b7e9911db_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be2f5d6e9573278fb4fe4f4aab880050cd17f18c54fac44ac0fc9f2fa3fccbba = $this->env->getExtension("native_profiler");
        $__internal_be2f5d6e9573278fb4fe4f4aab880050cd17f18c54fac44ac0fc9f2fa3fccbba->enter($__internal_be2f5d6e9573278fb4fe4f4aab880050cd17f18c54fac44ac0fc9f2fa3fccbba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_be2f5d6e9573278fb4fe4f4aab880050cd17f18c54fac44ac0fc9f2fa3fccbba->leave($__internal_be2f5d6e9573278fb4fe4f4aab880050cd17f18c54fac44ac0fc9f2fa3fccbba_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
