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
        $__internal_8f2120fd1c0e318c605fcd11b9ab65a9e9fed1d131255fb763b86fa66bb184f2 = $this->env->getExtension("native_profiler");
        $__internal_8f2120fd1c0e318c605fcd11b9ab65a9e9fed1d131255fb763b86fa66bb184f2->enter($__internal_8f2120fd1c0e318c605fcd11b9ab65a9e9fed1d131255fb763b86fa66bb184f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_8f2120fd1c0e318c605fcd11b9ab65a9e9fed1d131255fb763b86fa66bb184f2->leave($__internal_8f2120fd1c0e318c605fcd11b9ab65a9e9fed1d131255fb763b86fa66bb184f2_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_5a2789e2fe33dbd0fba35c2e65d2e9dea98d839ed53779ac978dce641f39ac77 = $this->env->getExtension("native_profiler");
        $__internal_5a2789e2fe33dbd0fba35c2e65d2e9dea98d839ed53779ac978dce641f39ac77->enter($__internal_5a2789e2fe33dbd0fba35c2e65d2e9dea98d839ed53779ac978dce641f39ac77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5a2789e2fe33dbd0fba35c2e65d2e9dea98d839ed53779ac978dce641f39ac77->leave($__internal_5a2789e2fe33dbd0fba35c2e65d2e9dea98d839ed53779ac978dce641f39ac77_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_95e222bd78df306a87bd2ce6cceb89e3ae7cb7d3ae14b69b21a37d76a2d1496b = $this->env->getExtension("native_profiler");
        $__internal_95e222bd78df306a87bd2ce6cceb89e3ae7cb7d3ae14b69b21a37d76a2d1496b->enter($__internal_95e222bd78df306a87bd2ce6cceb89e3ae7cb7d3ae14b69b21a37d76a2d1496b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_95e222bd78df306a87bd2ce6cceb89e3ae7cb7d3ae14b69b21a37d76a2d1496b->leave($__internal_95e222bd78df306a87bd2ce6cceb89e3ae7cb7d3ae14b69b21a37d76a2d1496b_prof);

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
