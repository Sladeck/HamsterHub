<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e6070da14b9595892785cf98184e4b7c18c4e4f9cac84b3ccfcbc5be29967448 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_948cd6dc2c288311461422a99630847ddd7c8418e6ce701e5a8e506f95b07956 = $this->env->getExtension("native_profiler");
        $__internal_948cd6dc2c288311461422a99630847ddd7c8418e6ce701e5a8e506f95b07956->enter($__internal_948cd6dc2c288311461422a99630847ddd7c8418e6ce701e5a8e506f95b07956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_948cd6dc2c288311461422a99630847ddd7c8418e6ce701e5a8e506f95b07956->leave($__internal_948cd6dc2c288311461422a99630847ddd7c8418e6ce701e5a8e506f95b07956_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_024b7129c43371bd8d4edca0a62f68228f8316a9eae1cc4a2fc9b908ef956e6f = $this->env->getExtension("native_profiler");
        $__internal_024b7129c43371bd8d4edca0a62f68228f8316a9eae1cc4a2fc9b908ef956e6f->enter($__internal_024b7129c43371bd8d4edca0a62f68228f8316a9eae1cc4a2fc9b908ef956e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_024b7129c43371bd8d4edca0a62f68228f8316a9eae1cc4a2fc9b908ef956e6f->leave($__internal_024b7129c43371bd8d4edca0a62f68228f8316a9eae1cc4a2fc9b908ef956e6f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
