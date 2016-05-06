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
        $__internal_ca44c6e4e7a35044da161d43c827578d1e21b6aea602b48cf586430d0a3c23ad = $this->env->getExtension("native_profiler");
        $__internal_ca44c6e4e7a35044da161d43c827578d1e21b6aea602b48cf586430d0a3c23ad->enter($__internal_ca44c6e4e7a35044da161d43c827578d1e21b6aea602b48cf586430d0a3c23ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca44c6e4e7a35044da161d43c827578d1e21b6aea602b48cf586430d0a3c23ad->leave($__internal_ca44c6e4e7a35044da161d43c827578d1e21b6aea602b48cf586430d0a3c23ad_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7baa7e2ce8cf601dabe05384cb1ff8c7fa6552df6a10dcd11964422006c6c628 = $this->env->getExtension("native_profiler");
        $__internal_7baa7e2ce8cf601dabe05384cb1ff8c7fa6552df6a10dcd11964422006c6c628->enter($__internal_7baa7e2ce8cf601dabe05384cb1ff8c7fa6552df6a10dcd11964422006c6c628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7baa7e2ce8cf601dabe05384cb1ff8c7fa6552df6a10dcd11964422006c6c628->leave($__internal_7baa7e2ce8cf601dabe05384cb1ff8c7fa6552df6a10dcd11964422006c6c628_prof);

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
