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
        $__internal_1deaad3bca0c6128b2cccbae9c9f79316bf41d0a4c152e81e094285fc6c1e57b = $this->env->getExtension("native_profiler");
        $__internal_1deaad3bca0c6128b2cccbae9c9f79316bf41d0a4c152e81e094285fc6c1e57b->enter($__internal_1deaad3bca0c6128b2cccbae9c9f79316bf41d0a4c152e81e094285fc6c1e57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1deaad3bca0c6128b2cccbae9c9f79316bf41d0a4c152e81e094285fc6c1e57b->leave($__internal_1deaad3bca0c6128b2cccbae9c9f79316bf41d0a4c152e81e094285fc6c1e57b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0783aec25729f0d2f582e315f6251932cfa09d0cdd75a0fb24f25278c1b3c011 = $this->env->getExtension("native_profiler");
        $__internal_0783aec25729f0d2f582e315f6251932cfa09d0cdd75a0fb24f25278c1b3c011->enter($__internal_0783aec25729f0d2f582e315f6251932cfa09d0cdd75a0fb24f25278c1b3c011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_0783aec25729f0d2f582e315f6251932cfa09d0cdd75a0fb24f25278c1b3c011->leave($__internal_0783aec25729f0d2f582e315f6251932cfa09d0cdd75a0fb24f25278c1b3c011_prof);

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
