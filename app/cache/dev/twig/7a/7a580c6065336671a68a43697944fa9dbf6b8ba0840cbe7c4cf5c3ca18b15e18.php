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
        $__internal_036fd6f8a44bac254bab1b0e4ee2db89cf4062e3ef953b4b4304e88e6a182c0e = $this->env->getExtension("native_profiler");
        $__internal_036fd6f8a44bac254bab1b0e4ee2db89cf4062e3ef953b4b4304e88e6a182c0e->enter($__internal_036fd6f8a44bac254bab1b0e4ee2db89cf4062e3ef953b4b4304e88e6a182c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_036fd6f8a44bac254bab1b0e4ee2db89cf4062e3ef953b4b4304e88e6a182c0e->leave($__internal_036fd6f8a44bac254bab1b0e4ee2db89cf4062e3ef953b4b4304e88e6a182c0e_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_c38d8ce0b166e31332796c05a5a78a33ecf4522b1e6ea30d4c321cb88da9dc47 = $this->env->getExtension("native_profiler");
        $__internal_c38d8ce0b166e31332796c05a5a78a33ecf4522b1e6ea30d4c321cb88da9dc47->enter($__internal_c38d8ce0b166e31332796c05a5a78a33ecf4522b1e6ea30d4c321cb88da9dc47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_c38d8ce0b166e31332796c05a5a78a33ecf4522b1e6ea30d4c321cb88da9dc47->leave($__internal_c38d8ce0b166e31332796c05a5a78a33ecf4522b1e6ea30d4c321cb88da9dc47_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd83a2ccc5b6a1cfadc66500ddfb04e619149c6cd30762a5216b6c2343f23fd3 = $this->env->getExtension("native_profiler");
        $__internal_cd83a2ccc5b6a1cfadc66500ddfb04e619149c6cd30762a5216b6c2343f23fd3->enter($__internal_cd83a2ccc5b6a1cfadc66500ddfb04e619149c6cd30762a5216b6c2343f23fd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_cd83a2ccc5b6a1cfadc66500ddfb04e619149c6cd30762a5216b6c2343f23fd3->leave($__internal_cd83a2ccc5b6a1cfadc66500ddfb04e619149c6cd30762a5216b6c2343f23fd3_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:head.html.twig";
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
