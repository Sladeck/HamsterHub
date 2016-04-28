<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_c86da2c5d84dd9a3f191c6b70f934d2fe0f5b6dc39b026e795208561f5339730 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_64a54a4bffec965f4db003e2c26620d6bcdb72d28bed44d5e1eb7c4b52661972 = $this->env->getExtension("native_profiler");
        $__internal_64a54a4bffec965f4db003e2c26620d6bcdb72d28bed44d5e1eb7c4b52661972->enter($__internal_64a54a4bffec965f4db003e2c26620d6bcdb72d28bed44d5e1eb7c4b52661972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64a54a4bffec965f4db003e2c26620d6bcdb72d28bed44d5e1eb7c4b52661972->leave($__internal_64a54a4bffec965f4db003e2c26620d6bcdb72d28bed44d5e1eb7c4b52661972_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9460d47f481a99e4c53a3042c2276d73f8d97f093ba41e3910bddc5ae73ed46 = $this->env->getExtension("native_profiler");
        $__internal_c9460d47f481a99e4c53a3042c2276d73f8d97f093ba41e3910bddc5ae73ed46->enter($__internal_c9460d47f481a99e4c53a3042c2276d73f8d97f093ba41e3910bddc5ae73ed46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c9460d47f481a99e4c53a3042c2276d73f8d97f093ba41e3910bddc5ae73ed46->leave($__internal_c9460d47f481a99e4c53a3042c2276d73f8d97f093ba41e3910bddc5ae73ed46_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
