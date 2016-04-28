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
        $__internal_98e615da5b8a1e5140608066134507e00719be600ecad9020931f0aa284c4530 = $this->env->getExtension("native_profiler");
        $__internal_98e615da5b8a1e5140608066134507e00719be600ecad9020931f0aa284c4530->enter($__internal_98e615da5b8a1e5140608066134507e00719be600ecad9020931f0aa284c4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_98e615da5b8a1e5140608066134507e00719be600ecad9020931f0aa284c4530->leave($__internal_98e615da5b8a1e5140608066134507e00719be600ecad9020931f0aa284c4530_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_36983ce8f5d3d1b56e41c9b4ed57944f39852d29214b9d9a276c389244561d4b = $this->env->getExtension("native_profiler");
        $__internal_36983ce8f5d3d1b56e41c9b4ed57944f39852d29214b9d9a276c389244561d4b->enter($__internal_36983ce8f5d3d1b56e41c9b4ed57944f39852d29214b9d9a276c389244561d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
      <script type=\"text/javascript\" src=\"js/modernizr.custom.js\">

      </script>
    </head>
";
        
        $__internal_36983ce8f5d3d1b56e41c9b4ed57944f39852d29214b9d9a276c389244561d4b->leave($__internal_36983ce8f5d3d1b56e41c9b4ed57944f39852d29214b9d9a276c389244561d4b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4ce6517a264bbe9f801442e9c83f74e80b55165dafa951322f0da75fe995a51 = $this->env->getExtension("native_profiler");
        $__internal_b4ce6517a264bbe9f801442e9c83f74e80b55165dafa951322f0da75fe995a51->enter($__internal_b4ce6517a264bbe9f801442e9c83f74e80b55165dafa951322f0da75fe995a51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_b4ce6517a264bbe9f801442e9c83f74e80b55165dafa951322f0da75fe995a51->leave($__internal_b4ce6517a264bbe9f801442e9c83f74e80b55165dafa951322f0da75fe995a51_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  60 => 7,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
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
/*       <script type="text/javascript" src="js/modernizr.custom.js">*/
/* */
/*       </script>*/
/*     </head>*/
/* {% endblock %}*/
/* */
