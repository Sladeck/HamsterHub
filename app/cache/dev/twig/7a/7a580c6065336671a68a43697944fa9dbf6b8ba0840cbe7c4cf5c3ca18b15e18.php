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
        $__internal_f3fac5674403dff24ed7918b4f32ca9acc86ce2996e5be380ce19e2840c5d73b = $this->env->getExtension("native_profiler");
        $__internal_f3fac5674403dff24ed7918b4f32ca9acc86ce2996e5be380ce19e2840c5d73b->enter($__internal_f3fac5674403dff24ed7918b4f32ca9acc86ce2996e5be380ce19e2840c5d73b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_f3fac5674403dff24ed7918b4f32ca9acc86ce2996e5be380ce19e2840c5d73b->leave($__internal_f3fac5674403dff24ed7918b4f32ca9acc86ce2996e5be380ce19e2840c5d73b_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_6af42218a257cba853c4176940e1b3d3bd8991f60c34048ee406caaec4758246 = $this->env->getExtension("native_profiler");
        $__internal_6af42218a257cba853c4176940e1b3d3bd8991f60c34048ee406caaec4758246->enter($__internal_6af42218a257cba853c4176940e1b3d3bd8991f60c34048ee406caaec4758246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_6af42218a257cba853c4176940e1b3d3bd8991f60c34048ee406caaec4758246->leave($__internal_6af42218a257cba853c4176940e1b3d3bd8991f60c34048ee406caaec4758246_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ad1b4d23d65ff3d889d87d29b897bf5377e1d8cd072d5aa47218e1fbd0a9304f = $this->env->getExtension("native_profiler");
        $__internal_ad1b4d23d65ff3d889d87d29b897bf5377e1d8cd072d5aa47218e1fbd0a9304f->enter($__internal_ad1b4d23d65ff3d889d87d29b897bf5377e1d8cd072d5aa47218e1fbd0a9304f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_ad1b4d23d65ff3d889d87d29b897bf5377e1d8cd072d5aa47218e1fbd0a9304f->leave($__internal_ad1b4d23d65ff3d889d87d29b897bf5377e1d8cd072d5aa47218e1fbd0a9304f_prof);

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
