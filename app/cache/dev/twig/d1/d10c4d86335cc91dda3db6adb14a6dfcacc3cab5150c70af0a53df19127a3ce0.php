<?php

/* @HamsterHub/Base/head.html.twig */
class __TwigTemplate_1e9c255dc8ece2f64f2fd851184b01fa5efaee605d6e346fcc4bde88e469daaf extends Twig_Template
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
        $__internal_2fba70427633b31e061a1328c4764207d25dd9523a67b07f100de77357df74f0 = $this->env->getExtension("native_profiler");
        $__internal_2fba70427633b31e061a1328c4764207d25dd9523a67b07f100de77357df74f0->enter($__internal_2fba70427633b31e061a1328c4764207d25dd9523a67b07f100de77357df74f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_2fba70427633b31e061a1328c4764207d25dd9523a67b07f100de77357df74f0->leave($__internal_2fba70427633b31e061a1328c4764207d25dd9523a67b07f100de77357df74f0_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_5da63f5e7b313cf94ec12285dc74f3011187cf6cd4e322f410fc202eabef490d = $this->env->getExtension("native_profiler");
        $__internal_5da63f5e7b313cf94ec12285dc74f3011187cf6cd4e322f410fc202eabef490d->enter($__internal_5da63f5e7b313cf94ec12285dc74f3011187cf6cd4e322f410fc202eabef490d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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

      </script>
    </head>
";
        
        $__internal_5da63f5e7b313cf94ec12285dc74f3011187cf6cd4e322f410fc202eabef490d->leave($__internal_5da63f5e7b313cf94ec12285dc74f3011187cf6cd4e322f410fc202eabef490d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c87fd848ce65ba6849db4789e0c3740e8d35ef27430eb5c64eddb9e24180a232 = $this->env->getExtension("native_profiler");
        $__internal_c87fd848ce65ba6849db4789e0c3740e8d35ef27430eb5c64eddb9e24180a232->enter($__internal_c87fd848ce65ba6849db4789e0c3740e8d35ef27430eb5c64eddb9e24180a232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_c87fd848ce65ba6849db4789e0c3740e8d35ef27430eb5c64eddb9e24180a232->leave($__internal_c87fd848ce65ba6849db4789e0c3740e8d35ef27430eb5c64eddb9e24180a232_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  59 => 7,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
    }
}
/* {% block head %}*/
/*   <!DOCTYPE html>*/
/*   <html>*/
/*     <head>*/
/*       <meta charset="utf-8">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*       <title>{% block title %}Accueil{% endblock %}</title>*/
/*       <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/* */
/*       </script>*/
/*     </head>*/
/* {% endblock %}*/
/* */
