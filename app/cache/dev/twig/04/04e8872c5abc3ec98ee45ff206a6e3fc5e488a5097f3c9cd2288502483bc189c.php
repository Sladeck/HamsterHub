<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_01b3364a3dc8f027a1200ad366c3216be4361a7a8d83f60fa3da503e20d59c88 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_f3ab90a7a01e6753acb201649ee78b8747708f6b52edfd44690c6cf97d13c39c = $this->env->getExtension("native_profiler");
        $__internal_f3ab90a7a01e6753acb201649ee78b8747708f6b52edfd44690c6cf97d13c39c->enter($__internal_f3ab90a7a01e6753acb201649ee78b8747708f6b52edfd44690c6cf97d13c39c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ab90a7a01e6753acb201649ee78b8747708f6b52edfd44690c6cf97d13c39c->leave($__internal_f3ab90a7a01e6753acb201649ee78b8747708f6b52edfd44690c6cf97d13c39c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5088ecb5337fa233300b62ac8068058a51c67f56e740391877c350edf477170c = $this->env->getExtension("native_profiler");
        $__internal_5088ecb5337fa233300b62ac8068058a51c67f56e740391877c350edf477170c->enter($__internal_5088ecb5337fa233300b62ac8068058a51c67f56e740391877c350edf477170c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_5088ecb5337fa233300b62ac8068058a51c67f56e740391877c350edf477170c->leave($__internal_5088ecb5337fa233300b62ac8068058a51c67f56e740391877c350edf477170c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
