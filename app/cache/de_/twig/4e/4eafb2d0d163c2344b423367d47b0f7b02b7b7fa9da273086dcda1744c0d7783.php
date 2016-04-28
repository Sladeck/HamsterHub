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
        $__internal_93a621d03a9a4f6144aef0c155a14fb7e2c67d82f0998ac6778f421e3e399f57 = $this->env->getExtension("native_profiler");
        $__internal_93a621d03a9a4f6144aef0c155a14fb7e2c67d82f0998ac6778f421e3e399f57->enter($__internal_93a621d03a9a4f6144aef0c155a14fb7e2c67d82f0998ac6778f421e3e399f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93a621d03a9a4f6144aef0c155a14fb7e2c67d82f0998ac6778f421e3e399f57->leave($__internal_93a621d03a9a4f6144aef0c155a14fb7e2c67d82f0998ac6778f421e3e399f57_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_cf2c42de491f8371839071fe41b52fabf088b52faf7e9cd174f72609e057beaa = $this->env->getExtension("native_profiler");
        $__internal_cf2c42de491f8371839071fe41b52fabf088b52faf7e9cd174f72609e057beaa->enter($__internal_cf2c42de491f8371839071fe41b52fabf088b52faf7e9cd174f72609e057beaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  Autre chose dedans
";
        
        $__internal_cf2c42de491f8371839071fe41b52fabf088b52faf7e9cd174f72609e057beaa->leave($__internal_cf2c42de491f8371839071fe41b52fabf088b52faf7e9cd174f72609e057beaa_prof);

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
