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
        $__internal_4f20a9a89fbee4608f1efdc68e5ff39a9705a42ba994241549aa45af06cf94ab = $this->env->getExtension("native_profiler");
        $__internal_4f20a9a89fbee4608f1efdc68e5ff39a9705a42ba994241549aa45af06cf94ab->enter($__internal_4f20a9a89fbee4608f1efdc68e5ff39a9705a42ba994241549aa45af06cf94ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f20a9a89fbee4608f1efdc68e5ff39a9705a42ba994241549aa45af06cf94ab->leave($__internal_4f20a9a89fbee4608f1efdc68e5ff39a9705a42ba994241549aa45af06cf94ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d57fbc0dd21de7f450e8e9873f140831a72ccddcb7363929f20a65fded3a6f5f = $this->env->getExtension("native_profiler");
        $__internal_d57fbc0dd21de7f450e8e9873f140831a72ccddcb7363929f20a65fded3a6f5f->enter($__internal_d57fbc0dd21de7f450e8e9873f140831a72ccddcb7363929f20a65fded3a6f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_d57fbc0dd21de7f450e8e9873f140831a72ccddcb7363929f20a65fded3a6f5f->leave($__internal_d57fbc0dd21de7f450e8e9873f140831a72ccddcb7363929f20a65fded3a6f5f_prof);

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
