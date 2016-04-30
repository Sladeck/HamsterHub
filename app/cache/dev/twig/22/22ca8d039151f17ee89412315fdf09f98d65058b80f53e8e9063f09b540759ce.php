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
        $__internal_0e6cb09476a8bee7059c60dff7402f496416733bc7881186b2d6d148868a822d = $this->env->getExtension("native_profiler");
        $__internal_0e6cb09476a8bee7059c60dff7402f496416733bc7881186b2d6d148868a822d->enter($__internal_0e6cb09476a8bee7059c60dff7402f496416733bc7881186b2d6d148868a822d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0e6cb09476a8bee7059c60dff7402f496416733bc7881186b2d6d148868a822d->leave($__internal_0e6cb09476a8bee7059c60dff7402f496416733bc7881186b2d6d148868a822d_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_b05a0143c27117ce33c4c296442c0c1d8912b33bf84d47a844ff9c4e4c0645d9 = $this->env->getExtension("native_profiler");
        $__internal_b05a0143c27117ce33c4c296442c0c1d8912b33bf84d47a844ff9c4e4c0645d9->enter($__internal_b05a0143c27117ce33c4c296442c0c1d8912b33bf84d47a844ff9c4e4c0645d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")));
        foreach ($context['_seq'] as $context["_key"] => $context["videos"]) {
            // line 5
            echo "  ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "user", array()), "html", null, true);
            echo "<br>
  <iframe width=\"560\" height=\"315\" src=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute($context["videos"], "url", array()), "html", null, true);
            echo "\" frameborder=\"0\" allowfullscreen></iframe><br>

  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['videos'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b05a0143c27117ce33c4c296442c0c1d8912b33bf84d47a844ff9c4e4c0645d9->leave($__internal_b05a0143c27117ce33c4c296442c0c1d8912b33bf84d47a844ff9c4e4c0645d9_prof);

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
        return array (  49 => 6,  44 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'HamsterHubBundle:Base:index.html.twig' %}*/
/* */
/* {% block container %}*/
/* {% for videos in url %}*/
/*   {{ videos.user }}<br>*/
/*   <iframe width="560" height="315" src="{{ videos.url }}" frameborder="0" allowfullscreen></iframe><br>*/
/* */
/*   {% endfor %}*/
/* {% endblock %}*/
/* */
