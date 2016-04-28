<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_01fe45e0daf3fa9e8e730fb29f5ad2b0307574d7837ddd0d19caa18338ca5b49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_742f9a4ca556b403b8b346a49ac58a14150856748c6668eecc09861e7766f271 = $this->env->getExtension("native_profiler");
        $__internal_742f9a4ca556b403b8b346a49ac58a14150856748c6668eecc09861e7766f271->enter($__internal_742f9a4ca556b403b8b346a49ac58a14150856748c6668eecc09861e7766f271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_742f9a4ca556b403b8b346a49ac58a14150856748c6668eecc09861e7766f271->leave($__internal_742f9a4ca556b403b8b346a49ac58a14150856748c6668eecc09861e7766f271_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_571e185106baf68f875e4cffbc37ed3dddc0777909d7f1252efe10b172a24c76 = $this->env->getExtension("native_profiler");
        $__internal_571e185106baf68f875e4cffbc37ed3dddc0777909d7f1252efe10b172a24c76->enter($__internal_571e185106baf68f875e4cffbc37ed3dddc0777909d7f1252efe10b172a24c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_571e185106baf68f875e4cffbc37ed3dddc0777909d7f1252efe10b172a24c76->leave($__internal_571e185106baf68f875e4cffbc37ed3dddc0777909d7f1252efe10b172a24c76_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
