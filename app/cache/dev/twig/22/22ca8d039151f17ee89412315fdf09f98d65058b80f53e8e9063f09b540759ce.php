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
        $__internal_aeca07d2a4a7964cb88d5421f75b048fe8af414bdd1dbaf5191918b6c42ed53c = $this->env->getExtension("native_profiler");
        $__internal_aeca07d2a4a7964cb88d5421f75b048fe8af414bdd1dbaf5191918b6c42ed53c->enter($__internal_aeca07d2a4a7964cb88d5421f75b048fe8af414bdd1dbaf5191918b6c42ed53c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aeca07d2a4a7964cb88d5421f75b048fe8af414bdd1dbaf5191918b6c42ed53c->leave($__internal_aeca07d2a4a7964cb88d5421f75b048fe8af414bdd1dbaf5191918b6c42ed53c_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_155fc0a2590b682ae7b9323ce2d248d277c54c4272516d59912b42921079c132 = $this->env->getExtension("native_profiler");
        $__internal_155fc0a2590b682ae7b9323ce2d248d277c54c4272516d59912b42921079c132->enter($__internal_155fc0a2590b682ae7b9323ce2d248d277c54c4272516d59912b42921079c132_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        echo "  <iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/MW1eQZ_PEb4\" frameborder=\"0\" allowfullscreen></iframe>
  <!-- ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["videos"]) ? $context["videos"] : $this->getContext($context, "videos")));
        foreach ($context['_seq'] as $context["_key"] => $context["url"]) {
            // line 6
            echo "  ";
            echo twig_escape_filter($this->env, $context["url"], "html", null, true);
            echo "
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['url'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo " -->

  ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
        echo "
";
        
        $__internal_155fc0a2590b682ae7b9323ce2d248d277c54c4272516d59912b42921079c132->leave($__internal_155fc0a2590b682ae7b9323ce2d248d277c54c4272516d59912b42921079c132_prof);

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
        return array (  60 => 9,  56 => 7,  47 => 6,  43 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/*   <iframe width="560" height="315" src="https://www.youtube.com/embed/MW1eQZ_PEb4" frameborder="0" allowfullscreen></iframe>*/
/*   <!-- {% for url in videos %}*/
/*   {{ url }}*/
/*   {% endfor %} -->*/
/* */
/*   {{ url }}*/
/* {% endblock %}*/
/* */
