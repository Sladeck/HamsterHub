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
        );
    }

    protected function doGetParent(array $context)
    {
        return "HamsterHubBundle:Base:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8e311d904e1ff672c4312f514f3636458cbbcf72041ac9315b56f1d29e014bd8 = $this->env->getExtension("native_profiler");
        $__internal_8e311d904e1ff672c4312f514f3636458cbbcf72041ac9315b56f1d29e014bd8->enter($__internal_8e311d904e1ff672c4312f514f3636458cbbcf72041ac9315b56f1d29e014bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e311d904e1ff672c4312f514f3636458cbbcf72041ac9315b56f1d29e014bd8->leave($__internal_8e311d904e1ff672c4312f514f3636458cbbcf72041ac9315b56f1d29e014bd8_prof);

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
        return array (  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
