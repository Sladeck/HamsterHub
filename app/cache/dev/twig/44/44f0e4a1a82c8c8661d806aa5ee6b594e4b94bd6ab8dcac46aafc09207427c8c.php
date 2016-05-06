<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_50e602516469f14c01291bc39bc961e8a79a23380a780a143fa9bd76d1917203 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_ebd10b1b4edb087b0fa18d58b14043457b8d88e73049e423061f82e9490a9fac = $this->env->getExtension("native_profiler");
        $__internal_ebd10b1b4edb087b0fa18d58b14043457b8d88e73049e423061f82e9490a9fac->enter($__internal_ebd10b1b4edb087b0fa18d58b14043457b8d88e73049e423061f82e9490a9fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebd10b1b4edb087b0fa18d58b14043457b8d88e73049e423061f82e9490a9fac->leave($__internal_ebd10b1b4edb087b0fa18d58b14043457b8d88e73049e423061f82e9490a9fac_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e8c5316b82a857125b42c125eac5a7b7474d09760e2b2b0a6d279a5780286f1c = $this->env->getExtension("native_profiler");
        $__internal_e8c5316b82a857125b42c125eac5a7b7474d09760e2b2b0a6d279a5780286f1c->enter($__internal_e8c5316b82a857125b42c125eac5a7b7474d09760e2b2b0a6d279a5780286f1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_e8c5316b82a857125b42c125eac5a7b7474d09760e2b2b0a6d279a5780286f1c->leave($__internal_e8c5316b82a857125b42c125eac5a7b7474d09760e2b2b0a6d279a5780286f1c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
