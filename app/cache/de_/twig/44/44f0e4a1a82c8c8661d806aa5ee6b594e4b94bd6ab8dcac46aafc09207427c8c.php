<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_50e602516469f14c01291bc39bc961e8a79a23380a780a143fa9bd76d1917203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_a8f56cdf33b8d8e91b825f35f7fcc83a1b6af298184dc5a7e2c3279941316029 = $this->env->getExtension("native_profiler");
        $__internal_a8f56cdf33b8d8e91b825f35f7fcc83a1b6af298184dc5a7e2c3279941316029->enter($__internal_a8f56cdf33b8d8e91b825f35f7fcc83a1b6af298184dc5a7e2c3279941316029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a8f56cdf33b8d8e91b825f35f7fcc83a1b6af298184dc5a7e2c3279941316029->leave($__internal_a8f56cdf33b8d8e91b825f35f7fcc83a1b6af298184dc5a7e2c3279941316029_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b09d308463e1160be22247ba212f3385ad59afdb5a4f72aa8bcd2a4716924615 = $this->env->getExtension("native_profiler");
        $__internal_b09d308463e1160be22247ba212f3385ad59afdb5a4f72aa8bcd2a4716924615->enter($__internal_b09d308463e1160be22247ba212f3385ad59afdb5a4f72aa8bcd2a4716924615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_b09d308463e1160be22247ba212f3385ad59afdb5a4f72aa8bcd2a4716924615->leave($__internal_b09d308463e1160be22247ba212f3385ad59afdb5a4f72aa8bcd2a4716924615_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
