<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_733d4d923f95e1fb956edae21c887333c8340a3a0e599509f33e4b30a7b068c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_3c90946e14d8db6226a9d8b1ceb5846388b83c8099c746b7d568185545d05ef1 = $this->env->getExtension("native_profiler");
        $__internal_3c90946e14d8db6226a9d8b1ceb5846388b83c8099c746b7d568185545d05ef1->enter($__internal_3c90946e14d8db6226a9d8b1ceb5846388b83c8099c746b7d568185545d05ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c90946e14d8db6226a9d8b1ceb5846388b83c8099c746b7d568185545d05ef1->leave($__internal_3c90946e14d8db6226a9d8b1ceb5846388b83c8099c746b7d568185545d05ef1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_806f030e412b9934d0a48bd8cf4532e29a3896b5ad79b5fe636ece3471a8f41c = $this->env->getExtension("native_profiler");
        $__internal_806f030e412b9934d0a48bd8cf4532e29a3896b5ad79b5fe636ece3471a8f41c->enter($__internal_806f030e412b9934d0a48bd8cf4532e29a3896b5ad79b5fe636ece3471a8f41c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_806f030e412b9934d0a48bd8cf4532e29a3896b5ad79b5fe636ece3471a8f41c->leave($__internal_806f030e412b9934d0a48bd8cf4532e29a3896b5ad79b5fe636ece3471a8f41c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
