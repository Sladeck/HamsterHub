<?php

/* HamsterHubBundle:Base:head.html.twig */
class __TwigTemplate_fcd365fc4365eb2133295bcf237821ce11786ed2b303aa64809f33a7ec649d28 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7947ec01d36ad5d7d6f86b9e11bead19e3c1d54515154edec07cdc756c2b374e = $this->env->getExtension("native_profiler");
        $__internal_7947ec01d36ad5d7d6f86b9e11bead19e3c1d54515154edec07cdc756c2b374e->enter($__internal_7947ec01d36ad5d7d6f86b9e11bead19e3c1d54515154edec07cdc756c2b374e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_7947ec01d36ad5d7d6f86b9e11bead19e3c1d54515154edec07cdc756c2b374e->leave($__internal_7947ec01d36ad5d7d6f86b9e11bead19e3c1d54515154edec07cdc756c2b374e_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_b42d497c99e82954f05f7587c090664bace80676c6d7d2da5c127ef5d3baf842 = $this->env->getExtension("native_profiler");
        $__internal_b42d497c99e82954f05f7587c090664bace80676c6d7d2da5c127ef5d3baf842->enter($__internal_b42d497c99e82954f05f7587c090664bace80676c6d7d2da5c127ef5d3baf842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "  <!DOCTYPE html>
  <html>
    <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
      <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
    </head>
";
        
        $__internal_b42d497c99e82954f05f7587c090664bace80676c6d7d2da5c127ef5d3baf842->leave($__internal_b42d497c99e82954f05f7587c090664bace80676c6d7d2da5c127ef5d3baf842_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_fcdd5a9069265d89d6835e7762da5a7f22b018c3d4fd309e09800d3f01a7b9cb = $this->env->getExtension("native_profiler");
        $__internal_fcdd5a9069265d89d6835e7762da5a7f22b018c3d4fd309e09800d3f01a7b9cb->enter($__internal_fcdd5a9069265d89d6835e7762da5a7f22b018c3d4fd309e09800d3f01a7b9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_fcdd5a9069265d89d6835e7762da5a7f22b018c3d4fd309e09800d3f01a7b9cb->leave($__internal_fcdd5a9069265d89d6835e7762da5a7f22b018c3d4fd309e09800d3f01a7b9cb_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
    }
}
/* {% block head %}*/
/*   <!DOCTYPE html>*/
/*   <html>*/
/*     <head>*/
/*       <meta charset="utf-8">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*       <title>{% block title %}{% endblock %}</title>*/
/*       <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     </head>*/
/* {% endblock %}*/
/* */
