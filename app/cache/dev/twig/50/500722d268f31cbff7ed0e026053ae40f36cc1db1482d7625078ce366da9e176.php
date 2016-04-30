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
        $__internal_c700f2cce987de933f144f450c48decc3ea2d7b207312370af266363a0ca955c = $this->env->getExtension("native_profiler");
        $__internal_c700f2cce987de933f144f450c48decc3ea2d7b207312370af266363a0ca955c->enter($__internal_c700f2cce987de933f144f450c48decc3ea2d7b207312370af266363a0ca955c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c700f2cce987de933f144f450c48decc3ea2d7b207312370af266363a0ca955c->leave($__internal_c700f2cce987de933f144f450c48decc3ea2d7b207312370af266363a0ca955c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4adfdbe1169d42928174412f4de914ff7519c0fbb62546ba047d6a225bd402c = $this->env->getExtension("native_profiler");
        $__internal_f4adfdbe1169d42928174412f4de914ff7519c0fbb62546ba047d6a225bd402c->enter($__internal_f4adfdbe1169d42928174412f4de914ff7519c0fbb62546ba047d6a225bd402c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_f4adfdbe1169d42928174412f4de914ff7519c0fbb62546ba047d6a225bd402c->leave($__internal_f4adfdbe1169d42928174412f4de914ff7519c0fbb62546ba047d6a225bd402c_prof);

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
