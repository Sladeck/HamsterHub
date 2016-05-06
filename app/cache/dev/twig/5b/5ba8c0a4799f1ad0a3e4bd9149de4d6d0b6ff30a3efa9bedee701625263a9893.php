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
        $__internal_44a8a86c80dd6f24686321cbdfa11378a2fb4a7410df1d8c4016e2f1ee73d5d0 = $this->env->getExtension("native_profiler");
        $__internal_44a8a86c80dd6f24686321cbdfa11378a2fb4a7410df1d8c4016e2f1ee73d5d0->enter($__internal_44a8a86c80dd6f24686321cbdfa11378a2fb4a7410df1d8c4016e2f1ee73d5d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a8a86c80dd6f24686321cbdfa11378a2fb4a7410df1d8c4016e2f1ee73d5d0->leave($__internal_44a8a86c80dd6f24686321cbdfa11378a2fb4a7410df1d8c4016e2f1ee73d5d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_12604bddb6c704d45efd0429a4f84a96f9a773f7795d2483fc725d87b45b69e8 = $this->env->getExtension("native_profiler");
        $__internal_12604bddb6c704d45efd0429a4f84a96f9a773f7795d2483fc725d87b45b69e8->enter($__internal_12604bddb6c704d45efd0429a4f84a96f9a773f7795d2483fc725d87b45b69e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_12604bddb6c704d45efd0429a4f84a96f9a773f7795d2483fc725d87b45b69e8->leave($__internal_12604bddb6c704d45efd0429a4f84a96f9a773f7795d2483fc725d87b45b69e8_prof);

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
