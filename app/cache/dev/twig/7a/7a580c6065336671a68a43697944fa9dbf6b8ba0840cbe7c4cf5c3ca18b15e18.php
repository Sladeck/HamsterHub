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
        $__internal_d3ff24752f3d5ce1f2e9dd3c3f6d46b6c7c43e9c0e7e94e9c422f340f962addf = $this->env->getExtension("native_profiler");
        $__internal_d3ff24752f3d5ce1f2e9dd3c3f6d46b6c7c43e9c0e7e94e9c422f340f962addf->enter($__internal_d3ff24752f3d5ce1f2e9dd3c3f6d46b6c7c43e9c0e7e94e9c422f340f962addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_d3ff24752f3d5ce1f2e9dd3c3f6d46b6c7c43e9c0e7e94e9c422f340f962addf->leave($__internal_d3ff24752f3d5ce1f2e9dd3c3f6d46b6c7c43e9c0e7e94e9c422f340f962addf_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_53ee859c2b9a94925655e8ee816a8ef202dfc3ac329d9bbb03e9a33199044232 = $this->env->getExtension("native_profiler");
        $__internal_53ee859c2b9a94925655e8ee816a8ef202dfc3ac329d9bbb03e9a33199044232->enter($__internal_53ee859c2b9a94925655e8ee816a8ef202dfc3ac329d9bbb03e9a33199044232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_53ee859c2b9a94925655e8ee816a8ef202dfc3ac329d9bbb03e9a33199044232->leave($__internal_53ee859c2b9a94925655e8ee816a8ef202dfc3ac329d9bbb03e9a33199044232_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4bfecbab69b08ce0919bb348637018bd7119ec466bf2d5fad0788aaa58f3dcda = $this->env->getExtension("native_profiler");
        $__internal_4bfecbab69b08ce0919bb348637018bd7119ec466bf2d5fad0788aaa58f3dcda->enter($__internal_4bfecbab69b08ce0919bb348637018bd7119ec466bf2d5fad0788aaa58f3dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_4bfecbab69b08ce0919bb348637018bd7119ec466bf2d5fad0788aaa58f3dcda->leave($__internal_4bfecbab69b08ce0919bb348637018bd7119ec466bf2d5fad0788aaa58f3dcda_prof);

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
