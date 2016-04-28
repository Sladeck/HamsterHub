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
        $__internal_8e92b69ffac05398f405138d3ea0af8176fa117b35b2800c0083c9d4480e54c8 = $this->env->getExtension("native_profiler");
        $__internal_8e92b69ffac05398f405138d3ea0af8176fa117b35b2800c0083c9d4480e54c8->enter($__internal_8e92b69ffac05398f405138d3ea0af8176fa117b35b2800c0083c9d4480e54c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_8e92b69ffac05398f405138d3ea0af8176fa117b35b2800c0083c9d4480e54c8->leave($__internal_8e92b69ffac05398f405138d3ea0af8176fa117b35b2800c0083c9d4480e54c8_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_f6163c279f211344d97ae138794e038da1057d9de8bf97531790f1f2230e82cb = $this->env->getExtension("native_profiler");
        $__internal_f6163c279f211344d97ae138794e038da1057d9de8bf97531790f1f2230e82cb->enter($__internal_f6163c279f211344d97ae138794e038da1057d9de8bf97531790f1f2230e82cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f6163c279f211344d97ae138794e038da1057d9de8bf97531790f1f2230e82cb->leave($__internal_f6163c279f211344d97ae138794e038da1057d9de8bf97531790f1f2230e82cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fdca7671adb2b4b4721d214cb296aa7b56d462263dc77157786f235d81fbb22 = $this->env->getExtension("native_profiler");
        $__internal_7fdca7671adb2b4b4721d214cb296aa7b56d462263dc77157786f235d81fbb22->enter($__internal_7fdca7671adb2b4b4721d214cb296aa7b56d462263dc77157786f235d81fbb22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_7fdca7671adb2b4b4721d214cb296aa7b56d462263dc77157786f235d81fbb22->leave($__internal_7fdca7671adb2b4b4721d214cb296aa7b56d462263dc77157786f235d81fbb22_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/head.html.twig";
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
