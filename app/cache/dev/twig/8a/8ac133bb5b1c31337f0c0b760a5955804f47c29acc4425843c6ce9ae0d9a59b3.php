<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_b6cab2a19ec9f477def4a4238caba94a275dd1086293046ac3507f3c7316f8f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_bee936125978c141e8a998b25cca89d6b15dc92f2f828029759b18803a57380a = $this->env->getExtension("native_profiler");
        $__internal_bee936125978c141e8a998b25cca89d6b15dc92f2f828029759b18803a57380a->enter($__internal_bee936125978c141e8a998b25cca89d6b15dc92f2f828029759b18803a57380a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bee936125978c141e8a998b25cca89d6b15dc92f2f828029759b18803a57380a->leave($__internal_bee936125978c141e8a998b25cca89d6b15dc92f2f828029759b18803a57380a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c07dd0acd3966b863f943b96157763b239bdf16a89df012715d99aa9e1ce35b6 = $this->env->getExtension("native_profiler");
        $__internal_c07dd0acd3966b863f943b96157763b239bdf16a89df012715d99aa9e1ce35b6->enter($__internal_c07dd0acd3966b863f943b96157763b239bdf16a89df012715d99aa9e1ce35b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_c07dd0acd3966b863f943b96157763b239bdf16a89df012715d99aa9e1ce35b6->leave($__internal_c07dd0acd3966b863f943b96157763b239bdf16a89df012715d99aa9e1ce35b6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
