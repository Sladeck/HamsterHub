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
        $__internal_e8f559c8d09f6c22bea05110daabc267fdb183d1a2f2d12b692e98280265aff9 = $this->env->getExtension("native_profiler");
        $__internal_e8f559c8d09f6c22bea05110daabc267fdb183d1a2f2d12b692e98280265aff9->enter($__internal_e8f559c8d09f6c22bea05110daabc267fdb183d1a2f2d12b692e98280265aff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f559c8d09f6c22bea05110daabc267fdb183d1a2f2d12b692e98280265aff9->leave($__internal_e8f559c8d09f6c22bea05110daabc267fdb183d1a2f2d12b692e98280265aff9_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_ff88eb53ac2bdc35247f4f87f716a78943b7149c8dfefe89b1003ea47f679172 = $this->env->getExtension("native_profiler");
        $__internal_ff88eb53ac2bdc35247f4f87f716a78943b7149c8dfefe89b1003ea47f679172->enter($__internal_ff88eb53ac2bdc35247f4f87f716a78943b7149c8dfefe89b1003ea47f679172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  Autre chose dedans
";
        
        $__internal_ff88eb53ac2bdc35247f4f87f716a78943b7149c8dfefe89b1003ea47f679172->leave($__internal_ff88eb53ac2bdc35247f4f87f716a78943b7149c8dfefe89b1003ea47f679172_prof);

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
