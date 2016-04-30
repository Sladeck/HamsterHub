<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_2a08afdf2ccf9b76f7b849b4a2606cf0f33a6c35eabcfcfd2925c82fb351be11 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_45eb592d7b17c7e14b03dae468ce7a0370bfdc5f669a48d77db2c5a24f270f2c = $this->env->getExtension("native_profiler");
        $__internal_45eb592d7b17c7e14b03dae468ce7a0370bfdc5f669a48d77db2c5a24f270f2c->enter($__internal_45eb592d7b17c7e14b03dae468ce7a0370bfdc5f669a48d77db2c5a24f270f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45eb592d7b17c7e14b03dae468ce7a0370bfdc5f669a48d77db2c5a24f270f2c->leave($__internal_45eb592d7b17c7e14b03dae468ce7a0370bfdc5f669a48d77db2c5a24f270f2c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ded67f19da924bfdec12fd9ec88fdeb04e8a10d218767c99b7d764d803f322b5 = $this->env->getExtension("native_profiler");
        $__internal_ded67f19da924bfdec12fd9ec88fdeb04e8a10d218767c99b7d764d803f322b5->enter($__internal_ded67f19da924bfdec12fd9ec88fdeb04e8a10d218767c99b7d764d803f322b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ded67f19da924bfdec12fd9ec88fdeb04e8a10d218767c99b7d764d803f322b5->leave($__internal_ded67f19da924bfdec12fd9ec88fdeb04e8a10d218767c99b7d764d803f322b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
