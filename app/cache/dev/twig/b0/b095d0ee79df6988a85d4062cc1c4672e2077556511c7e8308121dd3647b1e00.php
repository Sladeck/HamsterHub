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
        $__internal_1f92c25c26fa7dfa8abd15ace8c651faa5d4cf95bb9dfe7a409fa04e3a1d627b = $this->env->getExtension("native_profiler");
        $__internal_1f92c25c26fa7dfa8abd15ace8c651faa5d4cf95bb9dfe7a409fa04e3a1d627b->enter($__internal_1f92c25c26fa7dfa8abd15ace8c651faa5d4cf95bb9dfe7a409fa04e3a1d627b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f92c25c26fa7dfa8abd15ace8c651faa5d4cf95bb9dfe7a409fa04e3a1d627b->leave($__internal_1f92c25c26fa7dfa8abd15ace8c651faa5d4cf95bb9dfe7a409fa04e3a1d627b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_55fb865fac5b549d607ee673a0a19ff05a8b40f5a67635ae89a131eefcb87dc4 = $this->env->getExtension("native_profiler");
        $__internal_55fb865fac5b549d607ee673a0a19ff05a8b40f5a67635ae89a131eefcb87dc4->enter($__internal_55fb865fac5b549d607ee673a0a19ff05a8b40f5a67635ae89a131eefcb87dc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_55fb865fac5b549d607ee673a0a19ff05a8b40f5a67635ae89a131eefcb87dc4->leave($__internal_55fb865fac5b549d607ee673a0a19ff05a8b40f5a67635ae89a131eefcb87dc4_prof);

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
