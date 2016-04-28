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
        $__internal_299f79a81eb8affd80c9bf4b58422bd7ba0a60f9e5528b950ee903feaf69c49c = $this->env->getExtension("native_profiler");
        $__internal_299f79a81eb8affd80c9bf4b58422bd7ba0a60f9e5528b950ee903feaf69c49c->enter($__internal_299f79a81eb8affd80c9bf4b58422bd7ba0a60f9e5528b950ee903feaf69c49c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_299f79a81eb8affd80c9bf4b58422bd7ba0a60f9e5528b950ee903feaf69c49c->leave($__internal_299f79a81eb8affd80c9bf4b58422bd7ba0a60f9e5528b950ee903feaf69c49c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd08ac0b65eef924fdcb05a41392ffcbbd03d400d4475f3ecf0fed4012d2e0f3 = $this->env->getExtension("native_profiler");
        $__internal_bd08ac0b65eef924fdcb05a41392ffcbbd03d400d4475f3ecf0fed4012d2e0f3->enter($__internal_bd08ac0b65eef924fdcb05a41392ffcbbd03d400d4475f3ecf0fed4012d2e0f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bd08ac0b65eef924fdcb05a41392ffcbbd03d400d4475f3ecf0fed4012d2e0f3->leave($__internal_bd08ac0b65eef924fdcb05a41392ffcbbd03d400d4475f3ecf0fed4012d2e0f3_prof);

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
