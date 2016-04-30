<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_39073a1ddf3c0153af117eea8a3b3c9b761ca5be222c26e2659207a913685e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_28636ef35010949e712c0da652c111fef8a8521e13553e1fecb482e5fbf7d84a = $this->env->getExtension("native_profiler");
        $__internal_28636ef35010949e712c0da652c111fef8a8521e13553e1fecb482e5fbf7d84a->enter($__internal_28636ef35010949e712c0da652c111fef8a8521e13553e1fecb482e5fbf7d84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28636ef35010949e712c0da652c111fef8a8521e13553e1fecb482e5fbf7d84a->leave($__internal_28636ef35010949e712c0da652c111fef8a8521e13553e1fecb482e5fbf7d84a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1975b85a05254f016eeef887414ec87977242c284e5b91b09f7fab417528831 = $this->env->getExtension("native_profiler");
        $__internal_f1975b85a05254f016eeef887414ec87977242c284e5b91b09f7fab417528831->enter($__internal_f1975b85a05254f016eeef887414ec87977242c284e5b91b09f7fab417528831_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_f1975b85a05254f016eeef887414ec87977242c284e5b91b09f7fab417528831->leave($__internal_f1975b85a05254f016eeef887414ec87977242c284e5b91b09f7fab417528831_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
