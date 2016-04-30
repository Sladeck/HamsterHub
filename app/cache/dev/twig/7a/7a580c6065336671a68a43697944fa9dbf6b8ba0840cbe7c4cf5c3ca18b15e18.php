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
        $__internal_01cc9259d51ffdb539cb018e79de77f336710b2d06355dac564836d0d2b98841 = $this->env->getExtension("native_profiler");
        $__internal_01cc9259d51ffdb539cb018e79de77f336710b2d06355dac564836d0d2b98841->enter($__internal_01cc9259d51ffdb539cb018e79de77f336710b2d06355dac564836d0d2b98841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_01cc9259d51ffdb539cb018e79de77f336710b2d06355dac564836d0d2b98841->leave($__internal_01cc9259d51ffdb539cb018e79de77f336710b2d06355dac564836d0d2b98841_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_97630d70b15daac6bb319fcad9d502f417dba4605f1745832bc859e9de772c61 = $this->env->getExtension("native_profiler");
        $__internal_97630d70b15daac6bb319fcad9d502f417dba4605f1745832bc859e9de772c61->enter($__internal_97630d70b15daac6bb319fcad9d502f417dba4605f1745832bc859e9de772c61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_97630d70b15daac6bb319fcad9d502f417dba4605f1745832bc859e9de772c61->leave($__internal_97630d70b15daac6bb319fcad9d502f417dba4605f1745832bc859e9de772c61_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9442c04c923afea63c122e331acdc091e6452a774737b9f8cb213d1ffb09e577 = $this->env->getExtension("native_profiler");
        $__internal_9442c04c923afea63c122e331acdc091e6452a774737b9f8cb213d1ffb09e577->enter($__internal_9442c04c923afea63c122e331acdc091e6452a774737b9f8cb213d1ffb09e577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_9442c04c923afea63c122e331acdc091e6452a774737b9f8cb213d1ffb09e577->leave($__internal_9442c04c923afea63c122e331acdc091e6452a774737b9f8cb213d1ffb09e577_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:head.html.twig";
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
