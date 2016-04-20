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
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c066fff87165df6098f4521c020440c71bd5ba807cbf0588ea51b8f553f5b2cb = $this->env->getExtension("native_profiler");
        $__internal_c066fff87165df6098f4521c020440c71bd5ba807cbf0588ea51b8f553f5b2cb->enter($__internal_c066fff87165df6098f4521c020440c71bd5ba807cbf0588ea51b8f553f5b2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c066fff87165df6098f4521c020440c71bd5ba807cbf0588ea51b8f553f5b2cb->leave($__internal_c066fff87165df6098f4521c020440c71bd5ba807cbf0588ea51b8f553f5b2cb_prof);

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
        return array (  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
