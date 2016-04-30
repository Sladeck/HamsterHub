<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_39073a1ddf3c0153af117eea8a3b3c9b761ca5be222c26e2659207a913685e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_ccc5663eaed5bd52c9246728b8b7b91f6093098214fb7627e8668e36a825323c = $this->env->getExtension("native_profiler");
        $__internal_ccc5663eaed5bd52c9246728b8b7b91f6093098214fb7627e8668e36a825323c->enter($__internal_ccc5663eaed5bd52c9246728b8b7b91f6093098214fb7627e8668e36a825323c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccc5663eaed5bd52c9246728b8b7b91f6093098214fb7627e8668e36a825323c->leave($__internal_ccc5663eaed5bd52c9246728b8b7b91f6093098214fb7627e8668e36a825323c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_df4bdf99601f2d085e6202949862f420414a1f4e379c418f8c326a74753d910f = $this->env->getExtension("native_profiler");
        $__internal_df4bdf99601f2d085e6202949862f420414a1f4e379c418f8c326a74753d910f->enter($__internal_df4bdf99601f2d085e6202949862f420414a1f4e379c418f8c326a74753d910f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_df4bdf99601f2d085e6202949862f420414a1f4e379c418f8c326a74753d910f->leave($__internal_df4bdf99601f2d085e6202949862f420414a1f4e379c418f8c326a74753d910f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
