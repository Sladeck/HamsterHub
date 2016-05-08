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
        $__internal_27cf324ca88fb2ae1be4cf410f6b70e4990ad0a8be2686b4a962f1ac8e8f848b = $this->env->getExtension("native_profiler");
        $__internal_27cf324ca88fb2ae1be4cf410f6b70e4990ad0a8be2686b4a962f1ac8e8f848b->enter($__internal_27cf324ca88fb2ae1be4cf410f6b70e4990ad0a8be2686b4a962f1ac8e8f848b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27cf324ca88fb2ae1be4cf410f6b70e4990ad0a8be2686b4a962f1ac8e8f848b->leave($__internal_27cf324ca88fb2ae1be4cf410f6b70e4990ad0a8be2686b4a962f1ac8e8f848b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_181e9c325afd54037f2fa5d0b28115a22acb9d9794defab53a8459c08fa0c616 = $this->env->getExtension("native_profiler");
        $__internal_181e9c325afd54037f2fa5d0b28115a22acb9d9794defab53a8459c08fa0c616->enter($__internal_181e9c325afd54037f2fa5d0b28115a22acb9d9794defab53a8459c08fa0c616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_181e9c325afd54037f2fa5d0b28115a22acb9d9794defab53a8459c08fa0c616->leave($__internal_181e9c325afd54037f2fa5d0b28115a22acb9d9794defab53a8459c08fa0c616_prof);

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
