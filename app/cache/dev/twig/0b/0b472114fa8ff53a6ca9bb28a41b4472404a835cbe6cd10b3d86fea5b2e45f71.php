<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_aa1720b836b3b7bc412edd3cba82bff7dfb89dcc9b6cc48e0e41f81a02e12a0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_0fc5d70f8e816de6402ac694c96fd604cddade23f46b3dccd089156fcd9d78a5 = $this->env->getExtension("native_profiler");
        $__internal_0fc5d70f8e816de6402ac694c96fd604cddade23f46b3dccd089156fcd9d78a5->enter($__internal_0fc5d70f8e816de6402ac694c96fd604cddade23f46b3dccd089156fcd9d78a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0fc5d70f8e816de6402ac694c96fd604cddade23f46b3dccd089156fcd9d78a5->leave($__internal_0fc5d70f8e816de6402ac694c96fd604cddade23f46b3dccd089156fcd9d78a5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c884e7468ecf42cef8d1c63fd6bf063ffb65c73fedce2e52d4641ad9fc78d288 = $this->env->getExtension("native_profiler");
        $__internal_c884e7468ecf42cef8d1c63fd6bf063ffb65c73fedce2e52d4641ad9fc78d288->enter($__internal_c884e7468ecf42cef8d1c63fd6bf063ffb65c73fedce2e52d4641ad9fc78d288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c884e7468ecf42cef8d1c63fd6bf063ffb65c73fedce2e52d4641ad9fc78d288->leave($__internal_c884e7468ecf42cef8d1c63fd6bf063ffb65c73fedce2e52d4641ad9fc78d288_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
