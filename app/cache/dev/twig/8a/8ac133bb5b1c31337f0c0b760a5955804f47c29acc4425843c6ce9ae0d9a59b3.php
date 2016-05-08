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
        $__internal_1a2fb29be13de8aed46e1a6e3510de741f064502d97eeb8bed0b91cd7818e53e = $this->env->getExtension("native_profiler");
        $__internal_1a2fb29be13de8aed46e1a6e3510de741f064502d97eeb8bed0b91cd7818e53e->enter($__internal_1a2fb29be13de8aed46e1a6e3510de741f064502d97eeb8bed0b91cd7818e53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a2fb29be13de8aed46e1a6e3510de741f064502d97eeb8bed0b91cd7818e53e->leave($__internal_1a2fb29be13de8aed46e1a6e3510de741f064502d97eeb8bed0b91cd7818e53e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b409a7d9f28f7851b393ca88d148b5b886a62a97e1840bd48b42a67ac548801f = $this->env->getExtension("native_profiler");
        $__internal_b409a7d9f28f7851b393ca88d148b5b886a62a97e1840bd48b42a67ac548801f->enter($__internal_b409a7d9f28f7851b393ca88d148b5b886a62a97e1840bd48b42a67ac548801f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b409a7d9f28f7851b393ca88d148b5b886a62a97e1840bd48b42a67ac548801f->leave($__internal_b409a7d9f28f7851b393ca88d148b5b886a62a97e1840bd48b42a67ac548801f_prof);

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
