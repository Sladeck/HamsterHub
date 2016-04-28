<?php

/* @HamsterHub/Default/index.html.twig */
class __TwigTemplate_bb2b19b5c8aac8bb32a9ded87b56adb5a537c06ef5c70a9287e0a05c2f80c4bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:index.html.twig", "@HamsterHub/Default/index.html.twig", 1);
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
        $__internal_94b84362fc7a1505ab8f94898c52a71ec62acf9179c9e7633a282632c1f08b83 = $this->env->getExtension("native_profiler");
        $__internal_94b84362fc7a1505ab8f94898c52a71ec62acf9179c9e7633a282632c1f08b83->enter($__internal_94b84362fc7a1505ab8f94898c52a71ec62acf9179c9e7633a282632c1f08b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94b84362fc7a1505ab8f94898c52a71ec62acf9179c9e7633a282632c1f08b83->leave($__internal_94b84362fc7a1505ab8f94898c52a71ec62acf9179c9e7633a282632c1f08b83_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_b8bd2f6ce1a33ff7d2d92ca2b7169fc280bc93896a13ddfc587c2354033f9996 = $this->env->getExtension("native_profiler");
        $__internal_b8bd2f6ce1a33ff7d2d92ca2b7169fc280bc93896a13ddfc587c2354033f9996->enter($__internal_b8bd2f6ce1a33ff7d2d92ca2b7169fc280bc93896a13ddfc587c2354033f9996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  Autre chose dedans
";
        
        $__internal_b8bd2f6ce1a33ff7d2d92ca2b7169fc280bc93896a13ddfc587c2354033f9996->leave($__internal_b8bd2f6ce1a33ff7d2d92ca2b7169fc280bc93896a13ddfc587c2354033f9996_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Default/index.html.twig";
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
