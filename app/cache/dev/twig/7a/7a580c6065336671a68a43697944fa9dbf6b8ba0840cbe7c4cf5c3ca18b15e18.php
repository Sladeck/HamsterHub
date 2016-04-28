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
        $__internal_c093a9af66756828c911ada69b4960b23de0fad41a5e90e57e461f21f7249786 = $this->env->getExtension("native_profiler");
        $__internal_c093a9af66756828c911ada69b4960b23de0fad41a5e90e57e461f21f7249786->enter($__internal_c093a9af66756828c911ada69b4960b23de0fad41a5e90e57e461f21f7249786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_c093a9af66756828c911ada69b4960b23de0fad41a5e90e57e461f21f7249786->leave($__internal_c093a9af66756828c911ada69b4960b23de0fad41a5e90e57e461f21f7249786_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_d22906c07fbb3afbedfa5276e9aa821ea42c20f507d01ad496804e332b2a48e0 = $this->env->getExtension("native_profiler");
        $__internal_d22906c07fbb3afbedfa5276e9aa821ea42c20f507d01ad496804e332b2a48e0->enter($__internal_d22906c07fbb3afbedfa5276e9aa821ea42c20f507d01ad496804e332b2a48e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_d22906c07fbb3afbedfa5276e9aa821ea42c20f507d01ad496804e332b2a48e0->leave($__internal_d22906c07fbb3afbedfa5276e9aa821ea42c20f507d01ad496804e332b2a48e0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_619505f3bfbdae5f9fbd28de556e1b320646a6c6999b5169bc09967a2bed4669 = $this->env->getExtension("native_profiler");
        $__internal_619505f3bfbdae5f9fbd28de556e1b320646a6c6999b5169bc09967a2bed4669->enter($__internal_619505f3bfbdae5f9fbd28de556e1b320646a6c6999b5169bc09967a2bed4669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_619505f3bfbdae5f9fbd28de556e1b320646a6c6999b5169bc09967a2bed4669->leave($__internal_619505f3bfbdae5f9fbd28de556e1b320646a6c6999b5169bc09967a2bed4669_prof);

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
