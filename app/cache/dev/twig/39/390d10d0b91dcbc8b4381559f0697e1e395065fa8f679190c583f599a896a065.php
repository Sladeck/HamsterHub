<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_97199d6a564c012918c3636ed7ab34633c3db2f70602df683e61b6edb236edc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_8f5b75e0edbe1607014cc025d8f6887275ef58cf523908f50593058f8e853194 = $this->env->getExtension("native_profiler");
        $__internal_8f5b75e0edbe1607014cc025d8f6887275ef58cf523908f50593058f8e853194->enter($__internal_8f5b75e0edbe1607014cc025d8f6887275ef58cf523908f50593058f8e853194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f5b75e0edbe1607014cc025d8f6887275ef58cf523908f50593058f8e853194->leave($__internal_8f5b75e0edbe1607014cc025d8f6887275ef58cf523908f50593058f8e853194_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5a7e4b56de3c1ff5b17cffbf3cf69ab65177dabd336c5b0f7dca023db3d5b0f5 = $this->env->getExtension("native_profiler");
        $__internal_5a7e4b56de3c1ff5b17cffbf3cf69ab65177dabd336c5b0f7dca023db3d5b0f5->enter($__internal_5a7e4b56de3c1ff5b17cffbf3cf69ab65177dabd336c5b0f7dca023db3d5b0f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_5a7e4b56de3c1ff5b17cffbf3cf69ab65177dabd336c5b0f7dca023db3d5b0f5->leave($__internal_5a7e4b56de3c1ff5b17cffbf3cf69ab65177dabd336c5b0f7dca023db3d5b0f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
