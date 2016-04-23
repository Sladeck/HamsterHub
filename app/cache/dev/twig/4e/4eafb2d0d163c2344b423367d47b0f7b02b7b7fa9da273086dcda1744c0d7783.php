<?php

/* HamsterHubBundle:Default:index.html.twig */
class __TwigTemplate_aa6ae2f5e3bafa5f21d494c29bf14d68a7207c61080e74452df95dc2b8f3f172 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:index.html.twig", "HamsterHubBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_29f19bd5a564957995378b8f13cd8a68ac3ba18c4cefabe4d757a8a8bf55f09a = $this->env->getExtension("native_profiler");
        $__internal_29f19bd5a564957995378b8f13cd8a68ac3ba18c4cefabe4d757a8a8bf55f09a->enter($__internal_29f19bd5a564957995378b8f13cd8a68ac3ba18c4cefabe4d757a8a8bf55f09a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29f19bd5a564957995378b8f13cd8a68ac3ba18c4cefabe4d757a8a8bf55f09a->leave($__internal_29f19bd5a564957995378b8f13cd8a68ac3ba18c4cefabe4d757a8a8bf55f09a_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_b6dc9d626adba481cc1f413d968c7652b117ca04eed9ab451cc532c178d61660 = $this->env->getExtension("native_profiler");
        $__internal_b6dc9d626adba481cc1f413d968c7652b117ca04eed9ab451cc532c178d61660->enter($__internal_b6dc9d626adba481cc1f413d968c7652b117ca04eed9ab451cc532c178d61660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  Autre chose dedans
";
        
        $__internal_b6dc9d626adba481cc1f413d968c7652b117ca04eed9ab451cc532c178d61660->leave($__internal_b6dc9d626adba481cc1f413d968c7652b117ca04eed9ab451cc532c178d61660_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Default:index.html.twig";
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
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/*   Autre chose dedans*/
/* {% endblock %}*/
/* */
