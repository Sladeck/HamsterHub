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
        $__internal_25bbba7086be9fdfccb0472a2d39ecaa88846a029329fb2826481472b3e98936 = $this->env->getExtension("native_profiler");
        $__internal_25bbba7086be9fdfccb0472a2d39ecaa88846a029329fb2826481472b3e98936->enter($__internal_25bbba7086be9fdfccb0472a2d39ecaa88846a029329fb2826481472b3e98936_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_25bbba7086be9fdfccb0472a2d39ecaa88846a029329fb2826481472b3e98936->leave($__internal_25bbba7086be9fdfccb0472a2d39ecaa88846a029329fb2826481472b3e98936_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_df85b5faadf3d2529e181e5773e52230435bcccdc9d77dd362f69985d5423e06 = $this->env->getExtension("native_profiler");
        $__internal_df85b5faadf3d2529e181e5773e52230435bcccdc9d77dd362f69985d5423e06->enter($__internal_df85b5faadf3d2529e181e5773e52230435bcccdc9d77dd362f69985d5423e06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_df85b5faadf3d2529e181e5773e52230435bcccdc9d77dd362f69985d5423e06->leave($__internal_df85b5faadf3d2529e181e5773e52230435bcccdc9d77dd362f69985d5423e06_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b240a28c1856de55469d7c842dd693e3573247e079fac1ae7f86997fa672500 = $this->env->getExtension("native_profiler");
        $__internal_3b240a28c1856de55469d7c842dd693e3573247e079fac1ae7f86997fa672500->enter($__internal_3b240a28c1856de55469d7c842dd693e3573247e079fac1ae7f86997fa672500_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_3b240a28c1856de55469d7c842dd693e3573247e079fac1ae7f86997fa672500->leave($__internal_3b240a28c1856de55469d7c842dd693e3573247e079fac1ae7f86997fa672500_prof);

    }

    public function getTemplateName()
    {
        return "HamsterHubBundle:Base:head.html.twig";
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
