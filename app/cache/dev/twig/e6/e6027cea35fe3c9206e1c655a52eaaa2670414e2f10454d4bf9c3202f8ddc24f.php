<?php

/* HamsterHubBundle:Base:index.html.twig */
class __TwigTemplate_586452ee41da97cd68212edb92aab537a0127a96255fd825650d29cafee935b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("HamsterHubBundle:Base:head.html.twig", "HamsterHubBundle:Base:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:head.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52ec09d4dc9ca78987602f26d6f6063a006cbe756ca90e477b7c6b5a328d181a = $this->env->getExtension("native_profiler");
        $__internal_52ec09d4dc9ca78987602f26d6f6063a006cbe756ca90e477b7c6b5a328d181a->enter($__internal_52ec09d4dc9ca78987602f26d6f6063a006cbe756ca90e477b7c6b5a328d181a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_52ec09d4dc9ca78987602f26d6f6063a006cbe756ca90e477b7c6b5a328d181a->leave($__internal_52ec09d4dc9ca78987602f26d6f6063a006cbe756ca90e477b7c6b5a328d181a_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:index.html.twig";
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
/* {% extends 'HamsterHubBundle:Base:head.html.twig' %}*/
/* */
