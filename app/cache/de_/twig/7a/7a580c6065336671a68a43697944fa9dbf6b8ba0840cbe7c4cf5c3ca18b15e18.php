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
        $__internal_4639d9441927ef7e1a518b967fa9d947895770cd93872bc0741317100178095b = $this->env->getExtension("native_profiler");
        $__internal_4639d9441927ef7e1a518b967fa9d947895770cd93872bc0741317100178095b->enter($__internal_4639d9441927ef7e1a518b967fa9d947895770cd93872bc0741317100178095b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "HamsterHubBundle:Base:head.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        
        $__internal_4639d9441927ef7e1a518b967fa9d947895770cd93872bc0741317100178095b->leave($__internal_4639d9441927ef7e1a518b967fa9d947895770cd93872bc0741317100178095b_prof);

    }

    public function block_head($context, array $blocks = array())
    {
        $__internal_dfe236842d8af4e41eacea7ba21f87e22f9960300f92105437f8f764dea568db = $this->env->getExtension("native_profiler");
        $__internal_dfe236842d8af4e41eacea7ba21f87e22f9960300f92105437f8f764dea568db->enter($__internal_dfe236842d8af4e41eacea7ba21f87e22f9960300f92105437f8f764dea568db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_dfe236842d8af4e41eacea7ba21f87e22f9960300f92105437f8f764dea568db->leave($__internal_dfe236842d8af4e41eacea7ba21f87e22f9960300f92105437f8f764dea568db_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c320d2b290acf7dafa6ae65d39b56ec8f35112c533f7de4db0d07bd95d3b6b8 = $this->env->getExtension("native_profiler");
        $__internal_1c320d2b290acf7dafa6ae65d39b56ec8f35112c533f7de4db0d07bd95d3b6b8->enter($__internal_1c320d2b290acf7dafa6ae65d39b56ec8f35112c533f7de4db0d07bd95d3b6b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_1c320d2b290acf7dafa6ae65d39b56ec8f35112c533f7de4db0d07bd95d3b6b8->leave($__internal_1c320d2b290acf7dafa6ae65d39b56ec8f35112c533f7de4db0d07bd95d3b6b8_prof);

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
