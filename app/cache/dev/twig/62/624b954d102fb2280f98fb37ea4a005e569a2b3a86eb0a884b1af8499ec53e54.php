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
        $__internal_f4d64684c44e7f504e24de279ba642e85683b25eea2ab39b5b7b300ebebbaaea = $this->env->getExtension("native_profiler");
        $__internal_f4d64684c44e7f504e24de279ba642e85683b25eea2ab39b5b7b300ebebbaaea->enter($__internal_f4d64684c44e7f504e24de279ba642e85683b25eea2ab39b5b7b300ebebbaaea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4d64684c44e7f504e24de279ba642e85683b25eea2ab39b5b7b300ebebbaaea->leave($__internal_f4d64684c44e7f504e24de279ba642e85683b25eea2ab39b5b7b300ebebbaaea_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7201cc4322b1817b75e5bfa7511b024ca915092dd463354a889c0f82b2c2a1f1 = $this->env->getExtension("native_profiler");
        $__internal_7201cc4322b1817b75e5bfa7511b024ca915092dd463354a889c0f82b2c2a1f1->enter($__internal_7201cc4322b1817b75e5bfa7511b024ca915092dd463354a889c0f82b2c2a1f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_7201cc4322b1817b75e5bfa7511b024ca915092dd463354a889c0f82b2c2a1f1->leave($__internal_7201cc4322b1817b75e5bfa7511b024ca915092dd463354a889c0f82b2c2a1f1_prof);

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
