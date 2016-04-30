<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_5b1271164f36550e1834267fb987c4f5f7a7886fc203dc4be49bfd8918703a57 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_caa2667c6b5dbea8a946d0dc05eee859eaeafcbd9de58d4de4ca34ea3974f791 = $this->env->getExtension("native_profiler");
        $__internal_caa2667c6b5dbea8a946d0dc05eee859eaeafcbd9de58d4de4ca34ea3974f791->enter($__internal_caa2667c6b5dbea8a946d0dc05eee859eaeafcbd9de58d4de4ca34ea3974f791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_caa2667c6b5dbea8a946d0dc05eee859eaeafcbd9de58d4de4ca34ea3974f791->leave($__internal_caa2667c6b5dbea8a946d0dc05eee859eaeafcbd9de58d4de4ca34ea3974f791_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08fdd16b9c82448a22e5db0746dc4ae4e8f9b73511127e5628e808bdb5f1d44a = $this->env->getExtension("native_profiler");
        $__internal_08fdd16b9c82448a22e5db0746dc4ae4e8f9b73511127e5628e808bdb5f1d44a->enter($__internal_08fdd16b9c82448a22e5db0746dc4ae4e8f9b73511127e5628e808bdb5f1d44a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_08fdd16b9c82448a22e5db0746dc4ae4e8f9b73511127e5628e808bdb5f1d44a->leave($__internal_08fdd16b9c82448a22e5db0746dc4ae4e8f9b73511127e5628e808bdb5f1d44a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
