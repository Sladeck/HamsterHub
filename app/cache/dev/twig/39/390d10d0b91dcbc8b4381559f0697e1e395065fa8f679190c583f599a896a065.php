<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_97199d6a564c012918c3636ed7ab34633c3db2f70602df683e61b6edb236edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_60631a78fa0423d7c62e20787ff32d7df24c8269cd10d7a8fd9d2086149c7591 = $this->env->getExtension("native_profiler");
        $__internal_60631a78fa0423d7c62e20787ff32d7df24c8269cd10d7a8fd9d2086149c7591->enter($__internal_60631a78fa0423d7c62e20787ff32d7df24c8269cd10d7a8fd9d2086149c7591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60631a78fa0423d7c62e20787ff32d7df24c8269cd10d7a8fd9d2086149c7591->leave($__internal_60631a78fa0423d7c62e20787ff32d7df24c8269cd10d7a8fd9d2086149c7591_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_723757b7f08293eea6e08f3d37f7fc31c8b74054596f2165df8f887f999a723d = $this->env->getExtension("native_profiler");
        $__internal_723757b7f08293eea6e08f3d37f7fc31c8b74054596f2165df8f887f999a723d->enter($__internal_723757b7f08293eea6e08f3d37f7fc31c8b74054596f2165df8f887f999a723d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_723757b7f08293eea6e08f3d37f7fc31c8b74054596f2165df8f887f999a723d->leave($__internal_723757b7f08293eea6e08f3d37f7fc31c8b74054596f2165df8f887f999a723d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
