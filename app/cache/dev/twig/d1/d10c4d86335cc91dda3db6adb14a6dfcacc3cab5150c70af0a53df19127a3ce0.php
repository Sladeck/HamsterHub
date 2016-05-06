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
        $__internal_48bfb9020a2e8f9907ab4108b6b8ecc56ab62cf24d5c07cc79780413ec29ae03 = $this->env->getExtension("native_profiler");
        $__internal_48bfb9020a2e8f9907ab4108b6b8ecc56ab62cf24d5c07cc79780413ec29ae03->enter($__internal_48bfb9020a2e8f9907ab4108b6b8ecc56ab62cf24d5c07cc79780413ec29ae03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_48bfb9020a2e8f9907ab4108b6b8ecc56ab62cf24d5c07cc79780413ec29ae03->leave($__internal_48bfb9020a2e8f9907ab4108b6b8ecc56ab62cf24d5c07cc79780413ec29ae03_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_2f8ca5af54583587f3430bede16c99ef90ec9a10b0faa8e145e9242128956fb6 = $this->env->getExtension("native_profiler");
        $__internal_2f8ca5af54583587f3430bede16c99ef90ec9a10b0faa8e145e9242128956fb6->enter($__internal_2f8ca5af54583587f3430bede16c99ef90ec9a10b0faa8e145e9242128956fb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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

      </script>
    </head>
";
        
        $__internal_2f8ca5af54583587f3430bede16c99ef90ec9a10b0faa8e145e9242128956fb6->leave($__internal_2f8ca5af54583587f3430bede16c99ef90ec9a10b0faa8e145e9242128956fb6_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ea6468cae51e83339c4481f59a7d199204a7eb582d6337fae8bd9da4fa22cf79 = $this->env->getExtension("native_profiler");
        $__internal_ea6468cae51e83339c4481f59a7d199204a7eb582d6337fae8bd9da4fa22cf79->enter($__internal_ea6468cae51e83339c4481f59a7d199204a7eb582d6337fae8bd9da4fa22cf79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_ea6468cae51e83339c4481f59a7d199204a7eb582d6337fae8bd9da4fa22cf79->leave($__internal_ea6468cae51e83339c4481f59a7d199204a7eb582d6337fae8bd9da4fa22cf79_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  64 => 7,  52 => 10,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
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
/* */
/*       </script>*/
/*     </head>*/
/* {% endblock %}*/
/* */
