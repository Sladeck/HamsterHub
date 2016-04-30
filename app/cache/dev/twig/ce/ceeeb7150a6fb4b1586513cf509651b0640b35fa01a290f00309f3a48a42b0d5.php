<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_c5998c93a42f808df76cf9f5bee21f33e74206810ab73a6246ed24ac2f55f1d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_060979f40ffd94dd717b3eb5c5ac1ba6a3d883e88496b442d9ee16e2124f5732 = $this->env->getExtension("native_profiler");
        $__internal_060979f40ffd94dd717b3eb5c5ac1ba6a3d883e88496b442d9ee16e2124f5732->enter($__internal_060979f40ffd94dd717b3eb5c5ac1ba6a3d883e88496b442d9ee16e2124f5732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_060979f40ffd94dd717b3eb5c5ac1ba6a3d883e88496b442d9ee16e2124f5732->leave($__internal_060979f40ffd94dd717b3eb5c5ac1ba6a3d883e88496b442d9ee16e2124f5732_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d573e2311315a3a2f7a4a5ead378a9b35d1f5f2b07072907e862f62c02f019f2 = $this->env->getExtension("native_profiler");
        $__internal_d573e2311315a3a2f7a4a5ead378a9b35d1f5f2b07072907e862f62c02f019f2->enter($__internal_d573e2311315a3a2f7a4a5ead378a9b35d1f5f2b07072907e862f62c02f019f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_d573e2311315a3a2f7a4a5ead378a9b35d1f5f2b07072907e862f62c02f019f2->leave($__internal_d573e2311315a3a2f7a4a5ead378a9b35d1f5f2b07072907e862f62c02f019f2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
