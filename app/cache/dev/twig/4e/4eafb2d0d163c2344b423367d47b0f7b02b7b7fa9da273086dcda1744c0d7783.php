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
        $__internal_995096ce84f7e877ccc3fc3989d7655bae00716fd6f2b5cebc5e94d0b9062f2e = $this->env->getExtension("native_profiler");
        $__internal_995096ce84f7e877ccc3fc3989d7655bae00716fd6f2b5cebc5e94d0b9062f2e->enter($__internal_995096ce84f7e877ccc3fc3989d7655bae00716fd6f2b5cebc5e94d0b9062f2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_995096ce84f7e877ccc3fc3989d7655bae00716fd6f2b5cebc5e94d0b9062f2e->leave($__internal_995096ce84f7e877ccc3fc3989d7655bae00716fd6f2b5cebc5e94d0b9062f2e_prof);

    }

    // line 3
    public function block_container($context, array $blocks = array())
    {
        $__internal_df7f9b8021ce03a00522e706ad5207614505e981fec593389da3d5192de7f12a = $this->env->getExtension("native_profiler");
        $__internal_df7f9b8021ce03a00522e706ad5207614505e981fec593389da3d5192de7f12a->enter($__internal_df7f9b8021ce03a00522e706ad5207614505e981fec593389da3d5192de7f12a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

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
        
        $__internal_df7f9b8021ce03a00522e706ad5207614505e981fec593389da3d5192de7f12a->leave($__internal_df7f9b8021ce03a00522e706ad5207614505e981fec593389da3d5192de7f12a_prof);

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
