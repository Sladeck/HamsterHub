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
        $__internal_5b659791d6842a8a694623d1627cfb795b8f7d1d31626b7e3c74704a3e24d7d7 = $this->env->getExtension("native_profiler");
        $__internal_5b659791d6842a8a694623d1627cfb795b8f7d1d31626b7e3c74704a3e24d7d7->enter($__internal_5b659791d6842a8a694623d1627cfb795b8f7d1d31626b7e3c74704a3e24d7d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_5b659791d6842a8a694623d1627cfb795b8f7d1d31626b7e3c74704a3e24d7d7->leave($__internal_5b659791d6842a8a694623d1627cfb795b8f7d1d31626b7e3c74704a3e24d7d7_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_9343bcb469df81d3fd09ea94a1c0209a02166497bbaf8ae1532ee8ec76615224 = $this->env->getExtension("native_profiler");
        $__internal_9343bcb469df81d3fd09ea94a1c0209a02166497bbaf8ae1532ee8ec76615224->enter($__internal_9343bcb469df81d3fd09ea94a1c0209a02166497bbaf8ae1532ee8ec76615224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
      <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js\"></script>
      <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/upload.js"), "html", null, true);
        echo "\"></script>
      <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/modales.js"), "html", null, true);
        echo "\"></script>

      </script>
    </head>
";
        
        $__internal_9343bcb469df81d3fd09ea94a1c0209a02166497bbaf8ae1532ee8ec76615224->leave($__internal_9343bcb469df81d3fd09ea94a1c0209a02166497bbaf8ae1532ee8ec76615224_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d4ea0463b05b85c4d98f7c280706db58191f24cb7727dc9ed96a882b438a0243 = $this->env->getExtension("native_profiler");
        $__internal_d4ea0463b05b85c4d98f7c280706db58191f24cb7727dc9ed96a882b438a0243->enter($__internal_d4ea0463b05b85c4d98f7c280706db58191f24cb7727dc9ed96a882b438a0243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_d4ea0463b05b85c4d98f7c280706db58191f24cb7727dc9ed96a882b438a0243->leave($__internal_d4ea0463b05b85c4d98f7c280706db58191f24cb7727dc9ed96a882b438a0243_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  68 => 7,  56 => 11,  52 => 10,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
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
/*       <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>*/
/*       <script src="{{ asset("assets/upload.js") }}"></script>*/
/*       <script src="{{ asset("assets/modales.js") }}"></script>*/
/* */
/*       </script>*/
/*     </head>*/
/* {% endblock %}*/
/* */
