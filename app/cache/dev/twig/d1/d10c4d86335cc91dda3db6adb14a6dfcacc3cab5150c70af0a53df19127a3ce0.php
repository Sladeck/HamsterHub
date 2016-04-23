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
        $__internal_524a9c83e1f489795db3a2d13736f223796bcd10d31d5153a8e1052164b76980 = $this->env->getExtension("native_profiler");
        $__internal_524a9c83e1f489795db3a2d13736f223796bcd10d31d5153a8e1052164b76980->enter($__internal_524a9c83e1f489795db3a2d13736f223796bcd10d31d5153a8e1052164b76980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@HamsterHub/Base/head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_524a9c83e1f489795db3a2d13736f223796bcd10d31d5153a8e1052164b76980->leave($__internal_524a9c83e1f489795db3a2d13736f223796bcd10d31d5153a8e1052164b76980_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_8c15523d3786b43cb0783ba8f051d2ba98ef8f5c45f2a764e913fac2d14aec5a = $this->env->getExtension("native_profiler");
        $__internal_8c15523d3786b43cb0783ba8f051d2ba98ef8f5c45f2a764e913fac2d14aec5a->enter($__internal_8c15523d3786b43cb0783ba8f051d2ba98ef8f5c45f2a764e913fac2d14aec5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
    </head>
";
        
        $__internal_8c15523d3786b43cb0783ba8f051d2ba98ef8f5c45f2a764e913fac2d14aec5a->leave($__internal_8c15523d3786b43cb0783ba8f051d2ba98ef8f5c45f2a764e913fac2d14aec5a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_94e3a8086dca436b63fcbf18059f5c2d862318e511ae02daea1a63e79ee70685 = $this->env->getExtension("native_profiler");
        $__internal_94e3a8086dca436b63fcbf18059f5c2d862318e511ae02daea1a63e79ee70685->enter($__internal_94e3a8086dca436b63fcbf18059f5c2d862318e511ae02daea1a63e79ee70685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_94e3a8086dca436b63fcbf18059f5c2d862318e511ae02daea1a63e79ee70685->leave($__internal_94e3a8086dca436b63fcbf18059f5c2d862318e511ae02daea1a63e79ee70685_prof);

    }

    public function getTemplateName()
    {
        return "@HamsterHub/Base/head.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  57 => 7,  47 => 8,  43 => 7,  36 => 2,  24 => 1,);
    }
}
/* {% block head %}*/
/*   <!DOCTYPE html>*/
/*   <html>*/
/*     <head>*/
/*       <meta charset="utf-8">*/
/*       <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*       <title>{% block title %}{% endblock %}</title>*/
/*       <link rel="stylesheet" href="{{ asset('css/main.css') }}">*/
/*     </head>*/
/* {% endblock %}*/
/* */
